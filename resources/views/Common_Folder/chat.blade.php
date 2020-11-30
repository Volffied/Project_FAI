


<div class="container-chat">
    <div class="button-toggle">
        <svg class="chatIcon" aria-hidden="true" focusable="false" data-prefix="far" data-icon="comment-dots" class="svg-inline--fa fa-comment-dots fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M144 208c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path></svg>
        <svg class="closeIcon"  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="#fff" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
    </div>
    <div class="container-isiChat">
        <div class="isiChat-wrapper chat-pegawai">
            <p class="chat-name">cs.gamebox</p>
            <div class="pesan-wrapper">
                <p>Halo Samuel!<br> Apa yang ingin anda tanyakan?</p>
            </div>
            <p class="pesan-timestamp">12/1/2020 12:48am</p>
        </div>
    </div>
    <form action="#" method="post" class="container-inputChat">
        <input type="text" name="inputChat" id="inputChat" placeholder="Type your text here (Press ENTER to send)">
    </form>
</div>

@push('script')

    <script>
        var chatPop = 0;
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
            }
        });
    </script>

@endpush
