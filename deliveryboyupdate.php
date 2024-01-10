<?php
// echo "User with the same email adress  or mobile number already exsits";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
// $gen1 = 11;

require "connection.php";

    Database::iud("INSERT INTO `delivery_boy` (`DB_ID`,`DB_First_Name`,`DB_Contact_Number`,`Address`) 
    VALUES ('".$fname."','".$lname."','".$email."','".$password."')");
    echo "Account Create successful";

?>