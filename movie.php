<?php 
// Start the session (uncomment this line if you want to start the session)
// @session_start(); 

// Start output buffering and session
ob_start();
session_start();

// Retrieve 'no' parameter from the GET request
$no = isset($_GET['no']) ? $_GET['no'] : null;

if ($no !== null) {
    // The 'no' parameter exists; you can use it safely.
    
    // Include 'connect.php' to establish a database connection
    require_once('connect.php');

    // Proceed with database queries or other logic
} else {
    // Handle the case where 'no' parameter is not set or invalid
    echo "Invalid or missing 'no' parameter.";
}
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
      if(isset($_SESSION['name'])){
        include "Manager_sidebar.php";
    }
    else if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
        include "sidebar.php";   }
    else
        include "Guest_sidebar.php";
  	?>

  <div class="card-body_detail" style="text-align: center;  ">
				  <br><br><br><br>
				  
				  <?php
					$sql = "SELECT * FROM Movie WHERE Movie_ID = " . $no;

					// Execute the query and check for errors
					$result = mysqli_query($conn, $sql);

					if (!$result) {
						// Query execution failed, handle the error
						echo "Error in the SQL query: " . mysqli_error($conn);
					} else {
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								$name = $row['Movie_Name'];
								$des = $row['Description'];
								$gen = $row['Genre'];
								$dur = $row['Duration'];
								$reday = $row['Release_Date'];
								$pos = $row['Movie_Poster'];
								$mov = $row['Trailer'];

								?><img class="MoviePosterDetail" src="<?php echo $pos ?>">
								<iframe class="youtube_frame" src="<?php echo $mov; ?>" allowfullscreen></iframe>
								<br><br><h1 class="header_detail">
								<?php echo $name; ?></h1>
								<div class="description">
									<p style="font-family: 'Kanit';">
										<?php echo $des; ?></p>
								</div>
								<h4 style="font-family: 'Kanit';"> Genre :
									<?php echo $gen ?></h4>
								<h4 style="font-family: 'Kanit';"> Duration :
									<?php echo $dur ?></h4>
								<h4 style="font-family: 'Kanit';"> Release date :
									<?php echo $reday ?></h4><br>
								<?php
							}
						} else {
							// No results found
							echo "No movie found with Movie_ID: " . $no;
						}
					}

					?>

					<div><a href="index.php">
									<button class="btn-animate animate shake">
													<span>Back</span>
									</button></a>
					</div>
			</div>
</body>
</html>
