<?php
require_once 'database_connection.php';

$conn->query("DELETE FROM `place` WHERE `place_id` = '$_REQUEST[place_id]'") or die(mysqli_error());
header("location:admin_melaka.php");