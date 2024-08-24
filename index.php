<!DOCTYPE html>

<?php
include "admin/database_connection.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Code4u - Budget Vacation</title>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                        <button type="button" class="btn close-btn" data-dismiss="modal"></button>
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
                                <li class="current-item"><a style="cursor: default;">Home</a></li>
                                <li><a href="#">Place</a>
                                    <ul class="dropdown">
                                        <li><a href="kuala_lumpur.php">- Kuala Lumpur</a></li>
                                        <li><a href="melaka.php">- Melaka</a></li>
                                        <li><a href="pulau_pinang.php">- Pulau Pinang</a></li>
                                    </ul>
                                </li>
                                <li><a href="#service">Service</a></li>
                                <li><a href="#developer">Developer</a></li>
                                <li><a href="#feedback">Feedback</a>
                                </li>
                            </ul>
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="admin/admin_login.php" class="btn uza-btn"><i class="icon_profile"></i> Admin Login</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <div class="single-welcome-slide">
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Budget Vacation<br> makes your traveling plan<br> <span>GREATER</span></h2>
                                    <h5 style="font-weight: 300" data-animation="fadeInUp" data-delay="400ms">Our Itinerary allows travellers to learn more about the travelling times for package</h5>
                                    <a href="#package" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">See Our Package</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="./img/2.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-welcome-slide">
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Budget Vacation<br> makes your traveling plan<br> <span>BETTER</span></h2>
                                    <h5 style="font-weight: 300" data-animation="fadeInUp" data-delay="400ms">Kuala Lumpur . Melaka . Pulau Pinang</h5>
                                    <a href="kuala_lumpur.php" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">See Our Itinerary</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="welcome-thumbnail">
                                    <img src="./img/1.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- package section -->
    <section class="uza-portfolio-area section-padding-80" id="package">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Packages </h2>
                        <p>Our budget vacation package helps you understand your spending trip moments.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="portfolio-sildes owl-carousel">
                    <div class="single-portfolio-slide">
                        <img style="border-radius: 8px" src="img/kuala_lumpur.jpg" alt="">
                        <div class="overlay-effect">
                            <h4 style="font-weight: 900">Kuala Lumpur</h4>
                            <span style="font-weight: 300" class="post-date">4 Days 3 Night</span>
                            <p>Attraction: <b>Parks, Shopping, Historic Sites </b></p>
                            <p style="font-weight: 400">
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> Petronas Twin Towers <br>
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> Islamic Arts Museum Malaysia <br>
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> Putra Mosque <br>
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> National Museum 
                            </p>
                        </div>
                        <div class="view-more-btn">
                            <a href="kl_customer_form.php"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <div class="single-portfolio-slide">
                        <img style="border-radius: 8px" src="img/melaka.jpg" alt="">
                        <div class="overlay-effect">
                            <h4 style="font-weight: 900">Melaka / Malacca</h4>
                            <span style="font-weight: 300" class="post-date"><span>4</span> Days <span>3 </span>Night</span>
                            <p>Attraction: <b>Historic Sites,  Museums,  Nature </b></p>
                            <p style="font-weight: 400">
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> St Paul’s Church <br>
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> A Famosa Fort <br>
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> Cheng Hoon Teng Temple <br>
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> Windmill Dutch Square 
                            </p>
                        </div>
                        <div class="view-more-btn">
                            <form action="process_melaka_package.php" method="POST">
                                <a href="melaka_customer_form.php"><i class="arrow_right"></i></a>
                            </form>
                        </div>
                    </div>

                    <div class="single-portfolio-slide">
                        <img style="border-radius: 8px" src="img/pulau_pinang.jpg" alt="">
                        <div class="overlay-effect">
                            <h4 style="font-weight: 900">Pulau Pinang</h4>
                            <span style="font-weight: 300" class="post-date"><span>4</span> Days <span>3 </span>Night</span>
                            <p>Attraction: <b>Food, Shopping, Historic Sites </b> </p>
                            <p style="font-weight: 400">
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> Kek Lok Si Temple <br>
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> Penang Street Art <br>
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> Penang Hill <br>
                                <i style="color: #2ecc71" class="fa fa-check" aria-hidden="true"></i> Escape Adventureplay 
                            </p>
                        </div>
                        <div class="view-more-btn">
                            <form action="process_pulau_pinang_package.php" method="POST">
                                <a href="pp_customer_form.php"><i class="arrow_right"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- package section end -->

        <!-- service section -->
        <section class="uza-services-area section-padding-80-0" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Our Services</h2>
                            <p>Easy to use, easy to browse. Say Hi to your new travel hub!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="single-service-area mb-80">
                            <div class="service-icon">
                                <i class="icon_lightbulb_alt"></i>
                            </div>
                            <h5>Get destination</h5>
                            <p>A complete day-by-day itinerary based on your preferences</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="single-service-area mb-80">
                            <div class="service-icon">
                                <i class="icon_calendar"></i>
                            </div>
                            <h5>Manage it</h5>
                            <p>Refine your plan. We'll find the best routes and schedules</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="single-service-area mb-80">
                            <div class="service-icon">
                                <i class="icon_star_alt"></i>
                            </div>
                            <h5>Confirm it</h5>
                            <p>Choose from the best packages and places. In Kuala Lumpur, Melaka, and Pulau Pinang</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="single-service-area mb-80">
                            <div class="service-icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <h5>Grab it</h5>
                            <p>We wish for you a Special Holidays. We're thinking of you this time of year</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- service section end -->

        <!-- developer section -->
        <div class="clients-feedback-area mt-80 section-padding-80 clearfix" id="developer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Meet The Developers </h2>
                            <p>Meet the Code4u Team. We're a team of experienced Business & Web passionate about design.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="testimonial-slides owl-carousel">
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/yk.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <h4>“To be a dominant performer in the international marketplace by offering extremely dynamic web design, software development and online marketing services that will escalate company growth for our clients. Worldwide reputation is our dream.”</h4>
                                    <div class="ratings">
                                        <p>Database, PHP, Web Designer, Planning, Handling Members</p>
                                    </div>
                                    <div class="single-footer-widget-2 author-info">
                                        <h5>Shing Wai Kei <span style="color: #1382f7">- CEO Code4u</span></h5>
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

                            <div class="single-testimonial-slide d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/yana.jpeg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <h4>“To be a dominant performer in the international marketplace by offering extremely dynamic web design, software development and online marketing services that will escalate company growth for our clients. Worldwide reputation is our dream.”</h4>
                                    <div class="ratings">
                                        <p>Photoshop, Adobe Premiere, Communication, Web Designer</p>
                                    </div>
                                    <div class="single-footer-widget-2 author-info">
                                        <h5>Nur Liyana Binti Shaari <span style="color: #1382f7">- IT Consultant</span></h5>
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

                            <div class="single-testimonial-slide d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/goh.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <h4>“To be a dominant performer in the international marketplace by offering extremely dynamic web design, software development and online marketing services that will escalate company growth for our clients. Worldwide reputation is our dream.”</h4>
                                    <div class="ratings">
                                        <p>Web Analysis, Database Managing</p>
                                    </div>
                                    <div class="single-footer-widget-2 author-info">
                                        <h5>Goh Shu Hui <span style="color: #1382f7">- IT Technologies</span></h5>
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

                            <div class="single-testimonial-slide d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/cc.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <h4>“To be a dominant performer in the international marketplace by offering extremely dynamic web design, software development and online marketing services that will escalate company growth for our clients. Worldwide reputation is our dream.”</h4>
                                    <div class="ratings">
                                        <p>Database, Web Designer</p>
                                    </div>
                                    <div class="single-footer-widget-2 author-info">
                                        <h5>Cheang Wan Chin <span style="color: #1382f7">- Senior Support Specialist</span></h5>
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

                            <div class="single-testimonial-slide d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/benz.jpg" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <h4>“To be a dominant performer in the international marketplace by offering extremely dynamic web design, software development and online marketing services that will escalate company growth for our clients. Worldwide reputation is our dream.”</h4>
                                    <div class="ratings">
                                        <p>ML, DL, AI, BI, IoT, Expert System</p>
                                    </div>
                                    <div class="single-footer-widget-2 author-info">
                                        <h5>Daimler Benz <span style="color: #1382f7">- Data Scientist</span></h5>
                                        <div class="footer-social-info">
                                            <a href="https://www.facebook.com/daimlerbenx" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="https://twitter.com/daimlerbenx" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="instagram.com//daimlerbenx" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="youtube.com//daimlerbenx" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- developer section end -->

        <div class="container">
            <div class="border-line"></div>
        </div>
        <div class="portfolio-bg-curve">
            <img src="./img/core-img/curve-3.png" alt="">
        </div>
    </section>

    <!-- about section -->
    <section class="uza-about-us-area" id="about">
        <div class="container">
            <div style="width: 110%" class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="./img/6.png" alt="">
                    <div class="about-us-thumbnail mb-80">
                        <div class="uza-video-area hi-icon-effect-8">
                            <a href="https://www.youtube.com/watch?v=vE1OhnW6iac" class="hi-icon video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-80">
                        <h2>The New Way to Plan Your Next Trip</h2>
                        <p>Our overall goal is to make travel more accessible for everyone by showing that many destinations do not have to be as expensive as many people believe. Travelers who are planning a future trip can create a travel budget to plan their future expenses based on the package days and costs of their destinations or their own established places. </p>
                        <p>All of the travel and personal details which have been entered by travelers are then anonymously aggregated as for our data collection for great future.</p>
                        <a href="#package" class="btn uza-btn btn-2 mt-4">Go to Package!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-bg-pattern">
            <img src="./img/core-img/curve-2.png" alt="">
        </div>
    </section>
    <!-- about section -->

    <!-- feedback section -->
    <section class="uza-contact-area section-padding-80" id="feedback">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Feedback &amp; Talk To Us</h2>
                        <p>Send Us a Feedback, We Will Keep In Touch With a Speed of Light!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <!-- feedback form -->
                <div class="col-12 col-lg-12">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h4><b>Forget</b> to Print Receipt? Dont't Worry, Send Us Your Requirement Through This Feedback. <br>We Will Provide You a Copy.</h4>
                        </div>
                        <form action="process_feedback.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="feedback_name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="feedback_email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control mb-30 unstyled" name="feedback_phone" placeholder="Phone" required="">
                                    </div>
                                </div>

                                <?php

                                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's", "Korea", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                ?>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control mb-30" name="feedback_country" required="">
                                            <option value selected >Country</option>
                                            <?php
                                            foreach($countries as $key => $value):
                                                echo '<option value="'.$value.'">'.$value.'</option>';
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control mb-60" name="feedback_message" rows="8" cols="80" placeholder="Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button id="btnAlert" name="submit" class="btn uza-btn btn-3 mt-15">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feedback section -->

    <!-- footer section -->
    <footer class="footer-area section-padding-80-0" id="footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h4 class="widget-title">Contact Us</h4>
                        <div class="footer-content mb-15">
                            <h3>000 000 000</h3>
                            <a href="mailto:daimlerbenx@gmail.com">Send Email</a>
                        </div>
                        <p class="mb-0">University Malaysia Sabah, <br>Labuan International Campus, Labuan Federal Territory, <br>Malaysia, 87000.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h4 class="widget-title">Quick Link</h4>
                        <nav>
                            <ul class="our-link">
                                <li><a href="about.php">About Code4u</a></li>
                                <li><a href="kuala_lumpur.php">Kuala Lumpur</a></li>
                                <li><a href="melaka.php">Melaka</a></li>
                                <li><a href="pulau_pinang.php">Pulau Pinang</a></li>
                                <li><a data-toggle="modal" data-target="#mapModal" style="color: #1382f7; cursor: pointer;">Maps</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h4 class="widget-title">Project Initiation</h4>
                        <p>The growing number of travelers in this category is a positive trend that contributes to the strengthening of the global economy. </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h4 class="widget-title">Brief About Us</h4>
                        <p>There is a more effective and intelligent alternative to traditional vacation planning methods: a travel planner website that simplifies creating your travel itinerary.</p>
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
            This project, part of IE32503 - System Analysis and Design for E-Commerce, is intended for educational purposes only &copy; Semester 1 2019/2020.
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