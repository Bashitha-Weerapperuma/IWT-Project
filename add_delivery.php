<?php
// Include the database connection file (con.php)
require_once '_con.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $itemNumber = $_POST['itemNumber'];
  $customerDetails = $_POST['customerDetails'];
  $quantity = $_POST['quantity'];
  $unitPrice = $_POST['unitPrice'];
  $deliveryCharges = $_POST['deliveryCharges'];
  $subTotal = $_POST['subTotal'];

  // Prepare the SQL statement
  $query = "INSERT INTO deliveries (item_number, customer_details, quantity, unit_price, delivery_charges, sub_total)
            VALUES (?, ?, ?, ?, ?, ?)";
  $conn = $connection;
  // Prepare and bind the parameters
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ssiddi", $itemNumber, $customerDetails, $quantity, $unitPrice, $deliveryCharges, $subTotal);

  // Execute the statement
  if ($stmt->execute()) {
    // Success! Return a success message or any other desired response
    echo "Delivery added successfully!";
  } else {
    // Error! Return an error message or handle the error accordingly
    echo "Failed to add delivery: " . $stmt->error;
  }

  // Close the statement
  $stmt->close();
}

// Close the database connection
$conn->close();
?>
