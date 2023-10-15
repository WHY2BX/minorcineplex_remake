<?php 
	//@session_start();
	ob_start();
	session_start();		
	require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage Showtime</title>
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
  <!-- Font Kanit -->
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
      if(isset($_SESSION['name'])){
        include "Manager_sidebar.php";
    }
    else if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
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

              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Manage Showtime [Edit]</h5>
                  </div>
                  <br><br>




                  <!--Movie-->
                  <form class="row g-3 needs-validation" action="addShowtime_action.php" method="post" novalidate>
                  
                  <label for="Movie">CHOOSE OLD SHOWTIME TO EDIT</label>


                    <div class="col-12">
                        <label for="Movie">Choose a Movie:</label>
                        
                        <?php
                            //หนัง
                            $sql = "SELECT * FROM Movie";	
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                
                                echo "<select name ='Movie' class='dropdown-item'>";

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
                                
                                echo "<select name ='Location' class='dropdown-item'>";

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
                                
                                echo "<select name='Theater' class='dropdown-item'>";

                                while($row = mysqli_fetch_assoc($result)) {	
                                    echo "<option>".$row["Theater_ID"]."</option>";                                          
                                }
                                echo "</select>";
                            }

                        ?>
                        </div>
                    
                        <!--เวลาเริ่มฉาย...-->
                        <div class="col-12">
                            <label for="Movie">Choose Start time:</label>
                            <br>
                        <?php   
                            $sql = "SELECT DISTINCT Start_Time FROM Showtime";	
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                
                                echo "<select name='Theater' class='dropdown-item'>";

                                while($row = mysqli_fetch_assoc($result)) {	
                                    echo "<option>".$row["Start_Time"]."</option>";                                          
                                }
                                echo "</select>";
                            }

                        ?>
                        </div>
                        <br><br><br><br>
                        <label for="Movie">CHOOSE NEW SHOWTIME DATA</label>

                        <div class="col-12">
                        <label for="Movie">Choose a Movie:</label>
                        
                        <?php
                            //หนัง
                            $sql = "SELECT * FROM Movie";	
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                
                                echo "<select name ='Movie' class='dropdown-item'>";

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
                                
                                echo "<select name ='Location' class='dropdown-item'>";

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
                                
                                echo "<select name='Theater' class='dropdown-item'>";

                                while($row = mysqli_fetch_assoc($result)) {	
                                    echo "<option>".$row["Theater_ID"]."</option>";                                          
                                }
                                echo "</select>";
                            }

                        ?>
                        </div>
                    
                        <div class="col-12">
                      <label for="Date" class="form-label">Date [Format = YYYY:MM:DD]</label>
                      <input type="text" name="date" class="form-control" id="Date" required>
                      <div class="invalid-feedback">Please enter Date!</div>
                    </div>

                    <div class="col-12">
                      <label for="Start" class="form-label">StartTime [Format = HH:MM:SS]</label>
                      <input type="text" name="start_time" class="form-control" id="Start" required>
                      <div class="invalid-feedback">Please enter StartTime!</div>
                    </div>
                                        

                    <br>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Edit Showtime</button>
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


