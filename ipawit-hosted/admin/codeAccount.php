<?php

if(isset($_POST['saveAccount']))
{
    
require 'connection.php';

   $id = $_POST['id'];
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "UPDATE user SET username='$username',  password='$password' WHERE id='$id'";
   $query_run = mysqli_query($conn, $sql);

   if ($query_run) {
       echo "<script>alert('Account Successfully Updated!'); window.location.href='account.php';</script>";

   }else{
       echo "<script>alert('Account Not Updated. Try again!'); window.location.href='account.php';</script>";
       }
   }

?>

