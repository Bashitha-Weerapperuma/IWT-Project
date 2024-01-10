<?php
require "connection.php";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Check My Orders</title>
    <link rel="stylesheet" type="text/css" href="checkmyorders.css">
</head>
<body>
    <h1>Check My Orders</h1>

    <div id="orders-container">
    <?php

$freq = Database::search("SELECT * FROM `orders`");
if ($freq->num_rows == 1) {
    $freqrow = $freq->fetch_assoc();
?>
        <div class="order">
            <h2>Order #<?php echo $freqrow["Order_ID"]; ?></h2>
            <p>Status: In Transit</p>
            <p>Estimated Delivery: <?php echo $freqrow["Date"]; ?></p>
            <?php
                        $imagerow = Database::search("SELECT * FROM `tracking` WHERE `Order_ID`='" . $freqrow["Order_ID"] . "'");
                        $img = $imagerow->fetch_assoc();
                        ?>
            <p>Tracking Number: <?php echo $img["Tracking_Number"]; ?></p>
        </div>
        <?php
            } else {
            ?>
        <div class="order">
            <h2>Order #xx</h2>
            <p>Status: xxx</p>
            <p>Delivery Date: xxx</p>
            <p>Tracking Number: xx</p>
        </div>
        <?php
            }
            ?>
    </div>
</body>
</html>