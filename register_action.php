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
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	


?>

<?php
	
    try{
		$sql = "INSERT INTO Member (First_Name,Last_Name,Username,Password) VALUES ('$firstname', '$lastname', '$username', '$password')";  
		$result = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            echo "<script> window.open('login.php','_self'); </script>";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
           
    }
    catch (Exception $e) {
        echo "<script> window.open('login.php','_self'); </script>";
    }
         
			
          mysqli_close($conn);
?>
