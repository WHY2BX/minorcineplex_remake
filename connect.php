<?php
//Iserv
// $servername = "161.246.127.24";
// $username = "admin";
// $password = "admin";
// $dbname = "minorcineplex";
// $port = 9061;

//Localh
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minorcineplex";
$port = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
