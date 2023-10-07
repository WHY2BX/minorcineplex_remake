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
           ?></div>
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
    
    <div class="row">
        <div class="seat" id="A1"></div>
        <div class="seat" id="A2"></div>
        <div class="seat" id="A3"></div>
        <div class="seat" id="A4"></div>
        <div class="seat" id="A5"></div>
        <div class="seat" id="A6"></div>
        <div class="seat" id="A7"></div>
        <div class="seat" id="A8"></div>
      </div>
      <div class="row">
        <div class="seat" id="B1"></div>
        <div class="seat" id="B2"></div>
        <div class="seat" id="B3"></div>
        <div class="seat" id="B4"></div>
        <div class="seat" id="B5"></div>
        <div class="seat" id="B6"></div>
        <div class="seat" id="B7"></div>
        <div class="seat" id="B8"></div>
      </div>
      <div class="row">
        <div class="seat" id="C1"></div>
        <div class="seat" id="C2"></div>
        <div class="seat" id="C3"></div>
        <div class="seat" id="C4"></div>
        <div class="seat" id="C5"></div>
        <div class="seat" id="C6"></div>
        <div class="seat" id="C7"></div>
        <div class="seat" id="C8"></div>
      </div>
      <div class="row">
        <div class="seat" id="D1"></div>
        <div class="seat" id="D2"></div>
        <div class="seat" id="D3"></div>
        <div class="seat" id="D4"></div>
        <div class="seat" id="D5"></div>
        <div class="seat" id="D6"></div>
        <div class="seat" id="D7"></div>
        <div class="seat" id="D8"></div>
      </div>
      <div class="row">
        <div class="seat" id="E1"></div>
        <div class="seat" id="E2"></div>
        <div class="seat" id="E3"></div>
        <div class="seat" id="E4"></div>
        <div class="seat" id="E5"></div>
        <div class="seat" id="E6"></div>
        <div class="seat" id="E7"></div>
        <div class="seat" id="E8"></div>
      </div>
      <div class="row">
        <div class="seat" id="F1"></div>
        <div class="seat" id="F2"></div>
        <div class="seat" id="F3"></div>
        <div class="seat" id="F4"></div>
        <div class="seat" id="F5"></div>
        <div class="seat" id="F6"></div>
        <div class="seat" id="F7"></div>
        <div class="seat" id="F8"></div>
      </div>
    
    <p class="text">
      You have selected <span id="count">0</span> seats for the total price of Rs. <span id="total">0</span>
    </p>
  </div>
</div>

<script src="bookingnew.js"></script>
</body>
</html>

