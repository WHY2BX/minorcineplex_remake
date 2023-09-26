<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	session_start();
	ob_start();
?>
<?php require_once('connect.php'); ?>
<?php 
    $select_Movie = $_POST['Movie'];
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


        $sql = "UPDATE Movie 
        SET Movie_Name = '$movie', Description = '$description', Genre = '$genre', Duration = '$duration',
            Release_Date = '$release', Last_Show_Date = '$last', Employee_Num = '$managerid', Movie_Poster = '$poster',
            Trailer = '$trailer'
        WHERE Movie_Name = '$select_Movie'";
        $result = mysqli_query($conn, $sql);
            echo '<script>alert("record was edited successfully")</script>';
			echo "<script> window.open('manageMovie_Edit.php','_self'); </script>";             
    }
    catch (Exception $e) {
        echo $e;
    }
         
			
          mysqli_close($conn);
?>
