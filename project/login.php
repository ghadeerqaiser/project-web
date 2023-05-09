<?php
require_once('connection.php');
if(isset($_POST) & !empty($_POST)){
 $Username = mysqli_real_escape_string($connection, $_POST['Username']);
 $email = mysqli_real_escape_string($connection, $_POST['email']);
 $password = md5($_POST['password']);
 

 $sql = "INSERT INTO `login` (Username, email, password) VALUES ('$Username', '$email', '$password')";
 $result = mysqli_query($connection, $sql);
 if($result){
  $smsg = "User Registration successfull";
 }else{
  $fmsg = "User registration failed";
 }
}
