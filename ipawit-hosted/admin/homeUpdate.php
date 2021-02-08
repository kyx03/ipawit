<?php

if(isset($_POST['update']))
{
    
require 'connection.php';

   $id = $_POST['id'];
   $brand = $_POST['brand'];
           
   $query = "UPDATE `home` SET `brand`='".$brand."' WHERE `id` = $id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

?>