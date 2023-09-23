<?php 
	//@session_start();
	ob_start();
	session_start();		
	require_once('connect.php');
    $no = $_GET['no'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
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


  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <!--img src="assets/img/logo.png" alt=""-->
                  <span class="d-none d-lg-block">MINOR Cineplex</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Add Showtime</h5>
                  </div>
                  <br><br>

                  <!--Movie-->
                  <form class="row g-3 needs-validation" action="addShowtime_action.php" method="post" novalidate>
                    
                    <div class="col-12">
                        <label for="Movie">Choose a Movie:</label>
                        
                        <?php
                            //หนัง
                            $sql = "SELECT * FROM Movie";	
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                
                                echo "<select>";

                                while($row = mysqli_fetch_assoc($result)) {	
                                    echo "<option>".$row["Movie_Name"]."</option>";                                          
                                }
                                echo "</select>";
                            }
                            ?>

                        </div>
                        
                        <!--สาขา-->
                        <div class="col-12">

                            <label for="Movie">Choose Location:</label>
                            <br>

                        <?php   
                            $sql = "SELECT location_name FROM Location";	
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                
                                echo "<select>";

                                while($row = mysqli_fetch_assoc($result)) {	
                                    echo "<option>".$row["location_name"]."</option>";                                          
                                }
                                echo "</select>";
                            }

                        ?>
                        </div>

                        <!--โรงที่...-->
                        <div class="col-12">
                            <label for="Movie">Choose Theater:</label>
                            <br>
                        <?php   
                            $sql = "SELECT DISTINCT Theater_ID FROM Theaters";	
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                
                                echo "<select>";

                                while($row = mysqli_fetch_assoc($result)) {	
                                    echo "<option>".$row["Theater_ID"]."</option>";                                          
                                }
                                echo "</select>";
                            }

                        ?>
                        </div>

                        <form action="/action_page.php">
                          <label for="birthdaytime">Choose Date:</label>
                          <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                          <input type="submit">
                        </form>    

                            
                            <!-- <select id="Movie" name="Movie">
                                <option value="volvo">Volvo XC90</option>
                                <option value="saab">Saab 95</option>
                                <option value="mercedes">Mercedes SLK</option>
                                <option value="audi">Audi TT</option>
                            </select> -->




                    

                    <br><br>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <br>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Submit</button>
                    </div>



                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
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
