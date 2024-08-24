<?php
	include "admin/database_connection.php";

	$query = $conn->query("SELECT * FROM `customer` WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$customer_id = $fetch['customer_id'];
	$state_id = $fetch['state_id'];
	$package_price = $fetch['package_price'];
	$customer_name = $fetch['customer_name'];
	$customer_phone = $fetch['customer_phone'];
	$state_from = $fetch['state_from'];
	$state_to = $fetch['state_to'];
	$date_from = $fetch['date_from'];
	$budget = $fetch['budget'];
	$optional_place = $fetch['optional_place'];
?>