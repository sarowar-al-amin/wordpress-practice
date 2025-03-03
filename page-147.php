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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="css/vendr-animtd-circle.css">  // Not process any function for it -->
    <?php
        wp_head();
    ?>

<body <?php body_class();?>>
    <!------ Starting point of Header portion------->
    <div class="container_full header_bg">
        <div class="fix container">
            <header id="header">
                <div class="dashboard">
                    <div class="logo_left">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo redesign.png" alt="Image of logo">
                    </div>
                    <div class="user_info">
                        <img src="<?php echo get_template_directory_uri();?>/img/customer_img.png" alt="User Image">
                        <div class="user_name">
                            <span>
                                Khabib Nurmagomedov    <br>
                                <i class="fas fa-map-marker-alt"></i> Just send me location. location.
                            </span>
                        </div>
                    </div>
                    <div class="search_bar">
                        <input type="search" name="Seatch in Dash" placeholder="  search here">
                    </div>
                    <div class="notification_bell">
                        <span>
                            <i class="fas fa-bell"></i>
                        </span>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <!----------- Header portion finish--------->

    <!----------- Dash board divisions ----->
    <div class="container_full">
        <div class="fix container">
            <!---------Side bar contents---->
            <div class="iteams_container">
                <div class="initial_part">
                    <ul>
                        <li>
                            <a href="#">
                                <span><i class="fas fa-home"></i> Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><i class="fas fa-th-large"></i> Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><i class="fas fa-user-cog"></i> Admin Support &rsaquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><i class="fas fa-bullhorn"></i> Digital Marketing &rsaquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><i class="fab fa-servicestack"></i> Web Design Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><i class="fab fa-sketch"></i> Graphics design Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><i class="fab fa-product-hunt"></i> Our products &rsaquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ending_part">
                    <ul>
                        <li>
                            <a href="#">
                                <span><i class="fas fa-cogs"></i> Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span><i class="fas fa-comment-dots"></i> Feedback</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="logout">
                    <li>
                        <a href="#">
                            <span><i class="fas fa-sign-out-alt"></i> logout</span>
                        </a>
                    </li>
                </div>
            </div>
            <!-------Side bar contents end here -->
            <!--------------Upper content start here -->
            <div class="upper_content">
                <div class="upper_left">
                    <div class="left_portion">
                        <div class="work_part">
                            <h4>Our work</h4>
                            <div class="work">
                                <img src="<?php echo get_template_directory_uri();?>/img/budget.png" alt="Image">
                                <h4>$4352</h4>
                                <h5>Our total work</h5>
                            </div>
                            <div class="work">
                                <img src="<?php echo get_template_directory_uri();?>/img/06-cart.png" alt="Image">
                                <h4>127+</h4>
                                <h5>Our active order</h5>
                            </div>
                            <div class="work">
                                <img src="<?php echo get_template_directory_uri();?>/img/pending.png" alt="Image">
                                <h4>14+</h4>
                                <h5>Our pending order </h5>
                            </div>
                        </div>
                        <div class="Admin_part">
                            <h4>Admin Support</h4>
                            <div class="service">
                                <img src="<?php echo get_template_directory_uri();?>/img/leadership.png" alt="Image">
                                <h4>Lead generation</h4>
                            </div>
                            <div class="service">
                                <img src="<?php echo get_template_directory_uri();?>/img/analysis.png" alt="Image">
                                <h4>Skip tracing</h4>
                            </div>
                            <div class="service">
                                <img src="<?php echo get_template_directory_uri();?>/img/main-user.png" alt="Image">
                                <h4>Data entry</h4>
                            </div>
                        </div>
                    </div>
                    <!-------- Upper left is over here -->
                    <!---------- Upper right starts here ----->
                    <div class="upper_right_dash">
                        <div class="header_part">
                            <h3>Our Latest Blog Post</h3>
                        </div>
                        <div class="review_post">
                            <img src="<?php echo get_template_directory_uri();?>/img/forward-24px.png" alt="Image">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the very good industry's standard dummy text ever since the 1500s, when an unknown printer took a scrambled it to make a type specimen
                                book. It has survived not
                            </p>
                        </div>
                        <div class="review_post">
                            <img src="<?php echo get_template_directory_uri();?>/img/forward-24px.png" alt="Image">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the very good industry's standard dummy text ever since the 1500s, when an unknown printer took a scrambled it to make a type specimen
                                book. It has survived not
                            </p>
                        </div>
                        <div class="review_post">
                            <img src="<?php echo get_template_directory_uri();?>/img/forward-24px.png" alt="Image">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the very good industry's standard dummy text ever since the 1500s, when an unknown printer took a scrambled it to make a type specimen
                                book. It has survived not
                            </p>
                        </div>
                    </div>
                    <!-------- Upper right has reached it's end! -->
                </div>
                <!------Upper content ends here! -->
            </div>
            <!-----------Bottom content starts here! ---->
            <div class="bottom_content">
                <div class="bottom_left">
                    <!---------Digital Markeing portion ---->
                    <div class="digital_market">
                        <h4>Digital Marketing</h4>
                        <div class="marketing">
                            <img src="<?php echo get_template_directory_uri();?>/img/global.png" alt="Image" srcset="">
                            <h5>SEO services </h5>
                        </div>
                        <div class="marketing">
                            <img src="<?php echo get_template_directory_uri();?>/img/bullhorn.png" alt="Image" srcset="">
                            <h5>Digital Marketing</h5>
                        </div>
                    </div>
                    <!--------Graphics design part------>
                    <div class="digital_market">
                        <h4>Web Design & Graphic Design Services </h4>
                        <div class="marketing">
                            <img src="<?php echo get_template_directory_uri();?>/img/global.png" alt="Image" srcset="">
                            <h5>SEO services </h5>
                        </div>
                        <div class="marketing">
                            <img src="<?php echo get_template_directory_uri();?>/img/bullhorn.png" alt="Image" srcset="">
                            <h5>Digital Marketing</h5>
                        </div>
                    </div>
                    <!---------- Our products portion ---->
                    <div class="digital_market">
                        <h4>Our Products</h4>
                        <div class="marketing">
                            <img src="<?php echo get_template_directory_uri();?>/img/global.png" alt="Image" srcset="">
                            <h5>SEO services </h5>
                        </div>
                        <div class="marketing">
                            <img src="<?php echo get_template_directory_uri();?>/img/bullhorn.png" alt="Image" srcset="">
                            <h5>Digital Marketing</h5>
                        </div>
                    </div>
                </div>
                <!-------Bottom left ends here!--->
                <!--**********************-->

                <!--==========Bottom right start here============-->
                <div class="bottom_right">
                    <div class="circle_wrapper">
                        <div class="circle">
                            <div class="circlechart" data-percentage="95"></div>
                            <h5>Client satisfiction</h5>
                            <h6>It is a long established fact that a reader will be distracted</h6>
                        </div>
                        <div class="circle">
                            <div class="circlechart" data-percentage="90"></div>
                            <h5>Active Order</h5>
                            <h6>It is a long established fact that a reader will be distracted</h6>
                        </div>
                        <div class="circle">
                            <div class="circlechart" data-percentage="20"></div>
                            <h5>Our Products</h5>
                            <h6>It is a long established fact that a reader will be distracted</h6>
                        </div>
                    </div>
                    <!------Ending circular progressive bar ---->
                    <h3>Our All Activities</h3>
                    <div class="table_header">
                        <h4>Project Name</h4>
                        <h4>File Name</h4>
                        <h4>Price</h4>
                        <h4>status</h4>
                        <h4>Estimated date</h4>
                    </div>

                    <div class="table_data">
                        <h4 class="marked">Data Entry</h4>
                        <h4>file.csv</h4>
                        <h4>$88</h4>
                        <h4 class="back_color"><i class="far fa-check-square"></i></h4>
                        <h4 class="endcheck">20.12.20</h4>
                    </div>

                    <div class="table_data">
                        <h4>Data Entry</h4>
                        <h4>file.csv</h4>
                        <h4>$88</h4>
                        <h4 class="back_color"><i class="far fa-check-square"></i></h4>
                        <h4>20.12.20</h4>
                    </div>

                    <div class="table_data">
                        <h4 class="marked">Data Entry</h4>
                        <h4>file.csv</h4>
                        <h4>$88</h4>
                        <h4 class="back_color"><i class="far fa-check-square"></i></h4>
                        <h4 class="endcheck">20.12.20</h4>
                    </div>

                    <div class="table_data">
                        <h4>Data Entry</h4>
                        <h4>file.csv</h4>
                        <h4>$88</h4>
                        <h4 class="back_color"><i class="far fa-check-square"></i></h4>
                        <h4>20.12.20</h4>
                    </div>

                    <div class="table_data">
                        <h4 class="marked">Data Entry</h4>
                        <h4>file.csv</h4>
                        <h4>$88</h4>
                        <h4 class="back_color"><i class="far fa-check-square"></i></h4>
                        <h4 class="endcheck">20.12.20</h4>
                    </div>

                    <div class="table_data">
                        <h4>Data Entry</h4>
                        <h4>file.csv</h4>
                        <h4>$88</h4>
                        <h4 class="back_color"><i class="far fa-check-square"></i></h4>
                        <h4>20.12.20</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----------Ending point of Dash board-->

    <!---------- JavaScript --------->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jss/progresscircle.js"></script>
    <script src="jss/vendor-animated-circle.js"></script>
    
    <script src="jss/main.js"></script> -->
    <script>
        $('.circlechart').circlechart(); // Initialization
    </script>
    <?php 
        wp_footer();
    ?>

</body>

</html>

<!------------------ common html code
    <div class="container_full">
        <div class="fix container">

        </div>
    </div>
-------->

<!-------- Common portion in container part 
    <div class="head_bar">
        <div class="bar">
            <div class="yellow"></div>
            <div class="blue"></div>
        </div>
    </div>
    ------>