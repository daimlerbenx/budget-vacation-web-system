<?php
require_once 'database_connection.php';

$conn->query("DELETE FROM `customer` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
$conn->query("DELETE FROM `customer_planner` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
$conn->query("DELETE FROM `customer_planner2` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
$conn->query("DELETE FROM `customer_planner3` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
$conn->query("DELETE FROM `customer_planner4` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
echo '<script type="text/javascript"> location="admin_customer.php"; </script>';