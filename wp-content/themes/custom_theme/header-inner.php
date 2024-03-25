<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website Design </title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" />
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <!-- font awome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="<?php bloginfo('template_directory') ?>/images/logo.png"  class="logo" alt="logo" /></a>
            <div class="nav-links" id="navLinks">
               <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <!-- <li><a href="coure.html">COURSE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="content.html">CONTACT</a></li> -->
                </ul>
            </div>
            <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>World's Biggest University</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur <br >optio obcaecati commo rris, velit alias modi!</p>
            <a href="" class="hero-btn">Visit u to know more</a>
        </div>
    </section>
