@extends('Common_Folder.mainLayout')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/cart.css')}}" />
@endsection

@section('title')
    <title>Cart | GameBox</title>
@endsection

@section('content')
    <input type="hidden" name="backUrl" id="backUrl" value="{{url()->previous()}}">
    <div class="container-backNav">
        <div class="navbar-wrapper">
            <div class="backButton">
                <svg class="svg-back" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#261830" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                <h1>BACK</h1>
            </div>
        </div>
        <svg id="logo" xmlns="http://www.w3.org/2000/svg" width="40px" title="Home" viewBox="0 0 204.25 204.25"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M49.83,45.43a7.09,7.09,0,0,1-.93,3.27h-6v5.76a5.6,5.6,0,0,1-3.23.95,3.87,3.87,0,0,1-2.84-1.06V48.7H31.2a4.52,4.52,0,0,1-.9-2.63,6.08,6.08,0,0,1,.78-3.44h6v-6a6.5,6.5,0,0,1,3-.61,8,8,0,0,1,3.07.72l0,5.87h5.65A5.62,5.62,0,0,1,49.83,45.43Z" fill="#261830"/><path d="M81.07,50.54a4.74,4.74,0,1,1-4.73-4.74A4.74,4.74,0,0,1,81.07,50.54Z" fill="#ff151b"/><path d="M81.07,37.51a4.74,4.74,0,1,1-4.73-4.74A4.73,4.73,0,0,1,81.07,37.51Z" fill="#261830"/><path d="M92.86,44.5a4.74,4.74,0,1,1-4.73-4.73A4.73,4.73,0,0,1,92.86,44.5Z" fill="#261830"/><path d="M0,0V204.25H23.27l181-181V0ZM102.11,72.84c-.81,5-3.5,8.42-8.56,8s-16-13.6-16-13.6a6.23,6.23,0,0,0-4.21-2H45.43a6.25,6.25,0,0,0-4.21,2s-11,13.18-16,13.61-7.74-2.95-8.56-8c0,0-4.65-20.63,6.88-39.57s28.91-5.76,28.91-5.76a9,9,0,0,0,4.62,1.55h4.65a9.05,9.05,0,0,0,4.61-1.56S83.7,14.33,95.23,33.28,102.11,72.84,102.11,72.84Z" fill="#261830"/><polygon points="204.25 47.88 204.25 84.19 84.19 204.25 47.88 204.25 204.25 47.88" fill="#261830"/><polygon points="204.25 108.8 204.25 150.22 150.22 204.25 108.8 204.25 204.25 108.8" fill="#261830"/><polygon points="174.84 204.25 204.25 174.84 204.25 204.25 174.84 204.25" fill="#261830"/></g></g></svg>
    </div>
    <div class="container-navbar">
        <h1 class="mycart active-link">My Cart</h1>
        <h1 class="history">History</h1>
    </div>
    <h1 class="page-title">My Cart</h1>
    <div class="container-carousel">
        <div id="container-mycart" >
            @foreach ($barang as $item)
                <div class="cart-item">
                    <div class="item-img">
                        <div class="item-img-bg"></div>
                        <img class="fadeFromLeft" data-lazy="{{$item->gambar}}" alt="">
                    </div>
                    <div class="item-detail">
                        <p>{{$item->nama_kat}}</p>
                        <h1>{{$item->nama}}</h1>
                    </div>
                    <div class="jumlah-harga">
                        <div class="container-input">
                            <div class="button-min">-</div>
                            <input type="number" name="jumlah_{{$item->id}}" id="jumlah_{{$item->id}}" class="input-jumlah" value="1">
                            <div class="button-plus">+</div>
                        </div>
                        <input type="hidden" name="harga" class="harga-hidden" value="{{$item->harga}}">
                        <p class="harga">0</p>
                    </div>
                    <div class="removeButton">
                        <svg aria-hidden="true" width="20%" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#ff151b" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path></svg>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="container-history">
            <h1>History</h1>
        </div>
    </div>
    <div class="totalHarga"></div>
@endsection

@push('script')

    <script>
        $("#logo").click(function(){
            window.location.href="/index";
        });
        var carousel = 1;
        $(document).ready(function(){
            updateHarga();
            $('body').css('overflow-y','hidden');
        });

        function updateHarga() {
            $(".harga").each(function(){
                var harga = $(this).siblings('.harga-hidden').val();
                var jumlah = $(this).siblings('.container-input').children('.input-jumlah').val();
                $(this).html(formatRupiah((harga*jumlah).toString(),'Rp. '));
            });
        }

        $(".backButton").mouseover(function(){
            gsap.to('.svg-back',{
                x:-5,
                duration:1
            });
        });

        $(".backButton").mouseleave(function(){
            gsap.to('.svg-back',{
                x:0,
                duration:1
            });
        });

        $(".backButton").click(function(){
            var url =$("#backUrl").val();
            if(url.indexOf('cart') > -1) window.location.href='/';
            else window.location.href=url;
        });

        $(".item-detail").click(function(){
            window.location.href="/";
        });

        $(".button-min").click(function(){
            var jumlah = $(this).siblings('input').val();
            if(jumlah != 0){
                jumlah--;
                $(this).siblings('input').val(jumlah);
                updateHarga();
            }
        });

        $(".button-plus").click(function(){
            var jumlah = $(this).siblings('input').val();
            jumlah++;
            $(this).siblings('input').val(jumlah);
            updateHarga();

        });

        $(document).on('input','.input-jumlah',function(){
            var jumlah = $(this).val();
            if(jumlah<0)$(this).val(1);
            updateHarga();
        });

        $(document).on('blur','.input-jumlah',function(){
            var jumlah = $(this).val();
            if(jumlah == "")$(this).val(1);
            updateHarga();
        });

        $("#container-cart").carousel({
            interval: false
        });

        $(".mycart").click(function(){
            if(carousel != 1){
                $('.history').removeClass('active-link');
                $(this).addClass('active-link');
                $(".page-title").css('opacity',0);
                setTimeout(function(){
                    $(".page-title").html('My Cart');
                    $(".page-title").css('opacity',0.4);
                },300);
                gsap.to('.container-carousel',{
                    x:0,
                    ease: "power2.out",
                    duration:2
                });
                gsap.to('#container-history',{
                    opacity:0,
                    duration:0.5
                });
                gsap.to('#container-mycart',{
                    opacity:1,
                    duration:0.5
                });
                carousel = 1;
            }
        });
        $(".history").click(function(){
            if(carousel != 2){
                $('.mycart').removeClass('active-link');
                $(this).addClass('active-link');
                $(".page-title").css('opacity',0);
                setTimeout(function(){
                    $(".page-title").html('History');
                    $(".page-title").css('opacity',0.4);
                },300);
                gsap.to('.container-carousel',{
                    x:'-100vw',
                    ease: "power2.out",
                    duration:2
                });
                gsap.to('#container-history',{
                    opacity:1,
                    duration:0.5
                });
                gsap.to('#container-mycart',{
                    opacity:0,
                    duration:0.5
                });
                carousel = 2;
            }
        });
    </script>

@endpush
