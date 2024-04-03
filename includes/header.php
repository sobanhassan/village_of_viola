<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsiveNavBar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Village of Viola | <?php echo $title?></title>
</head>

<body>
    <header>
        <nav class="navbar hide">
            <div class="navcontent justify">
                <div class="nav-logo">
                    <a href="">
                        <img src="images/logo.png" alt="logo">
                    </a>
                    <img src="images/village-of-viola.png">
                </div>
                <!--Burger Menu for Mobile, resize the screen to see it works-->
                <div class="burger navbar-toggle" id="js-navbar-toggle">
                    <div class="l1"></div>
                    <div class="l2"></div>
                    <div class="l3"></div>
                </div>

                <!--This where the nav bar menu list is -->
                <ul class="mainnav list-style-remove" id="menu">
                    <?php include'nav.html'?>
                </ul>
            </div>
        </nav>
    </header>
    <div class="body-div justify">
        <div class="sidebar">
            <div class="sidebar-nav">
                <ul>
                    <li><a href="about.php">Basic Introduction</a></li>
                    <li><a href="events.php">What's New</a></li>
                    <li><a href="business.php">Links to Viola Business</a></li>
                    <li><a href="https://www.facebook.com/groups/2410517802372529/about" target="_blank">Follow Us on Facebook</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="sidebar-text">
                <p>Viola Village</p>
                <p>1305 17th Ave, Viola, IL 61486</p>
                <p>Phone: <a href="tel:+13095962513">(309) 596-2513</a></p>
            </div>
            <div class="gallery">
                <h1><a href="gallery.php">Our Gallery</a></h1>
                <div class="banner">
                    <img src="images/mills-memorial-park.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="body">