// Function to validate the payment form
function validateForm() {
    var cardNumber = document.forms["paymentForm"]["cardNumber"].value;
    var holderName = document.forms["paymentForm"]["HolderName"].value;
    var month = document.forms["paymentForm"]["month"].value;
    var year = document.forms["paymentForm"]["year"].value;
    var cvv = document.forms["paymentForm"]["cvv"].value;

    // Check if any field is empty
    if (cardNumber == "" || holderName == "" || month == "" || year == "" || cvv == "") {
        alert("Please fill in all the fields.");
        return false;
    }

    // Check if card number is a valid 16-digit number
    var cardNumberPattern = /^\d{16}$/;
    if (!cardNumber.match(cardNumberPattern)) {
        alert("Please enter a valid 16-digit card number.");
        return false;
    }

    // Check if CVV is a valid 3-digit number
    var cvvPattern = /^\d{3}$/;
    if (!cvv.match(cvvPattern)) {
        alert("Please enter a valid 3-digit CVV.");
        return false;
    }

    // Validation successful
    alert("Payment successful!");
    return true;
}

// Attach form submission event listener
document.getElementById("paymentForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    validateForm(); // Validate the form
});