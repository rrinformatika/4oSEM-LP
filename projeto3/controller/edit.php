<?php
include('../model/db_connect.php');
$id = $_GET['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];

$stmt = $dbh->prepare("UPDATE user SET firstname='$firstname', lastname='$lastname', address='$address' where userid='$id'");
$stmt->execute();
header('location:../view/index.php');

?>