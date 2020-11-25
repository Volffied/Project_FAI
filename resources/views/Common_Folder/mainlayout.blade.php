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
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js" integrity="sha512-wK2NuxEyN/6s53M8G7c6cRUXvkeV8Uh5duYS06pAdLq4ukc72errSIyyGQGYtzWEzvVGzGSWg8l79e0VkTJYPw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    @yield('links')
</head>
<body>
    @yield('header')
    @yield('content')
    @yield('footer')
    <script>
        gsap.registerPlugin(ScrollTrigger);
        $(document).ready(function(){
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
                duration:2
            });
        });


        $('.price').each(function(){
            var harga = $(this).text();
            $(this).text(formatRupiah(harga,'Rp. '));
        });

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
    </script>
    @stack('script')
</body>
</html>
