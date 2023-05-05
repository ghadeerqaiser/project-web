<?php
require_once('connection.php');
if(isset($_POST) & !empty($_POST)){
	$choss_ticket_delivery_method= mysqli_real_escape_string($connection, $_POST['Choss_ticket_delivery_method']);
    $Full_name= mysqli_real_escape_string($connection, $_POST['Full_Name']);
	$email = mysqli_real_escape_string($connection, $_POST['Email']);
	$age= mysqli_real_escape_string($connection, $_POST['Age']);
    $mobile = mysqli_real_escape_string($connection, $_POST['Mobile']);
	
   
	$sql = "INSERT INTO `ticket` (choss_ticket_delivery_method,Full_name,email,age,mobile ) VALUES ('$choss_ticket_delivery_method','$Full_name', '$email', '$age',''$mobile')";
	$result = mysqli_query($connection, $sql);
	if($result){
	 $smsg = "User Registration successfull";
	}else{
	 $fmsg = "User registration failed";
	}
   }
?>
