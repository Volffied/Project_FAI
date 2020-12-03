<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="{{asset('images/logo.svg')}}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js" integrity="sha512-wK2NuxEyN/6s53M8G7c6cRUXvkeV8Uh5duYS06pAdLq4ukc72errSIyyGQGYtzWEzvVGzGSWg8l79e0VkTJYPw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-dateformat@1.0.4/dist/jquery-dateformat.min.js"></script>

    @yield('links')
    <link rel="stylesheet" href="{{asset('css/chat.css')}}" />
</head>
<body>
    @php
        date_default_timezone_set('Asia/Jakarta');
    @endphp
    @yield('header')
    @if (session()->has('userLogin'))
        <input type="hidden" name="id_user" id="id_user" value="{{session()->get('userLogin')->id}}">
        <div class="container-chat">
            <div class="button-toggle">
                <div class="notif-chat">15</div>
                <svg class="chatIcon" aria-hidden="true" focusable="false" data-prefix="far" data-icon="comment-dots" class="svg-inline--fa fa-comment-dots fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M144 208c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path></svg>
                <svg class="closeIcon"  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="#fff" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
            </div>
            <div class="container-isiChat" id="chatWrap">

            </div>
            <form class="container-inputChat">
                @csrf
                <input type="text" name="pesan" id="inputChat" placeholder="Type your text here (Press ENTER to send)">
                <input type="hidden" name="jenis" id="jenis" value="0">
            </form>
        </div>
    @endif

    @yield('content')
    <div class="container-msg">Please Verify Your Email</div>
    @yield('footer')
    <script>
        gsap.registerPlugin(ScrollTrigger);
        formatChat();
        var chatPop = 0;
        var timer1;
        var timer2 = setInterval(updateNotifChat,1000);
        $(".button-toggle").click(function(){
            if(chatPop == 0){
                gsap.to('.container-chat',{
                    y:0,
                    duration:1
                });

                chatPop = 1;

                gsap.to('.closeIcon',{
                    opacity:1,
                    duration:1
                });

                gsap.to('.chatIcon',{
                    opacity:0,
                    duration:1
                });
                timer1 = setInterval(updateChat,1000);
                clearInterval(timer2);
                timer2 = setInterval(function(){
                    updateNotifChat(true);
                },1000);
            }
            else{
                gsap.to('.container-chat',{
                    y:'80vh',
                    duration:1
                });

                chatPop = 0;

                gsap.to('.button-toggle',{
                    rotation:0,
                    duration:1
                });

                gsap.to('.closeIcon',{
                    opacity:0,
                    duration:1
                });

                gsap.to('.chatIcon',{
                    opacity:1,
                    duration:1
                });
                clearInterval(timer2);
                timer2 = setInterval(updateNotifChat,1000);
                clearInterval(timer1);
            }
        });

        $(document).ready(function(){
            lazyLoading();
            updateNotifChat();
            gsap.to('body',{
                opacity:1,
                duration:1.5
            });
            if($('img[data-lazy]').hasClass('fadeFromLeft')){
                gsap.to('img[data-lazy]',{
                    x:-20,
                    opacity:0,
                    duration:0
                });
            }else{
                gsap.to('img[data-lazy]',{
                    y:50,
                    opacity:0,
                    duration:0
                });
            }
            gsap.from('.container-header',{
                y:-150,
                opacity:0,
                delay:0.5,
                duration:2
            });
            gsap.to('.container-chat',{
                y:'80vh',
                duration:0
            });
            updateChat();
        });

        $(document).on({
            mouseenter: function(){
                gsap.to($(this).children('.fadeFromDown'),{
                    y:-10,
                    duration:1
                });
            },
            mouseleave: function(){
                gsap.to($(this).children('.fadeFromDown'),{
                    y:0,
                    duration:1
                });
            }
        }, '.item-img');

        function reformatPrice() {
            $('.price').each(function(){
                var harga = $(this).text();
                $(this).text(formatRupiah(harga,'Rp. '));
            });
        }

        function ajaxCart(id=-1,qty=1) {
            $.ajax({
                url:"/addToCart/"+id+"_"+qty,
                type:"GET",
                data:{},
                success:function (result) {
                    var response = JSON.parse(result);
                    gsap.to('.container-notifCart',{
                        y:"5%",
                        duration:0.5
                    });
                    console.log(response);

                    setTimeout(function(){
                        $('.container-notifCart').html(response['data']);
                    },1000);

                    gsap.to('.container-notifCart',{
                        y:'60%',
                        delay:1,
                        duration:0.5
                    });
                    if(response['msg'] != null)
                    message(response['msg']);
                },error:function(){
                    alert('gagal');
                }
            });
        }
        function lazyLoading() {
            const targets = document.querySelectorAll('img');
            const lazyLoad = target =>{
                const io = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if(entry.isIntersecting){
                            const img = entry.target;
                            const src = img.getAttribute('data-lazy');

                            if(src!=null){
                                img.setAttribute('src',src);
                                if(img.classList.contains('fadeFromLeft')){
                                    gsap.to(img,{
                                        x:0,
                                        opacity:1,
                                        duration:1
                                    });
                                }else{
                                    gsap.to(img,{
                                        y:0,
                                        opacity:1,
                                        duration:1
                                    });
                                }
                            }

                            observer.disconnect();
                        }
                    });
                });
                io.observe(target);
            };
            targets.forEach(lazyLoad);
        }

        function formatRupiah(angka, prefix){
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split   		= number_string.split(','),
            sisa     		= split[0].length % 3,
            rupiah     		= split[0].substr(0, sisa),
            ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

            if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
        function checkOverflow(el)
        {
            var curOverflow = el.style.overflow;

            if ( !curOverflow || curOverflow === "visible" )
                el.style.overflow = "hidden";

            var isOverflowing = el.clientWidth < el.scrollWidth
                || el.clientHeight < el.scrollHeight;

            el.style.overflow = curOverflow;

            return isOverflowing;
        }



        function message(msg) {
            $('.container-msg').html(msg);
            gsap.to('.container-msg',{
                y:-120,
                duration:0.8
            });
            gsap.to('.container-msg',{
                y:100,
                delay:5,
                duration:0.8
            });
        }

        $(".container-inputChat").submit(function(e) {
            e.preventDefault();
            var input = $("#inputChat").val().trim();
            var jenis = $("#jenis").val();
            var _token      = $("input[name=_token]").val();
            if (/\S/.test(input)) {
                $.ajax({
                    url: "/chatsend",
                    type: "POST",
                    data:{
                        pesan       : input,
                        jenis       : jenis,
                        _token      : _token
                    },
                    success: function(response) {
                        console.log(response);
                        updateChat();
                        autoScrollChat();
                        $("#inputChat").val("");
                    },
                    error:function(data){
                        console.log((data.responseJSON.errors));
                    }
                });
            }else{
                $("#inputChat").val("");
            }
        });

        function formatChat() {
            $('.dateFormat').each(function(){
                var date = $(this).text();
                $(this).text(jQuery.format.prettyDate(date));
            });
        }

        function updateChat() {
            $.ajax({
                url: "/getChat",
                type: "GET",
                data:{},
                success:function(response){
                    $(".container-isiChat").html(response);
                    formatChat();
                }
            });
        }

        function updateNotifChat(jenis = false) {
            if(jenis){
                $.ajax({
                    url: "/getNotifChat/update",
                    type: "GET",
                    data:{},
                    success:function(response){
                        $('.notif-chat').html(response);
                    }
                });
            }else{
                $.ajax({
                    url: "/getNotifChat",
                    type: "GET",
                    data:{},
                    success:function(response){
                        $('.notif-chat').html(response);
                    }
                });
            }
        }

        function autoScrollChat() {
            var element = document.getElementById("chatWrap");
            element.scrollTop = element.scrollHeight;
        }


        $(document).on('click','.cta-cart',function(){
            if($("#id_user").length != 0){
                var id = $(this).siblings('.id_barang').val();
                if($(this).siblings('.jumlah_barang').length != 0){
                    var qty = $(this).siblings('.jumlah_barang').val();
                    ajaxCart(id,qty);
                }else{
                    ajaxCart(id);
                }
            }else window.location.href = "/login";
        });

        $(document).on('click','.item-img',function(){
            var url = $(this).siblings('.item-details').children().children('.title').children().html();
            url = url.replace(/\s+/g,'-').toLowerCase();
            window.location.href="/product/"+url;
        });

        $(window).on('beforeunload',function(){
            gsap.to('body',{
                opacity:0,
                duration:0.2
            });
        });
    </script>
    @stack('script')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-7TpgxSciwX7rsj1A"></script>
</body>
</html>
