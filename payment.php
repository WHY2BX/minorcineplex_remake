<?php 
  session_cache_limiter('private, must-revalidate');
  ob_start();
  session_start();
  require_once('connect.php');
  $client = $_SESSION['name'];

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
    <form action="ticket.php" method="post" novalidate>

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">

              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                <?php $total = $_SESSION['total'];
                      $promotion = $_POST['Promotion']; 
                      if($promotion == 'Discount 100 Baht'){
                        $total -= 100;
                      }
                      else if($promotion == 'Discount 15 Baht'){
                        $total -= 15;
                      }
                      else if($promotion == 'Discount 50%'){
                        $total = $total*0.5;
                      }
                      else if($promotion == 'Free Movie Ticket'){
                        $total -= 120;
                      }
                      else if($promotion == 'None'){
                        $total = $total;
                      }
                      $_SESSION['totals'] = $total;

                      //หา Client_ID
                      $sql4 = "SELECT Client_No from Member Where Username = '$client'"; 
                      $result4 = mysqli_query($conn, $sql4);
                      if (mysqli_num_rows($result4) > 0) {
                          while($row = mysqli_fetch_assoc($result4)) {	
                              $clientid = $row['Client_No'];
                          }
                      }
                      
                      //-------------Level Up Zone----------------------

                      //หา Movie_PassLevel
                      $sql7 = "SELECT Movie_PassLevel from Member Where Client_No = '$clientid'"; 
                      $result7 = mysqli_query($conn, $sql7);
                      if (mysqli_num_rows($result7) > 0) {
                          while($row = mysqli_fetch_assoc($result7)) {	
                              $Passlevel = $row['Movie_PassLevel'];
                          }
                      }
                      
                      //เพิ่ม Movie_PassLevel +1
                      if($Passlevel != 5){
                        $sql7 = "UPDATE Member set Movie_PassLevel = $Passlevel+1  where Client_No = '$clientid'"; 
                        $result8 = mysqli_query($conn, $sql7);
                        $Passlevel+=1;
                      }

                      //-------------END Level Up Zone----------------------

                      //-------------Add Promotion For Member Zone----------------------

                      if($Passlevel != 5){
                      $sql = "INSERT INTO Member_Promotion (Client_No,Movie_PassLevel,Status) VALUES ('$clientid','$Passlevel','1')";  
                      $result = mysqli_query($conn, $sql);
                      }
                      //-------------END Add Promotion For Member Zone----------------------

                      //-------------ปรับStatus Promotion ที่ Member ใช้ทำให้ใช้ไม่ได้อีกรอบ---------------------

                      if($promotion != "None"){
                            //หา Movie_PassLevel
                            $sql7 = "SELECT Movie_PassLevel from Member Where Client_No = '$clientid'"; 
                            $result7 = mysqli_query($conn, $sql7);
                            if (mysqli_num_rows($result7) > 0 ) {
                                while($row = mysqli_fetch_assoc($result7)) {	
                                    $Member_Passlevel = $row['Movie_PassLevel'];
                                }
                            }

                            $sql8 = "SELECT Movie_PassLevel from Promotion Where Promotion_Description = '$promotion' AND Movie_PassLevel <= '$Member_Passlevel'"; 
                            $result9 = mysqli_query($conn, $sql8);                      
                            if (mysqli_num_rows($result9) > 0) {
                              while($row = mysqli_fetch_assoc($result9)) {	
                                  $Passlevel = $row['Movie_PassLevel'];
                              }
                          }

                            $sql10 = "UPDATE Member_Promotion set Status = 0  where Client_No = '$clientid' AND Movie_PassLevel = '$Passlevel'"; 
                            $result9 = mysqli_query($conn, $sql10);
                  }




                      //-------------END ปรับStatus Promotion ที่ Member ใช้ทำให้ใช้ไม่ได้อีกรอบ----------------------
                ?>



                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Payment</h5>
                    <h5 class="card-title text-center pb-0 fs-4">Total: <?php echo $total; ?></h5>

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
