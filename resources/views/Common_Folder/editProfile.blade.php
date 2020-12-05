@extends('Common_Folder.mainLayout')

@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animation.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/editProfile.css')}}" />
@endsection

@section('title')
    <title>Edit Profile | GameBox</title>
@endsection

@section('content')
    <div class="outer-container">
        <div class="container-editProfile">
            <h1 class="pagetitle-left">Edit</h1>
            <h1 class="pagetitle-right">Profile</h1>
            <form action="/updateProfile" method="post" class="form-profile" enctype="multipart/form-data">
                @csrf
                <div class="profile-img">
                    @if (session()->get('userLogin')->gambar != null)
                        <img src="{{asset('storage/images/'.session()->get('userLogin')->gambar)}}" alt="IMG">
                    @else
                        <img src="{{{asset('images/Member/'.session()->get('userLogin')->nama_member.'.svg')}}}" alt="IMG">
                    @endif
                </div>
                <p><i>250 x 250</i></p>
                <div class="profile-input">
                    <input type="text" name="nama" id="nama" value="{{$customer->nama}}">
                    <p>Your Name</p>
                </div>
                <div class="profile-input">
                    <input type="text" name="alamat" id="address" value="{{$customer->alamat}}">
                    <p>Address</p>
                </div>
                <div class="profile-input">
                    <input type="number" name="notlp" id="phoneNum" value="{{$customer->notlp}}">
                    <p>Phone Number</p>
                </div>
                <div class="hr-line">
                    <div class="hr"></div>
                    <p>Change Password</p>
                    <div class="hr"></div>
                </div>
                <div class="profile-input">
                    <input type="password" name="oldPass" id="oldPass">
                    <p>Old Password</p>
                </div>
                <div class="profile-input">
                    <input type="password" name="newPass" id="newPass">
                    <p>New Password</p>
                </div>
                <input type="file" name="gambar" id="gambar-file" accept="image/jpg, image/png, image/jpeg" hidden>
                <input type="submit" value="Update My Profile" style="margin-top: 5%">
                <a href="/profile" style="margin-top: 2%; color:#ff151b;">BACK</a>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var defaultIMG;
        $(document).ready(function(){
            defaultIMG = $("img").attr('src');
        });
        $(".profile-img").click(function(){
            $("#gambar-file").trigger('click');
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                $('.profile-img img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#gambar-file").change(function() {
            var extension = $(this).val();
            extension = extension.slice((Math.max(0, extension.lastIndexOf(".")) || Infinity) + 1);
            if(extension == "jpg" || extension == "png" || extension == "jpeg")
                readURL(this);
            else{
                $("#gambar-file").val('');
                $('img').attr('src',defaultIMG);
                message('Image type is not supported');
            }
        });
    </script>
@endpush
