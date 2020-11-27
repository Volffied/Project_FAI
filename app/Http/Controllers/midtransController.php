<?php

namespace App\Http\Controllers;

use App\Model\BarangModel;
use App\Model\CartModel;
use App\Model\CustomerModel;
use App\Model\PromoModel;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class midtransController extends Controller
{
    public function dataPayment(Request $request){
        $kode_customer = $request->kode_customer;
        $subtotal = $request->subtotal;
        $grandtotal = $request->grandtotal;
        $kode_promo = $request->kode_promo;



        //$datacart = CartModel::where('kode_customer',$kode_customer)->get();
        $databarang = CartModel::select('cart.*','barang.nama as nama_barang','barang.harga as harga_barang')
                            ->join('barang','id','kode_barang')
                            ->where('kode_user',$kode_customer)
                            ->get();

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
                    "price"     => $value->harga_barang,
                    "quantity"  => $value->qty,
                    "name"      => $value->nama_barang,
                )
            );
        }

        // $potongan = 0;
        // // CHECK POTONGAN JENIS MEMBER
        // $new_var = members::find($jenis_mem);
        // if ($new_var){
        //     $potongan = $new_var->potongan;
        // }
        $potongan = 0;
        $promo = PromoModel::find($kode_promo);
        if($promo){
            $potongan = $promo->potongan;
        }
        array_push($datatmp,array(
            "id"        => 67,
            "price"     => $potongan,
            "quantity"  => 1,
            "name"      => "Promo",
            )
        );

        $item_details = $datatmp;

        // ===================================
        $enable_payments = array('bca_klikbca', 'bca_va', 'bni_va', 'bri_va', 'indomaret','alfamart');
        // ===================================
        $transaction = array(
            'enabled_payments' => $enable_payments,
            'transaction_details' => $transaction_details,
            'item_details' => $item_details
        );

        $snapToken = Snap::getSnapToken($transaction);

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
        return view("pembayaran",["datasession"=>$datasession]);
    }
}
