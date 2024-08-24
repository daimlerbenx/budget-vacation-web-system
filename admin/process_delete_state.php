<?php
require_once 'database_connection.php';

$conn->query("DELETE FROM `state` WHERE `state_id` = '$_REQUEST[state_id]'") or die(mysqli_error());
echo '<script type="text/javascript"> location="admin_state.php"; </script>';