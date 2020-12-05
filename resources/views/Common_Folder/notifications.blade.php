@extends('Common_Folder.mainLayout')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/cart.css')}}" />
    <link rel="stylesheet" href="{{asset('css/notifications.css')}}" />
@endsection

@section('title')
    <title>Notifications | GameBox</title>
@endsection

@section('header')
{{-- kalo udh login --}}
    @if (session()->has('userLogin'))
        @include('Common_Folder.navbar.nav_logged')
    @else
        @include('Common_Folder.navbar.nav_normal')
    @endif
@endsection

@section('content')
    <div class="container-luarnotif">
        <div class="container-notifikasi">
            <div class="list-notif">
                <div class="notifikasi-item unread">
                    <h1>Judul Notifikasi</h1>
                    <p><i>Tanggal</i></p>
                </div>
                <div class="divider"></div>
                <div class="notifikasi-item unread">
                    <h1>Judul Notifikasi</h1>
                    <p><i>Tanggal</i></p>
                </div>
                <div class="divider"></div>
                <div class="notifikasi-item unread">
                    <h1>Judul Notifikasi</h1>
                    <p><i>Tanggal</i></p>
                </div>
                <div class="divider"></div>
                <div class="notifikasi-item">
                    <h1>Judul Notifikasi</h1>
                    <p><i>Tanggal</i></p>
                </div>
                <div class="divider"></div>
                <div class="notifikasi-item">
                    <h1>Judul Notifikasi</h1>
                    <p><i>Tanggal</i></p>
                </div>
                <div class="divider"></div>
                <div class="notifikasi-item">
                    <h1>Judul Notifikasi</h1>
                    <p><i>Tanggal</i></p>
                </div>
                <div class="divider"></div>
            </div>
            <div class="wrapper-notifikasi">
                <div class="details-notifikasi no-data">
                    {{-- <p class="label-title"><i>Transaction Status</i></p>
                    <h1 class="title status_2">ON THE WAY</h1>
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
                                    <td scope="row">10/12/2020</td>
                                    <td scope="row">20 Minutes</td>
                                    <td scope="row">bank_transfer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container-dorder">
                        <div class="cart-item">
                            <div class="container-img">
                                <div class="item-img-bg"></div>
                                <img class="fadeFromLeft" data-lazy="aa" alt="GAMBAR">
                            </div>
                            <div class="item-detail">
                                <p>Accessories</p>
                                <h1>Namabarang</h1>
                                <p class="brand">STEELSERIES</p>
                            </div>
                            <div class="harga-container">
                                <p class="harga price">50000</p>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="container-img">
                                <div class="item-img-bg"></div>
                                <img class="fadeFromLeft" data-lazy="aa" alt="GAMBAR">
                            </div>
                            <div class="item-detail">
                                <p>Accessories</p>
                                <h1>Namabarang</h1>
                                <p class="brand">STEELSERIES</p>
                            </div>
                            <div class="harga-container">
                                <p class="harga price">50000</p>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="container-img">
                                <div class="item-img-bg"></div>
                                <img class="fadeFromLeft" data-lazy="aa" alt="GAMBAR">
                            </div>
                            <div class="item-detail">
                                <p>Accessories</p>
                                <h1>Namabarang</h1>
                                <p class="brand">STEELSERIES</p>
                            </div>
                            <div class="harga-container">
                                <p class="harga price">50000</p>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="container-img">
                                <div class="item-img-bg"></div>
                                <img class="fadeFromLeft" data-lazy="aa" alt="GAMBAR">
                            </div>
                            <div class="item-detail">
                                <p>Accessories</p>
                                <h1>Namabarang</h1>
                                <p class="brand">STEELSERIES</p>
                            </div>
                            <div class="harga-container">
                                <p class="harga price">50000</p>
                            </div>
                        </div>
                        <div class="subtotal">
                            <p class="label-subtotal">Subtotal : </p>
                            <p class="harga price status_4">350000</p>
                        </div>
                        <div class="grandtotal">
                            <p class="label-grandtotal">Grandtotal : </p>
                            <p class="harga price status_3">350000</p>
                        </div>
                    </div> --}}

                    <p>Show notifications by clicking the tab on the left</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

    <script>
        reformatPrice();
        $(document).on('click',".notifikasi-item",function(){
            $(this).removeClass('unread');
        });
    </script>

@endpush
