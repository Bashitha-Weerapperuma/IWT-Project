<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Eagle.LK</title>
    <link rel="stylesheet" href="profilesetting.css">
    <script src="https://kit.fontawesome.com/9e8c18e993.js" crossorigin="anonymous"></script>

    <style type="text/css">
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 18px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        
        input[type=submit] {
            background-color: #750000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #9d0650;
        }
        
        .containerco {
            border-radius: 17px;
            background-color: #f2f2f2;
            padding: 70px;
            margin: 26px;
        }
    </style>

</head>



<body>
    <center>
        <p class="topics">Profile Setting</p>
    </center>
    <table>
        <tr>
            <td style="width: 40%;">
                <center><img src="profilesetting.jpg" alt="IMG" style="width: 90%; height:650px;"></center>
            </td>
            <td style="width: 60%;">

                <div class="containerco">
                    <!-- <form action="/action_page.php"> -->
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="email">Your Email</label>
                    <input type="text" id="yemail" name="youremail" placeholder="Your Email..">

                    <label for="email">Mobile Number</label>
                    <input type="text" id="mobilenumber" name="mobilenumber" placeholder="Your Mobile Number..">

                    <label for="email">Address</label>
                    <input type="text" id="address" name="address" placeholder="Address..">

                    <label for="email">Postal Code:</label>
                    <input type="text" id="postal-code" name="postal-code" placeholder="Postal Code..">

                    <button type="submit" onclick="signup1();">Save Profile</button>
                    <!-- </form> -->
                </div>
            </td>
        </tr>
    </table>
    
</body>

</html>