<?php
// echo "User with the same email adress  or mobile number already exsits";
$fname = $_POST["fname"];
$email = 31;
$lname = 1;


require "connection.php";
$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

 
    Database::iud("INSERT INTO `feedback` (`User_ID`,`Date`,`FB_Massage`) 
    VALUES ('".$lname."','".$date."','".$fname."')");
    echo "Account Create successful";

?>