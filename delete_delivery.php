<?php
// Include the database connection file (con.php)
require_once '_con.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Check if the delivery ID is provided
if (isset($_GET['id'])) {
    $deliveryId = $_GET['id'];
    echo($deliveryId);
    // Prepare the delete query
    $query = "DELETE FROM deliveries WHERE id = $deliveryId";

    // Execute the delete query
    if (mysqli_query($connection, $query)) {
        // Delete successful
        echo "Delivery deleted successfully";
    } else {
        // Delete failed
        echo "Error deleting delivery: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($connection);
?>
