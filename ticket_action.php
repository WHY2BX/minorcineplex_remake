<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	ob_start();
	session_start();
    
    require_once('connect.php');
    $hisNum = $_GET['hisNum'];
    
    
    
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

            
            foreach($Seat as $seatnum){
                $sql6 = "INSERT INTO Booking (Movie_ID,Client_No,Theater_ID,Location_ID,Num_ticket,Total_Price,Showtime_ID,Seat_ID,Booking_date) 
                VALUES ($movieid,$clientid,$theater,$locationid,'1','120','$showtimeid', '$seatnum', '$date')";  
                $result6 = mysqli_query($conn, $sql6);
            }
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
