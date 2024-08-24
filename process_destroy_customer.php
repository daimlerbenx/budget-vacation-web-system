<?php
include "admin/database_connection.php";

	session_start();
	session_destroy(customer_id, customer_name, customer_phone, budget);
	header("location:index.php");
?>