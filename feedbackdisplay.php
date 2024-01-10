<?php
require "connection.php";


?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Feedback Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Customer Feedback</h1>
        <table>

            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Feedback</th>
                    <th>Date</th>
                </tr>
            </thead>
            <?php

            $freq = Database::search("SELECT * FROM `feedback`");
            if ($freq->num_rows == 1) {
                $freqrow = $freq->fetch_assoc();
            ?>
                <tbody>
                    <tr>
                        <?php
                        $imagerow = Database::search("SELECT * FROM `customer_account` WHERE `User_ID`='" . $freqrow["User_ID"] . "'");
                        $img = $imagerow->fetch_assoc();
                        ?>
                        <td><?php echo $img["First_Name"]; ?></td>
                        <td><?php echo $freqrow["Email"]; ?></td>
                        <td><?php echo $freqrow["FB_Massage"]; ?></td>
                        <td><?php echo $freqrow["Date"]; ?></td>
                    </tr>
                   
                    <!-- Add more feedback rows here -->
                </tbody>
            <?php
            } else {
            ?>
                <tbody>
                    <tr>
                        <td>xx</td>
                        <td>jsdsd</td>
                        <td>dsd.</td>
                        <td>2ds</td>
                    </tr>
                    
                    <!-- Add more feedback rows here -->
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>