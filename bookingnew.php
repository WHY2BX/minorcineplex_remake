<?php 
	//@session_start();
	ob_start();
	session_start();		
	require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="bookingnew.css" rel="stylesheet">
</head>
<body>
<div class="movie-container">
  <label>Pick a movie: </label>
  
  <form action="booking_action.php" method="POST">
  
  
  <div class="col-12">
          <label for="Movie">Choose a Movie:</label>                  
          <?php
          //หนัง
                $sql = "SELECT * FROM Movie";	
                $result = mysqli_query($conn, $sql);

               if (mysqli_num_rows($result) > 0) {
                                
                    echo "<select name ='Movie' id='movie' class='dropdown-item'>";

                  while($row = mysqli_fetch_assoc($result)) {	
                        echo "<option>".$row["Movie_Name"]."</option>";                                          
                                }
                  echo "</select>";
                            }
           ?>
    </div>

    <div class="col-12">
          <label for="location">Choose a location:</label>                  
          <?php
          //สาขา
                $sql = "SELECT * FROM Location";	
                $result = mysqli_query($conn, $sql);

               if (mysqli_num_rows($result) > 0) {
                                
                    echo "<select name ='Location' id='location' class='dropdown-item'>";

                  while($row = mysqli_fetch_assoc($result)) {	
                        echo "<option>".$row["location_name"]."</option>";                                          
                                }
                  echo "</select>";
                  $loc_name = "</select>";
                            }
           ?>
    </div>

    <div class="col-12">
          <label for="Movie">Choose a Theater:</label>                  
          <?php
          //โรงที่
                $sql = "SELECT DISTINCT Theater_ID FROM Theaters ";	
                $result = mysqli_query($conn, $sql);

               if (mysqli_num_rows($result) > 0) {
                                
                    echo "<select name ='Theaters' id='Theaters' class='dropdown-item'>";

                  while($row = mysqli_fetch_assoc($result)) {	
                        echo "<option>".$row["Theater_ID"]."</option>";                                          
                                }
                  echo "</select>";
                            }
           ?>
    </div>

    <div class="col-12">
          <label for="Movie">Choose a time:</label>                  
          <?php
          //เวลาฉาย
                $sql = "SELECT DISTINCT Start_Time FROM Showtime";	
                $result = mysqli_query($conn, $sql);

               if (mysqli_num_rows($result) > 0) {
                                
                    echo "<select name ='Start_time' id='Start_times' class='dropdown-item'>";

                  while($row = mysqli_fetch_assoc($result)) {	
                        echo "<option>".$row["Start_Time"]."</option>";                                          
                                }
                  echo "</select>";
                            }
           ?>
    </div>




  
  <div class="container">
    <div class="screen"></div>
    <form action="booking_action.php">
    <div class="row">
          <input type ="checkbox" class="seat" name = "seats[]" value="A1">
          <input type ="checkbox" class="seat" name = "seats[]" value="A2">
          <input type ="checkbox" class="seat" name = "seats[]" value="A3">
          <input type ="checkbox" class="seat" name = "seats[]" value="A4">
          <input type ="checkbox" class="seat" name = "seats[]" value="A5">
          <input type ="checkbox" class="seat" name = "seats[]" value="A6">
          <input type ="checkbox" class="seat" name = "seats[]" value="A7">
          <input type ="checkbox" class="seat" name = "seats[]" value="A8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" name = "seats[]" value="B1">
          <input type ="checkbox" class="seat" name = "seats[]" value="B2">
          <input type ="checkbox" class="seat" name = "seats[]" value="B3">
          <input type ="checkbox" class="seat" name = "seats[]" value="B4">
          <input type ="checkbox" class="seat" name = "seats[]" value="B5">
          <input type ="checkbox" class="seat" name = "seats[]" value="B6">
          <input type ="checkbox" class="seat" name = "seats[]" value="B7">
          <input type ="checkbox" class="seat" name = "seats[]" value="B8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" name = "seats[]" value="C1">
          <input type ="checkbox" class="seat" name = "seats[]" value="C2">
          <input type ="checkbox" class="seat" name = "seats[]" value="C3">
          <input type ="checkbox" class="seat" name = "seats[]" value="C4">
          <input type ="checkbox" class="seat" name = "seats[]" value="C5">
          <input type ="checkbox" class="seat" name = "seats[]" value="C6">
          <input type ="checkbox" class="seat" name = "seats[]" value="C7">
          <input type ="checkbox" class="seat" name = "seats[]" value="C8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" name = "seats[]" value="D1">
          <input type ="checkbox" class="seat" name = "seats[]" value="D2">
          <input type ="checkbox" class="seat" name = "seats[]" value="D3">
          <input type ="checkbox" class="seat" name = "seats[]" value="D4">
          <input type ="checkbox" class="seat" name = "seats[]" value="D5">
          <input type ="checkbox" class="seat" name = "seats[]" value="D6">
          <input type ="checkbox" class="seat" name = "seats[]" value="D7">
          <input type ="checkbox" class="seat" name = "seats[]" value="D8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" name = "seats[]" value="E1">
          <input type ="checkbox" class="seat" name = "seats[]" value="E2">
          <input type ="checkbox" class="seat" name = "seats[]" value="E3">
          <input type ="checkbox" class="seat" name = "seats[]" value="E4">
          <input type ="checkbox" class="seat" name = "seats[]" value="E5">
          <input type ="checkbox" class="seat" name = "seats[]" value="E6">
          <input type ="checkbox" class="seat" name = "seats[]" value="E7">
          <input type ="checkbox" class="seat" name = "seats[]" value="E8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" name = "seats[]" value="F1">
          <input type ="checkbox" class="seat" name = "seats[]" value="F2">
          <input type ="checkbox" class="seat" name = "seats[]" value="F3">
          <input type ="checkbox" class="seat" name = "seats[]" value="F4">
          <input type ="checkbox" class="seat" name = "seats[]" value="F5">
          <input type ="checkbox" class="seat" name = "seats[]" value="F6">
          <input type ="checkbox" class="seat" name = "seats[]" value="F7">
          <input type ="checkbox" class="seat" name = "seats[]" value="F8">
        </div>

        <p class="text">
        คุณได้เลือก <span id="count">0</span> ที่นั่ง, ราคารวมทั้งสิ้น <span id="total">0</span> บาท
        </p>

        <div class="col-12">
          <button class="btn btn-primary w-100" name = "bo" type="submit">Submit</button>
        </div>
    </form>
    </form>                         
  </div>
</div>

<script src="bookingnew.js"></script>
</body>
</html>
