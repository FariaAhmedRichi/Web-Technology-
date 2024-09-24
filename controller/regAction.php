<?php
 
require '../model/db.php';
 
if(isset($_REQUEST['submit'])){
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$password=$_REQUEST['password'];
$re_password=$_REQUEST['re_password'];
$user_type=$_REQUEST['user_type'];

if($password==$re_password){
    $query="INSERT INTO sign_up VALUES('$name','$email','$gender','$dob','$password','$re_password','$user_type')";
    mysqli_query($conn,$query);
    echo "Registration Successful!";
}

}
?>