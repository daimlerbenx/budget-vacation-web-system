<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Code4u - Budget Vacation</title>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <div class="top-search-area">
        <div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div style="background-color: transparent;" class="modal-content">
                    <div style="background-color: transparent; padding-bottom: 0; width: 1600px; " class="modal-body">
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.8933277479928!2d115.17496106276117!3d5.279331804273482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32231bef256bd1cb%3A0x29d02b44f7a307f1!2sUniversity%20Malaysia%20Sabah%20Labuan%20International%20Campus!5e0!3m2!1sen!2smy!4v1572622457992!5m2!1sen!2smy" allowfullscreen="" height="650" width="1500"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-area">
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <nav class="classy-navbar justify-content-between" id="uzaNav">
                    <a class="nav-brand" href="index.php"><img src="img/icon_label.png" height="160px" width="260px"></a>
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <div class="classy-menu">
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="kuala_lumpur.php">Kuala Lumpur</a></li>
                                <li class="current-item"><a href="melaka.php">Melaka</a></li>
                                <li><a href="pulau_pinang.php">Pulau Pinang</a></li>
                                </li>
                            </ul>
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="index.php#package" class="btn uza-btn">See Package</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Melaka</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Melaka</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>

    <!-- gallery section -->
    <section class="uza-portfolio-area section-padding-80">

        <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">All</button>
            <button class="btn" data-filter=".place">Places</button>
            <button class="btn" data-filter=".breakfast">Breakfast</button>
            <button class="btn" data-filter=".lunch">Lunch</button>
            <button class="btn" data-filter=".dinner">Dinner</button>
        </div>

        <div class="container-fluid">
            <div class="row uza-portfolio">

                <!-- place section -->
                <?php
            require_once 'admin/database_connection.php';
            $query = $conn->query("SELECT * FROM `place` WHERE `place_type` = 'place' AND `state_id` = 2 ORDER BY `place_id` ASC ") or die(mysql_error());
            while($fetch = $query->fetch_array()){
                ?>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item place">
                    <div class="single-portfolio-slide">
                        <img src="photo/melaka/<?php echo $fetch['place_photo']?>">
                        <div class="overlay-effect">
                            <h5 style="text-transform: capitalize;"><?php echo $fetch['place_name']?></h5>
                            <p style="font-size: 15px;"><?php echo $fetch['place_desc']?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
                <!-- place section end-->

                <!-- breakfast section -->
                <?php
            require_once 'admin/database_connection.php';
            $query = $conn->query("SELECT * FROM `place` WHERE `place_type` = 'breakfast' AND `state_id` = 2 ORDER BY `place_id` ASC ") or die(mysql_error());
            while($fetch = $query->fetch_array()){
                ?>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item breakfast">
                <div class="single-portfolio-slide">
                        <img src="photo/melaka/<?php echo $fetch['place_photo']?>">
                        <div class="overlay-effect">
                            <h5 style="text-transform: capitalize;"><?php echo $fetch['place_name']?></h5>
                            <p style="font-size: 15px;"><?php echo $fetch['place_desc']?></p>
                        </div>
                    </div>
            </div>
            <?php
            }
            ?>
                <!-- breakfast section end -->

                <!-- lunch section -->
                <?php
            require_once 'admin/database_connection.php';
            $query = $conn->query("SELECT * FROM `place` WHERE `place_type` = 'lunch' AND `state_id` = 2 ORDER BY `place_id` ASC ") or die(mysql_error());
            while($fetch = $query->fetch_array()){
                ?>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item lunch">
                <div class="single-portfolio-slide">
                        <img src="photo/melaka/<?php echo $fetch['place_photo']?>">
                        <div class="overlay-effect">
                            <h5 style="text-transform: capitalize;"><?php echo $fetch['place_name']?></h5>
                            <p style="font-size: 15px;"><?php echo $fetch['place_desc']?></p>
                        </div>
                    </div>
            </div>
            <?php
        }
        ?>
                <!-- lunch section end -->

                <!-- dinner section -->
                <?php
            require_once 'admin/database_connection.php';
            $query = $conn->query("SELECT * FROM `place` WHERE `place_type` = 'dinner' AND `state_id` = 2 ORDER BY `place_id` ASC ") or die(mysql_error());
            while($fetch = $query->fetch_array()){
                ?>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item dinner">
                <div class="single-portfolio-slide">
                        <img src="photo/melaka/<?php echo $fetch['place_photo']?>">
                        <div class="overlay-effect">
                            <h5 style="text-transform: capitalize;"><?php echo $fetch['place_name']?></h5>
                            <p style="font-size: 15px;"><?php echo $fetch['place_desc']?></p>
                        </div>
                    </div>
            </div>
            <?php
        }
        ?>
                <!-- dinner section end -->

            </div>
        </div>
    </section>
    <!-- gallery section end -->

    <!-- footer section -->
    <footer class="footer-area section-padding-80-0" id="footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h4 class="widget-title">Contact Us</h4>
                        <div class="footer-content mb-15">
                            <h3>(+60) 13848 5656</h3>
                            <p>daimlerbenx@gmail.com</p>
                        </div>
                        <p class="mb-0">University Malaysia Sabah, <br>Labuan International Campus, Labuan Federal Territory, <br>Malaysia, 87000.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h4 class="widget-title">Quick Link</h4>
                        <nav>
                            <ul class="our-link">
                                <li><a href="admin/admin_login.php">Administration</a></li>
                                <li><a href="about.php">About Code4u</a></li>
                                <li><a href="kuala_lumpur.php">Kuala Lumpur</a></li>
                                <li><a href="pulau_pinang.php">Pulau Pinang</a></li>
                                <li><a data-toggle="modal" data-target="#mapModal" style="color: #1382f7; cursor: pointer;">Maps</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h4 class="widget-title">Project Initiation</h4>
                        <p>It is a positive scenario that the number of this category of travellers keep on escalating from time to time which aids in enhancing our global economy. </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h4 class="widget-title">Brief About Us</h4>
                        <p>There is a better and smatter idea to counter the traditional ways of planning your vacation, which is a travel planner website that make building your travel itinerary a snap.</p>
                        <div class="footer-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
 <div class="row" style="margin-bottom: 30px;">
This Project is for IE32503 - SYSTEM ANALYSIS AND DESIGN FOR E-COMMERCE &copy; Semester 1 2019/2020.
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uza.bundle.js"></script>
    <script src="js/default-assets/active.js"></script>

</body>

</html>