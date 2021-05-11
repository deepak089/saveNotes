<?php
$user='root';
$server='localhost';
$password="";
$db="user";

$con=mysqli_connect($server,$user,$password,$db);
if(!$con){    
die("error".mysqli_connect_error());
}

?>
