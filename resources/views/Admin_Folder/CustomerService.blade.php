@extends("Admin_Folder.BlueprintCS")
@section('container-body-page')

@endsection

@section('table-master')
<link rel="stylesheet" href="{{asset('css/chatadmin.css')}}" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-dateformat@1.0.4/dist/jquery-dateformat.min.js"></script>
<div class="container-chat">
    <div class="button-toggle">
        <svg class="closeIcon"  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="#fff" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
    </div>
    <div class="container-isiChat" id="chatWrap">

    </div>
    <form class="container-inputChat">
        @csrf
        <input type="text" name="pesan" id="inputChat" placeholder="Type your text here (Press ENTER to send)">
        <input type="hidden" name="jenis" id="jenis" value="1">
        <input type="hidden" name="namasender" id="namasender" value="{{ $namaPeg }}">
    </form>
</div>
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1>Customer Service</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('CustomerService') }}">Home</a></li>
                    <li class="breadcrumb-item active">Customer Service</li>
                    </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <?php
            $ctr3 = 1;
        ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <style>
                    #example2_wrapper .row:last-child{
                        display: none;
                    }
                </style>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Customer</h2>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <style>
                                        .thead{
                                            background-color: #8F192F !important;
                                            color:white;
                                        }

                                        .table td{
                                            padding-left: .75rem;
                                            vertical-align: middle;
                                        }
                                    </style>
                                    <thead class="thead">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tabelCS">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    $(document).ready(function(){
       setInterval(updateTabel,1000);
       gsap.to('.container-chat',{
                y:'80vh',
                duration:0
            });
        $('.button-toggle').css('display','none');
        $('.button-toggle').css('opacity',0);
    });
    $('.button-toggle').click(function(){
        gsap.to('.container-chat',{
            y:'80vh',
            duration:1
        });
        gsap.to('.button-toggle',{
            opacity:0,
            duration:1
        });
        setTimeout(function(){
            $('.button-toggle').css('display','none');
        },1000);
        occupied = 0;
        clearInterval(time);
        $(".container-isiChat").html('');
    });
    var time;
    $(document).on('click','.btn',function(){
        gsap.to('.container-chat',{
                y:0,
                duration:1
            });
        $('.button-toggle').css('display','block');
        gsap.to('.button-toggle',{
                opacity:1,
                duration:1
            });
        occupied = 1;
        time = setInterval(updateChat,1000);
        id = $(this).attr('id');
    });
    var occupied = 0;
    function updateTabel() {
        if(occupied == 0){
            $.ajax({
                url: "/Cservice/updateTabelCS",
                type: "GET",
                data:{},
                success:function(response){
                    $(".tabelCS").html(response);
                }
            })
        }else{
            $('.tabelCS').html("");
        }
    }
    $(".container-inputChat").submit(function(e) {
            e.preventDefault();
            var input = $("#inputChat").val().trim();
            var jenis = $("#jenis").val();
            var sender = $("#namasender").val();
            var _token      = $("input[name=_token]").val();
            if (/\S/.test(input)) {
                $.ajax({
                    url: "/chatsend",
                    type: "POST",
                    data:{
                        pesan       : input,
                        jenis       : jenis,
                        namasender  : sender,
                        namacust    : id,
                        _token      : _token
                    },
                    success: function(response) {
                        console.log(response);
                        updateChat();
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

        var id  = 0;

        function updateChat() {
            $.ajax({
                url: "/getChat/"+id,
                type: "GET",
                data:{},
                success:function(response){
                    $(".container-isiChat").html(response);
                    formatChat();
                }
            })
        }
</script>
@endsection
