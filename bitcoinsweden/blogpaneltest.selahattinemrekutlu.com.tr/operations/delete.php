<?php

$id = $_GET['id'];

include("../connect.php");

$delete = $conn->query("DELETE FROM users where id = '$id' ");

header("location: ../adminpanel.php");
?>