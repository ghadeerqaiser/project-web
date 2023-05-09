<?php  
require_once('connection.php');
if(isset($_POST) & !empty($_POST)){
	$from_city = mysqli_real_escape_string($connection, $_POST['From_city']);
    $to_city= mysqli_real_escape_string($connection, $_POST['To_city']);
	$take_time = mysqli_real_escape_string($connection, $_POST['Take_time']);
	$reservation_number= mysqli_real_escape_string($connection, $_POST['Reservation_number']);
	
   
	$sql = "INSERT INTO `booking` (from_city,to_city,take_time,reservation_number ) VALUES ('$from_city','$to_city', '$take_time', '$reservation_number')";
	$result = mysqli_query($connection, $sql);
	if($result){
	 $smsg = "User Registration successfull";
	}else{
	 $fmsg = "User registration failed";
	}
   }
?>
