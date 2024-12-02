<script type="module" src="./javascript/header.js" defer></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Handmade ceramic pieces, crafted with love and delivered to your home. Shop unique, personalized pieces on our Etsy store.">
    <link rel="stylesheet" href="./style/style_header.css">
    <script src="https://kit.fontawesome.com/cdc160965e.js" crossorigin="anonymous"></script>
    <title>CeciCo Ceramics: Handmade Pieces, Where Art Meets Heart</title>
</head>
<body>
    <header>
        <nav aria-label="Main Navigation">
            <div class="navbar">
                <a href="/ProjetFilRouge/home"><img class="logoHeader" src="./photos/logoHeader.png"
                        alt="Logo CeciCo"></a>
                <div class="barRight">
                    <img src="./icons/icon_globe.png" alt="Icon language" width="30px">
                    <img src="./icons/icon_cart.png" alt="Icon cart" width="30px">
                    <i class="fa-solid fa-bars" style="color: #E6A197;" id="hamburgerMenu"></i>
                </div>
                <div class="centerNav">
                    <ul class="navPages">
                        <li id="homePage" ><a href="/ProjetFilRouge/home">HOME</a></li>
                        <li id="aboutMe" ><a href="/ProjetFilRouge/AboutMe">ABOUT ME</a></li>
                        <li id="products" ><a href="/ProjetFilRouge/products">PRODUCTS</a></li>
                        <li id="contact" ><a href="/ProjetFilRouge/Contact">CONTACT</a></li>
                        <li id="etsyShop"><a
                                href="https://www.etsy.com/fr/shop/CecicoCeramics?ref=l2-about-shopname&from_page=listing">
                                ETSY SHOP</a></li>
                        <li id="login" class="<?php echo $header->getClass()?>" ><a
                                href="/ProjetFilRouge/login">LOGIN</a></li>
                        <li id="account" class="<?php echo $header->getClassCo()?>" > <a href="/ProjetFilRouge/account">ACCOUNT</a></li>
                        <li id="deconnexion" class="<?php echo $header->getClassCo()?>" ><a
                                href="/ProjetFilRouge/deconnexion">LOG OUT</a></li>
                    </ul>
        </nav>
        </div>
        </div>
    </header>