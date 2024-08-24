<?php
require_once 'database_connection.php';

$conn->query("DELETE FROM `package` WHERE `package_id` = '$_REQUEST[package_id]'") or die(mysqli_error());
echo '<script type="text/javascript"> location="admin_package_melaka.php"; </script>';