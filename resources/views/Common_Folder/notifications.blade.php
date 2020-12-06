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
                @isset($notif)
                    @foreach ($notif as $item)
                        <div class="notifikasi-item unread">
                            <h1>{{ $item->data["chat_isi"] }}</h1>
                            <p><i>{{ $item->created_at }}</i></p>
                            <input type="hidden" name="" class="item_notif" value="{{ $item->id }}">
                        </div>
                    @endforeach
                @endisset
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
                    <p class="msg-nodata">Show notifications by clicking the tab on the left</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

    <script>
        reformatPrice();
        //function click_div(clicked_id){
        $(document).on('click',".notifikasi-item",function(){
            $(this).removeClass('unread');
            $('.notifikasi-item').removeClass('selected');
            $(this).addClass('selected');
            var id = $(this).children('.item_notif').val();
            $.ajax({
                url:"/notif/"+id,
                type:"GET",
                data:{},
                success:function(res){

                },
                error:function(res){
                    alert("error :"+res);
                }
            });

            //isi ajax
            // gsap.to(".details-notifikasi",{
            //     opacity:0,
            //     duration:0.5
            // });
            // setTimeout(function(){
            //     $(".details-notifikasi").html(response);
            // },500);
            // gsap.to(".details-notifikasi",{
            //     opacity:1,
            //     duration:0.5
            // });
            // if($('.details-notifikasi').hasClass('no-data')){
            //     setTimeout(function(){
            //         $(".details-notifikasi").removeClass('no-data');
            //         $('.msg-nodata').remove();
            //     },1000);
            // }
        });
    </script>

@endpush
