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

    @yield('links')
    <link rel="stylesheet" href="{{asset('css/chat.css')}}" />
</head>
<body>
    @yield('header')
    @if (session()->has('userLogin'))
        <input type="hidden" name="id_user" id="id_user" value="{{session()->get('userLogin')->id}}">
    @endif

    @include('Common_Folder.chat')
    @yield('content')
    <div class="container-msg">Please Verify Your Email</div>
    @yield('footer')
    <script>
        gsap.registerPlugin(ScrollTrigger);
        $(document).ready(function(){
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
        lazyLoading();
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
