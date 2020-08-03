  <?php

  include("Raisi.php");


  $All_Users = array();
  $result = "SELECT * FROM MyUsers" ;
  $result_Users = $conn->query($result);
          while($rows = $result_Users->fetch_assoc()) {
               
              $All_Users[] = $rows;
              
          }
      
     echo json_encode(array("All_Users"=>$All_Users));

  mysql_close($conn);
  ?>
