<!-------------
 This code is written by Md. Sarowar Al-Amin
---------->


<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <!------- Those style code only work when internet connection are available -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-------------Other thing  to include ------>
    <link rel="stylesheet" href="css/modalbox.min.css" type="text/css" />
    <!-- <link rel="stylesheet" href="css/styleForSignUp.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&amp;display=swap" rel="stylesheet"> -->
    <!---- Our own css design --->
    <link rel="stylesheet" href="css/vendr-animtd-circle.css">
    <link rel="stylesheet" href="css/progresscircle.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href=""> -->
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <?php
       wp_head();
    ?>

</head>

<body <?php body_class();?>>
    <!------ Starting point of Header portion------->
    <div class="container_full header_bg">
        <div class="fix container">
            <header id="header">
                <div class="logo_left">
                    <img src="img/logo redesign.png" alt="Image of logo">
                </div>
                <nav>
                    <div id="menu">
                    <?php 
                        $args = array(
                            'theme_location' => 'primary'
                        );
                        wp_nav_menu();
                    ?>
                    </div>
                </nav>
            </header>
        </div>
    </div>
    <!----------- Header portion finish--------->
    <!----------For testing purpose ----->

<!-- 
    <ul>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Services &rsaquo;</a>
            <ul>
                <li><a href="#">Adimn Support &rsaquo;</a></li>
                <li><a href="#">Digital Marketing &rsaquo;</a></li>
                <li><a href="#">Web Design Services</a></li>
                <li><a href="#">Garphics Design Services</a></li>
            </ul>
        </li>
        <li><a href="#">Our products &rsaquo;</a>
            <ul>
                <li><a href="#">Graphics Design</a></li>
                <li><a href="#">Wordpress Theme</a></li>
            </ul>
        </li>
        <li><a href="#">Contact us</a></li>
        <li>
            <div id="sign_in">
                <button id="dialogop3">
                    sign in
                </button>
            </div>
        </li>
    </ul>

 -->