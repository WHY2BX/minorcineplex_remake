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

  <!-- pop up -->
  <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />

</head>

<body>
  

<?php 
      if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
          include "header.php";}
      else
          include "Guest_header.php";   
  ?>

  <!-- นับเวลาถอยหลัง -->
  <h1><span id="seconds">2</span></h1>
  
  <!--จะโหลดมาไว้ใน  server  หรือใช้แบบนี้ก็ได้ -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
  
  <script>
      function openColorBox(){
		  //กำหนดขนาดและหน้าเว็บที่จะแสดงใน popup สามารถใส่เป็นภาพก็ได้นะครับ
        $.colorbox({iframe:true, width:"800px", height:"500px", href: "http://devbanban.com/"});
      }
      
      function countDown(){
        seconds--
        $("#seconds").text(seconds);
        if (seconds === 0){
          openColorBox();
          clearInterval(i);
        }
      }
      //กำหนดเวลา วินาทีที่จะให้ popup ทำงาน 
      var seconds = 2,
          i = setInterval(countDown, 1000);
    </script>

</body>
</html>
