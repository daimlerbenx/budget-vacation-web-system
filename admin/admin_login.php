<!DOCTYPE html>
<?php
include "database_connection.php";
?>

<html lang="en">
<head>
	<title>Code4u - Budget Vacation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../img/icon.png">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="process_admin_login.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">Administration Login</span>

					<div class="wrap-input100 validate-input" data-validate="Enter Username">
						<input class="input100" type="text" name="admin_username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="admin_password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login">Login</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">Back to</span>
						<a class="txt2" style="color: #1382f7" href="../index.php">Homepage</a>
					</div>

				</form>
				<?php require_once 'process_admin_login.php'?>
			</div>
		</div>
	</div>

	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/main.js"></script>
    <script src="../js/default-assets/active.js"></script>

</body>
</html>