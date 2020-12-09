@extends('Common_Folder.mainlayout')

@section('title')
    <title>Register | Game Box</title>
@endsection
{{-- @php
    if(count($errors)>0) dd($errors);
@endphp --}}
@section('links')
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
@endsection

@section('content')
    <div class="container-login">
        <form id="login-form" method="post" action="/prosesRegister">
            @csrf
            <h2 style="color:#FF151B; font-weight:800;">CREATE AN ACCOUNT</h3>
            <input type="text" name="email" class="
            @if ($errors->has('email'))
                error-input
            @elseif(count($errors)>0)
                success-input
            @endif" id="email" placeholder="Email Address" value="{{old('email')}}"/>

            <div class="input-container">
                <input type="password" name="password" class="
                @if ($errors->has('password'))
                    error-input
                @elseif(count($errors)>0)
                    success-input
                @endif" id="password" placeholder="Password (8 or more characters)" value="{{old('password')}}" />
                <svg class="visibility  vis-pass" xmlns="http://www.w3.org/2000/svg" width="6%" viewBox="0 0 469.33 320">
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Capa_1" data-name="Capa 1">
                            <path d="M234.67,96a64,64,0,1,0,64,64A64,64,0,0,0,234.67,96Z" fill="#ff151b"/>
                            <path d="M234.67,0C128,0,36.91,66.35,0,160c36.91,93.65,128,160,234.67,160s197.76-66.35,234.66-160C432.43,66.35,341.44,0,234.67,0Zm0,266.67A106.67,106.67,0,1,1,341.33,160,106.71,106.71,0,0,1,234.67,266.67Z" fill="#ff151b"/>
                        </g>
                    </g>
                </svg>
                <svg class="invisibility showPass invis-pass" xmlns="http://www.w3.org/2000/svg" width="6%" viewBox="0 0 469.44 405.33">
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Capa_1" data-name="Capa 1">
                            <path d="M231.15,128.32l67.2,67.2.32-3.52a64.05,64.05,0,0,0-64-64Z" fill="#ff151b"/>
                            <path d="M234.67,85.33A106.7,106.7,0,0,1,341.33,192a105,105,0,0,1-7.57,38.93l62.4,62.4A253.38,253.38,0,0,0,469.44,192c-37-93.65-128-160-234.77-160a249.46,249.46,0,0,0-85,14.93l46.08,46A107,107,0,0,1,234.67,85.33Z" fill="#ff151b"/><path d="M21.33,27.2,70,75.84l9.71,9.71A252.64,252.64,0,0,0,0,192c36.91,93.65,128,160,234.67,160a250,250,0,0,0,93.54-18l9.07,9.07,62.19,62.29,27.2-27.09L48.53,0Zm118,117.87,33,33a67.52,67.52,0,0,0-1.6,14,64,64,0,0,0,64,64,65.7,65.7,0,0,0,13.86-1.6l33,33a104.9,104.9,0,0,1-46.82,11.31,106,106,0,0,1-95.36-153.6Z" fill="#ff151b"/>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="input-container">
                <input type="password" name="conf_pass" class="
                @if ($errors->has('conf_pass'))
                    error-input
                @elseif(count($errors)>0)
                    success-input
                @endif" id="conf_pass" placeholder="Password Confirmation" value="{{old('conf_pass')}}" />
                <svg class="visibility showConfPass vis-conf" xmlns="http://www.w3.org/2000/svg" width="6%" viewBox="0 0 469.33 320">
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Capa_1" data-name="Capa 1">
                            <path d="M234.67,96a64,64,0,1,0,64,64A64,64,0,0,0,234.67,96Z" fill="#ff151b"/>
                            <path d="M234.67,0C128,0,36.91,66.35,0,160c36.91,93.65,128,160,234.67,160s197.76-66.35,234.66-160C432.43,66.35,341.44,0,234.67,0Zm0,266.67A106.67,106.67,0,1,1,341.33,160,106.71,106.71,0,0,1,234.67,266.67Z" fill="#ff151b"/>
                        </g>
                    </g>
                </svg>
                <svg class="invisibility showConfPass invis-conf" xmlns="http://www.w3.org/2000/svg" width="6%" viewBox="0 0 469.44 405.33">
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Capa_1" data-name="Capa 1">
                            <path d="M231.15,128.32l67.2,67.2.32-3.52a64.05,64.05,0,0,0-64-64Z" fill="#ff151b"/>
                            <path d="M234.67,85.33A106.7,106.7,0,0,1,341.33,192a105,105,0,0,1-7.57,38.93l62.4,62.4A253.38,253.38,0,0,0,469.44,192c-37-93.65-128-160-234.77-160a249.46,249.46,0,0,0-85,14.93l46.08,46A107,107,0,0,1,234.67,85.33Z" fill="#ff151b"/><path d="M21.33,27.2,70,75.84l9.71,9.71A252.64,252.64,0,0,0,0,192c36.91,93.65,128,160,234.67,160a250,250,0,0,0,93.54-18l9.07,9.07,62.19,62.29,27.2-27.09L48.53,0Zm118,117.87,33,33a67.52,67.52,0,0,0-1.6,14,64,64,0,0,0,64,64,65.7,65.7,0,0,0,13.86-1.6l33,33a104.9,104.9,0,0,1-46.82,11.31,106,106,0,0,1-95.36-153.6Z" fill="#ff151b"/>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="divider-login">
                <div class="divider-item"></div>
                <h3>About You</h3>
                <div class="divider-item"></div>
            </div>

            <input type="text" name="name" class="
            @if ($errors->has('name'))
                error-input
            @elseif(count($errors)>0)
                success-input
            @endif" id="name" placeholder="Your Name" value="{{old('name')}}"/>

            <input type="text" name="alamat" class="
            @if ($errors->has('alamat'))
                error-input
            @elseif(count($errors)>0)
                success-input
            @endif" id="alamat" placeholder="Address" value="{{old('alamat')}}"/>

            <input type="number" name="notelp" class="
            @if ($errors->has('notelp'))
                error-input
            @elseif(count($errors)>0)
                success-input
            @endif" id="notelp" placeholder="Phone Number" value="{{old('notelp')}}"/>
            <input type="submit" class="register-button" value="REGISTER" />
            <p> or </p>
            <a href="/login">LOGIN TO MY ACCOUNT</a>
        </form>
    </div>
    <input type="hidden" id="image1" value="{{asset('images/bg01.jpg')}}">
    <input type="hidden" id="image2" value="{{asset('images/bg02.jpg')}}">
    <input type="hidden" id="image3" value="{{asset('images/bg03.jpg')}}">
@endsection

@push('script')
    <script src="{{asset('js/login.js')}}"></script>
    <script>
        if($(".container-message").children().length != 0){
            gsap.to(".container-message",{
                y:150,
                duration:0.2,
            });
            gsap.to(".container-message",{
                y:0,
                opacity:1,
                duration:1,
            });
        }

        $(".showPass").click(function(){
            if($('.vis-pass').css('opacity')==0){
                $('.vis-pass').css('opacity',1);
                $('.invis-pass').css('opacity',0);
                $("#password").attr('type','password');
            }else{
                $('.vis-pass').css('opacity',0);
                $('.invis-pass').css('opacity',1);
                $("#password").attr('type','text');
            }
        });

        $(".showConfPass").click(function(){
            if($('.vis-conf').css('opacity')==0){
                $('.vis-conf').css('opacity',1);
                $('.invis-conf').css('opacity',0);
                $("#conf_pass").attr('type','password');
            }else{
                $('.vis-conf').css('opacity',0);
                $('.invis-conf').css('opacity',1);
                $("#conf_pass").attr('type','text');
            }
        });

        $(document).on('input', '#conf_pass',function(){
            if($("#password").val() != $("#conf_pass").val() || $("#password").val().length < 8){
                $("#password").css('border-color','#FF151B');
                $("#conf_pass").css('border-color','#FF151B');
            }else{
                setTimeout(function(){
                    $("#password").css('border-color','#0a060d');
                    $("#conf_pass").css('border-color','#0a060d');
                },1000);
            }
        });

        $(document).on('input', '#password',function(){
            if($("#password").val() != $("#conf_pass").val() || $("#password").val().length < 8){
                $("#password").css('border-color','#FF151B');
                $("#conf_pass").css('border-color','#FF151B');
            }else{
                setTimeout(function(){
                    $("#password").css('border-color','#0a060d');
                    $("#conf_pass").css('border-color','#0a060d');
                },1000);
            }
        });

        $(document).on('blur','input:text',function(){
            if($(this).val() == "") $(this).css('border-color','#FF151B');
            else $(this).css('border-color','#0a060d');
        });

        $(document).on('blur',':input[type="number"]',function(){
            if($(this).val() == "") $(this).css('border-color','#FF151B');
            else $(this).css('border-color','#0a060d');
        });

    </script>
@endpush

@include('Common_Folder.js.loginjs')
