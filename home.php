<?php
// Assuming you have established a database connection
require_once '_con.php'; 
// Fetching data from the deliveries table
$query = "SELECT * FROM deliveries";
$result = mysqli_query($connection, $query);
$deliveries = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Adding dummy data to the navbar
$navbarItems = array("Home", "About", "Contact");
if (isset($_GET['id'])) {
    $deliveryId = $_GET['id'];

    // Prepare the delete query
    $query = "DELETE FROM deliveries WHERE id = $deliveryId";

    // Execute the delete query
    if (mysqli_query($conn, $query)) {
        // Delete successful
        echo "Delivery deleted successfully";
    } else {
        // Delete failed
        echo "Error deleting delivery: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delivery Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Delivery Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDeliveryModal">
            Add Delivery
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Table -->
<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Item Number</th>
                <th>Customer Details</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Delivery Charges</th>
                <th>Sub Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deliveries as $delivery): ?>
                <tr>
                    <td><?php echo $delivery['item_number']; ?></td>
                    <td><?php echo $delivery['customer_details']; ?></td>
                    <td><?php echo $delivery['quantity']; ?></td>
                    <td><?php echo $delivery['unit_price']; ?></td>
                    <td><?php echo $delivery['delivery_charges']; ?></td>
                    <td><?php echo $delivery['sub_total']; ?></td>
                    <td>
                        <form method="POST">
                        <button type="button" class="btn btn-primary" onclick="populateUpdateModal(
                            <?php echo $delivery['id']; ?>,
                            '<?php echo $delivery['item_number']; ?>',
                            '<?php echo $delivery['customer_details']; ?>',
                            <?php echo $delivery['quantity']; ?>,
                            <?php echo $delivery['unit_price']; ?>,
                            <?php echo $delivery['delivery_charges']; ?>,
                            <?php echo $delivery['sub_total']; ?>
                            )">Update</button>
                            <button type='button' class='btn btn-danger' onclick="confirmDelete(<?php echo $delivery['id']; ?>,)">Delete</button>

                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
   
</div>

<!-- Footer -->
<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <span class="text-muted">Delivery Management &copy; <?php echo date('Y'); ?></span>
    </div>
</footer>

<!-- Update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Delivery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm" method="POST" action="update_delivery.php">
                    <input type="hidden" name="delivery_id" id="delivery_id" value="">
                    <div class="form-group">
                        <label for="update_item_number">Item Number</label>
                        <input type="text" class="form-control" id="update_item_number" name="item_number" required>
                    </div>
                    <div class="form-group">
                        <label for="update_customer_details">Customer Details</label>
                        <input type="text" class="form-control" id="update_customer_details" name="customer_details" required>
                    </div>
                    <div class="form-group">
                        <label for="update_quantity">Quantity</label>
                        <input type="number" class="form-control" id="update_quantity" name="quantity" required>
                    </div>
                    <div class="form-group">
                        <label for="update_unit_price">Unit Price</label>
                        <input type="number" step="0.01" class="form-control" id="update_unit_price" name="unit_price" required>
                    </div>
                    <div class="form-group">
                        <label for="update_delivery_charges">Delivery Charges</label>
                        <input type="number" step="0.01" class="form-control" id="update_delivery_charges" name="delivery_charges" required>
                    </div>
                    <div class="form-group">
                        <label for="update_sub_total">Sub Total</label>
                        <input type="number" step="0.01" class="form-control" id="update_sub_total" name="sub_total" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add Delivery Modal -->
<div class="modal fade" id="addDeliveryModal" tabindex="-1" role="dialog" aria-labelledby="addDeliveryModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addDeliveryModalLabel">Add Delivery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add delivery form -->
        <form id="addDeliveryForm">
          <div class="form-group">
            <label for="itemNumber">Item Number</label>
            <input type="text" class="form-control" id="itemNumber" name="itemNumber" required>
          </div>
          <div class="form-group">
            <label for="customerDetails">Customer Details</label>
            <input type="text" class="form-control" id="customerDetails" name="customerDetails" required>
          </div>
          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
          </div>
          <div class="form-group">
            <label for="unitPrice">Unit Price</label>
            <input type="number" class="form-control" id="unitPrice" name="unitPrice" required>
          </div>
          <div class="form-group">
            <label for="deliveryCharges">Delivery Charges</label>
            <input type="number" class="form-control" id="deliveryCharges" name="deliveryCharges" required>
          </div>
          <div class="form-group">
            <label for="subTotal">Sub Total</label>
            <input type="number" class="form-control" id="subTotal" name="subTotal" required>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>




<script>
    function populateUpdateModal(id, itemNumber, customerDetails, quantity, unitPrice, deliveryCharges, subTotal) {
        // Set the values of the input fields
        $("#delivery_id").val(id);
        $("#update_item_number").val(itemNumber);
        $("#update_customer_details").val(customerDetails);
        $("#update_quantity").val(quantity);
        $("#update_unit_price").val(unitPrice);
        $("#update_delivery_charges").val(deliveryCharges);
        $("#update_sub_total").val(subTotal);

        // Display the update modal
        $('#updateModal').modal('show');
    }

    jQuery(document).ready(function($) {
    // Handle form submission
    $("#updateForm").submit(function(e) {
        e.preventDefault();

        // Get the form data
        var formData = $(this).serialize();

        // Submit the form using AJAX
        jQuery.ajax({
            url: "update_delivery.php",
            type: "POST",
            data: formData,
            success: function(response) {
                // Handle the response
                console.log(response);
                // Hide the update modal
                $('#updateModal').modal('hide');
                // Refresh the delivery table
                location.reload();
            },
            error: function(xhr, status, error) {
                console.log(error); // Handle any error that occurs during the AJAX request
            }
        });
    });

    // Function to refresh the delivery table
   
});
function confirmDelete(deliveryId) {
    // Ask for confirmation
    if (confirm("Are you sure you want to delete this delivery?")) {
        // If confirmed, perform the AJAX request to delete the delivery
    
        jQuery.ajax({
            url: "delete_delivery.php?id=" + deliveryId,
            type: "GET",
            success: function(response) {
                // Handle the response
                console.log(response);
                // Refresh the delivery table
                location.reload();
            },
            error: function(xhr, status, error) {
                console.log(error); // Handle any error that occurs during the AJAX request
            }
        });
    }
}

</script>
<script>
jQuery(document).ready(function($) {
  // Handle form submission
  
  $("#addDeliveryForm").submit(function(e) {
    e.preventDefault();

    // Get the form data
    var formData = $(this).serialize();

    // Submit the form using AJAX
    $.ajax({
      url: "add_delivery.php", // Replace with the appropriate file name for adding delivery
      type: "POST",
      data: formData,
      success: function(response) {
        // Handle the response
        console.log(response);

        // Clear the form fields
        $("#addDeliveryForm")[0].reset();

        // Close the modal
        $("#addDeliveryModal").modal("hide");

        // Refresh the delivery table
        //refreshTable();
      },
      error: function(xhr, status, error) {
        console.log(error); // Handle any error that occurs during the AJAX request
      }
    });
  });
});
</script>
</body>
</html>
