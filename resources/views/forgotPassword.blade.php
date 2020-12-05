<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{asset('images/logo.svg')}}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/input.css')}}" />
    <link rel="stylesheet" href="{{asset('css/forgotPass.css')}}" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <title>Forgot Password | GameBox</title>
</head>

<body>
    <div class="top-section"></div>
    <div class="container-forgot">
        <h1 class="decor left">Forgot Password</h1>
        <h1 class="decor right">Forgot Password</h1>
        <form class="form" action="/forgot" method="post">
            @csrf
            <div class="container-email">
                <h1 class="title">What is your email?</h1>
                <p>We need to make sure it is your account.</p>
                <input type="text" name="email" id="email" placeholder="Email Address" onkeypress="return runScript(event)">
                <div class="next">Next</div>
            </div>
            <div class="container-password">
                <h1 class="title">What is your new password?</h1>
                <p>For security reason, make sure your password is atleast 8 characters long<br><i>Click the button from the email sent by us to enable the password input</i></p>
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="submit" id="submit" value="Submit" style="margin-bottom: 2%;">
                <div class="back">Back</div>
            </div>
        </form>
    </div>
    <div class="bottom-section"></div>
    <div class="container-msg"></div>
    <script>
        $(document).ready(function() {
            $("#password").prop('disabled', true);
            $("#submit").prop('disabled', true);
            gsap.to('body', {
                opacity: 1,
                duration: 1.5
            });
            gsap.from('.left', {
                y: 50,
                duration: 1
            });
            gsap.from('.right', {
                y: -50,
                duration: 1
            });
            gsap.from('.container-forgot', {
                opacity: 0,
                duration: 1
            });
        });

        function runScript(e) {
            if (e.key === "Enter") {
                e.preventDefault();
                var tb = document.getElementById("email");
                $(".next").trigger('click');
            }
        }
        $(".next").click(function() {
            var email = $("#email").val();
            if (email == "") {
                message('Email is still empty');
            } else {
                message('We have sent the email to you');
                var _token = $("input[name=_token]").val();
                $.ajax({
                    url: "/checkEmail",
                    type: "POST",
                    data: {
                        email: email,
                        _token: _token
                    },
                    success: function(response) {
                        if (response == "lolos") {
                            gsap.to('.container-email', {
                                y: '-100%',
                                duration: 1
                            });
                            gsap.to('.container-password', {
                                y: '-100%',
                                duration: 1
                            });
                            timer = setInterval(ajaxNewPassword, 1000);
                        } else {
                            message(response);
                        }
                    },
                    error: function(response) {
                        console.log((response.responseJSON.errors));
                    }
                });
            }
        });

        function message(msg = null) {
            if (msg != null) {
                $('.container-msg').html(msg);
            }
            gsap.to('.container-msg', {
                y: -120,
                duration: 0.8
            });
            gsap.to('.container-msg', {
                y: 100,
                delay: 5,
                duration: 0.8
            });
        }

        var timer;

        function ajaxNewPassword() {
            var email = $("#email").val();
            $.ajax({
                url: "/checkSessionForgot/" + email,
                type: "GET",
                data: {},
                success: function(response) {
                    if (response == "buka") {
                        $("#password").prop('disabled', false);
                        $("#submit").prop('disabled', false);
                        clearInterval(timer);
                    }
                },
                error: function(response) {
                    console.log(response.responseJSON.errors);
                }
            });
        }

        $(".back").click(function() {
            gsap.to('.container-email', {
                y: 0,
                duration: 1
            });
            gsap.to('.container-password', {
                y: 0,
                duration: 1
            });
            clearInterval(timer);
        });
    </script>
</body>

</html>
