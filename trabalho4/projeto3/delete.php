<?php
include('controller/db_connect.php');
$id=$_GET['id'];
$stmt = $dbh->prepare("DELETE FROM USER WHERE userid='$id'");
$stmt->execute();
header('location:index.php');
 
?>