<?php
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
include("../connect.php");

		

        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars(md5($_POST['password']));
		$sorgu = $conn->prepare("SELECT id FROM admin where email=? and password=? ");
		$sorgu->bind_param("ss", $email, $password);
		$sorgu->execute();
		$sorgu->bind_result($id);
		$sorgu->fetch();
		echo $id;
		
        if((!$email || !$password) ){ echo "E-Mail, Password Boş Kalamaz !!!";}
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ echo "E-mail'i düzgün giriniz";}
        
		$_SESSION['id']=$id;
        if($_SESSION['id']){
            ?>
            <script>
                window.location = "adminpanel.php";
            </script>
            <?php
        }
		else 
			echo "HATALI GİRİŞ";
        

?>