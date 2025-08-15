<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

<section class="header">
    <a href="home.php" class="logo"><img src="image/logo1.png" alt="" height=80px width=70px>
    <?php
       session_start();
       $username = $_SESSION['username'];
        if (isset($username)) {
            echo "Hello, $username!";
?>
        <?php

       }
       ?>

</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="faqs.php">FAQs</a>
        <a href="gallery.php">Gallery</a>
        <a href="packages.php">Packages</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact</a>
        <a href="signup.php">Sign Up</a>

        <?php
        if (!isset($username)) 
        { ?>
                   <a href="login.php">Login</a>
                   <?php
        } 
        else { ?>
    <a href="logout.php">Logout</a>
    <?php
    } ?>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>