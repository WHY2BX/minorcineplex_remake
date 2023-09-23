<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	ob_start();
	session_start();
	$_SESSION = array();
	session_destroy(); 
?>
<?php require_once('connect.php'); ?>
<?php
    $movie = $_POST['Movie'];
	$movieid;
    $location = $_POST['Location'];
	$locationid;
	$theater = $_POST['Theater'];
	$date = $_POST['date'];
	$stime = $_POST['start_time'];
	$etime = $_POST['end_time'];
?>

<?php

	$sql1 = "SELECT Movie_ID FROM Movie WHERE Movie_Name = '".$movie."'";
	$result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
		while($row = mysqli_fetch_assoc($result1)) {	
			$movieid = $row['Movie_ID'];
		}
	}

	$sql2 = "SELECT location_ID FROM Location WHERE location_name = '".$location."'";
	$result2 = mysqli_query($conn, $sql2);
	if (mysqli_num_rows($result2) > 0) {
		while($row1 = mysqli_fetch_assoc($result2)) {	
			$locationid = $row1['location_ID'];
		}
	}

	
    try{
		$sql = "INSERT INTO Showtime (Theater_ID,Movie_ID,Employee_Num,Location_ID,Show_Date,Start_Time,End_Time) VALUES ($theater,$movieid,1,$locationid,'$date','$stime','$etime')";  
		$result = mysqli_query($conn, $sql);


            echo "New record created successfully";

         
           
    }
    catch (Exception $e) {
        echo $e;
		echo $locationid;
    }
         
			
          mysqli_close($conn);
?>
