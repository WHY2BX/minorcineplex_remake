<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	ob_start();
	session_start();

?>
<?php
    if(isset($_POST['Bookingseat'])){

        $Seat = $_POST['seats'];
        foreach($Seat as $seatnum){
            echo $seatnum;
        }
    }
    else{
        echo "ISUS";
    }








?>