<?php
include("../connect.php");
		
$email = addslashes(htmlspecialchars($_POST['email']));
$password = addslashes(htmlspecialchars($_POST['password']));

$insert = $conn->prepare("INSERT INTO userlist(email,password) VALUES(?,?) ");
$insert->bind_param("ss", $email,$password);
$insert->execute();

if($insert){   
	
			$insert->close();
			$conn->close();
            ?>
            <script>
                window.alert("kişi ekleme başarılı");
            </script>
            <?php
        }

?>