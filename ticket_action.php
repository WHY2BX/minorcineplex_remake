<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	ob_start();
	session_start();
    
    require_once('connect.php');
    if (isset($_GET['hisNum'])) {
        $hisNum = $_GET['hisNum'];
        // Now you can safely use $hisNum
    } else {
        // Handle the case where 'hisNum' is not provided in the URL
        // Set a default value or display an error message.
        echo "Error: 'hisNum' is missing in the URL.";
    }
    $location = "Some Location";
    $starttime = "2023-10-13 08:00:00";
    
    $_SESSION['Location'] = $location;
    $_SESSION['Start_time'] = $starttime;


    if(isset($_POST['bo'])){
        try {
            //หาMovie_ID
            $sql1 = "SELECT Movie_ID FROM Booking WHERE Booking_ID = '".$hisNum."'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0) {
                while($row = mysqli_fetch_assoc($result1)) {	
                    $movie_id = $row['Movie_ID'];
                }
            }
            $sql2 = "SELECT Movie_Name FROM Movie WHERE Movie_ID = '".$movie_id."'";
            $result2 = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result2) > 0) {
                while($row = mysqli_fetch_assoc($result2)) {	
                    $movie_name = $row['Movie_Name'];
                    $_SESSION['Movie_his'] = $movie_name;
                }
            }

            //หา location_ID
            $sql1 = "SELECT location_ID FROM Booking WHERE Booking_ID = '".$hisNum."'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0 ) {
                while($row = mysqli_fetch_assoc($result1)) {	
                    $location_ID = $row['location_ID'];
                }
            }
            $sql2 = "SELECT location_name FROM Location WHERE location_ID = '".$location_ID."'";
            $result2 = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result2) > 0) {
                while($row = mysqli_fetch_assoc($result2)) {	
                    $location_name = $row['location_name'];
                    $_SESSION['Location_his'] = $location_name;
                }
            }

            //หา Theater_ID
            $sql1 = "SELECT Theater_ID FROM Booking WHERE Booking_ID = '".$hisNum."'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0 ) {
                while($row = mysqli_fetch_assoc($result1)) {	
                    $theater = $row['Theater_ID'];
                    $_SESSION['Theaters'] = $theater;
                }
            }


            //หา Showtime_ID
            $sql1 = "SELECT Showtime_ID FROM Booking WHERE Booking_ID = '".$hisNum."'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0) {
                while($row = mysqli_fetch_assoc($result1)) {	
                    $Showtime_ID = $row['Showtime_ID'];
                }
            }
            $sql2 = "SELECT Start_Time FROM Showtime WHERE Showtime_ID = '".$Showtime_ID."'";
            $result2 = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result2) > 0) {
                while($row = mysqli_fetch_assoc($result2)) {	
                    $Start_Time = $row['Start_Time'];
                    $_SESSION['Time_his'] = $Start_Time;
                }
            }


            //หา Theater_ID
            $sql1 = "SELECT Seat_ID FROM Booking WHERE Booking_ID = '".$hisNum."'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0 ) {
                while($row = mysqli_fetch_assoc($result1)) {	
                    $seat = $row['Seat_ID'];
                    $_SESSION['seat'] = $seat;
                }
            }            

            //หาNumticket + ticketprice

            
            $numticket = 0;
            $Seat = $_POST['seats'];
            //เก็บ list seats ใน $_SESSION
            $_SESSION['seats'] = $Seat;

            foreach($Seat as $totalselected){
                $numticket++;
            }
            $total = $numticket*120;
            $_SESSION['num'] = $numticket;
            $_SESSION['total'] = $total;
            //หาBooking_Date
            $date = date("y-m-d");

            

            echo "<script> window.open('ticket_his.php','_self'); </script>";
     
        }
        catch(Exception $e){
            echo $e;
        }
    }

    else{
        echo "error";
    }








?>
