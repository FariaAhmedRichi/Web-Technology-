<?php 
session_start();

$hostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname = "auth";

$conn=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_errno()){
    echo"failed to connect!";
    exit();
}


?>