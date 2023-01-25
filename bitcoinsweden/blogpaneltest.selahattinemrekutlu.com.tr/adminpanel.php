
<html>
<head>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		
</head>
<body>
    <?php
$connurl = "connect.php";
include($connurl);

if(!$_SESSION['id']){
    ?>
    <script>
        window.location = "adminlogin.php";
    </script>
    <?php
}
?>
<!--<button id="logout_btn">Çıkış</button>-->

<div class="row" style="flex-direction:column; margin: 0 !important;">
    <h1>Kişi ekleme</h1>
    <form id="frm" class="col-md-4">
        <input class="form-control" type="email" name="email" placeholder="Email">
        <input class="form-control" type="password" name="password" placeholder="Password">
        <button class="form-control" id="adduserbtn">Kişiyi ekle</button>
        <div id="sonuc"></div>
    </form>

</div>
	
<div id="show"></div>
<script>
$("#logout_btn").click(function() {
    $.ajax({
        url: 'operations/logout.php',
        success: function(msg) {    
            window.location = "adminlogin.php";
        }
    });
});

    $(document).ready(function() {
    $('#show').load('operations/gettable.php');
        setInterval(function () {
            $('#show').load('operations/gettable.php')
        }, 2000, true);
    });
	setInterval(function(){
		if(document.querySelector("audio")){
			document.querySelector("audio").play();
		}
	}, 1000);
	$(function(){
		$("#adduserbtn").click(function(e){
			e.preventDefault();
			var veri= $("#frm").serialize();
			$.ajax({
				type:"post",
				url:"operations/signup.php",
				data:veri,
				success:function(sonuc){
					$("#sonuc").html((sonuc));
				}
			});
		});
	});
</script>

<?php

?>

<style>
    table{border-color: white;}
    th{
        border: 1px solid white;
        border-radius: 0.5rem;
        background-color:black;
        color:white;
    }
    tr{
        
    }
    tr,td,th{border-color:white;}
    td{
    }
</style>

</body>
</html>