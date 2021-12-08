@extends('Common_Folder.mainlayout')

@section('title')
    <title>Login | Game Box</title>
@endsection
{{-- @php
    if(count($errors)>0) dd($errors);
@endphp --}}
@section('links')
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
@endsection

@section('content')
    {{-- @php
        dd($errors);
        @endphp --}}
        <div class="container-login">
            <svg id="logo" title="Back to home" xmlns="http://www.w3.org/2000/svg" width="30%" viewBox="0 0 204.25 204.25">
            <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_1-2" data-name="Layer 1">
                    <path d="M49.83,45.43a7.09,7.09,0,0,1-.93,3.27h-6v5.76a5.6,5.6,0,0,1-3.23.95,3.87,3.87,0,0,1-2.84-1.06V48.7H31.2a4.52,4.52,0,0,1-.9-2.63,6.08,6.08,0,0,1,.78-3.44h6v-6a6.5,6.5,0,0,1,3-.61,8,8,0,0,1,3.07.72l0,5.87h5.65A5.62,5.62,0,0,1,49.83,45.43Z" fill="#ff151b"/><path d="M81.07,50.54a4.74,4.74,0,1,1-4.73-4.74A4.74,4.74,0,0,1,81.07,50.54Z" fill="#ff151b"/><path d="M81.07,37.51a4.74,4.74,0,1,1-4.73-4.74A4.73,4.73,0,0,1,81.07,37.51Z" fill="#ff151b"/><path d="M92.86,44.5a4.74,4.74,0,1,1-4.73-4.73A4.73,4.73,0,0,1,92.86,44.5Z" fill="#ff151b"/><path d="M0,0V204.25H23.27l181-181V0ZM102.11,72.84c-.81,5-3.5,8.42-8.56,8s-16-13.6-16-13.6a6.23,6.23,0,0,0-4.21-2H45.43a6.25,6.25,0,0,0-4.21,2s-11,13.18-16,13.61-7.74-2.95-8.56-8c0,0-4.65-20.63,6.88-39.57s28.91-5.76,28.91-5.76a9,9,0,0,0,4.62,1.55h4.65a9.05,9.05,0,0,0,4.61-1.56S83.7,14.33,95.23,33.28,102.11,72.84,102.11,72.84Z" fill="#ff151b"/><polygon points="204.25 47.88 204.25 84.19 84.19 204.25 47.88 204.25 204.25 47.88" fill="#ff151b"/><polygon points="204.25 108.8 204.25 150.22 150.22 204.25 108.8 204.25 204.25 108.8" fill="#ff151b"/><polygon points="174.84 204.25 204.25 174.84 204.25 204.25 174.84 204.25" fill="#ff151b"/>
                </g>
            </g>
        </svg>
        <style>
            .button-google {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 1rem;
                padding: .35rem .5rem;
                border: solid 1px #ff151b !important;
                border-radius: .35rem;
                transition: background-color .3s;
                cursor: pointer;
                border-bottom: solid 1px #ff151b !important;
                color: #ffff !important;
            }
            .button-google:hover {
               background-color: #1f1425;
            }
        </style>
        <a href="/authgoogle" class="button-google">
        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.8889 8.66714C20.011 9.32143 20.0776 10.0055 20.0776 10.7194C20.0776 16.3032 16.3405 20.2736 10.6961 20.2736C9.41251 20.274 8.14141 20.0214 6.95544 19.5304C5.76947 19.0394 4.69188 18.3195 3.78424 17.4118C2.8766 16.5042 2.15669 15.4266 1.66566 14.2406C1.17463 13.0546 0.922094 11.7835 0.922486 10.4999C0.922094 9.21634 1.17463 7.94524 1.66566 6.75928C2.15669 5.57331 2.8766 4.49572 3.78424 3.58807C4.69188 2.68043 5.76947 1.96053 6.95544 1.46949C8.14141 0.978463 9.41251 0.725927 10.6961 0.726319C13.3351 0.726319 15.5402 1.69733 17.232 3.27397L14.4769 6.02914V6.02218C13.4513 5.04522 12.1496 4.54383 10.6961 4.54383C7.47133 4.54383 4.8502 7.26821 4.8502 10.494C4.8502 13.7188 7.47133 16.4491 10.6961 16.4491C13.622 16.4491 15.6137 14.7762 16.0228 12.4787H10.6961V8.66714H19.8899H19.8889Z" fill="#ff151b"/>
        </svg>
        <p>Continue with Google</p>
        {{-- <p><a href="/authgoogle">Continue with Google</a></p> --}}
        </a>
        <form id="login-form" method="post" action="/prosesLogin">
            @csrf
            <input type="text" name="email" class="
            @if ($errors->has('email'))
                error-input
            @elseif(count($errors)>0)
                success-input
            @endif" id="email" placeholder="Email Address" value="{{old('email')}}"/>
            <input type="password" name="password" class="
            @if ($errors->has('password'))
                error-input
            @elseif(count($errors)>0)
            success-input
            @endif" id="password" placeholder="Password" value="{{old('password')}}" />
            <a href="/forgotPassword" class="a-link-forgot" style="margin: 10px 0 0 0;align-self: flex-end;">Forgot Password</a>
            <input type="submit" class="login-button" value="LOGIN" />
            <p> or </p>
            <a href="/register">CREATE MY ACCOUNT</a>
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
    </script>
@endpush

@include('Common_Folder.js.loginjs')
