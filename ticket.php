<?php 
	//@session_start();
	ob_start();
	session_start();		
	require_once('connect.php');
  $no = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- connect db -->


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MINOR Cineplex - Main page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <?php 

      if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
          include "header.php";  }
      else
          include "Guest_header.php";
        
  ?>


  <?php 
    if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
        include "sidebar.php";   }
    else
        include "Guest_sidebar.php";
  ?>



<div style = "text-align: centre;">
    <div class="tcardWrap">
    <div class="tcard tcardLeft">
        <h1>Startup <span>Cinema</span></h1>
        <div class="title">
        <h2>How I met your Mother</h2>
        <span>movie</span>
        </div>
        <div class="name">
        <h2>Vladimir Kudinov</h2>
        <span>name</span>
        </div>
        <div class="tseat">
        <h2>156</h2>
        <span>seat</span>
        </div>
        <div class="time">
        <h2>12:00</h2>
        <span>time</span>
        </div>
        
    </div>
    <div class="tcard tcardRight">
        <div class="eye"></div>
        <div class="number">
        <h3>156</h3>
        <span>seat</span>
        </div>
        <div class="barcode"></div>
    </div>

    </div>
</div>
</body>
</html>
