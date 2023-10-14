<?php 
  session_cache_limiter('private, must-revalidate');
  ob_start();
  session_start();
  require_once('connect.php');
  $_SESSION['Movie'] = "Godzilla vs. Kong";
  $_SESSION['Theaters'] = "Theater 1";
  $_SESSION['Location'] = "Central Plaza Chaengwattana";
  $_SESSION['Start_time'] = "2021-04-01 10:00:00";
  $_SESSION['seats'] = array("A1","A2","A3","A4","A5");

  $_SESSION['movie'] = "Godzilla vs. Kong";
  $_SESSION['location'] = "Central Plaza Chaengwattana";
  $_SESSION['theater'] = "Theater 1";
  $_SESSION['starttime'] = "2021-04-01 10:00:00";
  $_SESSION['num'] = 5;

  $movie = $_SESSION['Movie'];
  $theater = $_SESSION['Theaters'];
  $location = $_SESSION['Location'];
  $locationid;
  $client = $_SESSION['name'];
  $clientid;
  $starttime = $_SESSION['Start_time'];
  $showtimeid;


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
  <!-- Font Kanit -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">

</head>

<body>
  

<?php 
      if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
          include "header.php";}
      else
          include "Guest_header.php";   
  ?>

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
                  <div style="text-align: center;">
                    <img class="card-title text-center pb-0 fs-4" src="https://upload.wikimedia.org/wikipedia/commons/c/c6/Sign-check-icon.png" style="width: 20%; margin-left: auto;">
                  </div>
                    <h5 class="card-title text-center pb-0 fs-4">Booking Success!</h5>
                  </div>
                  <br>

                  <!--Movie-->
                  
                    
                    <div class="col-12">
                        <label for="Movie">Movie:</label>
                        <h3>
                        <?php
                          echo $_SESSION['movie'];
                        ?>
                        </h3>
                        </div>

                        <br>

                        <!--สาขา-->
                        <div class="col-12">

                            <label for="Movie">Location:</label>
                            <br>
                            <h3>
                              <?php
                                echo $_SESSION['location'];
                              ?>
                            </h3>
  
                        </div>

                        <br>

                        <!--โรงที่...-->
                        <div class="col-12">
                            <label for="Movie">Theater:</label>
                            <br>
                            <h3>
                              <?php
                                echo $_SESSION['theater'];
                              ?>
                            </h3>
                        </div>

                        <br>

                        <!--ที่นั่ง...-->
                        <div class="col-12">
                            <label for="Movie">Seat:</label>
                            <br>
                            <h3>
                              <?php
                                $Seat = $_SESSION['seats'];
                                $num = $_SESSION['num'];
                                $num1 = $_SESSION['num']*120;
                                foreach($Seat as $seatnum){
                                if($num == 1){
                                  echo "$seatnum";
                                }
                                else{
                                  echo "$seatnum, ";
                                }
                                  $num--;
                              }
                              ?>
                            </h3>
                        </div>

                    
                        <br>

                        <!--เวลาเริ่มฉาย...-->
                        <div class="col-12">
                            <label for="Movie">Start time:</label>
                            <br>
                            <h3>
                              <?php
                                echo $_SESSION['starttime'];
                              ?>
                            </h3>
                        </div>

                        <!--เวลาเริ่มฉาย...-->
                        <div class="col-12">
                            <label for="Movie">Price:</label>
                            <br>
                            <h3>
                              <?php
                                echo "$num1";
                              ?>
                            </h3>
                        </div>
           
                    <br><br>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" onClick="window.open('index.php', '_self')">Back</button>
                    </div>

                 

                </div>
              </div>

            </div>
          </div>
        </div>
        
    <br>

  </form>

</div>
</div>
</div>
    
</body>
</html>
