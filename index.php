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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">

</head>

<body>


<?php 
      if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
          include "header.php";  }
      else
          include "Guest_header.php";

  ?>

  <?php 
      if($_SESSION['name'] == 'Manager'){
        include "Manager_sidebar.php";
    }
    else if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
        include "sidebar.php";   }
    else
        include "Guest_sidebar.php";
  ?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Main Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Main Page</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">

      <div class="row">

      <?php 
          $no = 2;
          while($no <= 24){ 
      ?>
          <?php  if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name']) && $_SESSION['name'] != 'Manager') {?>
              <div class="col-lg-4" onClick="window.open('movie.php?no=<?php echo $no; ?>', '_self')" align="center">
      <?php } else { ?>
              <div class="col-lg-4" onClick="window.open('movie_nobook.php?no=<?php echo $no; ?>', '_self')" align="center">
      <?php } ?>

              <div class="card">

                <div class="card-body">
                  <?php

                      $sql = "SELECT * FROM Movie WHERE Movie_ID  = ".$no;
                      //echo $sql;
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {

                                $name = $row['Movie_Name'];
                                $pos = $row['Movie_Poster'];
                                // echo $name;

                            }
                        }

                  ?>
                  
                  <img class="MoviePoster" src="<?php echo $pos; ?>">
                  <br><br>
                  <?php

                      $sql = "SELECT * FROM Movie WHERE Movie_ID  = ".$no;
                      //echo $sql;
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {

                                $name = $row['Movie_Name'];
                                ?> <h3><?php echo $name;?></h3>
                                <?php
                            }
                        }
                  ?>
            
                </div>

              </div>

          </div>

        <?php $no+=8; } ?>

      </div>

    <div class="search-container">
    <div class="search-bar">
    <input type="text" id="movieSearch" placeholder="Search by Movie Name">
    <i class="fa-solid fa-xmark"></i>
    <button id="searchButton"><img src="./assets/img/search.png"></button>
    </div>
  </div><br><br>

      <div class="row">

      <?php 
          $no = 1;
          while($no < 28){ 
      ?>
      <?php  if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name']) && $_SESSION['name'] != 'Manager') {?>
              <div class="col-lg-2" onClick="window.open('movie.php?no=<?php echo $no; ?>', '_self')">
      <?php } else { ?>
              <div class="col-lg-2" onClick="window.open('movie_nobook.php?no=<?php echo $no; ?>', '_self')">
      <?php } ?>

              <div class="card">

                <div class="card-body">
                  <?php

                      $sql = "SELECT * FROM Movie WHERE Movie_ID  = ".$no;
                      //echo $sql;
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $name = $row['Movie_Name'];
                                $pos = $row['Movie_Poster'];
                                // echo $name;

                            }
                        }
                  ?>
                  <img class="MoviePosterBottom" src="<?php echo $pos; ?>" style ="display: block; margin-left: auto; margin-right: auto">
                  <br>
                  <?php

                      $sql = "SELECT * FROM Movie WHERE Movie_ID  = ".$no;
                      //echo $sql;
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {

                                $name = $row['Movie_Name'];

                                ?> <h4 style ="font-family: 'Kanit'; text-align: center;" ><?php echo $name; ?></h4>
                                <?php
                            }
                        }
                  ?>
            
                </div>

              </div>

          </div>

        <?php $no++; } ?>

      </div>

    </section>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
