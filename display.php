<?php
    require "config.php";

    // Retrieve all support messages from the database

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Support Messages | Eagle.lk</title>
    <link rel="stylesheet" href="display.css">
    <script src="display.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Support Messages Details</h1>
    <table>
        <tr>
            <th class="support-id">Support ID</th>
            <th class="email">Email</th>
            <th class="message">Message</th>
            <th class="action">Action</th>
        </tr>
        <?php
            $sql = "SELECT * FROM support";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $supportId = $row['supportId'];
                    $supportEmail = $row['supEmail'];
                    $supportMsg = $row['supMsg'];

                    echo "<tr>";
                    echo "<td class='support-id'>$supportId</td>";
                    echo "<td class='email'>$supportEmail</td>";
                    echo "<td class='message'>$supportMsg</td>";
                    echo "<td class='action'><a href='delete.php?id=$supportId' onclick='deleteNow()' class='delete-link'>Delete</a> | <a href='update.php?id=$supportId' class='update-link'>Update</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No support messages found</td></tr>";
            }

            $conn->close(); // Close the database connection
        ?>
    </table>
</body>
</html>
