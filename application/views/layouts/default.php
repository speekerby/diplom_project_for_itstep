<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/build/styles.css">
    <link href="/public/styles/bootstrap.css" rel="stylesheet">
    <!--    <link href="/public/styles/main.css" rel="stylesheet">-->
    <link href="/public/styles/font-awesome.css" rel="stylesheet">

</head>
<body>
<header>
    <div class="container-nav">

        <h1 class="logo">IT<span>Company</span></h1>

        <nav class="site-nav">
            <ul>
                <li><a href="/"><i class="fa fa-home site-nav--icon"></i>Главная</a></li>
                <li><a href="/about"><i class="fa fa-info site-nav--icon"></i>О нас</a></li>
                <li><a href="/blog"><i class="fa fa-pencil site-nav--icon"></i>Блог</a></li>
                <li><a href="/contact"><i class="fa fa-envelope site-nav--icon"></i>Контакты</a></li>
            </ul>
        </nav>

        <div class="menu-toggle">
            <div class="hamburger"></div>
        </div>

    </div>
</header>

<?php echo $content; ?>

<footer>
    <div class="footer-container">
        <div class="logo-and-copyright">
            <h1 class="logo">IT
                <span>Company</span>
            </h1>
            <br>
            <p> @ 2018:ItCompany All Rights Reserved.</p>
        </div>
        <div class="footer-menu">
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">Blog</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </div>
        <div class="phones">
            <span>Телефоны:</span>
            <p><a href="tel:+375 29 370 09 13">+375 29 370 09 13</a></p>
            <p><a href="tel:+375 25 370 09 13">+375 25 370 09 13</a></p>
            <p><a href="tel:+375 33 370 09 13">+375 33 370 09 13</a></p>
        </div>
        <div class="e-mails">
            <span>E-mail:</span>
            <p><a href="mailto:speekerby@live.ru">speekerby@live.ru</a></p>
            <span>E-mail:</span>
            <p><a href="mailto:itstep@gmail.com">itstep@gmail.com</a></p>
        </div>
    </div>
</footer>

<script src="/build/build.js"></script>

</body>
</html>

 