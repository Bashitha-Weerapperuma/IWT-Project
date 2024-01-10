<?php
		$servername = "localhost";
        $usernameDB = "root";
        $passwordDB = "";
        $dbname = "db";

        $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
    
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        // echo "Connected successfully";
    }


?>