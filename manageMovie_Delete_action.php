<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	session_start();
	ob_start();
?>
<?php require_once('connect.php'); ?>
<?php
	$moviename = $_POST['Movie'];
?>

<?php

	
    try{
		$sql = "DELETE FROM Movie Where Movie_Name = '$moviename'";  
		$result = mysqli_query($conn, $sql);
			echo '<script>alert("record was deleted successfully")</script>';
			echo "<script> window.open('manageMovie_Delete.php','_self'); </script>";          
    }
    catch (Exception $e) {
        echo $e;
		echo $description;
    }
         
			
          mysqli_close($conn);
?>
