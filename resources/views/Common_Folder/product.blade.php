@extends('Common_Folder.mainLayout')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}" />
    <link rel="stylesheet" href="{{asset('css/product.css')}}" />
@endsection

@section('title')
    <title>Product | GameBox</title>
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
    <div class="container-title">
        <h1 class="product">PRODUCT</h1>
        <h1 class="detail">DETAILS</h1>
    </div>
    <div class="container-display">
        <div class="container-img">
            <img src="{{$barang->gambar}}" class="img" alt="">
        </div>
        <div class="display-detail">
            <h1 class="item-title">{{$barang->nama_barang}}</h1>
            <h1 class="item-kat">{{$barang->nama_kat}}</h1>
            <h1 class="item-price price">{{$barang->harga}}</h1>
            <div class="container-inputJumlah">
                <input type="hidden" class="id_barang" value="{{$barang->id}}">
                <input type="number" name="jumlah" class="jumlah_barang" value="1">
                <input type="button" id="addtocart" class="cta-cart" style="margin-top: 0% !important;" value="ADD TO CART">
            </div>
        </div>
    </div>
    <div class="container-brand">
        <h1>Brought to you by</h1>
        <img src="{{$barang->gambar_brand}}" alt="{{$barang->nama_brand}}" class="brand-identity">
    </div>
    <div class="container-products" style="margin-top: 0% !important">
        <h1 style="font-size: 2em; font-weight:600;">Other Products by {{ucfirst(strtolower($barang->nama_brand))}}</h1>
        @php
            $ctr = 0;
            if(count($listBarang)>8){
                $list8 = $listBarang->take(8);
            }else{
                $list8 = $listBarang;
            }
        @endphp
        <div class="row-products">
        @foreach ($list8 as $item)
            @if ($ctr != 0 && $ctr%4==0)
                </div>
                <div class="row-products">
            @endif
            <div class="item">
                <div class="item-img" title="{{$item->nama_barang}} | {{$item->nama_kat}}">
                    <div class="item-img-bg"></div>
                    <img data-lazy="{{$item->gambar}}" class="fadeFromDown" alt="item">
                    <img src="{{$item->gambar_brand}}" class="gambar-brand" alt="brand">
                </div>
                <div class="item-details">
                    <div class="item-detail">
                        <div class="title line-clamp">
                            <p title="{{$item->nama_barang}} | {{$item->nama_kat}}">{{$item->nama_barang}}</p>
                        </div>
                        <p style="color: #fff;opacity:0.4;">{{$item->nama_kat}}</p>
                        <p class="price">{{$item->harga}}</p>
                    </div>
                    <input type="hidden" class="id_barang" value="{{$item->id}}">
                    <div class="cta-cart"><svg aria-hidden="true" focusable="false" style="width: 30px" data-prefix="fas" data-icon="shopping-cart" class="svg-inline--fa fa-shopping-cart fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#261830" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg></div>
                </div>
            </div>
            @php
                $ctr++;
            @endphp
        @endforeach
        </div>
        @if (count($list8) != count($listBarang))
            <a href="/search?brand={{$barang->nama_brand}}">See All Products By {{$barang->nama_brand}}</a>
        @endif
    </div>
    <div class="container-products" style="margin-top: 0% !important">
        <h1 style="font-size: 2em; font-weight:600;">Other {{$barang->nama_kat}} Items</h1>
        @php
            $ctr = 0;
            if(count($listKat)>8){
                $listKat8 = $listKat->take(8);
            }else{
                $listKat8 = $listKat;
            }
        @endphp
        <div class="row-products">
        @foreach ($listKat8 as $item)
            @if ($ctr != 0 && $ctr%4==0)
                </div>
                <div class="row-products">
            @endif
            <div class="item">
                <div class="item-img" title="{{$item->nama_barang}} | {{$item->nama_kat}}">
                    <div class="item-img-bg"></div>
                    <img data-lazy="{{$item->gambar}}" class="fadeFromDown" alt="item">
                    <img src="{{$item->gambar_brand}}" class="gambar-brand" alt="brand">
                </div>
                <div class="item-details">
                    <div class="item-detail">
                        <div class="title line-clamp">
                            <p title="{{$item->nama_barang}} | {{$item->nama_kat}}">{{$item->nama_barang}}</p>
                        </div>
                        <p style="color: #fff;opacity:0.4;">{{$item->nama_kat}}</p>
                        <p class="price">{{$item->harga}}</p>
                    </div>
                    <input type="hidden" class="id_barang" value="{{$item->id}}">
                    <div class="cta-cart"><svg aria-hidden="true" focusable="false" style="width: 30px" data-prefix="fas" data-icon="shopping-cart" class="svg-inline--fa fa-shopping-cart fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#261830" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg></div>
                </div>
            </div>
            @php
                $ctr++;
            @endphp
        @endforeach
        </div>
        @if (count($listKat8) != count($listKat))
            <a href="/search?kategori={{$barang->nama_kat}}">See All {{$barang->nama_kat}}</a>
        @endif
    </div>
    <svg class="bg-ornmnt" style="position: absolute;top:-50%; left:-15%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3422.97 3918.75"><defs><linearGradient id="linear-gradient" x1="-1000.91" y1="3325.39" x2="3534.18" y2="3325.39" gradientTransform="translate(444.85 -1366.01)" gradientUnits="userSpaceOnUse"><stop offset="0.03" stop-color="#261830"/><stop offset="0.13" stop-color="#2f182f" stop-opacity="0.98"/><stop offset="0.23" stop-color="#4a182d" stop-opacity="0.92"/><stop offset="0.32" stop-color="#781728" stop-opacity="0.81"/><stop offset="0.41" stop-color="#b71622" stop-opacity="0.80"/><stop offset="0.49" stop-color="#ff151b" stop-opacity="0.5"/><stop offset="0.5" stop-color="#f2151c" stop-opacity="0.53"/><stop offset="0.58" stop-color="#a91623" stop-opacity="0.7"/><stop offset="0.67" stop-color="#6f1729" stop-opacity="0.83"/><stop offset="0.77" stop-color="#46182d" stop-opacity="0.93"/><stop offset="0.87" stop-color="#2e182f" stop-opacity="0.98"/><stop offset="1" stop-color="#261830"/></linearGradient></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><rect x="-556.06" y="1620.45" width="4535.09" height="677.86" transform="translate(-889.4 2020.73) rotate(-50.21)" fill="url(#linear-gradient)"/></g></g></svg>
@endsection

@push('script')
    <script>
        reformatPrice();
        $(document).ready(function(){

            gsap.from('.product',{
                x:-30,
                opacity:0,
                duration:1
            });
            gsap.from('.detail',{
                x:30,
                opacity:0,
                duration:1
            });
            gsap.from('.container-img',{
                x:-30,
                opacity:0,
                duration:1.5
            });

            gsap.from('.item-title',{
                y:-30,
                opacity:0,
                duration:1.5
            });

            gsap.from('.item-kat',{
                x:30,
                opacity:0,
                duration:1.5
            });

            gsap.from('.brand-identity',{
                scrollTrigger:'.container-brand',
                y:40,
                opacity:0,
                delay:0.5,
                duration:1.5
            });

            gsap.from('.container-inputJumlah',{
                y:30,
                opacity:0,
                duration:1.5
            });

            gsap.from('.bg-ornmnt',{
                x:50,
                opacity:0,
                duration:1.5
            });

        });

        $(document).on('input','#idJumlah',function(){
            var jumlah = $(this).val();
            if(jumlah < 0)$(this).val(1);
        });

        $(document).on('blur','#idJumlah',function(){
            var jumlah = $(this).val();
            if(jumlah == ""){
                $(this).val(1);
            }
        });
    </script>
@endpush
