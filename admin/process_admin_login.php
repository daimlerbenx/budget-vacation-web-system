<?php
include "database_connection.php";

	if(ISSET ($_POST['login'])){
		$admin_username = $_POST['admin_username'];
		$admin_password = $_POST['admin_password'];
		$query = $conn->query("SELECT * FROM `admin` WHERE `admin_username` = '$admin_username' && `admin_password` = '$admin_password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			session_start();
			$_SESSION['admin_id'] = $fetch['admin_id'];
			header('location:dashboard.php');
		}else{
			echo '<script type="text/javascript"> alert("Invalid username or password"); location="admin_login.php"; </script>';
		}
	}
?>