<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #txtstatus{
            font-size: 30pt;
            text-align: center;
            padding-top: 10%;
            color: #07BDE0;
            font-weight: bold;
        }
        #txtstatus1{
            font-size: 17pt;
            color: #131313;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        if (isset($datasession)) {
            foreach ($datasession as $key => $value) {
                $data = json_decode($value,false);
                $status = $data->status_message;
                $id     = $data->order_id;
                $status_transaksi = $data->transaction_status;
            }
        }
    ?>
    <div class="container">
        <div class="background-border-halaman-payment">
            <?php
                echo "<p id='txtstatus'>$status</p>";
                echo "<p id='txtstatus1'>Status Pemesanan :</p>";
            ?>
            <input type="text" name="txtsimpan" id="" value="<?php echo $id;?>">
            <a href="{{URL::to('deleteSessionorder')}}"><button id="buttonback" disabled style="margin-left: 38%; width: 20%; height: 5vh; border: 3px solid #07BDE0; background-color: none; border-radius: 2em; font-weight: bold;">Back</button></a>
        </div>
    </div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script>
    var timer = setInterval(() => {
        checkStatus();
    }, 5000);
    function checkStatus(){
        var id = $("input[name=txtsimpan]").val();
        //alert(id);
        $.ajax({
            url:"https://cors-anywhere.herokuapp.com/https://api.sandbox.midtrans.com/v2/"+id+"/status",
            type: 'GET',
            headers: {
                "Accept" : "application/json",
                "Content-Type": "application/json",
                "Authorization": "Basic U0ItTWlkLXNlcnZlci1uaGZrUjJlN1JRWVBCeHV6SkxYVElZR1I="
            },
            success : function(response) {
                var data = JSON.stringify(response);
                var dataparse = JSON.parse(data);
                console.log(data);
                if (dataparse["transaction_status"] == "settlement") {
                    $("#txtstatus1").text("Status Pemesanan : Berhasil");
                    //simpanData();
                    $("#buttonback").animate({opacity: '1'},{duration: 1000});
                    $("#buttonback").attr("disabled", false);
                    clearInterval(timer);
                }
                if (dataparse["transaction_status"] == "pending") {
                    $("#txtstatus1").text("Status Pemesanan : pending");
                }
            },
            error:function(response){
                alert("error :" +response);
            }
        });
    }

</script>
