<?php
$name = "SM Mehndi Artist";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>SM Mehndi Artist</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <div class="logo">
        <img src="logo.jpeg" alt="SM Mehndi Artist">
    </div>

    <nav id="navMenu">

        <a href="home.html">HOME</a>
        <a href="about.html">ABOUT US</a>
        <div class="dropdown">
      <a href="gallery.html"
       class="active">Gallery</a>
    
       <div class="dropdown-content">
        <a href="#">ARABIC MEHANDI</a>
       <a href="#">BRIDAL MEHANDI</a>
        <a href="#">ENGAGEMENT MEHANDI</a>
        <a href="#">TRADITIONALMEHANDI</a>
     </div>
    </div>
        <a href="contact.html">CONTACT</a>
        <a href="booking" class="book-btn">BOOK APPOINTMENT</a>
    </nav>

    <div class="menu" onclick="toggleMenu()">☰</div>
</header>

<section class="hero" id="home">

    <div class="hero-text">
        <p class="tagline">Bringing Tradition to Life ♡</p>

        <h1>BEAUTIFUL MEHNDI<br>
            FOR EVERY OCCASION</h1>

        <div class="line"></div>

        <p class="description">
            From bridal mehndi to festive celebrations,<br>
            we create designs that speak your style.
        </p>

        <div class="buttons">
            <a href="designs" class="primary-btn">
                EXPLORE DESIGNS ➜
            </a>

            <a href="booking" class="secondary-btn">
                BOOK APPOINTMENT 📅
            </a>
        </div>
    </div>

    <div class="hero-image">
        <img src="design.jpeg" alt="Beautiful Mehndi Design">
    </div>

</section>

<footer id="contact">
    <p>@ 2026 SM Mehndi Artist | All Rights Reserved</p>
</footer>

<script src="script.js"></script>

</body>
</html>
