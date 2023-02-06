<?php   
 include '../database.php';  
 if (isset($_GET['ID'])) {  
      $id = $_GET['ID'];  
      $query = "DELETE FROM `contact` WHERE ID = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:../admin.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
     }  

     if (isset($_GET['ID'])) {  
      $id = $_GET['ID'];  
      $query = "DELETE FROM `nieuws` WHERE ID = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:../admin.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  

 if (isset($_GET['ID'])) {  
      $id = $_GET['ID'];  
      $query = "DELETE FROM `medicijn` WHERE ID = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:../admin.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 
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
