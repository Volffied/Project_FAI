<?php

namespace App\Http\Controllers;

use App\Model\BarangModel;
use App\Model\CartModel;
use App\Model\CustomerModel;
use App\Model\DorderModel;
use App\Model\HorderModel;
use App\Model\JenisMemberModel;
use App\Model\PegawaiModel;
use App\Model\PromoModel;
use App\Notifications\OrderNotification;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Carbon\Carbon;

class midtransController extends Controller
{
    public function dataPayment(Request $request){
        $kode_customer = $request->kode_customer;
        $subtotal = $request->subtotal;
        $grandtotal = $request->grandtotal;
        $kode_promo = $request->kode_promo;
        $potongan_member = $request->potongan_member;

        $databarang = CustomerModel::find($kode_customer);
        $databarang = $databarang->barang;

        Config::$serverKey = "SB-Mid-server-nhfkR2e7RQYPBxuzJLXTIYGR";
        Config::$isProduction = false;                                  // production(iki serius) - sandbox(iki buat nyoba")
        Config::$isSanitized = true;                                    // verifikasi credit card
        Config::$is3ds = true;

        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' => $grandtotal, // no decimal allowed for creditcard // total agar
        );
        $datatmp     = array();

        foreach ($databarang as $key => $value) {
            array_push($datatmp,array(
                    "id"        => $value->id,
                    "price"     => $value->harga,
                    "quantity"  => $value->cart->qty,
                    "name"      => $value->nama_barang,
                )
            );
        }

        $potongan = 0;
        $promo = PromoModel::find($kode_promo);
        if($promo){
            $potongan = $promo->potongan;
        }
        $potongan = ($subtotal*$potongan/100) * -1;


        if($potongan != 0){
            array_push($datatmp,array(
                "id"        => 67,
                "price"     => $potongan,
                "quantity"  => 1,
                "name"      => "Discount Voucher",
                )
            );
        }
        array_push($datatmp,array(
            "id"        => 68,
            "price"     => ($subtotal*$potongan_member/100)*-1,
            "quantity"  => 1,
            "name"      => "Discount Member",
            )
        );

        $item_details = $datatmp;

        // ===================================
        $enable_payments = array('bca_klikbca', 'bca_va', 'bni_va', 'bri_va', 'indomaret','alfamart');
        // ===================================
        $transaction = [
            'enabled_payments' => $enable_payments,
            'transaction_details' => $transaction_details,
            'item_details' => $item_details
        ];

        $snapToken = Snap::getSnapToken($transaction);

        $databaru = [
            "grandtotal"     => $grandtotal,
            "subtotal"       => $subtotal,
            "kode_customer"  => $kode_customer,
            "kode_promo"     => $kode_promo
        ];
        session()->put("dataOrder",$databaru);

        return response()->json($snapToken);
    }
    public function saveData(Request $request)
    {

        if (!session()->get("dataMidtrans")) {
            $dataMidtrans = [];
            session()->put("dataMidtrans",$dataMidtrans);
        }
        $datasession = session()->get("dataMidtrans");
        $data = json_encode($request->data);
        array_push($datasession,$data);
        session()->put("dataMidtrans",$datasession);
        return json_encode($datasession);
    }
    public function pagePayment(){
        $datasession = [];
        if (session()->has('dataMidtrans')) {
            $datasession = session()->get("dataMidtrans");
        }
        if (session()->has('dataOrder')) {
            $dataorder = session()->get("dataOrder");
        }
        $replace_data = str_replace("//","",$datasession);
        $datasession = json_decode($replace_data[0],true);
        // $dataPegawai = HorderModel::select('kode_pegawai','')
        //$pegawaiNganggur = select kode pegawai, count(kode_pegawai) from horder where status = 0 orWhere status = 1 and where role = kurir orderBy count asc -> first
        HorderModel::create([
            'tanggal_trans'     => date("Y-m-d",strtotime($datasession["transaction_time"])),
            'subtotal'          => $dataorder["subtotal"],
            'grandtotal'        => $dataorder["grandtotal"],
            'metode_pembayaran' => $datasession["payment_type"],
            'kode_promo'        => $dataorder["kode_promo"],
            'kode_customer'     => $dataorder["kode_customer"],
            'order_id'          => $datasession["order_id"]
            //'kode_pegawai' => $pegawaiNganggur->id_pegawai
        ]);
        $databarang = CustomerModel::find($dataorder["kode_customer"]);

        $databarang = $databarang->barang;
        $datatmp = array();
        $id_Data = HorderModel::all();
        foreach ($databarang as $key => $value) {
            $total = $value->cart->qty * $value->harga;
            $datadorder = array(
                "kode_horder"   =>count($id_Data),
                "kode_barang"   => $value->id,
                "qty"           => $value->cart->qty,
                "total"         => $total,
                "created_at"    => Carbon::now()
            );
            array_push($datatmp,$datadorder);
        }
        DorderModel::insert($datatmp);
        CartModel::where('kode_user',$dataorder["kode_customer"])->delete();
        session()->forget('dataMidtrans');
        $status = HorderModel::find(count($id_Data));
        $status = $status->status_order;
        $penerima = CustomerModel::find($dataorder["kode_customer"]);
        $penerima->notify(new OrderNotification($datasession["order_id"]." - Your order has been placed!",count($id_Data),$status));
        $array = [];
        foreach (auth()->user()->unreadNotifications as $key => $item) {
            array_push($array, $item);
        }
        session()->put('notif', $array);
        return redirect('/cart?msg=success');
    }
    public function insertOrder(){
        if (session()->has('dataMidtrans')) {
            $datasession = session()->get("dataMidtrans");
        }
        if (session()->has('dataOrder')) {
            $dataorder = session()->get("dataOrder");
        }
        return json_encode($dataorder);
    }

    public function updateStatus($id,$jenis)
    {
        $horder = HorderModel::find($id);
        if($jenis == "cancel"){
            $horder->status_order = 4;
            $penerima = CustomerModel::find($horder->kode_customer);
            $penerima->notify(new OrderNotification($horder->order_id." - Your order successfully cancelled!",$id,4));
        }
        else if($jenis == "bayar"){
            $horder->status_order = 1;
            $poin = auth()->user()->poin;
            CustomerModel::find(auth()->user()->id)->update(['poin'=>$poin+$horder->grandtotal*0.0005/100]);
        }
        $horder->save();
        return true;
    }
}
