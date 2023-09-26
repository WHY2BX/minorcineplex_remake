<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	session_start();
	ob_start();
	$_SESSION = array();
?>
<?php require_once('connect.php'); ?>
<?php
	$moviename = $_POST['Movie'];
?>

<?php

	
    try{
		$sql = "DELETE FROM Movie Where Movie_Name = '$moviename'";  
		$result = mysqli_query($conn, $sql);
            echo "record was deleted successfully";         
    }
    catch (Exception $e) {
        echo $e;
		echo $description;
    }
         
			
          mysqli_close($conn);
?>
