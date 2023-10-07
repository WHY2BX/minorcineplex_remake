<?php 
	ob_start();
	session_start();		
	require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Users / Profile - NiceAdmin Bootstrap Template</title>
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
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.png" alt="Profile" class="rounded-circle">
              <h2><?php
                echo $_SESSION['first_name']." ".$_SESSION['last_name'];
                ?>
              </h2>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
               <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-history">Purchase History</button>
                </li>


              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                 

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8"><?php
                        echo $_SESSION['name']
                    ?>
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">FirstName</div>
                    <div class="col-lg-9 col-md-8"><?php
                        echo $_SESSION['first_name']
                      ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">LastName</div>
                    <div class="col-lg-9 col-md-8"><?php
                      echo $_SESSION['last_name'] ?>
                    </div>
                  </div>

 

  

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-history">

                  <!-- Profile Edit Form -->
                  
                <!--History form-->
                  <form>
                  <table>

                    <thead>
                      <tr>
                        <th>Movie Name</th>
                        <th>Booking Date</th>
                        <th>Location Name</th>
                        <th>Theater ID</th>
                        <th>Seat ID</th>
                        <th>Date-Time</th>
                        <th>Total Payment</th>
                      </tr>
                    </thead>
  
                    <tbody>
                      <tr>
                        <td>Garfield: The Movie</td>
                        <td>2023-09-20</td>
                        <td>Minor_Hogwarts</td>
                        <td>3</td>
                        <td>9</td>
                        <td>2023-09-20 20:00:00</td>
                        <td>160</td>
                      </tr>
                      <?php
                        $sql = "SELECT * FROM Booking WHERE Client_No = '5'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                          while($row = $result-> fetch_assoc()){
                            echo "<tr><td>" . $row["Booking_ID"] . "</td><td>". $row["Movie_ID"] . "</td><td>". $row["Booking_ID"] . "</td><td>". $row["Theater_ID"] . "</td><td>". $row["Seat_ID"] . "</td><td>". $row["Booking_ID"] . "</td><td>". $row["Total_Price"] . "</td>" ;
                          }
                        }


                      ?>
                    </tbody>

                  </table>
                </form><!-- End History Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">


                </div>

                

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
       <strong><span>Minor Cineplex</span></strong>
    </div>
 
  </footer><!-- End Footer -->

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
