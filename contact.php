<?php
    require "config.php";
      
    if(isset($_POST['submit'])){
        $supportEmail = $_POST['supEmail'];
        $supportMsg = $_POST['supMsg'];

        $sql = "INSERT INTO support(supEmail, supMsg) VALUES ('$supportEmail', '$supportMsg')";

        if ($conn->query($sql)) {
            echo '<script>alert("Registration successful!");</script>';
        } 
        else {
            echo "Error: <br>" . $conn->$error;
        }

        $conn->close(); // Close the database connection
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> Help & Support | Eagle.lk </title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Eagle.lk</div>
                    <div class="text-two">Malabe</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">0716817389</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">beweerappeuma@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Contact & Support</div>
                <p>Our Support team is spread across the globe to give you answers...</p>

                <form id="contact-form" action="contact.php" method="post">
                    <div class="input-box1">
                        <input type="email" placeholder="Enter your Email" name="supEmail" required class="name">
                    </div>
                    <div class="input-box2">
                        <textarea placeholder="Type your message here...." name="supMsg" required class="name"></textarea>
                    </div>

                    <div class="input-box message-box">
                        <p>we respond quickly</p>
                    </div>

                    <div class="button">
                        <input onclick="sendNow()" type="submit" value="Send Now" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="contact.js"></script>
</body>
</html>
