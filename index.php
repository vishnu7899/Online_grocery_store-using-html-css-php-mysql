<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Grocery Store</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body class="grid">
    <!-- Header -->
    <header class="header" id="header">
        
<!doctype html><html itemscope itemtype=http://schema.org/WebPage lang=en><head><link rel="shortcut icon" href=/favicon16.gif type=image/x-icon sizes=16x16><link rel="shortcut icon" href=/favicon32.gif type=image/x-icon sizes=32x32><meta http-equiv=content-type content="text/html;charset=utf-8"><meta http-equiv=content-language content=en><meta content="IE=edge,chrome=1" http-equiv=X-UA-Compatible><meta name=viewport content="width=device-width,initial-scale=1"><meta name=title content="Brandmark - The smart brand and logo creator"><meta name=description content="Step 1: enter your business name. Step 2: enter a few related keywords. Step 3: choose your desired color style."><title>Brandmark - make your logo in minutes</title><link href=logo.css rel=stylesheet><script src=jsToGlobal/util.js></script><script>window.post_cache = {};</script><script src=https://js.braintreegateway.com/web/dropin/1.22.1/js/dropin.min.js></script><link type=text/css rel=stylesheet href=https://www.gstatic.com/firebasejs/ui/6.0.0/firebase-ui-auth.css><link href=css/app.4bb27e6d.css rel=preload as=style><link href=css/chunk-vendors.505af82c.css rel=preload as=style><link href=js/app.d2019b4c.js rel=preload as=script><link href=js/chunk-vendors.bb706bc9.js rel=preload as=script><link href=css/chunk-vendors.505af82c.css rel=stylesheet><link href=css/app.4bb27e6d.css rel=stylesheet></head><body><div id=brandmark></div><script src=js/chunk-vendors.bb706bc9.js></script><script src=js/app.d2019b4c.js></script></body></html>
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Seven Hills Supermarket</a>
            <div class="nav__menu" id="nav-menu">
                <?php
                    include("includes/menu.php");
                ?>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
            
        </nav>
    </header>
    <!-- Main -->
    <main>
        <section class="background">
            <div class="section__background">
                <h2>Grocery at home</h2>
            <h1>Your Daily <span>Needs</span> </h1>
            <button>Scroll Down</button>
            </div>
        </section>
        
        <section class="section">
            <h1 class="section__title">Shop By Category</h1>
            <div class="section__category grid">
               
                <?php
                    require('includes/config.php');
                    $query = "select * from category";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result)){
                       
                        echo '
                        <a href="category.php?category_name='.$row['category_name'].'">
                        <div class="section__category-box">
                            <img src="'.$row['category_image'].'" alt="">
                            <h3>'.$row['category_name'].'</h3>
                        </div>
                        </a>
                        ';
                    }
                ?>

            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__container grid">
            <div class="footer__logo">
                <h1 class="footer__title">Grocery Store</h1>
                <span class="footer__subtitle">
                    Project by Polepalli Vishnu Sai.
                </span>
            </div>
            <div class="footer__about">
                <h1 class="footer__about-title">About</h1>
                <ul class="footer__links">
                    <li>
                        <a href="index1.php" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="index1.php" class="footer__link">Contact</a>
                    </li>
                   
                    <li>
                        <a href="store/store_application.php" class="footer__link">Apply Store</a>
                    </li>
                    <li>
                        <a href="team.php" class="footer__link">About Team Members</a>
                    </li>
                </ul>
            </div>
            
            <div class="footer__socials">
                <a href="https://github.com/vishnu7899" target="_blank" class="footer__social">
                    <i class="uil uil-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/polepalli-vishnu-sai-070964212/" target= "_black" class="footer__social">
                    <i class="uil uil-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/vishnuuu7777/" target= "_black" class="footer__social">
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="https://twitter.com/PolepalliVishn2" target= "_black" class="footer__social">  
                    <i class="uil uil-twitter-alt"></i>
                </a>
            </div>
           
        </div>
    </footer>
    <!-- Scroll Up -->
    
    <a href="" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>


    <!-- Javascript -->
    <script src="assets/js/main.js"></script>

</body>
</html>