<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Chat</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    @php
        $user = session()->get('userLogin');
    @endphp
    <form id="ajax-form-input-chat">
        @csrf
        <input type="text" name="txtpesan" id="">
        <input type="text" name="txtid" id="" value="{{$user->id}}">
        <input type="text" name="txtsender" id="" value="{{$user->nama}}">
        <input type="submit" value="Send" name="btnsend">
    </form>
</body>
</html>
<script>
    $("#ajax-form-input-chat").submit(function(e) {
        e.preventDefault();
        var pesan       = $("input[name=txtpesan]").val();
        var id_cust     = $("input[name=txtid]").val();
        var namasender  = $("input[name=txtsender]").val();
        var _token      = $("input[name=_token]").val();
        $.ajax({
            url: "/chatsend",
            type: "POST",
            data: {
                pesan       : pesan,
                id_cust     : id_cust,
                namasender  : namasender,
                _token      : _token
            },
            success: function(response) {
                console.log(response);
            },
            error:function(data){
                console.log((data.responseJSON.errors));
            }
        });
    });
</script>
