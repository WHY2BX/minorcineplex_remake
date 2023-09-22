<?php

	  session_start();
	  session_destroy();	  
	  $_SESSION['userid'] = "";		
	  $_SESSION['firstname'] = "";	
	  header( "location: login.php" );

?>
