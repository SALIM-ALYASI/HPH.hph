<?php

include("Raisi.php");
    date_default_timezone_set("Asia/Muscat");
    $RegDate= date("Y/m/d - h:i a");


    $UserName = strip_tags(trim($_POST["UserName"]));
    $Password = strip_tags(trim($_POST["PassWord"]));
    $Email = strip_tags(trim($_POST["Email"]));


    if ($UserName<>"" && $Password<>"" && $Email<>""){

    $sql_query = "INSERT INTO MyUsers (UserName, Password, Email, RegDate)VALUES('$UserName','$Password','$Email','$RegDate')";
        $dbResult = $conn->query($sql_query);
        if ($dbResult === TRUE) {
            $check = "Reg_OK";
            } else {
             $check = "Error";
            }
    }

    echo json_encode(array("success"=>$check));

    mysql_close($conn);


    ?>
