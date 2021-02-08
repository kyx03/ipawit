<!DOCTYPE html>
<html lang="en">
    <title>iPaw-IT Admin Panel</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../img/logo.png">
</head>
<body class="admin">

<div class="editContainer">
    <div class="container" id="blur">
        <?php include "sidebar-header.php" ?>

        <div class="table-container">
            <h2 class="table-heading">Manage PARTNERS</h2>

                        <form action="codePartners.php" method="POST" enctype="multipart/form-data">
                            <div class="popup-contentEdit">
                            <div class="headerEdit">
                            <h2 class="label">Edit Partner</h2> 
                            </div>

                            <?php include "connection.php"; // Using database connection file here

                                $id = $_GET['id'];
                                $records = mysqli_query($conn, "select * from partners WHERE id='$id'");
                                $rows=mysqli_fetch_assoc($records);               
                                {
                                ?>                        
                                    <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                                    <img src="../partners/<?php echo ($rows['logo']);?>" alt="" class="boxLogoEdit">
                                    <input type="file" class="imageEdit"  name="logo" id="logo" required>
                                    <input type="text" class="textboxEditPartner" id="name" value="<?php echo ($rows['name']); ?>" name="name" placeholder="Name" required>
                                    <div>
                                    <button type="submit" class="buttonSavePartner" name="savePartner"><i class='bx bx-save bx-tada' ></i> Save</button>
                                    <a href="partners.php"><div class="buttonBackPartner"><i class='bx bx-arrow-back bx-tada' ></i> Back</div></a></td>
                                    </div>
                                    <?php
                                    }
                            ?><?php mysqli_close($conn);  // close connection ?>
                            </div>
                        </form>

    </div>

    </div>

    <script src="../js/main.js"></script>
</body>
</html>
