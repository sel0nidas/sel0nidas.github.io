<?php
include("../connect.php");
$tcno = $_GET['tcno'];
$girenid = $_SESSION['id'];
$sql = "SELECT * FROM users where girenid = '$girenid' ";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function	
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    $items[] = $row;
}

$items = array_reverse($items, true);

echo "<table style='width:100%;'>";

?>
<tr>
    <th>Tarih</th>
	<th>TC NO</th>
	<th>Durum</th>
</tr>
<?php
$check = false;
foreach($items as $item){
	
if($item['durum'] == "Beklemede" ){
    	echo "<tr style='background: yellow;'>";
	}
	if($item['durum'] == "tamamlandı" ){
		if($check == false){
		?>
		<!--
		<script>
			window.location = "home.php";	
		</script>
		-->
		<?php
		}
    	echo "<tr style='background: green;'>";
	}
	if($item['durum'] == "ret" ){
		if($check == false){
		?>
		<!--<script>
			window.location = "basvuru.php?err=true";
		</script>-->
		<?php
		}
    	echo "<tr style='background: red;'>";
	}
	$check = true;
	?>

<td><?php echo $item['tarih']; ?></td>

<td><?php echo $item['tcno']; ?></td>

<td><?php echo $item['durum']; ?></td>

<?php
	
    echo "</tr>";
    $items[] = $row;
}
?>