<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	session_start();
	ob_start();
	$_SESSION = array();
?>
<?php require_once('connect.php'); ?>
<?php
    $movie = mysqli_real_escape_string($conn, $_POST['movie']); //mysqli_real_escape_string เอาไว้ใช้ลบตัวอักษรพิเศษ
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$genre = $_POST['genre'];
	$duration = $_POST['duration'];
	$release = $_POST['releasedate'];
	$last = $_POST['lastdate'];
	$poster = $_POST['poster'];
	$trailer = $_POST['trailer'];
?>

<?php

	
    try{
		$sql = "INSERT INTO Movie (Movie_Name,Description,Genre,Duration,Release_Date,Last_Show_Date,Employee_Num,Movie_Poster,Trailer) VALUES ('$movie','$description','$genre','$duration','$release','$last',1,'$poster','$trailer')";  
		$result = mysqli_query($conn, $sql);
            echo "New record created successfully";         
    }
    catch (Exception $e) {
        echo $e;
		echo $description;
    }
         
			
          mysqli_close($conn);
?>
