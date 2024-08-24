<!DOCTYPE html>
<?php
include "admin/database_connection.php";
require_once 'validate_customer.php';
require 'name_customer.php';

if(ISSET($_POST['pay'])){
    $bill = $_POST['bill'];
    $revanue = mysqli_real_escape_string($conn, $_POST['revanue']);

    mysqli_query($conn, "UPDATE `customer` SET `bill` = '$bill', `revanue` = '$revanue' WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
    header("location:melaka_payment.php");
  }
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

    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div style="margin-left: auto; margin-right: auto;" class="modal-dialog modal-dialog-centered" role="document">
                <div style="border-radius: 10px" class="modal-content">
                    <div class="modal-body">
                        <h3 style="text-align: center;">Customer Details</h3>
                        <p style="text-align: center; font-style: italic;">Welcome! Here is Your <b>Booking</b> Details</p><hr>
                        <?php
                        $query = $conn->query("SELECT * FROM `customer` NATURAL JOIN `package` WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                            ?>
                            <h6 style=" font-weight: 400">Booking Code: <span style="text-transform: capitalize; color: #1382f7; font-size: 23px;  font-weight: 600"><?php echo $fetch['customer_id'] ?></span> | <span style="color: #1382f7; font-size: 23px;  font-weight: 400"><?php echo $fetch['package_name'] ?></span></h6>
                            <br>
                            <?php
                        }
                        ?>
                        <?php

                        include "name_customer.php";
                        ?>
                        <h6 style=" font-weight: 400">Name <span style="text-transform: capitalize; color: #1382f7; font-size: 15px;  font-weight: 600; margin-left: 110px"><?php echo $fetch['customer_name'] ?></span></h6>
                        <h6 style=" font-weight: 400">Phone number <span style="text-transform: capitalize; color: #1382f7; font-size: 15px;  font-weight: 600; margin-left: 46px"><?php echo $fetch['customer_phone'] ?></span></h6>
                        <h6 style=" font-weight: 400">Departure from <span style="text-transform: capitalize; color: #1382f7; font-size: 15px;  font-weight: 600; margin-left: 44px"><?php echo $fetch['state_from'] ?></span></h6>
                        <h6 style=" font-weight: 400">Destination to <span style="text-transform: capitalize; color: #1382f7; font-size: 15px;  font-weight: 600; margin-left: 53px"><?php echo $fetch['state_to'] ?></span></h6>
                        <h6 style=" font-weight: 400">Date go <span style="text-transform: capitalize; color: #1382f7; font-size: 15px;  font-weight: 600; margin-left: 96px"><?php echo date('d/m/Y', strtotime($fetch['date_from'])); ?> <font style="color: #000">-</font> <?php $date_until = $fetch['date_from']; echo date('d/m/Y', strtotime($date_until.'+ 4 days')); ?></span></h6>
                        <h6 style=" font-weight: 400">Budget <span style="text-transform: capitalize; color: #1382f7; font-size: 15px;  font-weight: 600; margin-left: 100px">RM <?php echo $fetch['budget'] ?></span></h6>
                        <h6 style=" font-weight: 400">Optional place <span style="text-transform: capitalize; color: #1382f7; font-size: 15px;  font-weight: 600; margin-left: 49px"><?php echo $fetch['optional_place'] ?></span></h6>

                        <div class="col-lg-12">
                            <div style="margin-top: 20px" class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" data-dismiss="modal">Got It!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <a href="#" class="btn uza-btn">See Details</a>
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
            <div style="background-color: #c0c0c0; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #c0c0c0; width: 28px; color: #fff; font-weight: 600">5</div><br>

            <div style="width: 710px;">
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left;">Customize Budgets</div>
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 42px;">Pick Package</div>
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 50px;">Manage Planner</div>
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 48px;">Confirmation</div>
            <div style="display: inline-block; font-weight: 600; color: #c0c0c0; margin-top: 5px; margin-bottom: 5px; margin-left: 30px;">Payment</div>
            </div>
        </center>
            <div style="margin-right: auto; margin-left: auto; width: 60%; padding-top: 20px" class="wrap-login100-2">
                <h3 style="color: gray; text-transform: capitalize; font-weight: 400"><b style="color: #303030">CONFIRMATION</b> | <font style="color: #1382f7; font-size: 18px; font-weight: 400"><?php echo $fetch['state_from'] ?> - <?php echo $fetch['state_to'] ?></font> </h3>
                <hr>
                <h3 style="color: gray; text-transform: capitalize; font-weight: 300">DAY <b style="color: #303030">1</b></h3>
                <?php

                $query = $conn->query("SELECT * FROM `customer_planner` WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
                $fetch = $query->fetch_array();
                ?>
                <h6 style="color: gray">08:00am – 09:00am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a0800_0900']; ?></font></h6><hr>
                <h6 style="color: gray">09:30am – 11:30am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a0930_1130']; ?></font></h6><hr>
                <h6 style="color: gray">12:00pm – 01:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a1200_1300']; ?></font></h6><hr>
                <h6 style="color: gray">01:30pm – 03:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a1330_1530']; ?></font></h6><hr>
                <h6 style="color: gray">04:00pm – 06:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a1600_1800']; ?></font></h6><hr>
                <h6 style="color: gray">06:30pm – 08:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a1830_2030']; ?></font></h6><hr>
                <h6 style="color: gray">09.00pm – 10.00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a2100_2200']; ?></font></h6><hr>

                <h3 style="color: gray; text-transform: capitalize; font-weight: 300;">DAY <b style="color: #303030">2</b></h3>
                <?php

                $query = $conn->query("SELECT * FROM `customer_planner2` WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
                $fetch = $query->fetch_array();
                ?>
                <h6 style="color: gray">08:00am – 09:00am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b0800_0900']; ?></font></h6><hr>
                <h6 style="color: gray">09:30am – 11:30am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b0930_1130']; ?></font></h6><hr>
                <h6 style="color: gray">12:00pm – 01:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b1200_1300']; ?></font></h6><hr>
                <h6 style="color: gray">01:30pm – 03:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b1330_1530']; ?></font></h6><hr>
                <h6 style="color: gray">04:00pm – 06:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b1600_1800']; ?></font></h6><hr>
                <h6 style="color: gray">06:30pm – 08:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b1830_2030']; ?></font></h6><hr>
                <h6 style="color: gray">09.00pm – 10.00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b2100_2200']; ?></font></h6><hr>

                <h3 style="color: gray; text-transform: capitalize; font-weight: 300">DAY <b style="color: #303030">3</b></h3>
                <?php

                $query = $conn->query("SELECT * FROM `customer_planner3` WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
                $fetch = $query->fetch_array();
                ?>
                <h6 style="color: gray">08:00am – 09:00am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c0800_0900']; ?></font></h6><hr>
                <h6 style="color: gray">09:30am – 11:30am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c0930_1130']; ?></font></h6><hr>
                <h6 style="color: gray">12:00pm – 01:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c1200_1300']; ?></font></h6><hr>
                <h6 style="color: gray">01:30pm – 03:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c1330_1530']; ?></font></h6><hr>
                <h6 style="color: gray">04:00pm – 06:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c1600_1800']; ?></font></h6><hr>
                <h6 style="color: gray">06:30pm – 08:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c1830_2030']; ?></font></h6><hr>
                <h6 style="color: gray">09.00pm – 10.00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c2100_2200']; ?></font></h6><hr>

                <h3 style="color: gray; text-transform: capitalize; font-weight: 300">DAY <b style="color: #303030">4</b></h3>
                <?php

                $query = $conn->query("SELECT * FROM `customer_planner4` WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
                $fetch = $query->fetch_array();
                ?>
                <h6 style="color: gray">08:00am – 09:00am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d0800_0900']; ?></font></h6><hr>
                <h6 style="color: gray">09:30am – 11:30am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d0930_1130']; ?></font></h6><hr>
                <h6 style="color: gray">12:00pm – 01:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d1200_1300']; ?></font></h6><hr>
                <h6 style="color: gray">01:30pm – 03:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d1330_1530']; ?></font></h6><hr>
                <h6 style="color: gray">04:00pm – 06:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d1600_1800']; ?></font></h6><hr>
                <h6 style="color: gray">06:30pm – 08:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d1830_2030']; ?></font></h6><hr>
                <h6 style="color: gray">09.00pm – 10.00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d2100_2200']; ?></font></h6><hr><br>

                <form method="POST">
                    <?php
                    $query = $conn->query("SELECT * FROM `customer` WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
                    $fetch = $query->fetch_array();
                    ?>
                    <h6 style="color: #303030">Services Tax<font style="color: #303030; font-weight: 600; float: right; color: #303030"> <?php echo $fetch['tax_current']; ?> %</font></h6>
                    <h6>Package Price<font style="color: #303030; font-weight: 600; float: right;">RM<?php echo $fetch['package_price']; ?></font></h6>

                    <h4>Total Amount<font style="color: red; font-weight: 600; float: right;">RM<?php

                    $package_price = $fetch['package_price'];
                    $tax = $fetch['tax_current'];

                    $percentage = ($package_price * $tax) / 100;
                    $total = $percentage + $package_price;

                    echo $total;

                    ?>.00</font></h4>

                    <input hidden="" type="number" name="bill" value="<?php $package_price = $fetch['package_price'];
                    $tax = $fetch['tax_current'];
                    $percentage = ($package_price * $tax) / 100;
                    $total = $percentage + $package_price;
                    echo $total;

                    ?>">

                    <input hidden="" type="number" name="revanue" value="<?php $package_price = $fetch['package_price'];
                    $tax = $fetch['tax_current'];
                    $revanue = ($package_price * $tax) / 100;
                    echo $revanue;

                    ?>">

                    <div style="margin-top: 30px" class="uza-contact-form mb-10">
                        <div class="col-lg-12">
                            <div style="margin-bottom: 20px" class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" name="pay">Pay</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="text-center">
                    <span class="txt1">Change your mind? </span>
                    <a class="txt2" style="color: #1382f7" href="melaka_customer_planner.php">Back to Planner</a>
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