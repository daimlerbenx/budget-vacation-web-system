<?php
include "admin/database_connection.php";

	session_start();
	session_destroy(customer_id, customer_name, customer_phone, budget);
	$conn->query("DELETE FROM `customer` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
	header("location:kl_customer_form.php");
?>