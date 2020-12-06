<div class="container-header">
    <div class="container-nav">
        <svg height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.84 113.56">
            <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_2-2" data-name="Layer 2">
                    <polygon points="186.18 0 72.09 113.56 49.44 113.56 163.5 0 186.18 0" fill="#261830"/>
                    <polygon points="239.51 0 125.42 113.56 102.77 113.56 216.83 0 239.51 0" fill="#261830"/>
                    <polygon points="292.84 0 178.75 113.56 156.1 113.56 270.16 0 292.84 0" fill="#261830"/>
                    <path d="M48.83,21.14C41.75,9.5,31.08,17.6,31.08,17.6a5.54,5.54,0,0,1-2.84.95H25.39a5.46,5.46,0,0,1-2.84-1S11.88,9.51,4.8,21.14.57,45.44.57,45.44c.5,3.11,2.15,5.18,5.26,4.92S15.66,42,15.66,42a3.85,3.85,0,0,1,2.58-1.21H35.38A3.81,3.81,0,0,1,38,42s6.74,8.09,9.84,8.35,4.76-1.81,5.26-4.91C53.06,45.44,55.91,32.77,48.83,21.14ZM20.37,30.61H16.7v3.54a3.38,3.38,0,0,1-2,.58A2.42,2.42,0,0,1,13,34.08V30.61H9.5A2.8,2.8,0,0,1,9,29a3.71,3.71,0,0,1,.48-2.11h3.68V23.21A4,4,0,0,1,15,22.84a4.84,4.84,0,0,1,1.89.44l0,3.6h3.47A3.45,3.45,0,0,1,21,28.6,4.32,4.32,0,0,1,20.37,30.61Zm16.86,4a2.91,2.91,0,1,1,2.91-2.91A2.91,2.91,0,0,1,37.23,34.65Zm0-8a2.91,2.91,0,1,1,2.91-2.91A2.91,2.91,0,0,1,37.23,26.65Zm7.24,4.29A2.91,2.91,0,1,1,47.38,28,2.91,2.91,0,0,1,44.47,30.94Z" fill="#261830"/>
                </g>
            </g>
        </svg>
        <div class="link-wrapper">
            {{-- <p>Hello, {{session()->get('userLogin')->nama}}</p> --}}
            <a id="searchButton" style="margin-top: 0 !important; width:5%;">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" width="25" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#261830" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
            </a>
            <div style="display: table-cell; text-align:center; vertical-align:middle;padding:0 1%; 0 .5%">
                <input type="text" name="search" id="search" placeholder="Search your item">
            </div>
            <a class="home-link" href="/">HOME</a>
            <a class="items-link" href="/search">ITEMS</a>
            <a class="cart-nav" href="/cart">CART
                <div class="container-notifCart"></div>
            </a>
            <a class="profile-link" href="/profile" title="{{session()->get('userLogin')->nama}}" style="width:5%;">
                <div class="container-icon">
                    <div class="img-icon">
                        @if (session()->get('userLogin')->gambar != null)
                            <img src="{{asset('storage/images/'.session()->get('userLogin')->gambar)}}" style="width: 100%" alt="PROFILE">
                        @else
                            <img style="filter:none;opacity:1; width:50%;" src="{{{asset('images/Member/'.session()->get('userLogin')->nama_member.'.svg')}}}" alt="">
                        @endif
                    </div>
                </div>
            </a>
            <a style="width:5%;padding-top:1%;" class=" notif-link">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" width="25" class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path class="bell" fill="#160d1c" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path></svg>
            </a>
            <a href="/login" style="width:5%;padding-top:1%;">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" width="25" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg>
            </a>
           <svg aria-hidden="true" focusable="false" data-prefix="fas" style="margin-right:3%;display:none;" data-icon="bars" class="svg-nav svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
        </div>
        <div class="container-notif">
            <?php
                $notif =[];
                if(session()->has('notif')){
                    $notif = session()->get('notif');
                    //dd($notif);
                }
            ?>
            @isset($notif)
                @foreach ($notif as $item)
                <div class="notif-item">
                    <a href="notifications?id={{$item->id}}" class="notif-title">{{ $item->data["chat_isi"] }}</a>
                </div>
                @endforeach
            @endisset
            <div class="notif-item">
                <a href="notifications" class="notif-title">See all Notifications</a>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function(){
            gsap.to('notif-item',{
                y:-20,
                duration:0
            });
        });
        if($("#id_user").length != 0){
            setTimeout(function(){
                ajaxCart();
            },500);
        }

        $(".cart-nav").mouseenter(function(){
            gsap.to('.container-notifCart',{
                y:'80%',
                duration:0.5
            });
        });

        $(".cart-nav").mouseleave(function(){
            gsap.to('.container-notifCart',{
                y:'60%',
                duration:0.5
            });
        });

        $("#searchButton").mouseenter(function(){
            gsap.to('#searchButton svg',{
                rotation:15,
                duration:0.5
            });
        });

        $("#searchButton").mouseleave(function(){
            gsap.to('#searchButton svg',{
                rotation:0,
                duration:0.5
            });
        });

        $("#searchButton").click(function(){
            var value = $(this).siblings('#search').val();
            if(value == "") window.location.href = '/search';
            else {
                window.location.href = '/search?barang='+value;
            }
        });

        $("#search").keyup(function(e){
            var code = e.key;
            if(code==="Enter"){
                var value = $(this).val();
                if(value == "") window.location.href = '/search';
                else {
                    window.location.href = '/search?barang='+value;
                }
            }
        });

        var notif = false;

        $(".notif-link").click(function(){
            if(notif){
                notif = false;
                setTimeout(function(){
                    $('.container-notif').css('display','none');
                },1000);
                $(this).removeClass('active-link');
                $('.bell').css('fill','#160d1c');
                gsap.to('.notif-item',{
                    opacity:0,
                    stagger:0.1,
                    y:-20,
                    duration:0.2
                });
            }else{
                notif = true;
                $('.container-notif').css('display','block');
                $('.bell').css('fill','#ff151d');
                $(this).addClass('active-link');
                gsap.to('.notif-item',{
                    opacity:1,
                    stagger:0.1,
                    y:0,
                    duration:0.2
                });
            }
        });
    </script>
@endpush
