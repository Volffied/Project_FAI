@extends('Common_Folder.mainLayout')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
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
            <div class="container-inputJumlah">
                <input type="hidden" class="id_barang" value="{{$barang->id}}">
                <input type="number" name="jumlah" class="jumlah_barang" value="1">
                <input type="button" id="addtocart" class="cta-cart" value="ADD TO CART">
            </div>
        </div>
    </div>
    <svg class="bg-ornmnt" style="position: absolute;top:-50%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3422.97 3918.75"><defs><linearGradient id="linear-gradient" x1="-1000.91" y1="3325.39" x2="3534.18" y2="3325.39" gradientTransform="translate(444.85 -1366.01)" gradientUnits="userSpaceOnUse"><stop offset="0.03" stop-color="#261830"/><stop offset="0.13" stop-color="#2f182f" stop-opacity="0.98"/><stop offset="0.23" stop-color="#4a182d" stop-opacity="0.92"/><stop offset="0.32" stop-color="#781728" stop-opacity="0.81"/><stop offset="0.41" stop-color="#b71622" stop-opacity="0.80"/><stop offset="0.49" stop-color="#ff151b" stop-opacity="0.5"/><stop offset="0.5" stop-color="#f2151c" stop-opacity="0.53"/><stop offset="0.58" stop-color="#a91623" stop-opacity="0.7"/><stop offset="0.67" stop-color="#6f1729" stop-opacity="0.83"/><stop offset="0.77" stop-color="#46182d" stop-opacity="0.93"/><stop offset="0.87" stop-color="#2e182f" stop-opacity="0.98"/><stop offset="1" stop-color="#261830"/></linearGradient></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><rect x="-556.06" y="1620.45" width="4535.09" height="677.86" transform="translate(-889.4 2020.73) rotate(-50.21)" fill="url(#linear-gradient)"/></g></g></svg>
@endsection

@push('script')
    <script>
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
