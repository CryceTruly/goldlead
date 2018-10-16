<?php
if(isset($_GET['post'])){
    include "db.php";
    $id=$_GET['post'];
       // Prepare query
       $sql = 'DELETE FROM users WHERE id = :id';

       // Prepare statement
       if($stmt = $pdo->prepare($sql)){
         // Bind params
         $stmt->bindParam(':id', $id, PDO::PARAM_STR);
 
         // Attempt execute
         if($stmt->execute()){

    header("location:index.php?msg=User removed successfully");
   unset($pdo);

         }

        }

}else{
    header('location:index.php?msg=action not understood,type=failure');
}

?>