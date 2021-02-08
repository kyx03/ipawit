<?php 
session_start();

include 'connection.php';
//Edit Logo
if(isset($_POST["submitlogo"])) {

    $id = $_POST['id'];
    $logo = $_FILES['logo']['name'];
    $target = "../img/".basename($logo);

    $sql = "UPDATE home SET logo='$logo' WHERE id='$id'";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['logo']['tmp_name'], $target)) {
        echo "<script>alert('Business Logo Successfully Updated!'); window.location.href='home.php';</script>";

    }else{
        echo "<script>alert('Business Logo Not Updated. Try again!'); window.location.href='home.php';</script>";
        }
    }

//Edit Poster
if(isset($_POST["submitposter"])) {

    $id = $_POST['id'];
    $poster = $_FILES['poster']['name'];
    $target = "../img/".basename($poster);

    $sql = "UPDATE home SET poster='$poster' WHERE id='$id'";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['poster']['tmp_name'], $target)) {
        echo "<script>alert('Poster Successfully Updated!'); window.location.href='home.php';</script>";

    }else{
        echo "<script>alert('Poster Not Updated. Try again!'); window.location.href='home.php';</script>";
        }
    }

    //Edit Background
if(isset($_POST["submitbg"])) {

    $id = $_POST['id'];
    $background = $_FILES['background']['name'];
    $target = "../img/".basename($background);

    $sql = "UPDATE home SET background='$background' WHERE id='$id'";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['background']['tmp_name'], $target)) {
        echo "<script>alert('background Successfully Updated!'); window.location.href='home.php';</script>";

    }else{
        echo "<script>alert('background Not Updated. Try again!'); window.location.href='home.php';</script>";
        }
    }



//Edit Brand
if(isset($_POST["savebrand"])) {

$id = $_POST['id'];
$brand = $_POST['brand'];


$sql = "UPDATE home SET brand='$brand' WHERE id='$id'";
$query_run = mysqli_query($conn, $sql);

if ($query_run) {
    echo "<script>alert('Business Details Successfully Updated!'); window.location.href='home.php';</script>";

}else{
    echo "<script>alert('Business Details Not Updated. Try again!'); window.location.href='home.php';</script>";
    }
}

//Edit Brandfull
if(isset($_POST["savebrandfull"])) {

    $id = $_POST['id'];
    $brandfull = $_POST['brandfull'];
    
    
    $sql = "UPDATE home SET brandfull='$brandfull' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);
    
    if ($query_run) {
        echo "<script>alert('Business Details Successfully Updated!'); window.location.href='home.php';</script>";
    
    }else{
        echo "<script>alert('Business Details Not Updated. Try again!'); window.location.href='home.php';</script>";
        }
    }

    //Edit Taglines
if(isset($_POST["submittag"])) {

    $id = $_POST['id'];
    $taglineOne = $_POST['taglineOne'];
    $taglineTwo = $_POST['taglineTwo'];
    
    $sql = "UPDATE home SET taglineOne='$taglineOne', taglineTwo='$taglineTwo' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);
    
    if ($query_run) {
        echo "<script>alert('Business Details Successfully Updated!'); window.location.href='home.php';</script>";
    
    }else{
        echo "<script>alert('Business Details Not Updated. Try again!'); window.location.href='home.php';</script>";
        }
    }

    

?>

<!-- if(isset($_POST["savebrand"])) {

$id = $_POST['id'];
$brand = $_POST['brand'];
$brandfull = $_POST['brandfull'];
$taglineOne = $_POST['taglineOne'];
$taglineTwo = $_POST['taglineTwo'];


$sql = "UPDATE home SET brand='$brand', brandfull='$brandfull', taglineOne='$taglineOne', taglineTwo='$taglineTwo' WHERE id='$id'";
// execute query
$query_run = mysqli_query($conn, $sql);

if ($query_run) {
    echo "<script>alert('Business Details Successfully Updated!'); window.location.href='codeHome.php';</script>";

}else{
    echo "<script>alert('Business Details Not Updated. Try again!'); window.location.href='home.php';</script>";
    }
} -->
