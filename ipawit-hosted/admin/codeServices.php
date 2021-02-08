<?php 
session_start();

include 'connection.php';
//Edit Service Box 1
if(isset($_POST["saveserviceOne"])) {

    $id = $_POST['id'];
    $titleOne = $_POST['titleOne'];
    $desciptionOne = $_POST['desciptionOne'];
    $serviceImageOne = $_FILES['serviceImageOne']['name'];
    $target = "../img/".basename($serviceImageOne);

    $sql = "UPDATE services SET title='$titleOne', description='$desciptionOne', image='$serviceImageOne' WHERE id='$id'";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['serviceImageOne']['tmp_name'], $target)) {
        echo "<script>alert('Service box 1 Successfully Updated!'); window.location.href='services.php';</script>";

    }else{
        echo "<script>alert('Service box 1  Not Updated. Try again!'); window.location.href='services.php';</script>";
        }
    }

//Edit Service Box 2
if(isset($_POST["saveserviceTwo"])) {

    $id = $_POST['id'];
    $titleTwo = $_POST['titleTwo'];
    $desciptionTwo = $_POST['desciptionTwo'];
    $serviceImageTwo = $_FILES['serviceImageTwo']['name'];
    $target = "../img/".basename($serviceImageTwo);

    $sql = "UPDATE services SET title='$titleTwo', description='$desciptionTwo', image='$serviceImageTwo' WHERE id='$id'";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['serviceImageTwo']['tmp_name'], $target)) {
        echo "<script>alert('Service box 2 Successfully Updated!'); window.location.href='services.php';</script>";

    }else{
        echo "<script>alert('Service box 2  Not Updated. Try again!'); window.location.href='services.php';</script>";
        }
    }


//Edit Service Box 3
if(isset($_POST["saveserviceThree"])) {

    $id = $_POST['id'];
    $titleThree = $_POST['titleThree'];
    $desciptionThree = $_POST['desciptionThree'];
    $serviceImageThree = $_FILES['serviceImageThree']['name'];
    $target = "../img/".basename($serviceImageThree);

    $sql = "UPDATE services SET title='$titleThree', description='$desciptionThree', image='$serviceImageThree' WHERE id='$id'";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['serviceImageThree']['tmp_name'], $target)) {
        echo "<script>alert('Service box 3 Successfully Updated!'); window.location.href='services.php';</script>";

    }else{
        echo "<script>alert('Service box 3  Not Updated. Try again!'); window.location.href='services.php';</script>";
        }
    }

?>
