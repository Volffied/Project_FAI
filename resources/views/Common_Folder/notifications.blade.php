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

@section('content')
    <div class="container-luarnotif">
        <div class="container-notifikasi">
            <div class="list-notif">
                <div class="backButton">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#261830" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <p>BACK</p>
                </div>
                @isset($notif)
                    @foreach ($notif as $item)
                        @php
                            $judul = $item->data["chat_isi"];
                            $judul = substr($judul,strpos($judul,'-')+2);
                        @endphp
                        <div class="notifikasi-item
                            @if ($item->read_at == null)
                                unread
                            @endif
                        " name="{{ $item->id }}">
                            <h1>{{ $judul }}</h1>
                            <p><i>{{ $item->created_at }}</i></p>
                            <input type="hidden" name="" class="item_notif" value="{{ $item->id }}">
                        </div>
                        <div class="divider"></div>
                    @endforeach
                @endisset
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
                    if($('.details-notifikasi').hasClass('no-data')){
                        setTimeout(function(){
                            $(".details-notifikasi").removeClass('no-data');
                            $('.msg-nodata').remove();
                        },1000);
                    }
                    gsap.to(".details-notifikasi",{
                        opacity:0,
                        duration:0.5
                    });
                    setTimeout(function(){
                        $(".details-notifikasi").html(res);
                    },500);
                    gsap.to(".details-notifikasi",{
                        opacity:1,
                        delay:0.5,
                        duration:0.5
                    });
                    setTimeout(function(){
                        lazyLoading();
                        reformatPrice();
                    },500);
                },
                error:function(res){
                    console.log("error :"+res);
                }
            });
        });
        $(".backButton").mouseenter(function(){
            gsap.to('.backButton svg',{
                width:'2em',
                duration:0.5
            });
        });
        $(".backButton").mouseleave(function(){
            gsap.to('.backButton svg',{
                width:'0',
                duration:0.5
            });
        });
        $(".backButton").click(function(){
            window.history.back();
        });
    </script>

@endpush
