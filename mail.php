<?php
//get data from form  
$mentor = $_POST['color'];
$num = $_POST['ph.no'];
$stumail= $_POST['email'];
$message= $_POST['message'];
$to = "$stumail";
$subject = "Mail From mentor";
$txt ="Name = ". $name . "\r\n  Phone No. = " . $num . "\r\n Message =" . $message;
mail($to,$subject,$txt,$headers);
or die("Error");
echo"message sent";
?>
