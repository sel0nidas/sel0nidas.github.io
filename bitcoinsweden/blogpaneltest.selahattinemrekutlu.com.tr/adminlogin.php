<?php

?>
<html>
<head>
    
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

<form id="frm" style="display:flex; flex-direction:column; width:400px; height:100%; justify-content:center; margin:auto;">
	<h1>Admin Login</h1>
<input type="email" name="email" placeholder="email">
<input type="password" name="password" placeholder="Password">

<div id="sonuc"></div>

<button id="btn">Giriş Yap</button>

</form>

<script type="text/javascript">
	$(function(){
		$("#btn").click(function(e){
			e.preventDefault();
			var veri= $("#frm").serialize();
			$.ajax({
				type:"post",
				url:"operations/adminlogin.php",
				data:veri,
				success:function(sonuc){
					$("#sonuc").html((sonuc));
				}
			});
		});
	});
</script>

</body>
</html>
