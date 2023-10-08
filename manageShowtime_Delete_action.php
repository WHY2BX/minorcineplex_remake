<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	session_start();
	ob_start();
?>
<?php require_once('connect.php'); ?>
<?php
	$moviename = $_POST['Movie'];
    $locationname = $_POST['Location'];
    $theater = $_POST['Theater'];
    $starttime = $_POST['st'];
?>

<?php


    //หา movieID
    $sql1 = "SELECT Movie_ID FROM Movie WHERE Movie_Name = '".$moviename."'";
	$result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
		while($row = mysqli_fetch_assoc($result1)) {	
			$movieid = $row['Movie_ID'];
		}
	}


    //หา LocationID
	$sql2 = "SELECT location_ID FROM Location WHERE location_name = '".$locationname."'";
	$result2 = mysqli_query($conn, $sql2);
	if (mysqli_num_rows($result2) > 0) {
		while($row1 = mysqli_fetch_assoc($result2)) {	
			$locationid = $row1['location_ID'];
		}
	}


	
    try{
		$sql = "DELETE FROM Showtime Where Movie_ID = '$movieid' AND Location_ID = '$locationid' AND Theater_ID = '$theater' And Start_Time = '$starttime'";  
		$result = mysqli_query($conn, $sql);
			echo '<script>alert("record was deleted successfully")</script>';
			echo "<script> window.open('manageShowtime_Delete.php','_self'); </script>";          
    }
    catch (Exception $e) {
        echo $e;
    }
         
			
          mysqli_close($conn);
?>
