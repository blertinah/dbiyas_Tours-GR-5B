<?php
include "config/db.php";

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = $conn->prepare("SELECT * FROM users WHERE username=?");
$sql->bind_param("s",$username);
$sql->execute();

$result = $sql->get_result();

if($result->num_rows==1){

$user = $result->fetch_assoc();

if(password_verify($password,$user['password'])){

$_SESSION['user']=$user['username'];
$_SESSION['role']=$user['role'];

if($user['role']=="admin"){
 header("Location: dashboard.php");
}else{
 header("Location: index.php");
}

}else{
 echo "Password gabim";
}

}else{
 echo "User nuk ekziston";
}
}
?>