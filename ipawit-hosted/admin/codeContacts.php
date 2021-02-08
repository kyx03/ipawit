<?php 
session_start();

include 'connection.php';
//Edit Service Box 1
if(isset($_POST["saveOne"])) {

    $id = $_POST['id'];
    $titleOne = $_POST['titleOne'];
    $descriptionOne = $_POST['descriptionOne'];

    $sql = "UPDATE contacts SET title='$titleOne', description='$descriptionOne' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        echo "<script>alert('Call Us box Successfully Updated!'); window.location.href='contacts.php';</script>";

    }else{
        echo "<script>alert('Call Us box  Not Updated. Try again!'); window.location.href='contacts.php';</script>";
        }
    }

//Edit Service Box 2
if(isset($_POST["saveTwo"])) {

    $id = $_POST['id'];
    $titleTwo = $_POST['titleTwo'];
    $descriptionTwo = $_POST['descriptionTwo'];

    $sql = "UPDATE contacts SET title='$titleTwo', description='$descriptionTwo' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        echo "<script>alert('Send an Email Box Successfully Updated!'); window.location.href='contacts.php';</script>";

    }else{
        echo "<script>alert('Send an Email Box  Not Updated. Try again!'); window.location.href='contacts.php';</script>";
        }
    }

//Edit Service Box 3
if(isset($_POST["saveThree"])) {

    $id = $_POST['id'];
    $titleThree = $_POST['titleThree'];
    $descriptionThree = $_POST['descriptionThree'];

    $sql = "UPDATE contacts SET title='$titleThree', description='$descriptionThree' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        echo "<script>alert('Send Message Box Successfully Updated!'); window.location.href='contacts.php';</script>";

    }else{
        echo "<script>alert('Send Message Box  Not Updated. Try again!'); window.location.href='contacts.php';</script>";
        }
    }


?>
