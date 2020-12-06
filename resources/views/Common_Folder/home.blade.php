@extends('Common_Folder.mainLayout')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title')
    <title>Home | GameBox</title>
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
    {{-- Ini Gak Perlu diedit --}}
    <div id="container-banner" class="container-banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 100%">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height: 100%">
              <div class="carousel-item active" style="height: 100%">
                <div class="banner">
                    <img class="banner-img" src="{{asset('images/banner1.jpg')}}" alt="image">
                    <div class="cta-home"><p>SHOP NOW</p><svg aria-hidden="true" focusable="false" width="20" data-prefix="fas" data-icon="arrow-right" class="svg-arrow svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#fff" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></div>
                </div>
              </div>
              <div class="carousel-item" style="height: 100%">
                <div class="banner2">
                    <img class="banner-img" src="{{asset('images/banner2.jpg')}}" alt="image">
                    <div class="cta-home"><p>SHOP NOW</p><svg aria-hidden="true" focusable="false" width="20" data-prefix="fas" data-icon="arrow-right" class="svg-arrow svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#fff" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></div>
                </div>
              </div>
              <div class="carousel-item" style="height: 100%">
                <div class="banner">
                    <img class="banner-img" src="{{asset('images/banner3.jpg')}}" alt="image">
                    <div class="cta-home"><p>SHOP NOW</p><svg aria-hidden="true" focusable="false" width="20" data-prefix="fas" data-icon="arrow-right" class="svg-arrow svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#fff" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    {{-- Promo --}}
    <div class="container-promo">
        <h1>Promo</h1>
        <p class="subtitle">All Available Promos</p>
        <div class="item-wrapper">
            {{-- Carousel Promo --}}
            <div id="carousel-1" class="carousel slide" data-interval="false" data-ride="carousel" style="height: 100%">
                <div class="carousel-inner" style="height: 100%">
                  <div class="carousel-item active" style="height: 100%; flex-direction:column; align-items:center;">
                    <style>
                        .col-promo{
                            background-color: #ff151d91;
                            margin: 1%;
                        }
                    </style>
                    <div class="row" style="width: 100%; height:50%;">
                        <div class="col col-promo">
                            <h1 class="test">Nama Promo</h1>
                            <p class="desc">Ini adalah deskripsi dari promo</p>
                        </div>
                        <div class="col col-promo"></div>
                        <div class="col col-promo"></div>
                    </div>
                    <div class="row" style="width: 100%; height:50%;">
                        <div class="col col-promo"></div>
                        <div class="col col-promo"></div>
                        <div class="col col-promo"></div>
                    </div>
                  </div>
                  <div class="carousel-item" style="height: 100%">

                  </div>
                  <div class="carousel-item" style="height: 100%">

                  </div>
                </div>
                <a class="carousel-control-prev" style="width:5%;height: 5%; top:47.5%; left:-5%" href="#carousel-1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" style="width:5%;height: 5%; top:47.5%; right:-5%" href="#carousel-1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container-brand">
        <svg xmlns="http://www.w3.org/2000/svg" class="svg-ornament" width="100vw" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1925.42 1638.64">
            <defs>
                <linearGradient id="linear-gradient" y1="819.32" x2="1925.42" y2="819.32" gradientUnits="userSpaceOnUse">
                    <stop offset="0.03" stop-color="#261830"/><stop offset="0.03" stop-color="#261830"/>
                    <stop offset="0.29" stop-color="#331f41"/><stop offset="0.49" stop-color="#382247"/>
                    <stop offset="0.7" stop-color="#342042"/><stop offset="0.97" stop-color="#281932"/>
                    <stop offset="1" stop-color="#261830"/>
                </linearGradient>
            </defs>
            <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_2-2" data-name="Layer 2">
                    <polygon points="1925.42 0 1925.42 1026.2 0 1638.64 0 612.44 1925.42 0" fill="url(#linear-gradient)"/>
                </g>
            </g>
        </svg>
        <h1>BRANDS</h1>
        <p class="subtitle">Our Beloved Official Stores</p>
        <div class="brand-wrapper">
            <div id="carousel-2" class="carousel slide" data-interval="false" data-ride="carousel" style="height: 100%">
                <div class="carousel-inner" style="height: 100%">
                    {{-- Foreach carousel item --}}

                    @php
                        $count = count($data['brand']);
                        $ctr = 0;
                    @endphp

                    @for ($i = 0; $ctr < $count; $i++)

                        @if ($i==0)
                        <div class="carousel-item active" style="height: 100%">
                            <div class="brand-grid">
                        @else
                        <div class="carousel-item" style="height: 100%">
                            <div class="brand-grid">
                        @endif

                        @for ($j = 0; $j < 2 && $ctr < $count; $j++)
                            <div class="row row-brand">

                                @for ($k = $ctr; $k < $ctr+2 && $ctr < $count && $k < $count; $k++)
                                    <div class="col col-brand brand">
                                        <input type="hidden" class="namaBrand" value="{{$data['brand'][$k]->nama}}">
                                        <div class="brand-bg"></div>
                                    {{-- image brand --}}
                                        <img data-lazy="{{$data['brand'][$k]->gambar}}" class="brand-img fadeFromDown"
                                            @if ($data['brand'][$k]->nama == "INTEL")
                                                 style="width:30%;"
                                            @endif
                                        alt="{{$data['brand'][$k]->nama_brand}}">
                                        <p>{{$data['brand'][$k]->jumlah_barang}} Products</p>
                                    </div>
                                    @if ($k == $count - 1 && $k%2 == 0)
                                        <div class="col"></div>
                                    @endif
                                @endfor

                                @php
                                    $ctr+=2;
                                @endphp
                            </div>
                        @endfor

                            </div>
                        </div>
                    @endfor
                </div>
                <a class="carousel-control-prev" style="width:5%;height: 5%; top:47.5%; left:-5%" href="#carousel-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" style="width:5%;height: 5%; top:47.5%; right:-5%" href="#carousel-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container-products">
        <h1>FEATURED PRODUCTS</h1>
        <p class="subtitle">Our Most Bought Products <span><a href="/search">See All Products</a></span></p>
        @php
            $ctr = 0;
        @endphp
        <div class="container-items">
            <div class="row-products">
                @foreach ($data['barang'] as $item)
                    @if ($ctr != 0 && $ctr%4==0)
                        </div>
                        <div class="row-products">
                    @endif
                    <div class="item">
                        <div class="item-img" title="{{$item->nama_barang}} | {{$item->nama_kat}}">
                            <div class="item-img-bg"></div>
                            <img class="fadeFromDown" data-lazy="{{$item->gambar}}" alt="item">
                            <img src="{{$item->gambar_brand}}" class="gambar-brand
                            @if ($item->nama_brand == "INTEL")
                                gambar-intel
                            @endif" alt="brand">
                        </div>
                        <div class="item-details">
                            <div class="item-detail">
                                <div class="title line-clamp">
                                    <p title="{{$item->nama_barang}} | {{$item->nama_kat}}">{{$item->nama_barang}}</p>
                                </div>
                                <p  class="category">{{$item->nama_kat}}</p>
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
            {{$data['barang']->links()}}
        </div>
    </div>
@endsection

@push('script')
    <script>
        reformatPrice();
        $('ul.pagination').hide();
        $(function() {
            $('.container-items').jscroll({
                autoTrigger: true,
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.container-items',
                callback: function() {
                    $('ul.pagination').remove();
                    lazyLoading();
                    reformatPrice();
                }
            });
        });
        $(function( $ ){
          console.log($.ajax);
        });
        gsap.from('.banner',{
            y:-20,
            duration:2
        });

        $('.brand').click(function(){
            var nama = $(this).children('input').val();
            nama = nama.toLowerCase();
            window.location.href = "/brand/"+nama;
        });
    </script>
@endpush
