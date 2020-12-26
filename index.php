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
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"> -->
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
                    </div>
                </nav>
            </header>
        </div>
    </div>
    <!----------- Header portion finish--------->
    <!----------For testing purpose ----->


    <!----------- Starting point of first Container portion --------->
    <div class="container_full first_con_bg maintainSpace">
        <div class="fix container">
            <div class="contain_first">
                <section class="left_side_content">
                    <div class="head_bar">
                        <div class="bar">
                            <div class="yellow"></div>
                            <div class="blue"></div>
                        </div>
                        <p>Our knowledge, your success</p>
                    </div>
                    <div id="circle"></div>
                    <h2>Digital Marketing <br>The Optimal Solutions</h2>
                    <p>Power your business to new heights with our award-winning digital marketing services and technology platform.
                    </p>
                    <!-----I'm not so sure of it. Either it will be a link or botton----->
                    <div class="view_services">
                        <!----Let's consider it as a link -->
                        <a href="#">View all services</a>
                    </div>
                    <div class="perfectTriangle">
                        <div class="triangle"></div>
                    </div>
                </section>
                <section class="right_side_content">
                    <div class="first_content_rs_img">
                        <img src="img/Group 229.png" alt="Image of people">
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!----------- Ending point of first container portion --------->

    <!----------- Initial point of second container portion --------->
    <div class="container_full second_con_bg maintainSpace">
        <div class="fix container">
            <div class="contain_second">
                <section class="left_side_content">
                    <div class="head_bar">
                        <div class="bar">
                            <div class="yellow"></div>
                            <div class="blue"></div>
                        </div>
                    </div>
                    <h2 style="font-family: Roboto;">Why Choose us</h2>
                    <p>Our tried-and-true creative process makes design magic. With our global community that loves to collaborate we’ll turn your great ideas into a custom design you can’t get anywhere else.
                    </p>
                    <div class="box_wrapper">
                        <div class="left_box">
                            <div class="box">
                                <div class="img_of_box">
                                    <img src="img/box1.png" alt="Image of Earphone">
                                </div>
                                <h3>Quick Support</h3>
                                <p>Our support team is 24/7/365 active here to collaborate with you.</p>
                            </div>
                            <div class="box">
                                <div class="img_of_box">
                                    <img src="img/box2.png" alt="Image of Earphone">
                                </div>
                                <h3>Dedicated Team</h3>
                                <p>Our team is Brightly informative with every step of the work. This will fully explain the process and make the time affordable.
                                </p>
                            </div>
                        </div>
                        <div class="right_box">
                            <div class="box margin_box">
                                <div class="img_of_box">
                                    <img src="img/box3.png" alt="Image of Earphone">
                                </div>
                                <h3>Proven Performance</h3>
                                <p>We have the proven ability to computer competences without mistakes and meeting deadlines is equally important.
                                </p>
                            </div>
                            <div class="box margin_box">
                                <div class="img_of_box">
                                    <img src="img/box4.png" alt="Image of Earphone">
                                </div>
                                <h3>100% Quality Maintain</h3>
                                <p>Our team always maintain 100% quality work.
                                </p>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="right_side_content">
                    <div class="second_content_rs_img">
                        <img src="img/second_com_rs.png" alt="Image of people">
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!----------- Ending point of second container portion --------->

    <!----------- Initial point of thrid container portion --------->
    <div class="container_full third_con_bg maintainSpace">
        <div class="fix container">
            <div class="contain_third">
                <!-------Left portion of third container----->
                <div class="left_side_content">
                    <img src="img/thrid_containr_left.png" alt="Image of developing">
                </div>
                <!-----Right portion of the third container ----->
                <div class="right_side_content">
                    <div class="head_bar">
                        <div class="bar">
                            <div class="yellow"></div>
                            <div class="blue"></div>
                        </div>
                    </div>
                    <h2>Fully Responsive WordPress </h2>
                    <h2>Website Development</h2>
                    <p>In today’s digital world, your website is the first interaction consumers have with your business.
                    </p>
                    <p>That’s why almost 95 percent of a user’s first impression relates to web design. It’ also why web design services can have an immense impact on your company’ bottom line.</p>
                    <!-----I'm not so sure of it. Either it will be a link or botton----->
                    <div class="view_services">
                        <!----Let's consider it as a link -->
                        <a href="#">View all services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------- Ending point of thrid container portion --------->
    <!----------- Initial point of fourth container portion --------->
    <div class="container_full maintainSpace">
        <div class="fix container">
            <div class="contain_fourth">
                <!-------Left side of Fourth Container-------->
                <div class="left_side_content">
                    <div class="bar">
                        <div class="yellow"></div>
                        <div class="blue"></div>
                    </div>
                    <h2>Lead Generation for Small & Large Business
                    </h2>
                    <p>Did you know that leads contacted within five minutes are 90% more likely to turn into sales? Without an effective lead management solution.
                    </p>
                    <p>We specially-engineered IT Market24 to help lead-based businesses manage, track, follow up with, and grow valuable leads — and ultimately revenue.
                    </p>
                    <!-----I'm not so sure of it. Either it will be a link or botton----->
                    <div class="view_services">
                        <!----Let's consider it as a link -->
                        <a href="#">View all services</a>
                    </div>

                </div>

                <!------- Right side of Fourth Container-------->
                <div class="right_side_content">
                    <div class="fourth_content_rs_img">
                        <img src="img/Group 4364.png" alt="Image of people">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!----------- Ending point of fourth container portion --------->

    <!----------- Initial point of fifth container portion --------->
    <div class="container_full fifth_bg maintainSpace">
        <div class="fix container">
            <div class="fifth_contain">
                <!-------Left portion of fifth container----->
                <div class="left_side_content">
                    <div class="fifth_content_left_img">
                        <img src="img/fifth_left_img.png" alt="Image of people">
                    </div>
                </div>
                <!-------Right portion of fifth container ----->
                <div class="right_side_content">
                    <div class="bar">
                        <div class="yellow"></div>
                        <div class="blue"></div>
                    </div>
                    <h2>Website Ranking & Enhance <br> SEO Services
                    </h2>
                    <p>Are you ready to start optimizing your site for organic search? Contact us online to chat with an experienced SEO team.
                    </p>
                    <p>If you’re looking for serious business growth, SEO, or search engine optimization is the strategy for you. Why does it work? Simple! It targets the users that are most likely to convert on your website, and takes them there..
                    </p>
                    <!-----I'm not so sure of it. Either it will be a link or botton----->
                    <div class="view_services">
                        <!----Let's consider it as a link -->
                        <a href="#">View all services</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!----------- Ending point of fifth container portion --------->
    <!----------- initial point of sixth container portion --------->
    <div class="container_full maintainSpace">
        <div class="fix container">
            <div class="sixth_contain">
                <div class="left_side_content">
                    <div class="bar">
                        <div class="yellow"></div>
                        <div class="blue"></div>
                    </div>
                    <h2> Skip Tracing for Real <br> Estate Business
                    </h2>
                    <p> Here are some examples of other professionals who have use for skip tracing:
                    </p>
                    <div class="list_wrapper">
                        <div class="check_circle_text">
                            <p><i class="fas fa-check-circle"></i> Real estate agencies.</p>
                        </div>
                        <div class="check_circle_text">
                            <p><i class="fas fa-check-circle"></i> Marketing departments and agencies.</p>
                        </div>
                        <div class="check_circle_text">
                            <p><i class="fas fa-check-circle"></i> Insurance fraud investigators.</p>
                        </div>
                        <div class="check_circle_text">
                            <p><i class="fas fa-check-circle"></i> School alumni reunion organizers.</p>
                        </div>
                    </div>
                    <!-----I'm not so sure of it. Either it will be a link or botton----->
                    <div class="view_services">
                        <!----Let's consider it as a link -->
                        <a href="#"> View all services</a>
                    </div>
                </div>
                <div class="right_side_content">
                    <div class="sixth_content_rs_img">
                        <img src="img/sixth_img.png" alt="Image of people">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------- Ending point of sixth container portion --------->

    <!----------- Initial point of seventh container portion --------->
    <div class="container_full third_con_bg maintainSpace">
        <div class="fix container">
            <div class="seventh_contain">
                <!--------Left portion of the container------>
                <div class="left_side_content">
                    <div class="seventh_content_rs_img">
                        <img src="img/seventh_content_img.png" alt="Image of people">
                    </div>
                </div>
                <!--------Right portion of the container------>
                <div class="right_side_content">
                    <div class="bar">
                        <div class="yellow"></div>
                        <div class="blue"></div>
                    </div>
                    <h2>Data entry, Web scraping, Mining Services
                    </h2>
                    <p>Here are the services we offering :</p>
                    <div class="list_wrapper">
                        <div class="check_circle_text">
                            <p><i class="fas fa-check-circle"></i> PDF to MS Excel/Word</p>
                        </div>
                        <div class="check_circle_text">
                            <p><i class="fas fa-check-circle"></i> Image to MS Excel/Word, Copy Paste Work</p>
                        </div>
                        <div class="check_circle_text">
                            <p><i class="fas fa-check-circle"></i> CRM Data Entry, Web Research, Data Mining</p>
                        </div>
                        <div class="check_circle_text">
                            <p><i class="fas fa-check-circle"></i> Contact Details from Websites</p>
                        </div>
                        <div class="check_circle_text">
                            <p><i class="fas fa-check-circle"></i> E-commerce Products Listing</p>
                        </div>
                    </div>
                    <!-----I'm not so sure of it. Either it will be a link or botton----->
                    <div class="view_services">
                        <!----Let's consider it as a link -->
                        <a href="#">View all services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------- Ending point of seventh container portion --------->
    <!----------- Initial point of eighth container portion --------->
    <div class="container_full maintainSpace">
        <div class="fix container">
            <div class="eighth_contain">
                <!-------- Upper portion of eighth conatiner ------->
                <div class="header-8">
                    <div class="bar">
                        <div class="yellow"></div>
                        <div class="blue"></div>
                    </div>
                    <br>
                    <h2>Clients Testimonial</h2>
                    <p>our most valuable customer get there valuable feedback.</p>
                </div>
                <!--------- Bottom portion of eighth container ------------>
                <div class="bottom-8">
                    <div class="bottom-up-8">

                        <h6><i class="fas fa-quote-left"></i> It is a long established fact that a reader will be distracted by the readable content of a page when </h6>
                        <h6>Ipsum is that it has a more-or-less normal distribution of letters, as opposed to </h6>
                        <h6> publishing packages and web page editors now use Lore <i class="fas fa-quote-right"></i></h6>
                        <div class="star_mark">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <br>
                        <img style="margin-left: auto;
                        margin-right: auto;
                        width: 3.5%;
                        height: 30px;
                        display: block" src="img/customer_img.png" alt="custom Image">
                        <h4>Joe Due</h4>
                        <h5>Ux / Ui Designer <mark>@Pixbey</mark></h5>
                        <!-- <img src="img/quotation-marks.png" alt="quatation mark"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------- Ending point of egihth container portion --------->
    <!----------- Initial point of nineth container portion --------->
    <div class="container_full nineth_bg maintainSpace">
        <div class="fix container">
            <div class="circle_wrapper">
                <div class="circle">
                    <div class="circlechart" data-percentage="95"></div>
                    <h5>Client satisfiction</h5>
                    <h6>It is a long established fact that a reader will be distracted</h6>
                </div>
                <div class="circle">
                    <div class="circlechart" data-percentage="90"></div>
                    <h5>Total Complete Order</h5>
                    <h6>It is a long established fact that a reader will be distracted</h6>
                </div>
                <div class="circle">
                    <div class="circlechart" data-percentage="20"></div>
                    <h5>Active Order</h5>
                    <h6>It is a long established fact that a reader will be distracted</h6>
                </div>
            </div>
        </div>
    </div>
    <!----------- Ending point of nineth container portion --------->
    <!------Initaial point of footer part---->
    <div class="container_full footer_bg maintainSpace">
        <div class="fix container footer_head">

            <div class="footer_col">
                <div class="bar_wrap">
                    <div class="f_bar_y"></div>
                    <div class="f_bar_b"></div>
                </div>
                <br>
                <h3>About site</h3>
                <h2>Name and logo</h2>
                <div class="footer_p">
                    <p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's
                    </p>
                    <!-------I don't have any idea is it botton or link------->
                    <a href="#">Read more</a>
                </div>
                <input type="email" placeholder="Enter your email">
            </div>
            <div class="footer_col">
                <div class="bar_wrap">
                    <div class="f_bar_y"></div>
                    <div class="f_bar_b"></div>
                </div>
                <br>
                <h3>Our Services</h3>
                <li><a href="#">Data entry</a></li>
                <li><a href="#">Graphics design</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Skip Tracing</a></li>
                <li><a href="#">Lead generation</a></li>
            </div>

            <div class="footer_col">
                <div class="bar_wrap">
                    <div class="f_bar_y"></div>
                    <div class="f_bar_b"></div>
                </div>
                <br>
                <h3>Quick links</h3>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Refund Policy</a></li>
            </div>
            <div class="footer_col">
                <div class="bar_wrap">
                    <div class="f_bar_y"></div>
                    <div class="f_bar_b"></div>
                </div>
                <br>
                <h3>Contact Us</h3>
                <p><i class="fas fa-map-marker-alt"></i> Master Para, Chartolarmor, Rangpur</p>
                <p><i class="fas fa-envelope"></i> adimin@admin.com</p>
                <p><i class="fas fa-phone-alt"></i> +0123456789</p>
            </div>

        </div>
        <!------Bottom part of the footer------>
        <div class="white_bar_at_footer"></div>
        <div class="fix container">
            <div id="footer_bottom">
                <p>ItMarket24 &copy; All Reaserved</p>
                <p>Privacy Terms and Conditions Contact</p>
                <span>
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                </span>
                <span>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </span>
                <span>
                    <a href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </span>
                <span>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </span>
            </div>
        </div>

        <!------ Ending point of footer------>

        <!---------- JavaScript --------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="jss/vendor-animated-circle.js"></script>
        <script src="jss/main.js"></script>
        <!-----Javascript for circle ---->
        <script src="jss/progresscircle.js"></script>
        <script>
            $('.circlechart').circlechart(); // Initialization
        </script>
    </div>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <div class="bar">
            <div class="yellow"></div>
            <div class="blue"></div>
        </div> 
    
    ------>