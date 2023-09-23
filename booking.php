<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="stylesheet" href="booking_style.css">
</head>
<body>
  



    <!-- booking seat area -->
    <div class="movie-container">
      <label>Pick a time: </label>
      <select id="movie">
        <!-- รอ import รอบหนังจาก sql ถ้าเป็นไปได้ -->
        <option value="250">Interstellar (Rs. 250)</option>
        <option value="200">Kabir Singh (Rs. 200)</option>
        <option value="150">Duniyadari (Rs. 150)</option>
        <option value="100">Natsamrat (Rs. 100)</option>
        <option value="100">หนังหมา (Rs. 100)</option>
      </select>
      
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
      
      <div class="container">
      
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
      </div>
    </div>
    
</body>
<script src="booking.js"></script>
</html>

