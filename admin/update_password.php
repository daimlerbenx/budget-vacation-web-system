<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';

if(ISSET($_POST['update_password'])){
  $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);
  $admin_password2 = mysqli_real_escape_string($conn, $_POST['admin_password2']);
  $admin_password3 = mysqli_real_escape_string($conn, $_POST['admin_password3']);
  $admin_password4 = mysqli_real_escape_string($conn, $_POST['admin_password4']);

  if ($admin_password != $admin_password2){
    echo '<script type="text/javascript"> alert("Current password not match"); </script>';
  } if ($admin_password3 != $admin_password4){
    echo '<script type="text/javascript"> alert("Re-type password not match"); </script>';
  } if ($admin_password == $admin_password2 && $admin_password3 == $admin_password4) {
    mysqli_query($conn, "UPDATE `admin` SET `admin_password` = '$admin_password4' WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
    echo '<script type="text/javascript"> alert("New password updated"); </script>';
  }
}

?>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" href="../img/icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Administration - Code4u - Budget vacation</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="../css/preloader.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/remove_spin_number.css">
</head>

<body class="">
  <div id="preloader">
    <div class="wrapper">
      <div class="cssload-loader"></div>
    </div>
  </div>

  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo" style="text-align: center;">
        <span class="simple-text logo-normal">Administration</span>
        <img style="width: 120px; height: 120px; border-radius: 50%" src="photo/<?php echo $fetch['admin_photo']?>"><br>
        <h5>Welcome</h5>
        <h6 class="text-info"><?php echo $fetch['admin_name'] ?></h6>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active "><a href="#" style="cursor: default;"><i class="nc-icon nc-chart-pie-36"></i><p>Dashboard</p></a></li>
          <li>
            <a href="admin_state.php"><i class="nc-icon nc-image"></i><p>State</p></a>
          </li><li><a href="admin_place.php"><i class="nc-icon nc-map-big"></i><p>Place</p></a></li>
          <li><a href="admin_package.php"><i class="nc-icon nc-box-2"></i><p>Package</p></a></li>
          <li><a href="admin_customer.php"><i class="nc-icon nc-single-02"></i><p>Customer</p></a></li>
          <li><a href="admin_feedback.php"><i class="nc-icon nc-tile-56"></i><p>Feedback</p></a></li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard - Change Password</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bullet-list-67"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="create_admin.php">Create Admin</a>
                  <a class="dropdown-item" href="update_password.php">Change Password</a>
                  <a class="dropdown-item text-danger" href="logout.php">Logout</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <?php
                      $query="SELECT SUM(bill) AS 'revanue' FROM customer";
                      $res=mysqli_query($conn, $query);
                      $data=mysqli_fetch_array($res);
                      ?>
                      <p class="card-category"> Overall Paid</p>
                      <p class="card-title"> RM <?php echo $data['revanue']?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa"></i> Total Paid
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <?php
                      $query="SELECT SUM(revanue) AS 'revanue' FROM customer";
                      $res=mysqli_query($conn, $query);
                      $data=mysqli_fetch_array($res);
                      ?>
                      <p class="card-category"> Revenue</p>
                      <p class="card-title">RM <?php echo $data['revanue']?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa"></i> Total Sales
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-tile-56 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category"> Public</p>
                      <p class="card-title"> 23</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa"></i> Total Feedback
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chart-bar-32 text-primary"></i>
                    </div>
                  </div>
                  <?php
                  $query = $conn->query("SELECT * FROM `tax` WHERE `tax_id` = '1'") or die(mysqli_error());
                  $fetch = $query->fetch_array();
                  $tax = $fetch['tax'];
                  ?>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Tax</p>
                      <p class="card-title"><?php echo $fetch['tax'] ?> %</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a style="text-decoration: none;" href="update_tax.php"><i class="fa"></i> Update now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <form method = "POST">
                  <div class="row">
                   <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <?php
                      $query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
                      $fetch = $query->fetch_array();
                      ?>
                      <input name="admin_password" type="text" hidden="" value="<?php echo $fetch['admin_password']; ?>">
                      <label>Current Password</label>
                      <input name="admin_password2" type="password" class="form-control" required="">
                      <label>New Password</label>
                      <input name="admin_password3" type="password" class="form-control" required="">
                      <label>Re-Type New Password</label>
                      <input name="admin_password4" type="password" class="form-control" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                 <div class="col-md-12">
                  <a class="btn btn-danger" href="dashboard.php">Cancel </a>
                  <button name="update_password" class="btn btn-success">Save Changes</button>
                </div>
              </div>
            </form>
          </div>
          <div class="card-footer ">
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li><a href="../kuala_lumpur.php" target="_blank">Kuala Lumpur</a></li>
            <li><a href="../melaka.php" target="_blank">Melaka</a></li>
            <li><a href="../pulau_pinang.php" target="_blank">Pulau Pinang</a></li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">This Project is for IE32503 - SYSTEM ANALYSIS AND DESIGN FOR E-COMMERCE &copy; Semester 1 2019/2020.</span>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/default-assets/active.js"></script>
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/plugins/chartjs.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<script src="../assets/demo/demo.js"></script>
<script>
  $(document).ready(function() {
    demo.initChartsPages();
  });
</script>
</body>

</html>
