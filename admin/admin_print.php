<html>
<?php
include "database_connection.php";
require_once 'validate.php';

$query = $conn->query("SELECT * FROM `customer` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
         $fetch = $query->fetch_array();
?>
<head>
   <meta charset="utf-8">
   <title><?php echo $fetch['customer_name']; ?> | Receipt</title>
   <link rel="stylesheet" type="text/css" href="../css/process_print.css">
   <link rel="icon" href="../img/icon.png">
</head>
<body>
   <header>
      <h1>RECEIPT</h1>
      <address >
         <p>CODE4U BUDGET VACATION MY</p>
         <p>University Malaysia Sabah, <br>Labuan International Campus,<br>Labuan Federal Territory,<br> 87000.</p>
         <p>+601138485656</p>
      </address>
      <span><img alt="" src="../img/icon_label.png" height="80px"></span>
   </header>
  
   <div style="margin-right: auto; margin-left: auto; width: 80%" class="wrap-login100-2">
      <h3>Name <font style="text-transform: capitalize; font-weight: 600; color: blue; float: right"><?php echo $fetch['customer_name']; ?></font></h3>
      <h3>Booking number <font style="text-transform: capitalize; font-weight: 600; color: blue; float: right"><?php echo $fetch['customer_id']; ?></font></h3>
      <h3>Departure from <font style="text-transform: capitalize; font-weight: 600; color: blue; float: right"><?php echo $fetch['state_to']; ?></font> 
         <font style="text-transform: capitalize; font-weight: 600; color: blue; float: right"><?php echo $fetch['state_from'];?> - &nbsp;</font></h3>
         <h3 style=" font-weight: 400">Date <span style="text-transform: capitalize; color: blue; font-weight: 600; float: right"><?php echo date('d/m/Y', strtotime($fetch['date_from'])); ?> <font style="color: #000">-</font> <?php $date_until = $fetch['date_from']; echo date('d/m/Y', strtotime($date_until.'+ 4 days')); ?></span></h3>
         <h3>Optional place <font style="text-transform: capitalize; font-weight: 600; color: blue; float: right"><?php echo $fetch['optional_place']; ?></font></h3><br>
         
         <h3 style="color: #000; font-weight: 600">DAY <b style="color: #303030">1</b></h3>
         <?php

         $query = $conn->query("SELECT * FROM `customer_planner` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
         $fetch = $query->fetch_array();
         ?>
         <h6 style="color: gray">08:00am – 09:00am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a0800_0900']; ?></font></h6><hr>
         <h6 style="color: gray">09:30am – 11:30am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a0930_1130']; ?></font></h6><hr>
         <h6 style="color: gray">12:00pm – 01:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a1200_1300']; ?></font></h6><hr>
         <h6 style="color: gray">01:30pm – 03:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a1330_1530']; ?></font></h6><hr>
         <h6 style="color: gray">04:00pm – 06:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a1600_1800']; ?></font></h6><hr>
         <h6 style="color: gray">06:30pm – 08:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a1830_2030']; ?></font></h6><hr>
         <h6 style="color: gray">09.00pm – 10.00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['a2100_2200']; ?></font></h6><hr><br>

         <h3 style="color: #000; font-weight: 600;">DAY <b style="color: #303030">2</b></h3>
         <?php

         $query = $conn->query("SELECT * FROM `customer_planner2` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
         $fetch = $query->fetch_array();
         ?>
         <h6 style="color: gray">08:00am – 09:00am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b0800_0900']; ?></font></h6><hr>
         <h6 style="color: gray">09:30am – 11:30am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b0930_1130']; ?></font></h6><hr>
         <h6 style="color: gray">12:00pm – 01:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b1200_1300']; ?></font></h6><hr>
         <h6 style="color: gray">01:30pm – 03:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b1330_1530']; ?></font></h6><hr>
         <h6 style="color: gray">04:00pm – 06:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b1600_1800']; ?></font></h6><hr>
         <h6 style="color: gray">06:30pm – 08:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b1830_2030']; ?></font></h6><hr>
         <h6 style="color: gray">09.00pm – 10.00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['b2100_2200']; ?></font></h6><hr><br>

         <h3 style="color: #000; font-weight: 600">DAY <b style="color: #303030">3</b></h3>
         <?php

         $query = $conn->query("SELECT * FROM `customer_planner3` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
         $fetch = $query->fetch_array();
         ?>
         <h6 style="color: gray">08:00am – 09:00am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c0800_0900']; ?></font></h6><hr>
         <h6 style="color: gray">09:30am – 11:30am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c0930_1130']; ?></font></h6><hr>
         <h6 style="color: gray">12:00pm – 01:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c1200_1300']; ?></font></h6><hr>
         <h6 style="color: gray">01:30pm – 03:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c1330_1530']; ?></font></h6><hr>
         <h6 style="color: gray">04:00pm – 06:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c1600_1800']; ?></font></h6><hr>
         <h6 style="color: gray">06:30pm – 08:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c1830_2030']; ?></font></h6><hr>
         <h6 style="color: gray">09.00pm – 10.00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['c2100_2200']; ?></font></h6><hr><br>

         <h3 style="color: #000; font-weight: 600">DAY <b style="color: #303030">4</b></h3>
         <?php

         $query = $conn->query("SELECT * FROM `customer_planner4` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
         $fetch = $query->fetch_array();
         ?>
         <h6 style="color: gray">08:00am – 09:00am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d0800_0900']; ?></font></h6><hr>
         <h6 style="color: gray">09:30am – 11:30am <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d0930_1130']; ?></font></h6><hr>
         <h6 style="color: gray">12:00pm – 01:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d1200_1300']; ?></font></h6><hr>
         <h6 style="color: gray">01:30pm – 03:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d1330_1530']; ?></font></h6><hr>
         <h6 style="color: gray">04:00pm – 06:00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d1600_1800']; ?></font></h6><hr>
         <h6 style="color: gray">06:30pm – 08:30pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d1830_2030']; ?></font></h6><hr>
         <h6 style="color: gray">09.00pm – 10.00pm <font style="margin-left: 50px; color: #303030;"><?php echo $fetch['d2100_2200']; ?></font></h6><hr><br>

         <?php
         $query = $conn->query("SELECT * FROM `customer` WHERE `customer_id` = '$_REQUEST[customer_id]'") or die(mysqli_error());
         $fetch = $query->fetch_array();
         ?>
         <h6 style="color: gray">Tax <font style="color: #303030; font-weight: 600; float: right; color: gray"> <?php echo $fetch['tax_current']; ?> %</font></h6>
         <h3>Package Price<font style="color: red; font-weight: 600; float: right;">RM <?php echo $fetch['package_price']; ?></font></h3>
         <h3>Total Paid<font style="color: red; font-weight: 600; float: right;">RM <?php echo $fetch['bill']; ?></font></h3>
      </div>
      <aside><br><br>
         <h2 style="font-weight: 900; text-align: center;">Thank You! From <font style="font-size: 18px">CODE4U Budget Vacation</font></h2>
         <br>
      </aside>
   </body>
   </html>