<?php
session_start();
include "config.php";

if(isset($_POST['login'])){

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user'";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)==1){

$row = mysqli_fetch_assoc($res);

if(password_verify($pass,$row['password'])){

$_SESSION['user']=$row['username'];
header("Location:index.php");
exit;

}else{
echo "Password gabim";
}

}else{
echo "User nuk ekziston";
}

}
?>