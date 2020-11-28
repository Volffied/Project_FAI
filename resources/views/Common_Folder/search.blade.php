@extends('Common_Folder.mainLayout')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}" />
    <link rel="stylesheet" href="{{asset('css/search.css')}}" />
@endsection

@section('title')
    <title>Search | GameBox</title>
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
    <div class="container-search">
        <div class="container-filter">
            <h1>Filter</h1>
            <div class="filter-wrapper">
                <div class="container-filter-items">
                    <a id="header-cat" data-toggle="collapse" href="#data-category" role="button" aria-expanded="false" aria-controls="data-category">Category</a>
                    <div class="collapse show" id="data-category" class="filter-dropdown">
                        <div class="filter-links">
                            @php
                                if(isset($_GET['kategori'])){
                                    $cat = $_GET['kategori'];
                                }
                            @endphp
                            @foreach ($data['kategori'] as $item)
                                <a
                                    id="kategori_{{$item->nama_kategori}}"
                                    @if (isset($cat) && $cat == $item->nama_kategori)
                                        class="filter-link link-active"
                                    @else
                                        class="filter-link"
                                    @endif
                                >{{$item->nama_kategori}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="container-filter-items">
                    <a id="header-cat" data-toggle="collapse" href="#data-brand" role="button" aria-expanded="false" aria-controls="data-brand">Brand</a>
                    <div class="collapse show" id="data-brand" class="filter-dropdown">
                        <div class="filter-links">
                            @php
                                if(isset($_GET['brand'])){
                                    $brand = $_GET['brand'];
                                }
                            @endphp
                            @foreach ($data['brand'] as $item)
                                <a
                                    id="brand_{{$item->nama_brand}}"
                                    @if (isset($brand) && $brand == $item->nama_brand)
                                        class="filter-link link-active"
                                        {{-- href="javascript:removeParam('brand','balik')" --}}
                                    @else
                                        class="filter-link"
                                        {{-- href="javascript:addOrUpdateUrlParam('brand','{{$item->nama_brand}}')" --}}
                                    @endif>{{$item->nama_brand}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-items">
            <h1>Showing {{$data['barang']->count()}} out of {{$data['barang']->total()}} items
            @isset($_GET['barang'])
                for search "{{$_GET['barang']}}"
            @endisset </h1>
            @php
                $ctr = 0;
            @endphp
            <div class="inner-items">
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
                                <img src="{{$item->gambar_brand}}" class="gambar-brand" alt="brand">
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
    </div>
@endsection

@push('script')

    <script>
        reformatPrice();
        function addOrUpdateUrlParam(name, value=null)
        {
            if(value != null){
                var href = removeParam('page');
                href = removeParam(name,'return',href);
                var regex = new RegExp("[&\\?]" + name + "=");
                if(regex.test(href))
                {
                    regex = new RegExp("([&\\?])" + name + "=\\d+");
                    window.location.href = href.replace(regex, "$1" + name + "=" + value);
                }
                else
                {
                    if(href.indexOf("?") > -1)
                    window.location.href = href + "&" + name + "=" + value;
                    else
                    window.location.href = href + "?" + name + "=" + value;
                }
            }else{
                removeParam(name,'balik');
            }
        }

        function removeParam(key,type="return",url=window.location.href) {
            var rtn = url.split("?")[0],
                param,
                params_arr = [],
                queryString = (url.indexOf("?") !== -1) ? url.split("?")[1] : "";
            if (queryString !== "") {
                params_arr = queryString.split("&");
                for (var i = params_arr.length - 1; i >= 0; i -= 1) {
                    param = params_arr[i].split("=")[0];
                    if (param === key) {
                        params_arr.splice(i, 1);
                    }
                }
                rtn = rtn + "?" + params_arr.join("&");
            }
            if(type == "return") return rtn;
            else window.location.href = rtn;
        }

        $(".filter-link").click(function(){
            var value = $(this).attr('id');
            value = value.split('_');
            if($(this).hasClass('link-active')){
                addOrUpdateUrlParam(value['0']);
            }else{
                addOrUpdateUrlParam(value[0],value[1]);
            }
        });
    </script>

@endpush
