<?php
include "database_connection.php";

	session_start();
	session_unset(admin_id);
	header("location:../index.php");
?>