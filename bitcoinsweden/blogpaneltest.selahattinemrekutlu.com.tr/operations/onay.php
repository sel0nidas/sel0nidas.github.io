<?php

$id = $_GET['id'];

include("../connect.php");

$delete = $conn->query("UPDATE users SET durum='tamamland─▒' where id = '$id' ");

header("location: ../adminpanel.php");
?>