<?php 
  session_cache_limiter('private, must-revalidate');
  ob_start();
  session_start();
  require_once('connect.php');


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

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  
<?php
if (isset($_SESSION['first_name']) && !empty($_SESSION['first_name'])) {
    include "header.php";
} else {
    include "Guest_header.php";
}
?>

<?php
if (isset($_SESSION['name'])) {
    include "Manager_sidebar.php";
} elseif (isset($_SESSION['first_name']) && !empty($_SESSION['first_name'])) {
    include "sidebar.php";
} else {
    include "Guest_sidebar.php";
}
?>

<main>
    <div class="container">
    <form action="index.php" method="post" novalidate>

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">

              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Payment</h5>
                    <br><br>
                    <img src= "https://media.discordapp.net/attachments/998863837400932373/1165288385099857980/IMG_8559.jpg?ex=65464e61&is=6533d961&hm=95e281f8cb913a285c6276e2273d1608d97e0e5cdf73749ae4e948616e39b8f3&=&width=701&height=701" width="500" height="500">
                    <br><br>
                    <button class="btn btn-primary w-100" type="submit">submit</button>

                </div>  
              </div>

            </div>
          </div>
        </div>
        </form>
      </section>

    </div>
  </main><!-- End #main -->

</body>
</html>
