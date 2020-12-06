@php
    $pesan = "WAITING FOR PAYMENT";
    if($status == 1) $pesan = "WAITING FOR CONFIRMATION";
    else if($status == 2) $pesan = "ON THE WAY";
    else if($status == 3) $pesan = "SUCCESS";
    else if($status == 4) $pesan = "CANCELLED";
@endphp
<p class="label-title"><i>Transaction Status</i></p>
<h1 class="title status_{{$status}}">{{$pesan}}</h1>
<div class="container-horder">
    <table class="table table-borderless table-horder">
        <thead>
            <tr>
                <th scope="col">Transaction Date</th>
                <th scope="col">Delivery Date</th>
                <th style="width: 20%" scope="col">Estimation Time</th>
                <th scope="col">Payment Method</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{$datahorder->created_at}}</td>
                @if ($datahorder->tanggal_pengiriman == null)
                    <td><i>N/A</i></td>
                @else
                    <td>{{$datahorder->tanggal_pengiriman}}</td>
                @endif
                <td>{{$datahorder->estimasi_waktu}} Days</td>
                <td>{{$datahorder->metode_pembayaran}}</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="container-dorder">
    @foreach ($databarang as $item)
        <div class="cart-item">
            <div class="container-img">
                <div class="item-img-bg"></div>
                <img class="fadeFromLeft" data-lazy="{{$item->gambar}}" alt="GAMBAR">
            </div>
            <div class="item-detail">
                <p>{{$item->nama_kategori}}</p>
                <h1>{{$item->nama_barang}}</h1>
                <p class="brand">{{ucfirst(strtolower($item->nama_brand))}}</p>
            </div>
            <div class="harga-container">
                <p class="harga price">{{$item->total}}</p>
            </div>
        </div>
    @endforeach
    <div class="subtotal">
        <p class="label-subtotal">Subtotal : </p>
        <p class="harga price status_4">{{$datahorder->subtotal}}</p>
    </div>
    <div class="grandtotal">
        <p class="label-grandtotal">Grandtotal : </p>
        <p class="harga price status_3">{{$datahorder->grandtotal}}</p>
    </div>
</div>
