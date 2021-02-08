<?php
session_start();
include('connection.php');

if(!$_SESSION['username'])
{
    header('Location: index.php');
}
?>
    
    <header class="l-header" id="header">
        <nav class="nav nav-pad">
            <a href="#" class="nav_logo"><img src="img/logo.png" alt="" class="brand"> &nbsp; iPaw-IT Admin Panel</a>
        </nav>
    
        <div class="b_toggle nav_toggle" onclick="toggleMenu()">
            <span class="b_account"><i class='bx bx-menu'></i></span>
        </div>
    
    
    </header>

    <div class="navigation">
        <ul>
            <li>
                <a href="home.php">
                    <span class="a_icon"><i class='bx bxs-home bx-tada-hover'></i></span>
                    <span class="a_title">Home</span>
                </a>
            </li>
            <li>
                <a href="about.php">
                    <span class="a_icon"><i class='bx bx-book  bx-tada-hover'></i></span>
                    <span class="a_title">About</span>
                </a>
            </li>
            <li>
                <a href="services.php">
                    <span class="a_icon"><i class='bx bx-cycling  bx-tada-hover'></i></span>
                    <span class="a_title">Services</span>
                </a>
            </li>
            <li>
                <a href="partners.php">
                    <span class="a_icon"><i class='bx bxs-group  bx-tada-hover'></i></span>
                    <span class="a_title">Partners</span>
                </a>
            </li>
            <li>
                <a href="contacts.php">
                    <span class="a_icon"><i class='bx bxs-phone  bx-tada-hover'></i></span>
                    <span class="a_title">Contact</span>
                </a>
            </li>
            <li>
                <a href="account.php">
                    <span class="a_icon"><i class='bx bxs-cog  bx-tada-hover'></i></span>
                    <span class="a_title">Account Settings</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <span class="a_icon"><i class='bx bx-log-out-circle  bx-tada-hover'></i></span>
                    <span class="a_title">Logout</span>
                </a>
            </li>

        </ul>
    </div>

    <!-- <div class="staybottom">
            <main class="l-main">
                <footer class="footer">
                    <div class="footer_container bd-container">
                    <p class="footer_copy">&copy; <?php echo date("Y"); ?> iPaw-IT Express. All rights reserved.</p>
                    </div>
                </footer>
            </main>
        </div> -->

