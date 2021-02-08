<?php 
session_start();

include 'connection.php';
//Delete partner
    if(isset($_GET['delete'])){
            $id = $_GET['delete'];

            $conn->query("DELETE FROM partners WHERE id=$id") or die($mysqli->error());
            echo "<script>alert('Partner Successfully Deleted!'); window.location.href='partners.php';</script>";
    }

//Edit Partner

    if(isset($_POST["savePartner"])) {
        $id = $_POST['id'];

        $logo = $_FILES['logo']['name'];
        // Get text
        $name = $_POST['name'];

        // image file directory
        $target = "../partners/".basename($logo);

        $sql = "UPDATE partners SET logo='$logo', name='$name' WHERE id='$id'";
        // execute query
        mysqli_query($conn, $sql);

        if (move_uploaded_file($_FILES['logo']['tmp_name'], $target)) {
            echo "<script>alert('Partner Successfully Updated!'); window.location.href='partners.php';</script>";

        }else{
            echo "<script>alert('Partner Not Updated. Try again!'); window.location.href='partners.php';</script>";
            }
        }

//Add Partner
        if(isset($_POST["savepartner"])) {
                $image = $_FILES['partnerlogo']['name'];
                // Get text
                $image_text = mysqli_real_escape_string($conn, $_POST['partnername']);
        
                // image file directory
                $target = "../partners/".basename($image);
        
                $sql = "INSERT INTO partners (logo, name) VALUES ('$image', '$image_text')";
                // execute query
                mysqli_query($conn, $sql);
        
                if (move_uploaded_file($_FILES['partnerlogo']['tmp_name'], $target)) {
                    echo "<script>alert('Partner Successfully Added!'); window.location.href='partners.php';</script>";

                }else{
                    echo "<script>alert('Partner Not Added. Try again!'); window.location.href='partners.php';</script>";
                }
            }


?>