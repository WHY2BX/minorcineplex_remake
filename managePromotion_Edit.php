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

  <title>Manage Promotion</title>
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
      if(isset($_SESSION['name']) ){
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
                    <h5 class="card-title text-center pb-0 fs-4">Manage Promotion [Edit]</h5>
                  </div>
                  <br><br>

                  <?php
                    // if(isset($_POST['submit'])){
                    //     $_SESSION['movie'] = $_POST['Movie'];
                    //     $_SESSION['location'] = $_POST['Location'];
                    //     $_SESSION['theater'] = $_POST['Theater'];
                    // }               
                  ?>


                  <!--Movie-->
                  <form class="row g-3 needs-validation" action="manageMovie_Edit_action.php" method="post" novalidate>
                    
                    <div class="col-12">
                        <label for="Movie">Choose a Promotion to edit</label>
                        <br><br>

                        <!--ระดับPromotion-->
                        <select name ='Promotion' class='dropdown-item'>
                        <option value="value">1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>


                        </select>
                        </div>
                        
                        <label for="Movie">Choose New Promotion Details</label>
                        <!--คำอธิบาย-->
                        <div class="col-12">
                        <select name ='Promotion' class='dropdown-item'>
                        <option>discount 10%</option>
                        <option>discount 20%</option>
                        <option>discount 30%</option>
                        <option>discount 40%</option>
                        <option>discount 50%</option>
                        <option>discount 60%</option>
                        <option>discount 70%</option>
                        <option>discount 80%</option>
                        <option>discount 90%</option>
                        <option>discount 100%</option>
                      <div class="invalid-feedback">Please enter Promotion!</div>
                      <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Edit Showtime</button>
                    </div>
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


