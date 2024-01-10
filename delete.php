
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php
    require "config.php";
    
    if(isset($_GET['id'])){
        $supportID = $_GET['id'];
        
        $sql = "DELETE FROM support WHERE supportID = $supportID";
        
        if ($conn->query($sql)) {
            echo '<script>alert("Support message deleted successfully!");</script>';
        } else {
            echo "Error deleting support message: " . $conn->$error;
        }
    }
    
    $conn->close(); // Close the database connection
    header("Location: display.php"); // Redirect to the display page
    exit;
?>
