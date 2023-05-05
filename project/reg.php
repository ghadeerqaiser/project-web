<?php
require_once('connection.php');
if(isset($_POST) & !empty($_POST)){
	$full_name = mysqli_real_escape_string($connection, $_POST['Full_Name']);
    $username = mysqli_real_escape_string($connection, $_POST['Username']);
	$email = mysqli_real_escape_string($connection, $_POST['Email']);
	$password = md5($_POST['password']);
	
   
	$sql = "INSERT INTO `registration` (full_name,username, email, password) VALUES ('$full_name','$username', '$email', '$password')";
	$result = mysqli_query($connection, $sql);
	if($result){
	 $smsg = "User Registration successfull";
	}else{
	 $fmsg = "User registration failed";
	}
   }
?>

