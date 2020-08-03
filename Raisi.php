
<?php

$servername = "localhost";
    $username = "MySALIM";
    $password =  "xmjQVbLREzIXy3dR";
    $dbname = "MySALIM" ;
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn,"utf8");
    header('Content-Type: text/html; charset=utf-8');
    
    ?>
