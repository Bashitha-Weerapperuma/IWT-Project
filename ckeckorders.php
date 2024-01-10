<?php
require "connection.php";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Orders</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .status {
            text-align: center;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
            color: white;
        }

            .status.pending {
                background-color: #ff9800;
            }

            .status.processing {
                background-color: #2196f3;
            }

            .status.completed {
                background-color: #4caf50;
            }
    </style>
</head>
<body>
    <h1>Customer Orders</h1>

    <table>
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Order Date</th>
            <th>Status</th>
        </tr>
        <?php

$freq = Database::search("SELECT * FROM `orders`");
if ($freq->num_rows == 1) {
    $freqrow = $freq->fetch_assoc();
?>
        <tr>
            <td><?php echo $freqrow["Order_ID"]; ?></td>
            <?php
                        $imagerow = Database::search("SELECT * FROM `customer_account` WHERE `User_ID`='" . $freqrow["User_ID"] . "'");
                        $img = $imagerow->fetch_assoc();
                        ?>
            <td><?php echo $img["First_Name"]; ?></td>
            <td><?php echo $img["Address"]; ?></td>
            <td><?php echo $freqrow["Date"]; ?></td>
            <td><span class="status pending">Pending...</span></td>
        </tr>
        <?php
            } else {
            ?>
        <tr>
            <td>xzx</td>
            <td>xxx</td>
            <td>x</td>
            <td>aaa</td>
            <td><span class="status processing">xxx</span></td>
        </tr>
        <?php
            }
            ?>
    </table>
</body>
</html>