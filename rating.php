<?php
// echo "User with the same email adress  or mobile number already exsits";
$fname = $_POST["fname"];
$color = $_POST["col"];
$email = 31;
$lname = 1;


require "connection.php";
$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");
if (empty($fname)) {

    Database::iud("UPDATE `seller` SET `RATING`='".$color."' WHERE `SID`= '".$email."'");
    echo "Account Create successful";
}
else{
    Database::iud("UPDATE `seller` SET `RATING`='".$color."' WHERE `SID`= '".$email."'");
    echo "Account Create successful";
    Database::iud("INSERT INTO `feedback` (`User_ID`,`Date`,`FB_Massage`) 
    VALUES ('".$lname."','".$date."','".$fname."')");
    echo "Account Create successful";
}
?>