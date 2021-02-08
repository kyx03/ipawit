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
    <div class="modal" id="modal">
    <?php include "connection.php"; // Using database connection file here

            $records = mysqli_query($conn,"select * from services where id='1'"); // fetch data from database
            while($data = mysqli_fetch_array($records))
            {
            ?>
        <form action="codeServices.php" method="POST" enctype="multipart/form-data">
            <div id="boxA" data-backdrop="static" data-keyboard="false">
                <div class="header">
                <h2 class="label">Edit Service box 1</h2>
                <div class="button exit" onclick="boxAToggle();"><i class='bx bx-x modal_icon'></i></div>
                </div>
                <div class="popup-content">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                        <img src="../img/<?php echo ($data['image']);?>" alt="" class="boxLogo">
                        <input type="file" name="serviceImageOne" id="fileToUpload" class="image" required>
                        <input type="text" class="textboxService" name="titleOne" id="brand" value="<?php echo $data['title']; ?>" placeholder="Title" required>
                        <textarea class="textareaabout" name="desciptionOne" id="textarea" rows="20" cols="50" required><?php echo $data['description']; ?></textarea>
                        <td><button type="submit" class="buttonSaveAbout" name="saveserviceOne"><i class='bx bx-save bx-tada' ></i> Save</button></td>
                </div>
            </div>
        </form>
    <?php
            }
    ?><?php mysqli_close($conn);  // close connection ?>


    <?php include "connection.php"; // Using database connection file here

            $records = mysqli_query($conn,"select * from services where id='2'"); // fetch data from database
            while($data = mysqli_fetch_array($records))
            {
            ?>
        <form action="codeServices.php" method="POST" enctype="multipart/form-data">
            <div id="boxB" data-backdrop="static" data-keyboard="false">
                <div class="header">
                <h2 class="label">Edit Service box 2</h2>
                <div class="button exit" onclick="boxBToggle();"><i class='bx bx-x modal_icon'></i></div>
                </div>
                <div class="popup-content">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                        <img src="../img/<?php echo ($data['image']);?>" alt="" class="boxLogo">
                        <input type="file" name="serviceImageTwo" id="fileToUpload" class="image" required>
                        <input type="text" class="textboxService" name="titleTwo" id="brand" value="<?php echo $data['title']; ?>" placeholder="Title" required>
                        <textarea class="textareaabout" name="desciptionTwo" id="textarea" rows="20" cols="50" required><?php echo $data['description']; ?></textarea>
                        <td><button type="submit" class="buttonSaveAbout" name="saveserviceTwo"><i class='bx bx-save bx-tada' ></i> Save</button></td>
                </div>
            </div>
        </form>
    <?php
            }
    ?><?php mysqli_close($conn);  // close connection ?>

    <?php include "connection.php"; // Using database connection file here

            $records = mysqli_query($conn,"select * from services where id='3'"); // fetch data from database
            while($data = mysqli_fetch_array($records))
            {
            ?>
        <form action="codeServices.php" method="POST" enctype="multipart/form-data">
            <div id="boxC" data-backdrop="static" data-keyboard="false">
                <div class="header">
                <h2 class="label">Edit Service box 3</h2>
                <div class="button exit" onclick="boxCToggle();"><i class='bx bx-x modal_icon'></i></div>
                </div>
                <div class="popup-content">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                        <img src="../img/<?php echo ($data['image']);?>" alt="" class="boxLogo">
                        <input type="file" name="serviceImageThree" id="fileToUpload" class="image" required>
                        <input type="text" class="textboxService" name="titleThree" id="brand" value="<?php echo $data['title']; ?>" placeholder="Title" required>
                        <textarea class="textareaabout" name="desciptionThree" id="textarea" rows="20" cols="50" required><?php echo $data['description']; ?></textarea>
                        <td><button type="submit" class="buttonSaveAbout" name="saveserviceThree"><i class='bx bx-save bx-tada' ></i> Save</button></td>
                </div>
            </div>
        </form>
    <?php
    }
    ?><?php mysqli_close($conn);  // close connection ?>

    </div>
    <div class="container" id="blur">    
        <div class="table-container">
            <h2 class="table-heading">Manage SERVICES</h2>
            <table>
                <thead>
                    <tr>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Service Box 1</td>
                        <td><div class="buttonAdmin" onclick="boxAToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                    </tr>
                    <tr>
                        <td>Service Box 2</td>
                        <td><div class="buttonAdmin" onclick="boxBToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                    </tr>
                    <tr>
                        <td>Service Box 3</td>
                        <td><div class="buttonAdmin" onclick="boxCToggle();"><i class='bx bxs-edit bx-tada' ></i> Edit</div></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

    </div>
    <script src="../js/main.js"></script>
</body>
</html>
