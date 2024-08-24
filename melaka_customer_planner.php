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
        <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
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
            <div style="background-color: #c0c0c0; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #c0c0c0; width: 28px; color: #fff; font-weight: 600">4</div>
            <div style="background-color: #c0c0c0; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #c0c0c0; width: 28px; color: #fff; font-weight: 600">5</div><br>

            <div style="width: 710px;">
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left;">Customize Budgets</div>
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 42px;">Pick Package</div>
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 50px;">Manage Planner</div>
            <div style="display: inline-block; font-weight: 600; color: #c0c0c0; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 48px;">Confirmation</div>
            <div style="display: inline-block; font-weight: 600; color: #c0c0c0; margin-top: 5px; margin-bottom: 5px; margin-left: 30px;">Payment</div>
            </div>
        </center>
                <div style="margin-right: auto; margin-left: auto; width: 60%; padding-top: 20px" class="wrap-login100-2">
                    <h3 style="color: gray; text-transform: capitalize; font-weight: 300">DAY <b style="color: #303030">1</b> | <font style="color: #1382f7; font-size: 18px; font-weight: 400"><?php echo date('d/m/Y', strtotime($fetch['date_from'])); ?></font><b style="float: right; color: #303030">Melaka</b> </h3>
                    <hr>

                    <div style="margin-top: 30px" class="uza-contact-form mb-10">
                        <form method="POST" action="process_melaka_customer_planner.php">
                            <div class="row">
                                <div class="col-lg-6">

                                    <span style="font-weight: 600">8:00am – 9:00am <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="a0800_0900" required>
                                            <option value="none">-</option>
                                            <option value="Calanthe Art Café">Calanthe Art Café</option>
                                            <option value="Limau-limau Café">Limau-limau Café</option>
                                            <option value="Toast N Toast">Toast N Toast</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Breakfast</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">9:30am – 11:30am <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="a0930_1130" required>
                                            <option value="none">-</option>
                                            <option value="St Paul’s Church">St Paul’s Church</option>
                                            <option value="A Famosa Fort">A Famosa Fort</option>
                                            <option value="Cheng Hoon Teng Temple">Cheng Hoon Teng Temple</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">12:00pm – 1:00pm <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="a1200_1300" required>
                                            <option value="none">-</option>
                                            <option value="Geographer Café">Geographer Café</option>
                                            <option value="Pak Putra Tandoori & Naan Restaurant">Pak Putra Tandoori & Naan Restaurant</option>
                                            <option value="Chung Wah Restaurant">Chung Wah Restaurant</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Lunch</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">1:30pm – 3:30pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="a1330_1530" required>
                                            <option value="none">-</option>
                                            <option value="Stadthuys">Stadthuys</option>
                                            <option value="Windmill Dutch Square Melaka">Windmill Dutch Square Melaka</option>
                                            <option value="Christ Church Melaka">Christ Church Melaka</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">4:00pm – 6:00pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="a1600_1800" required>
                                            <option value="none">-</option>
                                            <option value="St. Peter Church">St. Peter's Church</option>
                                            <option value="House of Museum Malacca">House of Museum Malacca</option>
                                            <option value="Baba & Nyonya Heritage Museum">Baba & Nyonya Heritage Museum</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">6:30pm – 8:30pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="a1830_2030" required>
                                            <option value="none">-</option>
                                            <option value="The Baboon House">The Baboon House</option>
                                            <option value="Capitol Satay Celup">Capitol Satay Celup</option>
                                            <option value="Hard Rock Café">Hard Rock Café</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Dinner</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">9.00pm – 10.00pm <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="a2100_2200" required>
                                            <option value="none">-</option>
                                            <option value="Baba & Nyonya Heritage Museum">Baba & Nyonya Heritage Museum</option>
                                            <option value="Queen Victoria Fountain, Melaka">Queen Victoria's Fountain, Melaka</option>
                                            <option value="Malacca Heritage Centre">Malacca Heritage Centre</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div style="height: 40px; width: 1px; background-color: #C0C0C0; margin-left: 380px; margin-top: 5px"></div>
                <img style="margin-left: 365px; height: 30px; width: 30px" src="img/sports-car.png">
                <div style="height: 40px; width: 1px; background-color: #C0C0C0; margin-left: 380px; margin-bottom: 5px"></div>

                <!-- plannner 2 -->

                <div style="margin-right: auto; margin-left: auto; width: 60%; padding-top: 20px" class="wrap-login100-2">
                    <h3 style="color: gray; text-transform: capitalize; font-weight: 300">Day <b style="color: #000">2</b> | <font style="color: #1382f7; font-size: 18px; font-weight: 400"><?php echo date('d/m/Y', strtotime($date_until.'+ 1 days')); ?></font> </h3>
                    <hr>

                    <div style="margin-top: 30px" class="uza-contact-form mb-10">
                            <div class="row">
                                <div class="col-lg-6">

                                    <span style="font-weight: 600">8:00am – 9:00am <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="b0800_0900" required>
                                            <option value="none">-</option>
                                            <option value="The Daily Fix Café">The Daily Fix Café</option>
                                            <option value="East & West Rendezvous">East & West Rendezvous</option>
                                            <option value="Loh Yong Moh Restaurant">Loh Yong Moh Restaurant</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Breakfast</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">9:30am – 11:30am <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="b0930_1130" required>
                                            <option value="none">-</option>
                                            <option value="No 8 Heeren Street Heritage centre">No 8 Heeren Street Heritage centre</option>
                                            <option value="Melaka Batik House">Melaka Batik House</option>
                                            <option value="Straits Chinese Jewelry Museum Malacca">Straits Chinese Jewelry Museum Malacca</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">12:00pm – 1:00pm <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="b1200_1300" required>
                                            <option value="none">-</option>
                                            <option value="Seeds Garaden Bistro">Seeds Garaden Bistro</option>
                                            <option value="Wa Zen Japanese Restaurant">Wa Zen Japanese Restaurant</option>
                                            <option value="Amy Heritage Nyonya Cuisine">Amy Heritage Nyonya Cuisine</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Lunch</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">1:30pm – 3:30pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="b1330_1530" required>
                                            <option value="none">-</option>
                                            <option value="Menara Taming Sari, Bandar Hilir">Menara Taming Sari, Bandar Hilir</option>
                                            <option value="Cheng Ho Cultural Museum">Cheng Ho Cultural Museum</option>
                                            <option value="Villa Sentosa">Villa Sentosa</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">4:00pm – 6:00pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="b1600_1800" required>
                                            <option value="none">-</option>
                                            <option value="Magic Art 3D Musuem">Magic Art 3D Musuem</option>
                                            <option value="Upside Down House Gallery">Upside Down House Gallery</option>
                                            <option value="Typhoon Pavilion">Typhoon Pavilion</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">6:30pm – 8:30pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="b1830_2030" required>
                                            <option value="none">-</option>
                                            <option value="Teo Soon Long Seafood Restaurant">Teo Soon Long Seafood Restaurant</option>
                                            <option value="Nancy’s kitchen">Nancy’s kitchen</option>
                                            <option value="Bert’s Garden Seafood">Bert’s Garden Seafood</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Dinner</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">9.00pm – 10.00pm <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="b2100_2200" required>
                                            <option value="none">-</option>
                                            <option value="Malacca River">Malacca River</option>
                                            <option value="Chinatown">Chinatown</option>
                                            <option value="River Walk, Melaka">River Walk, Melaka</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- end planner 2 -->

                <div style="height: 40px; width: 1px; background-color: #C0C0C0; margin-left: 380px; margin-top: 5px"></div>
                <img style="margin-left: 365px; height: 30px; width: 30px" src="img/sports-car.png">
                <div style="height: 40px; width: 1px; background-color: #C0C0C0; margin-left: 380px; margin-bottom: 5px"></div>

                <!-- planner 3 -->

                <div style="margin-right: auto; margin-left: auto; width: 60%; padding-top: 20px" class="wrap-login100-2">
                    <h3 style="color: gray; text-transform: capitalize; font-weight: 300">Day <b style="color: #000">3</b> | <font style="color: #1382f7; font-size: 18px; font-weight: 400"><?php echo date('d/m/Y', strtotime($date_until.'+ 2 days')); ?></font> </h3>
                    <hr>

                    <div style="margin-top: 30px" class="uza-contact-form mb-10">
                            <div class="row">
                                <div class="col-lg-6">

                                    <span style="font-weight: 600">8:00am – 9:00am <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="c0800_0900" required>
                                            <option value="none">-</option>
                                            <option value="Mods Café">Mods Café</option>
                                            <option value="Loh Yong Moh Restaurant">Loh Yong Moh Restaurant</option>
                                            <option value="East & West Rendezvous">East & West Rendezvous</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Breakfast</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">9:30am – 11:30am <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="c0930_1130" required>
                                            <option value="none">-</option>
                                            <option value="Jonker Street Night Market">Jonker Street Night Market</option>
                                            <option value="Dataran Pahlawan Melaka Megamall">Dataran Pahlawan Melaka Megamall</option>
                                            <option value="Encore, Melaka">Encore, Melaka</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">12:00pm – 1:00pm <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="c1200_1300" required>
                                            <option value="none">-</option>
                                            <option value="Geographer Café">Geographer Café</option>
                                            <option value="Amy Heritage Nyonya Cuisine">Amy Heritage Nyonya Cuisine</option>
                                            <option value="Wa Zen Japanese Restaurant">Wa Zen Japanese Restaurant</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Lunch</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">1:30pm – 3:30pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="c1330_1530" required>
                                            <option value="none">-</option>
                                            <option value="Mixx club">Mixx club</option>
                                            <option value="House of Museum Malacca">House of Museum Malacca</option>
                                            <option value="Flora de la Mar Maritime Museum">Flora de la Mar Maritime Museum</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">4:00pm – 6:00pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="c1600_1800" required>
                                            <option value="none">-</option>
                                            <option value="Queen Victoria Fountain">Queen Victoria Fountain</option>
                                            <option value="Malacca Heritage Centre">Malacca Heritage Centre</option>
                                            <option value="The Shore Oceanarium">The Shore Oceanarium</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">6:30pm – 8:30pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="c1830_2030" required>
                                            <option value="none">-</option>
                                            <option value="Restoran Peranakan">Restoran Peranakan</option>
                                            <option value="Bert’s Garden Seafood">Bert’s Garden Seafood</option>
                                            <option value="Nancy’s kitchen">Nancy’s kitchen</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Dinner</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">9.00pm – 10.00pm <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="c2100_2200" required>
                                            <option value="none">-</option>
                                            <option value="Melaka Thousand Tales of Adventure">Melaka Thousand Tales of Adventure</option>
                                            <option value="The Shore Sky Tower, Melaka">The Shore Sky Tower, Melaka</option>
                                            <option value="The Pirate Adventure">The Pirate Adventure</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- end planner 3 -->

                <div style="height: 40px; width: 1px; background-color: #C0C0C0; margin-left: 380px; margin-top: 5px"></div>
                <img style="margin-left: 365px; height: 30px; width: 30px" src="img/sports-car.png">
                <div style="height: 40px; width: 1px; background-color: #C0C0C0; margin-left: 380px; margin-bottom: 5px"></div>

                <!-- planner 4 -->

                <div style="margin-right: auto; margin-left: auto; width: 60%; padding-top: 20px" class="wrap-login100-2">
                    <h3 style="color: gray; text-transform: capitalize; font-weight: 300">Day <b style="color: #000">4</b> | <font style="color: #1382f7; font-size: 18px; font-weight: 400"><?php echo date('d/m/Y', strtotime($date_until.'+ 3 days')); ?></font> </h3>
                    <hr>

                    <div style="margin-top: 30px" class="uza-contact-form mb-10">
                            <div class="row">
                                <div class="col-lg-6">

                                    <span style="font-weight: 600">8:00am – 9:00am <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="d0800_0900" required>
                                            <option value="none">-</option>
                                            <option value="The Daily Fix Café">The Daily Fix Café</option>
                                            <option value="Toast N Toast">Toast N Toast</option>
                                            <option value="Limau-limau Café">Limau-limau Café</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Breakfast</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">9:30am – 11:30am <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="d0930_1130" required>
                                            <option value="none">-</option>
                                            <option value="Straits Chinese Jewelry Museum Malacca">Straits Chinese Jewelry Museum Malacca</option>
                                            <option value="Putra Mosque">Putra Mosque</option>
                                            <option value="Menara Taming Sari, Bandar Hilir, Malacca">Menara Taming Sari, Bandar Hilir, Malacca</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">12:00pm – 1:00pm <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="d1200_1300" required>
                                            <option value="none">-</option>
                                            <option value="Chung Wah Restaurant">Chung Wah Restaurant</option>
                                            <option value="The Huskitory, Melaka">The Huskitory, Melaka</option>
                                            <option value="Pak Putra Tandoori & Naan Restaurant">Pak Putra Tandoori & Naan Restaurant</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Lunch</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">1:30pm – 3:30pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="d1330_1530" required>
                                            <option value="none">-</option>
                                            <option value="Mahkota Parade">Mahkota Parade</option>
                                            <option value="The library,Melaka">The library,Melaka</option>
                                            <option value="Malacca River">Malacca River</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">4:00pm – 6:00pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="d1600_1800" required>
                                            <option value="none">-</option>
                                            <option value="Chinatown">Chinatown</option>
                                            <option value="Jonker Street Night Market, Melaka">Jonker Street Night Market, Melaka</option>
                                            <option value="Mixx club">Mixx club</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">6:30pm – 8:30pm <b class="text-danger">*</b></span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="d1830_2030" required>
                                            <option value="none">-</option>
                                            <option value="Teo Soon Long Seafood Restaurant">Teo Soon Long Seafood Restaurant</option>
                                            <option value="Hard Rock Café">Hard Rock Café</option>
                                            <option value="Capitol Satay Celup">Capitol Satay Celup</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Dinner</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <span style="font-weight: 600">9.00pm – 10.00pm <b class="text-danger">*</b> </span>
                                    <div class="form-group">
                                        <select class="form-control mb-30 unstyled" name="d2100_2200" required>
                                            <option value="none">-</option>
                                            <option value="Menara Taming Sari, Bandar Hilir, Malacca">Menara Taming Sari, Bandar Hilir, Malacca</option>
                                            <option value="Melaka Thousand Tales of Adventure">Melaka Thousand Tales of Adventure</option>
                                            <option value="Pantai Klebang">Pantai Klebang</option>
                                            <option style="text-transform: capitalize; font-weight: 900;" value="<?php echo $fetch['optional_place'] ?>">
                                                <?php echo $fetch['optional_place'] ?>
                                            </option>
                                            <option value selected hidden="">Choose Your Place</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div style="margin-bottom: 20px" class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn" name="continue">Continue</button>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="txt1">Back to</span>
                                <a class="txt2" style="color: #1382f7" href="melaka_customer_package.php">Previous</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end planner 4 -->

            </div>
        </div>
        <script>
    var $select = $("select");
    $select.on("change", function() {
        var selected = [];  
        $.each($select, function(index, select) {           
            if (select.value !== "") { selected.push(select.value); }
        });         
        $("option").prop("hidden", false);         
        for (var index in selected) { $('option[value="'+selected[index]+'"]').prop("hidden", true); }
    });
</script>
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