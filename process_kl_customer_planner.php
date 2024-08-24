<?php
include "admin/database_connection.php";
require_once 'validate_customer.php';
require 'name_customer.php';

if(isset($_POST['continue'])){
    $a0800_0900 = mysqli_real_escape_string($conn, $_POST['a0800_0900']);
    $a0930_1130 = mysqli_real_escape_string($conn, $_POST['a0930_1130']);
    $a1200_1300 = mysqli_real_escape_string($conn, $_POST['a1200_1300']);
    $a1330_1530 = mysqli_real_escape_string($conn, $_POST['a1330_1530']);
    $a1600_1800 = mysqli_real_escape_string($conn, $_POST['a1600_1800']);
    $a1830_2030 = mysqli_real_escape_string($conn, $_POST['a1830_2030']);
    $a2100_2200 = mysqli_real_escape_string($conn, $_POST['a2100_2200']);

    $b0800_0900 = mysqli_real_escape_string($conn, $_POST['b0800_0900']);
    $b0930_1130 = mysqli_real_escape_string($conn, $_POST['b0930_1130']);
    $b1200_1300 = mysqli_real_escape_string($conn, $_POST['b1200_1300']);
    $b1330_1530 = mysqli_real_escape_string($conn, $_POST['b1330_1530']);
    $b1600_1800 = mysqli_real_escape_string($conn, $_POST['b1600_1800']);
    $b1830_2030 = mysqli_real_escape_string($conn, $_POST['b1830_2030']);
    $b2100_2200 = mysqli_real_escape_string($conn, $_POST['b2100_2200']);

    $c0800_0900 = mysqli_real_escape_string($conn, $_POST['c0800_0900']);
    $c0930_1130 = mysqli_real_escape_string($conn, $_POST['c0930_1130']);
    $c1200_1300 = mysqli_real_escape_string($conn, $_POST['c1200_1300']);
    $c1330_1530 = mysqli_real_escape_string($conn, $_POST['c1330_1530']);
    $c1600_1800 = mysqli_real_escape_string($conn, $_POST['c1600_1800']);
    $c1830_2030 = mysqli_real_escape_string($conn, $_POST['c1830_2030']);
    $c2100_2200 = mysqli_real_escape_string($conn, $_POST['c2100_2200']);

    $d0800_0900 = mysqli_real_escape_string($conn, $_POST['d0800_0900']);
    $d0930_1130 = mysqli_real_escape_string($conn, $_POST['d0930_1130']);
    $d1200_1300 = mysqli_real_escape_string($conn, $_POST['d1200_1300']);
    $d1330_1530 = mysqli_real_escape_string($conn, $_POST['d1330_1530']);
    $d1600_1800 = mysqli_real_escape_string($conn, $_POST['d1600_1800']);
    $d1830_2030 = mysqli_real_escape_string($conn, $_POST['d1830_2030']);
    $d2100_2200 = mysqli_real_escape_string($conn, $_POST['d2100_2200']);

    if(empty($a0800_0900) || empty($a0930_1130) || empty($a1200_1300) || empty($a1330_1530) || empty($a1600_1800) || empty($a1830_2030) || empty($a2100_2200)){
            echo '<script type="text/javascript"> alert("Greeting customer, each place in day 1 should not be empty"); location="kl_customer_planner.php"; </script>';
    } if(empty($b0800_0900) || empty($b0930_1130) || empty($b1200_1300) || empty($b1330_1530) || empty($b1600_1800) || empty($b1830_2030) || empty($b2100_2200)){
            echo '<script type="text/javascript"> alert("Greeting customer, each place in day 2 should not be empty"); location="kl_customer_planner.php"; </script>';
    } if(empty($c0800_0900) || empty($c0930_1130) || empty($c1200_1300) || empty($c1330_1530) || empty($c1600_1800) || empty($c1830_2030) || empty($c2100_2200)){
            echo '<script type="text/javascript"> alert("Greeting customer, each place in day 3 should not be empty"); location="kl_customer_planner.php"; </script>';
    } if(empty($d0800_0900) || empty($d0930_1130) || empty($d1200_1300) || empty($d1330_1530) || empty($d1600_1800) || empty($d1830_2030) || empty($d2100_2200)){
            echo '<script type="text/javascript"> alert("Greeting customer, each place in day 4 should not be empty"); location="kl_customer_planner.php"; </script>';
    } else{
            mysqli_query($conn, "UPDATE `customer_planner` SET `a0800_0900` = '$a0800_0900', `a0930_1130` = '$a0930_1130', `a1200_1300` = '$a1200_1300', `a1200_1300` = '$a1200_1300', `a1330_1530` = '$a1330_1530', `a1600_1800` = '$a1600_1800', `a1830_2030` = '$a1830_2030', `a2100_2200` = '$a2100_2200' WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
            
            mysqli_query($conn, "UPDATE `customer_planner2` SET `b0800_0900` = '$b0800_0900', `b0930_1130` = '$b0930_1130', `b1200_1300` = '$b1200_1300', `b1200_1300` = '$b1200_1300', `b1330_1530` = '$b1330_1530', `b1600_1800` = '$b1600_1800', `b1830_2030` = '$b1830_2030', `b2100_2200` = '$b2100_2200' WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());

            mysqli_query($conn, "UPDATE `customer_planner3` SET `c0800_0900` = '$c0800_0900', `c0930_1130` = '$c0930_1130', `c1200_1300` = '$c1200_1300', `c1200_1300` = '$c1200_1300', `c1330_1530` = '$c1330_1530', `c1600_1800` = '$c1600_1800', `c1830_2030` = '$c1830_2030', `c2100_2200` = '$c2100_2200' WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());

            mysqli_query($conn, "UPDATE `customer_planner4` SET `d0800_0900` = '$d0800_0900', `d0930_1130` = '$d0930_1130', `d1200_1300` = '$d1200_1300', `d1200_1300` = '$d1200_1300', `d1330_1530` = '$d1330_1530', `d1600_1800` = '$d1600_1800', `d1830_2030` = '$d1830_2030', `d2100_2200` = '$d2100_2200' WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
            echo '<script type="text/javascript"> location="kl_confirmation.php"; </script>';
        }
}
?>