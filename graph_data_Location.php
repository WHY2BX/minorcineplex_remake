<?php

    header('Content-Type: application/json');

    require_once 'connect.php';

    $sqlQuerry = "SELECT location_name, sum(Total_Price) earnings FROM Location m join Booking b using(location_ID) group by location_name";
    $result = mysqli_query($conn, $sqlQuerry);

    $data = array();

    foreach($result as $row){
        $data[] = $row;
    }

    mysqli_close($conn);

    echo json_encode($data);



?>