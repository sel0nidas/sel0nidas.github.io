
<?php 

include("../connect.php");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function



echo "<br>";

while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    $items[] = $row;
}

$items = array_reverse($items, true);

echo "<table style='width:100%;'>";



?>
<tr>
    <th>ID</th>
    <th>Ad</th>
    <th>Soyad</th>
    <th>TC NO</th>
    <th>Anne Adı</th>
    <th>Baba Adı</th>
    <th>TC Kimlik Seri No</th>
    <th>Kart Tipi</th>
    <th>Tarih</th>
	<th>Durum</th>
</tr>
<?php

//echo $_SESSION['check']."---".sizeof($items); 

if($_SESSION['check'] && ($_SESSION['check'] < sizeof($items) )){
	
$_SESSION['check'] = sizeof($items);
echo '<audio controls autoplay>
  <source src="operations/horse.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>';
	?>
<script>
document.querySelector("audio").play();
</script>
<?php
}
else{
$_SESSION['check'] = sizeof($items);
}
// id='".$item['id']."' 
foreach($items as $item){
	
	if($item['durum'] == "Beklemede" ){
    	echo "<tr style='background: yellow;'>";
	}
	if($item['durum'] == "tamamlandı" ){
    	echo "<tr style='background: green;'>";
	}
	if($item['durum'] == "ret" ){
    	echo "<tr style='background: red;'>";
	}
    //foreach ($rownew as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        ?>
<td><?php echo $item['id']; ?></td>
<td><?php echo $item['ad']; ?></td>
<td><?php echo $item['soyad']; ?></td>
<td><?php echo $item['tcno']; ?></td>
<td><?php echo $item['annead']; ?></td>
<td><?php echo $item['babaad']; ?></td>
<td><?php echo $item['serino']; ?></td>
<td><?php echo $item['karttipi']; ?></td>
<td><?php echo $item['tarih']; ?></td>
<?php
	
	if($item['durum'] == "Beklemede" ){
        echo "<td style='display:flex; justify-content:space-around; background:yellow;'><a href='operations/onay.php?id=". $item['id'] . "'><i class='fas fa-check'></i></a>";
        echo "<a href='operations/ret.php?id=". $item['id'] . "'><i class='fas fa-times'></i></a></td>";
	}
	else if($item['durum'] == "tamamlandı"){
		echo "<td>tamamlandı</td>";
	}
	else if($item['durum'] == "ret"){
		echo "<td>ret</td>";
	}
    echo "</tr>";
    $items[] = $row;
}
echo "</table>";
?>