<?php
    require "config.php";

    if (isset($_GET['id'])) {
        $supportId = $_GET['id'];

        // Retrieve the support message with the given ID from the database
        $sql = "SELECT * FROM support WHERE supportId = '$supportId'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $supportEmail = $row['supEmail'];
            $supportMsg = $row['supMsg'];
        } else {
            echo "Support message not found.";
            exit();
        }
    } else {
        echo "Support message ID not provided.";
        exit();
    }

    if (isset($_POST['submit'])) {
        $supportEmail = $_POST['supEmail'];
        $supportMsg = $_POST['supMsg'];

        // Update the support message in the database
        $sql = "UPDATE support SET supEmail = '$supportEmail', supMsg = '$supportMsg' WHERE supportId = '$supportId'";

        if ($conn->query($sql)) {
            echo '<script>alert("Support message updated successfully!");</script>';
        } else {
            echo "Error updating support message: " . $conn->$error;
        }

        $conn->close(); // Close the database connection

        // Redirect back to the display.php page
        header("Location: display.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Update Support Message | Eagle.lk</title>
    <link rel="stylesheet" href="update.css">
    <script src="update.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Update Support Message</h1>
    <form id="update-form" action="update.php?id=<?php echo $supportId; ?>" method="post">
        <div class="input-box">
            <label for="supEmail">Email</label>
            <input type="email" id="supEmail" name="supEmail" value="<?php echo $supportEmail; ?>" required>
        </div>
        <div class="input-box">
            <label for="supMsg">Message</label>
            <textarea id="supMsg" name="supMsg" required><?php echo $supportMsg; ?></textarea>
        </div>
        <div class="button">
            <input type="submit" onclick="updateNow()" value="Update" name="submit">
        </div>
    </form>
</body>
</html>
