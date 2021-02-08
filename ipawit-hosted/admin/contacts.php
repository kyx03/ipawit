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
<?php include "sidebar-header.php" ?>

    <?php include "connection.php"; // Using database connection file here

    $records = mysqli_query($conn,"select * from contacts where id='1'"); // fetch data from database
    while($data = mysqli_fetch_array($records))
    {
    ?>
            <form action="codeContacts.php" method="POST" enctype="multipart/form-data">
                <div id="contactA" data-backdrop="static" data-keyboard="false">
                    <div class="header">
                    <h2 class="label">Edit Call Us box</h2>
                    <div class="button exit" onclick="contactAToggle();"><i class='bx bx-x modal_icon'></i></div>
                    </div>
                    <div class="popup-content">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                            <input type="text" class="textboxService" id="brand" name="titleOne" value="<?php echo $data['title']; ?>" placeholder="Title" required>
                            <textarea class="textareacontact" id="textarea" name="descriptionOne" rows="20" cols="50" required><?php echo $data['description']; ?></textarea>
                            <td><button type="submit" class="buttonSaveAbout" name="saveOne"><i class='bx bx-save bx-tada' ></i> Save</button></td>
                    </div>
                </div>
            </form>
    <?php
            }
    ?><?php mysqli_close($conn);  // close connection ?>

    <?php include "connection.php"; // Using database connection file here

    $records = mysqli_query($conn,"select * from contacts where id='2'"); // fetch data from database
    while($data = mysqli_fetch_array($records))
    {
    ?>
        <form action="codeContacts.php" method="POST" enctype="multipart/form-data">

                <div id="contactB" data-backdrop="static" data-keyboard="false">
                    <div class="header">
                    <h2 class="label">Edit Send an Email Box</h2>
                    <div class="button exit" onclick="contactBToggle();"><i class='bx bx-x modal_icon'></i></div>
                    </div>
                    <div class="popup-content">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                            <input type="text" class="textboxService" id="brand" name="titleTwo" value="<?php echo $data['title']; ?>" placeholder="Title" required>
                            <textarea class="textareacontact" id="textarea" name="descriptionTwo" rows="20" cols="50" required><?php echo $data['description']; ?></textarea>
                            <td><button type="submit" class="buttonSaveAbout" name="saveTwo"><i class='bx bx-save bx-tada' ></i> Save</button></td>
                    </div>
                </div>
        </form>
                <?php
            }
    ?><?php mysqli_close($conn);  // close connection ?>

    <?php include "connection.php"; // Using database connection file here

    $records = mysqli_query($conn,"select * from contacts where id='3'"); // fetch data from database
    while($data = mysqli_fetch_array($records))
    {
    ?>
    <form action="codeContacts.php" method="POST" enctype="multipart/form-data">

                <div id="contactC" data-backdrop="static" data-keyboard="false">
                    <div class="header">
                    <h2 class="label">Edit Send Message Box</h2>
                    <div class="button exit" onclick="contactCToggle();"><i class='bx bx-x modal_icon'></i></div>
                    </div>
                    <div class="popup-content">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                            <input type="text" class="textboxService" id="brand" name="titleThree" value="<?php echo $data['title']; ?>" placeholder="Title" required>
                            <textarea class="textareacontact" id="textarea" name="descriptionThree" rows="20" cols="50" required><?php echo $data['description']; ?></textarea>
                            <td><button type="submit" class="buttonSaveAbout" name="saveThree"><i class='bx bx-save bx-tada' ></i> Save</button></td>
                    </div>
                </div>
                </form>
                <?php
            }
    ?><?php mysqli_close($conn);  // close connection ?>


</div>
    <div class="container" id="blur">    
        <div class="table-container">
            <h2 class="table-heading">Manage CONTACTS</h2>
            <table>
                <thead>
                    <tr>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Call Us box</td>
                        <td><div class="buttonAdmin" onclick="contactAToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                    </tr>
                    <tr>
                        <td>Send an Email Box</td>
                        <td><div class="buttonAdmin" onclick="contactBToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                    </tr>
                    <tr>
                        <td>Send Message Box</td>
                        <td><div class="buttonAdmin" onclick="contactCToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>


    </div>
    <script src="../js/main.js"></script>
</body>
</html>