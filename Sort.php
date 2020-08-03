<?php

include("Raisi.php");

$UserName = strip_tags(trim($_POST["UserName"]));
    if ($UserName<>""){
$All_Users = array();
$result = "SELECT * FROM MyUsers WHERE UserName = '$UserName'" ;
$result_Users = $conn->query($result);
        
        while($rows = $result_Users->fetch_assoc()) {
             
            $All_Users[] = $rows;
            
        }}
    
   echo json_encode(array("All_Users"=>$All_Users));

mysql_close($conn);
 


?>
