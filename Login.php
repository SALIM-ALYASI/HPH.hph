<?php

 include("Raisi.php");

 
$Password = strip_tags(trim($_POST["Password"]));
$Email = strip_tags(trim($_POST["Email"]));


if ($Email<>"" && $Password<>""){

$sql_query = "SELECT * FROM MyUsers WHERE Email = '$Email'";
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
 
