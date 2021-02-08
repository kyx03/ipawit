<?php 
session_start();

include 'connection.php';
//Edit Image
if(isset($_POST["saveImage"])) {

    $id = $_POST['id'];
    $changeImage = $_FILES['changeImage']['name'];
    $target = "../img/".basename($changeImage);

    $sql = "UPDATE about SET image='$changeImage' WHERE id='$id'";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['changeImage']['tmp_name'], $target)) {
        echo "<script>alert('Business Logo Successfully Updated!'); window.location.href='about.php';</script>";

    }else{
        echo "<script>alert('Business Logo Not Updated. Try again!'); window.location.href='about.php';</script>";
        }
    }

//Edit What
if(isset($_POST["saveWhat"])) {

$id = $_POST['id'];
$areaWhat = $_POST['areaWhat'];


$sql = "UPDATE about SET what='$areaWhat' WHERE id='$id'";
$query_run = mysqli_query($conn, $sql);

if ($query_run) {
    echo "<script>alert('About Successfully Updated!'); window.location.href='about.php';</script>";

}else{
    echo "<script>alert('About Not Updated. Try again!'); window.location.href='about.php';</script>";
    }
}

//Edit Who we are
if(isset($_POST["saveWho"])) {

    $id = $_POST['id'];
    $areaWho = $_POST['areaWho'];
    
    
    $sql = "UPDATE about SET who='$areaWho' WHERE id='$id'";
    $query_run = mysqli_query($conn, $sql);
    
    if ($query_run) {
        echo "<script>alert('About Successfully Updated!'); window.location.href='about.php';</script>";
    
    }else{
        echo "<script>alert('About Not Updated. Try again!'); window.location.href='about.php';</script>";
        }
    }
    

?>
