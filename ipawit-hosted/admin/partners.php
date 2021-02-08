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

<div class="modal" id="modal">
            <form action="codePartners.php" method="POST" enctype="multipart/form-data">

                <div id="addpartnerBox" data-backdrop="static" data-keyboard="false">
                    <div class="header">
                    <h2 class="label">Add Partner</h2> 
                    <div class="button exit" onclick="addpartnerBoxToggle();"><i class='bx bx-x modal_icon'></i></div>
                    </div>
                    <div class="popup-content">
                            <input type="file" name="partnerlogo" id="partnerlogo" class="imagepartner" required>
                            <input type="text" class="textboxpartner" id="partnername" name="partnername" value="" placeholder="Partner's name" required>
                            <button type="submit" class="buttonSavePartner" name="savepartner" id="savepartner"><i class='bx bx-save bx-tada'></i> Save </button>
                    </div>
                </div>
            </form>

</div>

<div class="editContainer">
    <div class="container" id="blur">
        <?php include "sidebar-header.php" ?>

        <div class="table-container">
            <h2 class="table-heading">Manage PARTNERS<div class="addPartner" onclick="addpartnerBoxToggle();"><i class='bx bxs-add-to-queue bx-tada' ></i> Add Partner</div></h2>
            <table>
                <thead>
                    <tr>
                        <th class="logohide">Brand Logo</th>
                        <th>Name</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody class="partnersTable">
                
                        <?php include "connection.php"; // Using database connection file here

                        $records = mysqli_query($conn,"select * from partners"); // fetch data from database
                        while($data = mysqli_fetch_array($records))
                        {
                        ?>
                        <tr>                      
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <td class="logohide"><img src="../partners/<?php echo ($data['logo']);?>"></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><a href="partnersEdit.php?id=<?php echo $data['id']; ?>"><button class="buttonAdmin" name="edit" id="edit"><i class='bx bxs-edit bx-tada' ></i> Edit</button></a>
                            <a href="codePartners.php?delete=<?php echo $data['id']; ?>"><button class="adminDelete"><i class='bx bxs-trash bx-tada' ></i> Delete</button></a></td>
                        <?php
                        }
                        ?>
                        </td>
                        </tr><?php mysqli_close($conn);  // close connection ?>
                </tbody>
            </table>
        </div>
    <!-- <form action="codePartners.php" method="POST" enctype="multipart/form-data">
        <div class="editPartner-table">
            <table>

                <tbody class="EditpartnersTable">
                
                <?php include "connection.php"; // Using database connection file here

                            $id = $_GET['id'];
                            $records = mysqli_query($conn, "select * from partners WHERE id='$id'");
                            $rows=mysqli_fetch_assoc($records);               
                            {
                            ?>                        
                            <tr>                      
                            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                            <td class="logohide"><img src="../partners/<?php echo ($rows['logo']);?>" alt="" class="boxLogoEdit"></td>
                            <div class="down">
                            <td><input type="file" class="imageEdit"  name="logo" id="logo" required>
                            <input type="text" class="textboxEditPartner" id="name" value="<?php echo ($rows['name']); ?>" name="name" placeholder="Name" required>
                            <button type="submit" class="buttonSavePartner" name="savePartner"><i class='bx bx-save bx-tada' ></i> Save</button></td>
                            </div>
                        <?php
                        }
                        ?>
                        </td>
                        </tr><?php mysqli_close($conn);  // close connection ?>
                </tbody>
            </table>
        </div>
    </form> -->
    </div>

    </div>

    <script src="../js/main.js"></script>
</body>
</html>
