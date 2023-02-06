<?php   
 include '../database.php';  
 if (isset($_GET['ID'])) {  
      $id = $_GET['ID'];  
      $query = "DELETE FROM `users` WHERE usersId = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:../admin.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  
