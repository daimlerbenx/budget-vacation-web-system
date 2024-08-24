

<?php
include "admin/database_connection.php";

if(ISSET($_POST['submit'])){
  $feedback_name = mysqli_real_escape_string($conn, $_POST['feedback_name']);
  $feedback_email = mysqli_real_escape_string($conn, $_POST['feedback_email']);
  $feedback_phone = mysqli_real_escape_string($conn, $_POST['feedback_phone']);
  $feedback_country = mysqli_real_escape_string($conn, $_POST['feedback_country']);
  $feedback_message = mysqli_real_escape_string($conn, $_POST['feedback_message']);

  $conn->query("INSERT INTO `feedback` (feedback_name, feedback_email, feedback_phone, feedback_country, feedback_message) VALUES('$feedback_name', '$feedback_email', '$feedback_phone', '$feedback_country', '$feedback_message')") or die(mysqli_error());
  echo '<script> Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
}) </script>';
}
?>