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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
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
          include "header.php";}
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

  
    <br><br><br><br><br><br><br><br>
    <!-- booking seat area -->
    <div class="movie-containerseat">
      <label>Pick a movie: </label>
        <!-- รอ import รอบหนังจาก sql ถ้าเป็นไปได้ -->
        <form class="row g-3 needs-validation" action="booking_action.php" method="post" novalidate>
                    
                    <div class="col-12">
                        
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
        </form>
      
      <ul class="showcase">
        <li>
          <div class="seat"></div>
          <small>N/A</small>
        </li>
        <li>
          <div class="seat selected"></div>
          <small>selected</small>
        </li>
        <li>
          <div class="seat occupied"></div>
          <small>occupied</small>
        </li>    
      </ul>
      
      <div class="containerseat">
      
        <div class="screen"></div>
        <div style="font-size:15px;margin-bottom:15px">Screen</div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
          </div>
          <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
          </div>
          <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
          </div>
          <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
          </div>
          <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
          </div>
          <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
          </div>
        
        <p class="text">
          You have selected <span id="count">0</span> seats for the total price of Baht. <span id="total">0</span>
        </p>
        <button type="button" class="btn btn-dark rounded-pill" onClick="window.open('ticket.php?no=1', '_blank')" align="center">Book</button>
      </div>
    </div>
    
</body>
<script src="booking.js"></script>
</html>

              