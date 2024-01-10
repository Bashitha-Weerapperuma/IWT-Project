<?php 
        require "config.php";
      
        if(isset($_POST['submit'])){
          
          $cardNumber = $_POST['cardNumber'];
          $HolderName = $_POST['HolderName'];
          $month = $_POST['month'];
          $year = $_POST['year']; 
          $cvv = $_POST['cvv'];
          
          
          
  
      $sql = "INSERT INTO payment(cardNum,CardHolderName,month,year,cvv) VALUES ('$cardNumber','$HolderName','$month','$year ','$cvv')";
  
      if ($conn->query($sql)) {
          //use alert box
          echo '<script>alert("Registration successful!");</script>';
      } 
      else {
          echo "Error: <br>" . $conn-> $error;
      }
  
      // Close the database connection
      
    }
?>


    

    
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Help & Support  | Eagle.lk </title>
    <link rel="stylesheet" href="payment.css">
    
    
   </head>

   <body>
    <div class="wrapper">
        <h2>Payment </h2>
        <form  id="paymentForm"  action ="payment.php" method="POST">
    
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" name="cardNumber" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card holder name" name="HolderName" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>

            <div class="input-group">

                
                <div class="input-box">
                    <select name ="month">
                        <option>01 Jan</option>
                        <option>02 Feb</option>
                        <option>03 Mar</option>
                        <option>04 Apr</option>
                        <option>05 May</option>
                        <option>06 Jun</option>
                        <option>07 Jul</option>
                        <option>08 Aug</option>
                        <option>09 Sep</option>
                        <option>10 Oct</option>
                        <option>11 Nov</option>
                        <option>12 Dec</option>
                    </select>
                    
                    <select name ="year">
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                    </select>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Card CVV" required class="name" name="cvv">
                    <i class="fa fa-user icon"></i>
                </div>


            </div>

            <div class="col-50">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                
                    <img src="paymentType.png" style="float:right" width="250" height="48">
            </div>

            <div class="input-group">

                <div class="input-box">
                    <button type="submit" name ="submit">PAY NOW</button>
                </div>

                <div class="input-box">
                    <button type="submit">Cancal</button>
                </div>

            </div>

            
    
        </form>
    </div>
    <script src="payment.js"></script>
    </body>
</html>  





