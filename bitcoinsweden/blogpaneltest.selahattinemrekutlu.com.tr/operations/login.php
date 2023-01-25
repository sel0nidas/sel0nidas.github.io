
<?php 

include("../connect.php");

$email = addslashes(htmlspecialchars($_POST['email']));
$password = addslashes(htmlspecialchars($_POST['password']));
if(!filter_var($email, FILTER_VALIDATE_EMAIL) || !$password || !$email){
if( !$email ){ echo "E-Mail Kısmı Boş Kalamaz !!!<br>";}
if(!$password){ echo "Şifre Kısmı Boş Kalamaz!!!<br>";}
if($email && !filter_var($email, FILTER_VALIDATE_EMAIL)){ echo "E-mail'i düzgün formatta giriniz";}
}
else{
$sql = "SELECT * FROM userlist where email='$email' and password='$password' ";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function

while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    $id = $row['id'];
}
@$_SESSION['id'] = $id;

if($_SESSION['id']){
	?>
	<script type="text/javascript">
		window.location="basvuru.php";
	</script>
	<?php
}
else{
	?>
	<script type="text/javascript">
		window.location="login.php?err=true";
	</script>
	<?php
}
}
?>