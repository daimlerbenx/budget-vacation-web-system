<?php
	include "database_connection.php";

	$query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$admin_id = $fetch['admin_id'];
	$admin_name = $fetch['admin_name'];
	$admin_username = $fetch['admin_username'];
	$admin_password = $fetch['admin_password'];
?>