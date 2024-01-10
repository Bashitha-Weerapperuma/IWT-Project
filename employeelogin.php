<?php 

session_start();

$email = $_POST["femail"];
$password = $_POST["fpassword"];

$conn = new mysqli('localhost','root','','db');

// Sanitize the user input to prevent SQL injection
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);


// Construct the login query
$query = "SELECT * FROM `systemuser` WHERE  `Email` = '$email' AND `Password` = '$password'";

// Execute the query
$result = mysqli_query($conn, $query);


// Check if the query was successful
if ($result && mysqli_num_rows($result) == 1) {
	$userID = mysqli_fetch_assoc($result);

	header("Location: Employeedashboard.html");

}else{
	header("Location: customerlogin.html");
}

mysqli_close($conn);


?>