<?php


$db_name = "sample";
$db_host = "localhost";
$db_user = "root";
$db_pwd  = "";
$string = "mysql:host=$db_host;dbname=$db_name";
try
{ 
    $dbh = new PDO("$string;user=$db_user;password=$db_pwd");

} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>