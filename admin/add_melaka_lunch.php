<!DOCTYPE html>
<?php
include "database_connection.php";
require_once 'validate.php';
require 'name.php';

if(ISSET($_POST['add_lunch'])){
  $place_name = mysqli_real_escape_string($conn, $_POST['place_name']);
  $place_desc = mysqli_real_escape_string($conn, $_POST['place_desc']);
  $state_id = $_POST['state_id'];
  $place_type = $_POST['place_type'];
  $place_time = $_POST['place_time'];
  $place_day = $_POST['place_day'];
  $place_photo = addslashes(file_get_contents($_FILES['place_photo']['tmp_name']));
  $photo_name = addslashes($_FILES['place_photo']['name']);
  $photo_size = getimagesize($_FILES['place_photo']['tmp_name']);
  move_uploaded_file($_FILES['place_photo']['tmp_name'],"../photo/melaka/" . $_FILES['place_photo']['name']);
  $conn->query("INSERT INTO `place` (place_name, place_desc, state_id, place_type, place_time, place_day, place_photo) VALUES('$place_name', '$place_desc', '$state_id', '$place_type', '$place_time', '$place_day', '$photo_name')") or die(mysqli_error());
  header("location:admin_melaka_lunch.php");
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
          <li><a href="./dashboard.php"><i class="nc-icon nc-chart-pie-36"></i><p>Dashboard</p></a></li>
          <li>
            <a href="admin_state.php"><i class="nc-icon nc-image"></i><p>State</p></a>
          </li><li class="active "><a href="admin_place.php"><i class="nc-icon nc-map-big"></i><p>Place</p></a></li>
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
            <a class="navbar-brand" href="#" style="cursor: default;">Place - Melaka</a>
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
        <div class="col-md-12">
         <div class="card">
          <div class="card-body">
            <h5 class="text-info">Add Lunch - Melaka</h5>
            <form method = "POST" enctype = "multipart/form-data">
              <input name="place_type" type="text" value="lunch" hidden="">
              <input name="place_time" type="text" value="1200_1300" hidden="">
              <input name="state_id" type="number" value="2" hidden="">
              <div class="row">
               <div class="col-md-4 pr-1">
                <div class="form-group">
                 <label>Lunch Name</label>
                 <input name="place_name" type="text" class="form-control" required="">
               </div>
             </div>
           </div>
        <?php
           $day = array("1", "2", "3", "4");
           ?>
           <div class="row">
             <div class="col-md-4 pr-1">
              <div class="form-group">
               <label>Lunch Day</label>
               <select class="form-control mb-30 unstyled" name="place_day" required="">
                <option value selected hidden=""></option>
                <?php
                foreach($day as $key => $value):
                  echo '<option value="'.$value.'">'.$value.'</option>';
                endforeach;
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-md-4 pr-1">
          <div class="form-group">
           <label>Lunch Description</label>
           <textarea name="place_desc" type="text" class="form-control" required=""></textarea>
         </div>
       </div>
     </div>
     <div class="col-md-4 pl-1">
       <div class="form-group">
        <label>Photo</label>
        <div id = "preview" style = "width:150px;">
         <center id = "lbl">[Choose Photo]</center>
       </div>
       <input class="form-control" type="file" required="required" id="photo" name="place_photo">
     </div>
   </div>
   <div class="row">
     <div class="col-md-12">
      <a class="btn btn-danger" href="admin_melaka_lunch.php">Cancel </a>
      <button name="add_lunch" class="btn btn-success">Add Lunch </button>
    </div>
  </div>
</form>
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
<script type = "text/javascript">
 $(document).ready(function(){
   $pic = $('<img id = "image" width = "100%" height = "100%"/>');
   $lbl = $('<center id = "lbl">[Photo]</center>');
   $("#photo").change(function(){
     $("#lbl").remove();
     var files = !!this.files ? this.files : [];
     if(!files.length || !window.FileReader){
       $("#image").remove();
       $lbl.appendTo("#preview");
     }
     if(/^image/.test(files[0].type)){
       var reader = new FileReader();
       reader.readAsDataURL(files[0]);
       reader.onloadend = function(){
         $pic.appendTo("#preview");
         $("#image").attr("src", this.result);
       }
     }
   });
 });
</script>

</body>

</html>
