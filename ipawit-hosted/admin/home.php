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

$records = mysqli_query($conn,"select * from home where id='1'"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>
    <form action="codeHome.php" method="POST" enctype="multipart/form-data">
        <div class="modal" id="modal">
            <div id="ahome" data-backdrop="static" data-keyboard="false">
                <div class="header">
                <h2 class="label">Change business logo</h2>
                <div class="button exit" onclick="ahomeToggle();"><i class='bx bx-x modal_icon'></i></div>
                </div>
                    <div class="popup-content">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                        <img src="../img/<?php echo ($data['logo']);?> " class="boxLogo">
                        <input type="file" name="logo" id="logo" class="image" required>
                        <input type="submit" name="submitlogo" class="buttonUpload">
                    </div>
            </div>                        
    </form>

        <form action="codeHome.php" method="POST" enctype="multipart/form-data">
            <div id="chome" data-backdrop="static" data-keyboard="false">
                <div class="header">
                <h2 class="label">Change Model/Poster</h2>
                <div class="button exit" onclick="chomeToggle();"><i class='bx bx-x modal_icon'></i></div>
                </div>
                <div class="popup-content">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                        <img src="../img/<?php echo ($data['poster']);?> " class="changeImage">
                        <input type="file" name="poster" id="poster" class="image" required>
                        <input type="submit" value="Upload Image" name="submitposter" class="buttonUpload">
                </div>
            </div>
        </form>

    <form action="codeHome.php" method="POST" enctype="multipart/form-data">
            <div id="dhome" data-backdrop="static" data-keyboard="false">
                <div class="header">
                <h2 class="label">Change Background photo</h2>
                <div class="button exit" onclick="dhomeToggle();"><i class='bx bx-x modal_icon'></i></div>
                </div>
                <div class="popup-content">
                    <div class="editcontent">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                        <img src="../img/<?php echo ($data['background']);?> " class="changeImage">
                        <input type="file" name="background" id="background" class="image">
                        <input type="submit" value="Upload Image" name="submitbg" class="buttonUpload">
                    </div>
                </div>
            </div>
    </form>

    <form action="codeHome.php" method="POST" enctype="multipart/form-data">
            <div id="bhome" data-backdrop="static" data-keyboard="false">
                <div class="header">
                <h2 class="label">Edit Tagline</h2>
                <div class="button exit" onclick="bhomeToggle();"><i class='bx bx-x modal_icon'></i></div>
                </div>
                <div class="popup-content">
                    <div class="editcontent">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                    <td><input type="text" class="textboxplain" name="taglineOne" value="<?php echo $data['taglineOne']; ?>"></td>
                    <td><input type="text" class="textboxplain" name="taglineTwo" value="<?php echo $data['taglineTwo']; ?>"></td>
                    <td><button type="submit" class="buttonSave" name="submittag"><i class='bx bx-save bx-tada' ></i> Save</button></td>
                    </div>
                </div>
            </div>
        </div>
    </form>
        
        <div class="container" id="blur">

            <div class="table-container">
                <h2 class="table-heading">Manage HOME</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <form action="codeHome.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                        <tr>
                            <td><input type="text" class="textbox" id="brand" name="brand" value="<?php echo $data['brand']; ?>" disabled required></td>
                            <td>
                                <div class="buttons">
                                <div class="edit" id="edit">
                                <div class="buttonAdmin" onclick="editToggle(); undisableTxt();"><i class='bx bxs-edit bx-tada' ></i> Edit</div>
                                </div>
                                <div class="option" id="option" style="display: none;">
                                    <button type="submit" name="savebrand" id="savebrand" class="buttonAdmin" ><i class='bx bx-check bx-tada' ></i></button>
                                    <button type="button" class="adminDelete" onclick="closeToggle(); disableTxt();"><i class='bx bx-x bx-tada' ></i></button>
                                </div>
                                </div>
                            </td>
                        </tr>
                        </form>
                        
                        <form action="codeHome.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                        <tr>
                            <td><input type="text" class="textbox" name="brandfull" id="brandfull" value="<?php echo $data['brandfull']; ?>" disabled required></td>
                            <td>
                                <div class="buttons">
                                <div class="edit" id="editfull">
                               <div class="buttonAdmin" onclick="fulleditToggle(); undisableTxtfull();"><i class='bx bxs-edit bx-tada' ></i> Edit</div>
                                </div>
                                <div class="option" id="optionfull" style="display: none;">
                                    <button type="submit" class="buttonAdmin" name="savebrandfull"><i class='bx bx-check bx-tada' ></i></button>
                                    <button type="button" class="adminDelete" onclick="fullcloseToggle(); disableTxtfull();"><i class='bx bx-x bx-tada' ></i></button>
                                </div>
                                </div>
                            </td>
                        </tr>
                        </form>

                        <tr>
                            <td>Tagline</td>
                            <td><div class="buttonAdmin" onclick="bhomeToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                        </tr>
                        <tr>
                            <td>Brand logo</td>
                            <td><div class="buttonAdmin" onclick="ahomeToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                        </tr>
                        <tr>
                            <td>Model/Poster</td>
                            <td><div class="buttonAdmin" onclick="chomeToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                        </tr>
                        <tr>
                            <td>Background photo</td>
                            <td><div class="buttonAdmin" onclick="dhomeToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
 <?php
 }
 ?><?php mysqli_close($conn);  // close connection ?>
        <script src="../js/main.js"></script>
</body>
</html>
