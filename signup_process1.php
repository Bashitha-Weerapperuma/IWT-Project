<?php
// echo "User with the same email adress  or mobile number already exsits";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$gen = $_POST["gen"];
// $gen1 = 11;

require "connection.php";

$rs = Database::search("SELECT*FROM `customer_account` WHERE `Email`='".$email."'");
if ($rs->num_rows>0) {
    echo "User with the same email adress  or mobile number already exsits";
} else {
    // $d = new DateTime();
    // $tz = new DateTimeZone("Asia/Colombo");
    // $d->setTimezone($tz);
    // $date = $d->format("Y-m-d H:i:s");

    Database::iud("INSERT INTO `customer_account` (`Email`,`First_Name`,`Last_Name`,`Address`,`Postal_Code`) 
    VALUES ('".$email."','".$fname."','".$lname."','".$password."','".$gen."')");
    echo "Account Create successful";
}

// if(empty($fname)){
//     echo "Please Enter Your First Name";
// }else if(strlen($fname)>50){
//     echo "First name must be less than 50 characters";
// }else if(empty($lname)){
//     echo "Please Enter Your Last Name";
// }else if(strlen($lname)>50){
//     echo "Last name must be less than 50 characters";
// }else if(empty($email)){
//     echo "Please enter your email";
// }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//     echo "Invalid Email Address";
// }else if(strlen($email)>100){
//     echo "Email must be less than 100 characters";
// }else if(empty($password)){
//     echo "Please enter your Password";
// }else if(strlen($password)<5 || strlen($password)>20){
//     echo "Password length must between 5 to 20";
// }else if(empty($mobile)){
//     echo "Please enter your mobile";
// }else if(strlen($mobile)!=10){
//     echo "Please enter 10 digit mobile number";
// }else if(preg_match("/07[0,1,2,4,5,6,7,8][0-9]+/",$mobile)==0){
//     echo "invalid mobile number";
// if(empty($email)){
//     echo "Please enter your email";
// }else{
   
// }
?>