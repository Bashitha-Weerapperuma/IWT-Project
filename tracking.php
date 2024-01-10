<?php
$fname = $_POST["fname"];


require "connection.php";

$imagerow = Database::search("SELECT * FROM `tracking` WHERE `Tracking_Number`='" . $fname . "'");
$img = $imagerow->fetch_assoc();
echo  "tacking place is- ";
echo  $img["Place"];
?>