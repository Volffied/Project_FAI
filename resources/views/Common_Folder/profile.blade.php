@extends('Common_Folder.mainLayout')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/profile.css')}}" />
@endsection

@section('title')
    <title>Profile | GameBox</title>
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
    @php
        $user = session()->get('userLogin');
    @endphp
    <h1 class="page-title">My Profile</h1>
    <div class="outer-container">
        <div class="container-profile">
            <div class="logo-member">
                <img style="filter:none;opacity:1;" src="{{{asset('images/Member/'.$user->nama_member.'.svg')}}}" alt="">
                {{-- <img style="filter:none;" class="bg-img" src="{{{asset('images/Member/'.$user->nama_member.'.svg')}}}" alt=""> --}}
                <h1 class="{{$user->nama_member}}">{{strtoupper($user->nama_member)}}</h1>
                <p>+{{$user->potongan}}% Discount</p>
            </div>
            <div class="container-subprofile" style="left: 0;">
                <div class="slider-poin">
                    @php
                        //now-start/end-start
                        // 700
                        $minPoin = $myMember->minimal_poin;
                        $maxPoin = $nextMember->minimal_poin;
                        $myPoin = $user->poin;
                        $percent = ($myPoin-$minPoin)/($maxPoin-$minPoin)*100;
                        // dd("Min:".$minPoin."\nMax:".$maxPoin."\nMy:".$myPoin."\nPercent:".$percent);
                    @endphp
                    <p>{{$myPoin}} Points</p>
                    <p>{{$maxPoin-$myPoin}} more for {{ucfirst($nextMember->nama)}}</p>
                    <div class="fill-poin" style="width: {{$percent}}%;"></div>
                </div>
                <div class="container-bio">
                    <div class="bio">
                        <p>Name</p>
                        <h1>{{$user->nama}}</h1>
                    </div>
                    <div class="bio">
                        <p>Email</p>
                        <h1>{{$user->email}}</h1>
                    </div>
                </div>
            </div>
            <div class="container-subprofile" style="right: 0;">
                <div class="container-orderCount">
                    <div class="order">
                        <h1 class="number">12</h1>
                        <p>Ordered</p>
                    </div>
                    <div class="order">
                        <h1 class="number">12</h1>
                        <p>Finished</p>
                    </div>
                    <div class="order">
                        <h1 class="number">12</h1>
                        <p>Failed</p>
                    </div>
                </div>
                <div class="container-bio">
                    <div class="bio">
                        <p>Phone Number</p>
                        <h1>{{$user->notlp}}</h1>
                    </div>
                    <div class="bio">
                        <p>Address</p>
                        <h1>{{$user->alamat}}</h1>
                    </div>
                </div>
            </div>
            <div class="vertical-divider"></div>
        </div>
    </div>
@endsection

@push('script')

    <script>
        $(document).ready(function(){
            gsap.from('.fill-poin',{
                width:'0%',
                ease: "back.out(1.5)",
                delay:0.5,
                duration:1
            });
            gsap.from('.slider-poin p',{
                opacity:0,
                delay:0.5,
                duration:0.5
            });
            gsap.from('.slider-poin',{
                width:'0%',
                duration:1
            });
            gsap.from('.logo-member *',{
                y:-20,
                opacity:0,
                duration:1
            });
            gsap.from('.container-orderCount *',{
                y:-20,
                opacity:0,
                duration:1
            });

            gsap.from('.bio *',{
                y:-20,
                stagger:0.2,
                opacity:0,
                duration:1
            });
        });
    </script>

@endpush
