@php
    //buat if if status masukin textnya di $status
@endphp
<p class="label-title"><i>Transaction Status</i></p>
<h1 class="title status_2">{{strtoupper($status)}}</h1>
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
                <td scope="row">10/12/2020</td>
                <td>10/12/2020</td>
                <td>20 Minutes</td>
                <td>bank_transfer</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="container-dorder">
    @foreach ($listBarang as $item)
        <div class="cart-item">
            <div class="container-img">
                <div class="item-img-bg"></div>
                <img class="fadeFromLeft" data-lazy="{{$item->gambar}}" alt="GAMBAR">
            </div>
            <div class="item-detail">
                <p>{{$item->nama_kat}}</p>
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
        <p class="harga price status_4">{{$horder->subtotal}}</p>
    </div>
    <div class="grandtotal">
        <p class="label-grandtotal">Grandtotal : </p>
        <p class="harga price status_3">{{$horder->grandtotal}}</p>
    </div>
</div>
