<!-------------
 This code is written by Md. Sarowar Al-Amin
---------->
    
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