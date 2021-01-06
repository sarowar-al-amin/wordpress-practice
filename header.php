<!-------------
 This code is written by Md. Sarowar Al-Amin
---------->


<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?></title>
    <!------- Those style code only work when internet connection are available -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-------------Other thing  to include ------>
    <link rel="stylesheet" href="css/modalbox.min.css" type="text/css" />
    <!-- <link rel="stylesheet" href="css/styleForSignUp.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <link rel="stylesheet" href="css/vendr-animtd-circle.css">  // Not process any function for it -->
    <?php
        wp_head();
    ?>

</head>

<body <?php body_class();?>>
    <!------ Starting point of Header portion------->
    <div class="fix container_full header_bg">
        <div class="container">
            <header id="header">
                <div class="logo_left">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo redesign.png" alt="Image of logo">
                </div>
                <nav>
                    <div id="menu">                    
                        <?php
                            $args = array(
                                'theme_location' => 'navigationMenu'
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>

                </nav>
            </header>
        </div>
    </div>