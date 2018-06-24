<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/build/style.css">
    <link href="/public/styles/bootstrap.css" rel="stylesheet">
    <link href="/public/styles/main.css" rel="stylesheet">
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

<!--<script src="/build/build.js"></script>-->
</body>
</html>

 