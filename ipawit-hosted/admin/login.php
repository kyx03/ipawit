<?php 
session_start(); 
include "connection.php";

if(isset($_POST['loginbutton']))
{
    $uname = $_POST['uname']; 
	$password = $_POST['password']; 

    $query = "SELECT * FROM user WHERE username='$uname' AND password='$password' LIMIT 1";
    $query_run = mysqli_query($conn, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $uname;
        echo "<script>alert('Successfully Logged in!'); window.location.href='home.php';</script>";
   } 
   else
   {
	header("Location: index.php?error=Incorrect Username or Password");
	exit();
   }
    
}
?>