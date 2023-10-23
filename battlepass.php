<?php 
	ob_start();
	session_start();
	require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MinorsCineplex</title>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
  <link href="./assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">
</head>
<body>

<?php
      if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
          include "header.php";
        }
      else
          include "Guest_header.php";
  ?>

<?php 
      if(isset($_SESSION['name'])){
        include "Manager_sidebar.php";
    }
    else if (isset($_SESSION['first_name']) && ! empty($_SESSION['first_name'])){
        include "sidebar.php";   }
    else
        include "Guest_sidebar.php";
  ?>

    <div class="headertext">
    <h1>MOVIE PASS</h1>
    </div>

    <?php
    $name = $_SESSION['first_name'];
    $sql = 'SELECT Client_No FROM Member WHERE First_Name = "' . $name . '"';
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $no = (int)$row['Client_No'];
        } else {
            $no = 0;
        }
    } else {
        $no = 0;
    }
    ?>

    <div class="rowreward">
      
            <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 1) {
                    echo "col_passed";
                    $noh1 = "h4_1";
                } else {
                    echo "col_pass";
                    $noh1 = "h4_1_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
        <div class="card">
            <div class="card-body">
                <img class="item_pass" src="./assets/img/free_pass.png" style="display: block; margin-left: auto; margin-right: auto">
                <br>
                <h4 class="<?php echo $noh1?>" style="font-family: 'Kanit'; text-align: center;">1</h4>
            </div>
          </div>
      </div>

          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 2) {
                    echo "col_passed";
                    $noh2 = "h4_2";
                } else {
                    echo "col_pass";
                    $noh2 = "h4_2_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount10.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh2?>" style="font-family: 'Kanit'; text-align: center;">2</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 3) {
                    echo "col_passed";
                    $noh3 = "h4_3";
                } else {
                    echo "col_pass";
                    $noh3 = "h4_3_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount10.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh3?>" style="font-family: 'Kanit'; text-align: center;">3</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No  =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 4) {
                    echo "col_passed";
                    $noh4 = "h4_4";
                } else {
                    echo "col_pass";
                    $noh4 = "h4_4_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount10.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh4?>" style="font-family: 'Kanit'; text-align: center;">4</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No  =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 5) {
                    echo "col_passed";
                    $noh5 = "h4_5";
                } else {
                    echo "col_pass";
                    $noh5 = "h4_5_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount10.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh5?>" style="font-family: 'Kanit'; text-align: center;">5</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No  =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 6) {
                    echo "col_passed";
                    $noh6 = "h4_6";
                } else {
                    echo "col_pass";
                    $noh6 = "h4_6_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount10.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh6?>" style="font-family: 'Kanit'; text-align: center;">6</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No  =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 7) {
                    echo "col_passed";
                    $noh7 = "h4_7";
                } else {
                    echo "col_pass";
                    $noh7 = "h4_7_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount60.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh7?>" style="font-family: 'Kanit'; text-align: center;">7</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No  =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 8) {
                    echo "col_passed";
                    $noh8 = "h4_8";
                } else {
                    echo "col_pass";
                    $noh8 = "h4_8_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount10.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh8?>" style="font-family: 'Kanit'; text-align: center;">8</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No  =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 9) {
                    echo "col_passed";
                    $noh9 = "h4_9";
                } else {
                    echo "col_pass";
                    $noh9 = "h4_9_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount10.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh9?>" style="font-family: 'Kanit'; text-align: center;">9</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No  =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 10) {
                    echo "col_passed";
                    $noh10 = "h4_10";
                } else {
                    echo "col_pass";
                    $noh10 = "h4_10_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount10.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh10?>" style="font-family: 'Kanit'; text-align: center;">10</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No  =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 11) {
                    echo "col_passed";
                    $noh11 = "h4_11";
                } else {
                    echo "col_pass";
                    $noh11 = "h4_11_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/discount10.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh11?>" style="font-family: 'Kanit'; text-align: center;">11</h4>
                </div>
              </div>
          </div>
          <div class="<?php

            $sql = "SELECT `Status` FROM Member_Promotion where Client_No  =" . $no;
            $result = mysqli_query($conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) >= 12) {
                    echo "col_passed";
                    $noh12 = "h4_12";
                } else {
                    echo "col_pass";
                    $noh12 = "h4_12_0";
                }
            } else {
                echo "query_failed";
            }
        ?>">
            <div class="card">
                <div class="card-body">
                    <img class="item_pass" src="./assets/img/free_pass.png" style="display: block; margin-left: auto; margin-right: auto">
                    <br>
                   <h4 class="<?php echo $noh12?>" style="font-family: 'Kanit'; text-align: center;">12</h4>
                </div>
            </div>
        </div>
        <div id="myProgress">
        <div id="myBar"></div>
        </div>
    </div>
    <script src="battlepass.js"></script>

</body>
</html>
