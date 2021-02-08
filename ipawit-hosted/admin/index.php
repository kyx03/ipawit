<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <title>iPaw-IT Admin Panel</title>
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../img/logo.png">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../img/logo.png">
</head>
<body class="bodylogin">
               
     <form class="login" action="login.php" method="POST">
     	<h2 class="hclass">IPAW-IT LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>
     	<label class="labellogin">Username</label>
     	<input type="text" class="input" name="uname" placeholder="Username" required><br>

     	<label class="labellogin">Password</label>
     	<input type="password" class="input" name="password" placeholder="Password" required><br>

     	<button type="submit" class="buttonlogin" name="loginbutton">Login</button>
     </form>
</body>
</html>