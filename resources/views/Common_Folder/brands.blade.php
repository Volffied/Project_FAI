@extends('Common_Folder.mainLayout')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}" />
    <link rel="stylesheet" href="{{asset('css/brands.css')}}" />
@endsection

@section('title')
    <title>{{ucfirst(strtolower($brand->nama))}} | GameBox</title>
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
<style>
    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23f00' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23f00' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }
    .carousel-indicators .active{
        background-color: #f00;
    }
</style>

@section('content')
    <div class="bg-brands">
        <h1 class="official">OFFICIAL</h1>
        <h1 class="stores">BRANDS</h1>
    </div>
    <div class="container-title">
        <div class="bg-block">
        </div>
        <img src="{{$brand->gambar}}" alt="">
    </div>
    <div class="container-desc">
        <p>{{$brand->desc}}</p>
        <div class="scrolltrigger"></div>
    </div>
    <div class="container-products">
        <h1>PRODUCTS</h1>
        @php
            $ctr = 0;
        @endphp
        <div class="row-products">
        @foreach ($barang as $item)
            @if ($ctr != 0 && $ctr%4==0)
                </div>
                <div class="row-products">
            @endif
            <div class="item">
                <div class="item-img" title="{{$item->nama_barang}} | {{$item->nama_kat}}">
                    <div class="item-img-bg"></div>
                    <img data-lazy="{{$item->gambar}}" class="fadeFromDown" alt="item">
                    <img src="{{$brand->gambar}}" class="gambar-brand" alt="brand">
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
    </div>
@endsection

@push('script')

    <script>
        gsap.from('.official',{
            x:-30,
            opacity:0,
            duration:1
        });
        gsap.from('.stores',{
            x:30,
            opacity:0,
            duration:1
        });

        gsap.from('.bg-block',{
            x:-100,
            opacity:0,
            duration:1
        });

        gsap.from('.container-title img',{
            y:-50,
            opacity:0,
            duration:1
        });

        gsap.from('.container-desc p',{
            y:100,
            opacity:0,
            scrollTrigger:".scrolltrigger",
            duration:1
        });

        $('.item-img').mouseenter(function(){
            gsap.to($(this).children('img'),{
                y:-10,
                duration:1
            });
        });

        $('.item-img').mouseleave(function(){
            gsap.to($(this).children('img'),{
                y:0,
                duration:1
            });
        });
    </script>

@endpush
