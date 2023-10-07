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
  <form>
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

    
  </form>
  <ul class="showcase">
    <li>
      <div class="seat"></div>
      <small>N/A</small>
    </li>
    <li>
      <div class="seat selected"></div>
      <small>Selected</small>
    </li>
    <li>
      <div class="seat occupied"></div>
      <small>Occupied</small>
    </li>    
  </ul>
  
  <div class="container">
    <div class="screen"></div>
    <form action="booking_action.php">
      <div class="row">
          <input type ="checkbox" class="seat" id="A1">
          <input type ="checkbox" class="seat" id="A2">
          <input type ="checkbox" class="seat" id="A3">
          <input type ="checkbox" class="seat" id="A4">
          <input type ="checkbox" class="seat" id="A5">
          <input type ="checkbox" class="seat" id="A6">
          <input type ="checkbox" class="seat" id="A7">
          <input type ="checkbox" class="seat" id="A8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" id="B1">
          <input type ="checkbox" class="seat" id="B2">
          <input type ="checkbox" class="seat" id="B3">
          <input type ="checkbox" class="seat" id="B4">
          <input type ="checkbox" class="seat" id="B5">
          <input type ="checkbox" class="seat" id="B6">
          <input type ="checkbox" class="seat" id="B7">
          <input type ="checkbox" class="seat" id="B8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" id="C1">
          <input type ="checkbox" class="seat" id="C2">
          <input type ="checkbox" class="seat" id="C3">
          <input type ="checkbox" class="seat" id="C4">
          <input type ="checkbox" class="seat" id="C5">
          <input type ="checkbox" class="seat" id="C6">
          <input type ="checkbox" class="seat" id="C7">
          <input type ="checkbox" class="seat" id="C8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" id="D1">
          <input type ="checkbox" class="seat" id="D2">
          <input type ="checkbox" class="seat" id="D3">
          <input type ="checkbox" class="seat" id="D4">
          <input type ="checkbox" class="seat" id="D5">
          <input type ="checkbox" class="seat" id="D6">
          <input type ="checkbox" class="seat" id="D7">
          <input type ="checkbox" class="seat" id="D8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" id="E1">
          <input type ="checkbox" class="seat" id="E2">
          <input type ="checkbox" class="seat" id="E3">
          <input type ="checkbox" class="seat" id="E4">
          <input type ="checkbox" class="seat" id="E5">
          <input type ="checkbox" class="seat" id="E6">
          <input type ="checkbox" class="seat" id="E7">
          <input type ="checkbox" class="seat" id="E8">
        </div>
        <div class="row">
          <input type ="checkbox" class="seat" id="F1">
          <input type ="checkbox" class="seat" id="F2">
          <input type ="checkbox" class="seat" id="F3">
          <input type ="checkbox" class="seat" id="F4">
          <input type ="checkbox" class="seat" id="F5">
          <input type ="checkbox" class="seat" id="F6">
          <input type ="checkbox" class="seat" id="F7">
          <input type ="checkbox" class="seat" id="F8">
        </div>

        <p class="text">
        You have selected <span id="count">0</span> seats for the total price of Rs. <span id="total">0</span>
        </p>

        <div class="col-12">
          <button class="btn btn-primary w-100" type="submit">Submit</button>
        </div>
    </form>                        
  </div>
</div>

<script src="bookingnew.js"></script>
</body>
</html>

