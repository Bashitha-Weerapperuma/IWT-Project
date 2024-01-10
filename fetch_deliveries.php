<?php
// Include the database connection file (con.php)
require_once '_con.php';

// Fetch the delivery data from the database
$query = "SELECT * FROM deliveries";
$result = mysqli_query($conn, $query);

// Generate the HTML content for the delivery table
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['item_number'] . "</td>";
        echo "<td>" . $row['customer_details'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['unit_price'] . "</td>";
        echo "<td>" . $row['delivery_charges'] . "</td>";
        echo "<td>" . $row['sub_total'] . "</td>";
        echo "<td>";
        echo "<button type='button' class='btn btn-primary' onclick='populateUpdateModal(" . $row['id'] . ", \"" . $row['item_number'] . "\", \"" . $row['customer_details'] . "\", " . $row['quantity'] . ", " . $row['unit_price'] . ", " . $row['delivery_charges'] . ", " . $row['sub_total'] . ")'>Update</button>";
        echo "<button type='button' class='btn btn-danger'>Delete</button>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No deliveries found</td></tr>";
}

// Close the database connection
mysqli_close($conn);
?>
