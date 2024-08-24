<!DOCTYPE html>
<?php
include "admin/database_connection.php";
require_once 'validate_customer.php';
require 'name_customer.php';

?>

<html lang="en">
<head>
	<title>Code4u - Budget Vacation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/remove_spin_number.css">
</head>
<body>
	<div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <header class="header-area">
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <nav class="classy-navbar justify-content-between" id="uzaNav">
                    <a class="nav-brand" href="index.php" target="_blank"><img src="img/icon_label.png" height="160px" width="260px"></a>
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <div class="classy-menu">
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <div class="classynav">
                            <ul id="nav">
                                <li class="current-item"><a style="cursor: default;">Manage</a></li>
                                <li><a href="#">Place</a>
                                    <ul class="dropdown">
                                        <li><a href="kuala_lumpur.php" target="_blank">- Kuala Lumpur</a></li>
                                        <li><a href="melaka.php" target="_blank">- Melaka</a></li>
                                        <li><a href="pulau_pinang.php" target="_blank">- Pulau Pinang</a></li>
                                    </ul>
                                </li>
                                <li><a target="_blank" href="index.php#service">Service</a></li>
                                <li><a target="_blank" href="index.php#package">Package</a></li>
                                <li><a target="_blank" href="index.php#developer">Developer</a></li>
                                <li><a target="_blank" href="index.php#feedback">Feedback</a>
                                </li>
                            </ul>
                            <div class="get-a-quote ml-4 mr-3" data-toggle="modal" data-target="#searchModal">
                                <a href="print.php" class="btn uza-btn">Print Receipt</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="limiter">
      <div class="container-login100" style="display: block; padding-top: 100px">
        <center>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #2ecc71; width: 28px; color: #fff; font-weight: 600">1</div>
            <div style="background-color: #2ecc71; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #2ecc71; width: 28px; color: #fff; font-weight: 600">2</div>
            <div style="background-color: #2ecc71; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #2ecc71; width: 28px; color: #fff; font-weight: 600">3</div>
            <div style="background-color: #2ecc71; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #2ecc71; width: 28px; color: #fff; font-weight: 600">4</div>
            <div style="background-color: #2ecc71; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #00b894; width: 28px; color: #fff; font-weight: 600">5</div><br>

            <div style="width: 710px;">
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left;">Customize Budgets</div>
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 42px;">Pick Package</div>
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 50px;">Manage Planner</div>
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 48px;">Confirmation</div>
            <div style="display: inline-block; font-weight: 600; color: #00b894; margin-top: 5px; margin-bottom: 5px; margin-left: 30px;">Payment</div>
            </div>
        </center>
        <div style="margin-right: auto; margin-left: auto; padding-top: 20px;" class="wrap-login100-2">
            <div style="margin-top: 30px" class="uza-contact-form mb-10">
                    <div class="row">
                        <img style="height: 130px; width: 130px; margin-left: auto; margin-right: auto;" src="img/success.png">

                        <div style="text-align: center;" class="col-lg-12"><br><br>
                            <h6 style="color: gray; text-transform: capitalize;">Hi <?php echo $fetch['customer_name'] ?>, Congratulations !</h6>
                            <h2 style="color: #00b894; font-weight: 400"> Payment Successfull !</h2>
                            <h4 style="color: gray; font-weight: 400">Total Paid: RM<?php echo $fetch['bill'];?>.00</h4><br>
                        </div>
                        <div class="col-lg-12">
                            <div style="margin-bottom: 20px" class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" onclick="window.location.href = 'process_destroy_customer.php';">Complete</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>
<script src="js/default-assets/active.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/uza.bundle.js"></script>
<script src="js/default-assets/active.js"></script>

</body>
</html>