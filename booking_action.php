<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	ob_start();
	session_start();



    require_once('connect.php');

    
    $movie = $_POST['Movie'];
    $theater = $_POST['Theaters'];
    $location = $_POST['Location'];
	$locationid;
    $client = $_SESSION['name'];
    $clientid;
    $starttime = $_POST['Start_time'];
    $showtimeid;

    if(isset($_POST['bo'])){
        try {
            //หาMovie_ID
            $sql1 = "SELECT Movie_ID FROM Movie WHERE Movie_Name = '".$movie."'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0) {
                while($row = mysqli_fetch_assoc($result1)) {	
                    $movieid = $row['Movie_ID'];
                }
            }

            //หา location_ID
            $sql2 = "SELECT location_ID FROM Location WHERE location_name = '".$location."'";
            $result2 = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result2) > 0) {
                while($row1 = mysqli_fetch_assoc($result2)) {	
                    $locationid = $row1['location_ID'];
                }
            }

            //หา Client_ID
            $sql4 = "SELECT Client_No from Member Where Username = '$client'"; 
            $result4 = mysqli_query($conn, $sql4);
            if (mysqli_num_rows($result4) > 0) {
                while($row = mysqli_fetch_assoc($result4)) {	
                    $clientid = $row['Client_No'];
                }
            }

            //หา Showtime_ID
            $sql5 = "SELECT Showtime_ID from Showtime Where Theater_ID = '$theater' AND Start_time = '$starttime'"; 
            $result5 = mysqli_query($conn, $sql5);
            if (mysqli_num_rows($result5) > 0) {
                while($row = mysqli_fetch_assoc($result5)) {	
                    $showtimeid = $row['Showtime_ID'];
                }
            }

            //Numticket + ticketprice ? ยังหาวิธีไม่ได้



            $Seat = $_POST['seats'];
            foreach($Seat as $seatnum){
                $sql6 = "INSERT INTO Booking (Movie_ID,Client_No,Theater_ID,Location_ID,Num_ticket,Total_Price,Showtime_ID,Seat_ID) 
                VALUES ($movieid,$clientid,$theater,$locationid,'2','240','$showtimeid', '$seatnum')";  
                $result6 = mysqli_query($conn, $sql6);
            }
            echo "<script> window.open('ticket.php','_self'); </script>";
     
        }
        catch(Exception $e){
            echo $e;
        }
    }









    else{
        echo "error";
    }








?>
