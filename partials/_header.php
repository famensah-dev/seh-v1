<?php
    $currentPage = basename($_SERVER['PHP_SELF']); // Get the current file name
?>
<!-- Header -->
<section id="home" class="topnav">
        <div class="container flex">
            <ul class="contact-links flex gap-md">
                <li>
                    <span><i class="uil uil-phone-alt"></i></span>
                    <span>+233 547 947 841</span>
                    <!-- <span>+233 200 289 594</span> -->
                </li>
                <li>
                    <span><i class="uil uil-map-marker"></i></span>
                    <span>19 Dzanifio Street, Bawaleshie, East – Legon</span>
                </li>
            </ul>

            <ul class="social-media-links flex gap">
                <li><i class="uil uil-facebook-f"></i></li>
                <li><i class="uil uil-twitter"></i></li>
                <li><i class="uil uil-instagram"></i></li>
                <li><i class="uil uil-whatsapp"></i></li>
            </ul>
        </div>
        <div class="container">
            <div class="hr hr-thick hr-lg" style="background-color: rgba(255, 255, 255, 0.1); margin-top:6px;"></div>
        </div>
    </section>

    <nav id="navbar" class="nav">
        <div class="container d-flex space-between align-items-center">
            <div class="flex">
                <div class="menu-btn">
                    <span class="menu-btn-icon"></span>
                </div>

                <p id="logo" class="d-flex mb-0 align-items-center"><img src="./assets/img/logo.png" style="width:100px;"/></p>
            </div>
            <ul class="navlinks flex gap-md">
                <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">About</a></li>
                <li><a href="services.php" class="<?= $currentPage == 'services.php' ? 'active' : '' ?>">Services</a></li>
                <li><a href="#about" class="<?= $currentPage == 'community-support.php' ? 'active' : '' ?>">Community Support</a></li>
                <li><a href="../contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
                <li><a href="#contact" class="text-accent-alt" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Donate</a></li>
            </ul>
            <i class="uil uil-ellipsis-v" id="topnav-menu-icon"></i>
        </div>
    </nav>
    <div class="responsive-nav">
        <div class="alt-topnav">
            <ul class="contact-links flex-col gap-md">
                <li>
                    <span><i class="uil uil-phone-alt"></i></span>
                    <span>+233 547 947 841</span>
                    <!-- <span>+233 200 289 594</span> -->
                </li>
                <li>
                    <span><i class="uil uil-map-marker"></i></span>
                    <span>19 Dzanifio Street, <br> Bawaleshie, East – Legon</span>
                </li>
            </ul>

            <ul class="social-media-links flex gap">
                <li><i class="uil uil-facebook-f"></i></li>
                <li><i class="uil uil-twitter"></i></li>
                <li><i class="uil uil-instagram"></i></li>
                <li><i class="uil uil-whatsapp"></i></li>
            </ul>
        </div>
        <div id="nav-menu">
            <ul class="gap-md">
                <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">About</a></li>
                <li><a href="services.php" class="<?= $currentPage == 'services.php' ? 'active' : '' ?>">Services</a></li>
                <li><a href="about.php" class="<?= $currentPage == 'community-support.php' ? 'active' : '' ?>">Community Support</a></li>
                <li><a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="alertBox" class="p-xs"></div>

<!-- Header End -->
