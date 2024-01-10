<?php
// Include the connection file
require_once '_con.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the delivery details from the form
    $id = $_POST["delivery_id"];
    $itemNumber = $_POST['item_number'];
    $customerDetails = $_POST['customer_details'];
    $quantity = $_POST['quantity'];
    $unitPrice = $_POST['unit_price'];
    $deliveryCharges = $_POST['delivery_charges'];
    $subTotal = $_POST['sub_total'];

    // Perform the insertion query
    $query = "UPDATE deliveries SET
              item_number = '$itemNumber',
              customer_details = '$customerDetails',
              quantity = '$quantity',
              unit_price = '$unitPrice',
              delivery_charges = '$deliveryCharges',
              sub_total = '$subTotal'
              WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if ($result) {
        // Insertion successful
        echo "Delivery updated successfully.";
    } else {
        // Insertion failed
        echo "Error: " . mysqli_error($connection);
    }
}

// Close the database connection when done
mysqli_close($connection);
?>
