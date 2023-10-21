<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	ob_start();
	session_start();

    require_once('connect.php');

 

    ?>