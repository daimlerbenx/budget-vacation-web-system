<!DOCTYPE html>
<?php
session_start();
include "admin/database_connection.php";

if(isset($_POST['submit'])){
    $state_id = $_POST['state_id'];
    $customer_name = $_POST['customer_name'];
    $customer_phone = $_POST['customer_phone'];
    $state_from = $_POST['state_from'];
    $date_from = $_POST['date_from'];
    $budget = $_POST['budget'];
    $optional_place = $_POST['optional_place'];
    $state_to = $_POST['state_to'];
    $tax_current = $_POST['tax_current'];

    $_SESSION['customer_name'] = $_POST['customer_name'];
    $_SESSION['customer_phone'] = $_POST['customer_phone'];
    $_SESSION['budget'] = $_POST['budget'];

    $conn->query("INSERT INTO `customer` (customer_name, customer_phone, state_id, state_from, date_from, budget, optional_place, state_to, tax_current) VALUES('$customer_name', '$customer_phone', '$state_id', '$state_from', '$date_from', '$budget', '$optional_place', '$state_to', '$tax_current')") or die(mysqli_error());

    //Log into manage form
    $customer_name = $_POST["customer_name"];
    $customer_phone = $_POST["customer_phone"];
    $query = $conn->query("SELECT * FROM `customer` WHERE `customer_name` = '$customer_name' && `customer_phone` = '$customer_phone'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $row = $query->num_rows;

    if($row > 0){
        session_start();
        $_SESSION['customer_id'] = $fetch['customer_id'];
        header('location:pp_customer_package.php');
    }else{
        echo '<script type="text/javascript"> alert("Ooops... Please try again"); location="process_destroy_customer.php"; </script>';
    }
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
                            <div class="get-a-quote ml-4 mr-3">
                                <a target="_blank" href="admin/admin_login.php" class="btn uza-btn"><i class="icon_profile"></i> Administration</a>
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
            <div style="background-color: #c0c0c0; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #c0c0c0; width: 28px; color: #fff; font-weight: 600">2</div>
            <div style="background-color: #c0c0c0; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #c0c0c0; width: 28px; color: #fff; font-weight: 600">3</div>
            <div style="background-color: #c0c0c0; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #c0c0c0; width: 28px; color: #fff; font-weight: 600">4</div>
            <div style="background-color: #c0c0c0; width: 110px; height: 2px; display: inline-block; margin-bottom: 5px;"></div>
            <div style="border-radius: 50%; display: inline-block; padding: 4px; background-color: #c0c0c0; width: 28px; color: #fff; font-weight: 600">5</div><br>

            <div style="width: 710px;">
            <div style="display: inline-block; font-weight: 600; color: #616161; margin-top: 5px; margin-bottom: 5px; float: left;">Customize Budgets</div>
            <div style="display: inline-block; font-weight: 600; color: #c0c0c0; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 42px;">Pick Package</div>
            <div style="display: inline-block; font-weight: 600; color: #c0c0c0; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 50px;">Manage Planner</div>
            <div style="display: inline-block; font-weight: 600; color: #c0c0c0; margin-top: 5px; margin-bottom: 5px; float: left; margin-left: 48px;">Confirmation</div>
            <div style="display: inline-block; font-weight: 600; color: #c0c0c0; margin-top: 5px; margin-bottom: 5px; margin-left: 30px;">Payment</div>
            </div>
        </center>

        
        <div style="margin-right: auto; margin-left: auto; padding-top: 20px;" class="wrap-login100-2">
            <div style="margin-top: 30px" class="uza-contact-form mb-10">
                <form method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                            $query = $conn->query("SELECT * FROM `tax` WHERE `tax_id` = 1") or die(mysqli_error());
                            $fetch = $query->fetch_array();
                            ?>
                            <input type="number" name="state_id" value="3" hidden="">
                            <input type="text" name="state_to" value="Pulau Pinang " hidden="">
                            <input type="number" name="tax_current" hidden="" value="<?php echo $fetch['tax']; ?>">

                            <span>Name <b class="text-danger">*</b></span>
                            <div class="form-group">
                                <input name="customer_name" class="form-control mb-30" type="text" placeholder="Full Name" required="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span>Contact <b class="text-danger">*</b></span>
                            <div class="form-group">
                                <input name="customer_phone" type="number" class="form-control mb-30" placeholder="Phone Number" required="">
                            </div>
                        </div>
                        <?php
                        $state = array("Johor", "Kedah", "Kelantan", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Sabah", "Sarawak", "Selangor", "Terengganu", "Labuan", "Putrajaya");
                        ?>
                        <div class="col-lg-6">
                            <span>Departure From <b class="text-danger">*</b></span>
                            <div class="form-group">
                                <select class="form-control mb-30 unstyled" name="state_from" required="">
                                    <option value selected >Choose Your State</option>
                                    <?php
                                    foreach($state as $key => $value):
                                        echo '<option value="'.$value.'">'.$value.'</option>';
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span>Destination To</span>
                            <div class="form-group">
                                <input style="background-color: #e7f2fd; border: #e7f2fd" class="form-control mb-30" placeholder="Pulau Pinang" disabled="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span>Date From <b class="text-danger">*</b></span>
                            <div class="form-group">
                                <input name="date_from" type="date" min="<?php echo date("Y-m-d") ?>" class="form-control mb-30 unstyled" required="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <span>Budget <b class="text-danger">*</b></span>
                            <div class="form-group">
                                <input name="budget" type="number" maxlength="4" min="100" max="1001" class="form-control mb-30 unstyled" placeholder="MYR" required="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="optional_place" type="text" class="form-control mb-60" placeholder="Optional Place">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div style="margin-bottom: 20px" class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" name="submit">Let's Go</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="txt1">Back to</span>
                        <a class="txt2" style="color: #1382f7" href="index.php">Homepage</a>
                    </div>
                </form>
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