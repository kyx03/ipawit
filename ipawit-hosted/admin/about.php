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
<?php include "sidebar-header.php" ?>
<?php include "connection.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from about where id='1'"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>

<div class="modal" id="modal">
    <form action="codeAbout.php" method="POST" enctype="multipart/form-data">
        <div id="about" data-backdrop="static" data-keyboard="false">
            <div class="header">
            <h2 class="label">Edit About</h2>
            <div class="button exit" onclick="aboutToggle();"><i class='bx bx-x modal_icon'></i></div>
            </div>
            <div class="popup-content">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
            <textarea class="textareaabout" id="textarea" rows="20" cols="50" name="areaWhat" required><?php echo $data['what']; ?></textarea>
            <td><button type="submit" class="buttonSaveAbout" name="saveWhat"><i class='bx bx-save bx-tada' ></i> Save</button></td>
            </div>
        </div>
    </form>

    <form action="codeAbout.php" method="POST" enctype="multipart/form-data">
        <div id="aboutb" data-backdrop="static" data-keyboard="false">
            <div class="header">
            <h2 class="label">Edit Who we are</h2>
            <div class="button exit" onclick="aboutbToggle();"><i class='bx bx-x modal_icon'></i></div>
            </div>
            <div class="popup-content">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
            <textarea class="textareaabout" id="textarea" rows="20" cols="50" name="areaWho" required><?php echo $data['who']; ?></textarea>
            <td><button type="submit" class="buttonSaveAbout" name="saveWho"><i class='bx bx-save bx-tada' ></i> Save</button></td>
            </div>
        </div>
    </form>

    <form action="codeAbout.php" method="POST" enctype="multipart/form-data">
        <div id="aboutc" data-backdrop="static" data-keyboard="false">
            <div class="header">
            <h2 class="label">Change Poster image</h2>
            <div class="button exit" onclick="aboutcToggle();"><i class='bx bx-x modal_icon'></i></div>
            </div>
            <div class="popup-content">
                <div class="editcontent">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                    <img src="../img/<?php echo ($data['image']);?> " alt="" class="changePoster">
                    <input type="file" name="changeImage" id="changeImage" class="image" required>
                    <input type="submit" value="Upload Image" name="saveImage" class="buttonUpload">
                </div>
            </div>
        </div>
    </form>
    <?php
 }
 ?><?php mysqli_close($conn);  // close connection ?>


</div>
    <div class="container" id="blur">
        <div class="table-container">
            <h2 class="table-heading">Manage ABOUT</h2>
            <table>
                <thead>
                    <tr>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>What is...</td>
                        <td><div class="buttonAdmin" onclick="aboutToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                    </tr>
                    <tr>
                        <td>Who we are?</td>
                        <td><div class="buttonAdmin" onclick="aboutbToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                    </tr>
                    <tr>
                        <td>Poster image</td>
                        <td><div class="buttonAdmin" onclick="aboutcToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <script src="../js/main.js"></script>
</body>
</html>

<?php 
