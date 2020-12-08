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
       // $user = session()->get('userLogin');
    @endphp
    <input type="hidden" id="sukses" value="{{session()->get('berhasil')}}">
    <h1 class="page-title">My Profile</h1>
    <div class="outer-container">
        <div class="container-profile">
            <div class="logo-member">
                <img style="filter:none;opacity:1;" src="{{{asset('images/Member/'.$user->Member->nama.'.svg')}}}" alt="">
                {{-- <img style="filter:none;" class="bg-img" src="{{{asset('images/Member/'.$user->nama_member.'.svg')}}}" alt=""> --}}
                <h1 class="{{$user->Member->nama}}">{{strtoupper($user->Member->nama)}}</h1>
                <p>+{{$user->potongan}}% Discount</p>
            </div>
            <div class="container-subprofile" style="left: 0;">
                <div class="slider-poin {{$user->Member->nama}}-border">
                    @php
                        //now-start/end-start
                        // 700
                        $minPoin = $myMember->minimal_poin;
                        $maxPoin = $nextMember->minimal_poin;
                        $myPoin = $user->poin;
                        if($maxPoin-$myPoin > 0) $percent = ($myPoin-$minPoin)/($maxPoin-$minPoin)*100;
                        else $percent = 100;
                        // dd("Min:".$minPoin."\nMax:".$maxPoin."\nMy:".$myPoin."\nPercent:".$percent);
                    @endphp
                    <p>{{$myPoin}} Points</p>
                    @if ($myMember->id_member != 5)
                        <p>{{$maxPoin-$myPoin}} more for {{ucfirst($nextMember->nama)}}</p>
                    @else
                        <p>MAXED OUT</p>
                    @endif
                    <div class="fill-poin {{$user->nama_member}}-bg" style="width: {{$percent}}%;"></div>
                </div>
                <div class="container-bio">
                    <div class="bio">
                        <p>Name</p>
                        <h1>{{$user->nama}}</h1>
                    </div>
                    <div class="bio">
                        <p>Email</p>
                        <h1>{{$user->email}}</h1>
                        @if ($user->status == 0)
                            <p class="verifyEmail">Verify My Email</p>
                            <input type="hidden" name="txthiddenid" id="" value="{{$user->id}}">
                        @else
                            <p class="verifyEmail sukses" style="color:#73be73;">Mighty Email</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="container-subprofile" style="right: 0;">
                <div class="container-orderCount">
                    <div class="order">
                        <h1 class="number">{{ $counthorder }}</h1>
                        <p>Ordered</p>
                    </div>
                    <div class="order">
                        <h1 class="number">{{$countsuccess}}</h1>
                        <p>Finished</p>
                    </div>
                    <div class="order">
                        <h1 class="number">{{ $countfailed }}</h1>
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
            <a href="/profile/editProfile">
                <button class="buttonEditProfile">Edit Profile</button>
            </a>
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
            if($("#sukses").val() != "") message('Your email is considered mighty');
        });

        $(".verifyEmail").click(function(){
            if(!$(this).hasClass('sukses')){
                message("We've sent an email to you.<br>Please click the link inside the email to continue");
                updateData();
            }
        });
        function updateData(){
            var id = $("input[name=txthiddenid]").val();
            // alert(id);
            $.ajax({
                url:"/updateEmail/"+id,
                type:"GET",
                data:{},
                success:function(response){
                    console.log('email(success):'+response);

                },
                error:function(response){
                    console.log('email(failed):'+response);
                }
            });
        }
    </script>

@endpush
