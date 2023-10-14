<?php

    header('Content-Type: application/json');

    require_once 'connect.php';

    $sqlQuerry = "SELECT Movie_Name, sum(Total_Price) earnings FROM Movie m join Booking b using(Movie_ID) group by movie_id";
    $result = mysqli_query($conn, $sqlQuerry);

    $data = array();

    foreach($result as $row){
        $data[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($data);



?>