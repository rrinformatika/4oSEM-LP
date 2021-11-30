<?php
include('../model/db_connect.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];

$stmt = $dbh->prepare("INSERT INTO USER (FIRSTNAME, LASTNAME, ADDRESS) VALUES ('$firstname', '$lastname', '$address')");
$stmt->execute();

header('location:../view/index.php');

?>