
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
	
	
include("connect.php");
$tcno = $_GET['tcno'];
?>
<div id="show"></div>

<script>
$(document).ready(function() {
    $('#show').load('operations/durum.php?tcno='+<?php echo json_encode($tcno); ?>);
        setInterval(function () {
            $('#show').load('operations/durum.php?tcno='+<?php echo json_encode($tcno); ?>);
        }, 2000, true);
    });
</script>
	
</body>
</html>