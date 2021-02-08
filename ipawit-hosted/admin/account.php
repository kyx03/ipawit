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

        <?php include "connection.php"; // Using database connection file here

        $records = mysqli_query($conn,"select * from user"); // fetch data from database
        while($data = mysqli_fetch_array($records))
        {
        ?>
        
        <div class="container" id="blur">
            <?php include "sidebar-header.php" ?>

            <div class="table-account">
                <div class="editHome">
                <h2 class="table-heading">Account Settings</h2>
                <table class="hider">
                    <tbody class="homeTable">  
                    <form action="codeAccount.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">             
                        <tr>                      
                            <td class="hiddenTD"><label class="homeLabel">Username: </label></td>
                            <td><input class="textboxaccount" type="text" name="username" value="<?php echo $data['username']; ?>" required></td>
                        </tr>

                        <tr>                      
                            <td class="hiddenTD"><label class="homeLabel">Password: </label></td>
                            <td><input class="textboxaccount" type="password" id="" name="password" value="<?php echo $data['password']; ?>" required></td>
                        </tr>
                        <tr>
                            <td><button type="submit" class="buttonSaveHome" name="saveAccount"><i class='bx bx-save bx-tada' ></i> Save Changes</button></td>
                        </tr>
                    </form>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
 <?php
 }
 ?>
        <script src="../js/main.js"></script>

</body>
</html>
