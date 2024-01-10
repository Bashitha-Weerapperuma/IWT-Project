<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Eagle.LK</title>
    <link rel="stylesheet" href="customerprofile.css">
    <script src="https://kit.fontawesome.com/9e8c18e993.js" crossorigin="anonymous"></script>

</head>

<body>
    <table>
        <tr>
            <td class="logo1">
                <image src="logo.jpg" class="logo">
            </td>
            <td class="logo2">
                <h1 class="logo-text1">Eagle.lk</h1>
                <h4 class="logo-text2">--Delivering hapiness and needs--</h4>
            </td>

            <td class="logo3">
                <div class="buttons">
                    <div class="dropdown">
                        <button class="circle-button"><center><i class="far fa-user-circle" style="z-index: 9990; font-size:36px;color:white;" viewport></i></center></button>
                        <div class="dropdown-content">
                            <a href="profilesetting.html" target="iframe_a">Change Profile</a>
                            <a href="#">Logout</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="signin">User</button>
                        <div class="dropdown-content">
                            <a href="#" target="iframe_a">Change Profile</a>
                            <a href="#" onclick="signout();">Logout</a>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <hr class="horizontal_line">

    <ul class="header">
        <li><a href="myhome.html"><b>HOME</b></a></li>
        <li><a href="myaboutus.html"><b>ABOUT US</b></a></li>
        <li><a href="service.html"><b>SERVICE</b></a></li>
        <li><a href="myContactUs.html"><b>CONTACT US</b></a></li>
    </ul>

    <table border="0" class="fulltable">
        <tr>
            <td class="tdmain" style="width:20%; height:40px;">
                <center><br><a href="reportproblem.html" target="iframe_a"><button class="dashboad_btn">Report Problems</button></a></center><br></td>
            <td class="trr" rowspan="6" style="width:80%;">
                <iframe src="index.php" name="iframe_a" height="520px" width="100%" title="Iframe Example"></iframe>
            </td>
        </tr>
        <tr>
            <td class="tdmain" style="width:20%; height:40px;">
                <center><br><a href="payment.php" target="iframe_a"><button class="dashboad_btn">Payments</button></a></center><br></td>
            <td class="trr" rowspan="6" style="width:80%;">
                <iframe src="index.php" name="iframe_a" height="520px" width="100%" title="Iframe Example"></iframe>
            </td>
        </tr>
        <tr>
            <td class="tdmain" style="width:20%;">
                <center>
                    <br>
                    <div class="dropdown">
                        <button class="dashboad_btn">&nbsp;Orders&nbsp;</button>
                        <div class="dropdown-content">
                            <a href="checkmyorders.php" target="iframe_a">Check my Orders</a>
                            <a href="traking.html">Track my Orders</a>
                        </div>
                    </div>
                </center><br>
            </td>
        </tr>
        <tr>
            <td class="tdmain" style="width:20%;">
                <center><br><a href="rating.html" target="iframe_a"><button class="dashboad_btn">Feedback & Rating</button></a></center><br></td>
        </tr>
        <tr>
            <td>
                <p style="font-size: 56px; color:white;">S</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-size: 6px; color:white;">S</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-size: 2px; color:white;">S</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-size: 2px; color:white;">S</p>
            </td>
        </tr>

    </table>

    <footer class="site-footer">
        <div class="container">
            <table>
                <div class="row">
                    <tr>

                        <td class="td_1">
                            <p class="text-justify1"><b>EAGLE.LK – ARD DELIVERY SYSTEMS (PVT) LTD</b></p>
                            <p class="text-justify2">Eagle.lk is the Sri Lankan premier domestic courier service. We have the most extensive domestic delivery network with 28 facilities island-wide.</p>
                        </td>


                        <td class="td_2">
                            <h6>Contacts</h6><br>
                            <ul class="footer-links">
                                <li><a href="#">customerservice@egle.lk</a></li>
                                <br>
                                <li><a href="#">(+94) 011 225 7294</a></li>
                                <br>
                                <li><a href="#">NO 209/2,LIBERTY PLAZA,SRI LANKA</a></li>
                            </ul>
                        </td>



                        <td class="td_3">
                            <h6>Quick Links</h6>
                            <ul class="footer-links">
                                <li><a href="myhome.html">HOME</a></li>
                                <br>
                                <li><a href="myaboutus.html">ABOUT US</a></li>
                                <br>
                                <li><a href="service.html">SERVICES</a></li>
                                <br>
                                <li><a href="myContactUs.html">CONTACT US</a></li>
                                <br>
                            </ul>
                        </td>
                    </tr>
                </div>
            </table>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
<html>