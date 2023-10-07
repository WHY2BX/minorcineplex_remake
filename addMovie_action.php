<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	session_start();
	ob_start();
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
	$manager = $_SESSION['name'];
?>

<?php

	
    try{

        // หาEmployee_Num 
        $sql1 = "SELECT Employee_Num from Movie_Manager Where User_Name = '$manager'"; 
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) > 0) {
            while($row = mysqli_fetch_assoc($result1)) {	
                $managerid = $row['Employee_Num'];
            }
        }


		$sql = "INSERT INTO Movie (Movie_Name,Description,Genre,Duration,Release_Date,Last_Show_Date,Employee_Num,Movie_Poster,Trailer) VALUES ('$movie','$description','$genre','$duration','$release','$last',$managerid,'$poster','$trailer')";  
		$result = mysqli_query($conn, $sql);
			echo '<script>alert("New record created successfully")</script>';
			echo "<script> window.open('addMovie.php','_self'); </script>";         
    }
    catch (Exception $e) {
        echo $e;
		echo $description;
    }
         
			
          mysqli_close($conn);
?>
