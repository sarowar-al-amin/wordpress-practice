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

</head>

<body>
    <!------ Starting point of Header portion------->
    <div class="container_full header_bg">
        <div class="fix container">
            <header id="header">
                <div class="dashboard">
                    <div class="logo_left">
                        <img src="img/logo redesign.png" alt="Image of logo">
                    </div>
                    <div class="user_info">
                        <img src="img/customer_img.png" alt="User Image">
                        <div class="user_nmae">
                            <span>
                                    Khabib Nurmagomedov    <br>
                                    <i class="fas fa-map-marker-alt"></i> Just send me location. location.
                                </span>
                        </div>
                    </div>
                    <div class="search_bar">
                        <input type="search" name="Seatch in Dash" placeholder="search here">
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
                                <span><i class="fas fa-gifts"></i> Our products &rsaquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ending_part">
                    <ul>
                        <li class="active">
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

            <!----------Form of setting page ---->
            <div class="settings_form">
                <div class="head_setting">
                    <h3>Settings</h3>
                </div>
                <div class="form_point">
                    <form action=" " method=" ">
                        Personal Options:
                        <div class="admin_color_option">
                            <h5>Admin Color Scheme :</h5>
                            <div class="classic">
                                classic <input type="radio" name="color" value="classic" checked>
                            </div>
                            <div class="dark">
                                <input type="radio" name="color" value="dark">dark
                            </div>
                        </div>

                        <div class="user_name">
                            <h4> Name </h4>
                            <div class="name">
                                <h6>User Name :</h6>
                                <input type="text" placeholder="User name can't be changed.">
                            </div>
                            <br>
                            <div class="name">
                                <h6>First Name :</h6>
                                <input type="text" placeholder="Enter your  name:">
                            </div>
                            <br>
                            <div class="name">
                                <h6>Last Name :</h6>
                                <input type="text" placeholder="Enter your  name:">
                            </div>
                            <br>
                            <div class="name">
                                <h6>Display Name :</h6>
                                <input type="text" placeholder="Enter your name:">
                            </div>
                        </div>

                        <div class="user_name">
                            <h4>Contact Info</h4>
                            <div class="name">
                                <h6>Email (required)</h6>
                                <input type="email" placeholder="md. xyz@abc.com">
                            </div>
                            <br>
                            <div class="name">
                                <h6>Website</h6>
                                <input type="text" placeholder="Enter your  Website">
                            </div>
                            <br>
                            <div class="name">
                                <h6>Facebook profile URL</h6>
                                <input type="text" placeholder="Enter your  Facebook URL">
                            </div>
                            <br>
                            <div class="name">
                                <h6>Linkedin profile URL</h6>
                                <input type="text" placeholder="Enter your Linkedin url">
                            </div>
                        </div>

                        <!---------About yourself---->
                        <div class="about_yourself">
                            <h4>About Youself</h4>
                            <div class="bioInfo">
                                <h6>biograhical Info</h6>
                                <textarea name="biograhicinfo" placeholder="write something about yourself"></textarea>
                            </div>
                            <div class="profile_info">
                                <h6>Profile picture</h6>
                                <span><i class="fas fa-user"><input type="file" name="profilePicture" id=""></i></span>
                            </div>
                        </div>
                        <!---------Account Management ----->
                        <div class="account_management">
                            <h4>Account Management</h4>
                            <div class="changingPassword">
                                <h5>Change Password</h5>
                                <div class="changePasswordBotton">
                                    <a href="#">Change Password</a>
                                </div>
                            </div>
                            <div class="session">
                                <h5>Session</h5>
                                <div class="botton_session">
                                    <a href="#">Log out from everywhere else</a>
                                </div>
                            </div>
                        </div>
                        <div class="update">
                            <span>
                                <input type="submit" value="Update">
                            </span>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-----------Ending point of Dash board-->
    <?php
        wp_footer();
    ?>
</body>

</html>