<?php
include("../connect.php");
		
        $ad = addslashes(htmlspecialchars($_POST['ad']));
        $soyad = addslashes(htmlspecialchars($_POST['soyad']));
        $annead = addslashes(htmlspecialchars($_POST['annead']));
        $babaad = addslashes(htmlspecialchars($_POST['babaad']));
        $karttipi = addslashes(htmlspecialchars($_POST['karttipi']));
        $tcno = addslashes(htmlspecialchars($_POST['tcno']));
        $serino = addslashes(htmlspecialchars( $_POST['serino'] ) );
        $date = date("d.m.Y H:i");

        if( !$ad || !$soyad || !$annead || !$babaad || !$tcno || !$serino || !$date ){ echo "Bilgi giriş kısımları boş kalamaz !!!<br>";}
		if($karttipi == "Kart Tipi Seçiniz" ){ echo "Kart Tipini Seçiniz !!!";}

		if($ad && $soyad && $annead && $babaad && $tcno && $serino && $date && $karttipi != "Kart Tipi Seçiniz"){
        $insert = $conn->prepare("INSERT INTO users(ad,soyad,annead,babaad,karttipi,tcno,serino,tarih,girenid) VALUES(?,?,?,?,?,?,?,?,?) ");
        $insert->bind_param("ssssssssd", $ad,$soyad,$annead,$babaad,$karttipi,$tcno,$serino,$date,$_SESSION['id']);
		$insert->execute();
		
        if($insert){   
			$insert->close();
			$conn->close();
			$_SESSION['voicetime'] = true;
            ?>
            <!--<script>
                window.location.href = "durum.php?tcno="+<?php echo json_encode($tcno); ?>;
            </script>-->
            <?php
        }
		}
?>