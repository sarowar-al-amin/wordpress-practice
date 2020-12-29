<?php get_template_part('header');?>
    <!----------- Initial point of Page Marker --------->
    <div class="container_full">
        <div class="fix graphics_head_pic">
            <div class="graphics_background" style="background-image: url('<?php echo get_template_directory_uri();?>/img/bg_graphic.png');">
                <!-- <img src="img/top-view-tools-marketing.png" alt="Lead generation lead_background Image"> -->
            </div>
            <div class="container" style="opacity: 1;">
                <h3>Lead Generation</h3>
                <h6>Home > Lead Generation</h6>
            </div>
        </div>

    </div>
    <!----------- Ending point of Page Marker --------->
    <!---------- Initial point of lead generation upload file---->
    <div class="container_full">
        <div class="fix container">
            <div class="check_out_lead_generation_file_head">
                <div class="upload_file">
                    <h3>Check out</h3>
                    <div class="step_bar">
                        <div class="bar1"></div>
                        <h6>Upload file</h6>
                    </div>
                    <div class="step_bar">
                        <div class="bar1"></div>
                        <h6>Map Field</h6>
                    </div>
                    <div class="step_bar">
                        <div class="bar1"></div>
                        <h6>Check out</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----------Ending point of lead generation upload file ---->

    <!----------Initializing Layout of Check out page ------------------>
    <div class="container_full">
        <div class="fix container">
            <div class="payment_layout">
                <div class="right_side_of_payment">
                    <h4>Choose Your Payment Method</h4>
                    <div class="option_images">
                        <div class="image_no">
                            <a href="#" title="Visa card">
                                <img src="<?php echo get_template_directory_uri();?>/img/Group 4689.png" alt="Visa card">
                            </a>
                        </div>
                        <div class="image_no">
                            <a href="#" title="Pay pal">
                                <img src="<?php echo get_template_directory_uri();?>/img/Group 4692.png" alt="Paypal card">
                            </a>
                        </div>
                        <div class="image_no">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?>/img/Group 4693.png" alt="Visa card">
                            </a>
                        </div>
                        <div class="image_no">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?>/img/Group 4694.png" alt="Visa card">
                            </a>
                        </div>
                    </div>
                    <div class="input_text">
                        <div class="text_head">
                            <h5>Choose Your Payment Method</h5>
                        </div>
                        <div class="input_area">
                            <input type="text" placeholder="1001 1001 1001">
                            <div class="selected_method">
                                Visa
                            </div>
                        </div>
                    </div>
                    <div class="input_text">
                        <div class="text_head">
                            <div class="text_wrapper">
                                <div class="text1">
                                    <h6>Expired date</h6>
                                </div>
                                <div class="text2">
                                    <h6>cvv</h6>
                                </div>
                            </div>
                        </div>
                        <div class="input_area">
                            <div class="input_no">
                                <input type="number" min="1" max="31" placeholder="  00">
                            </div>
                            <div class="input_no">
                                <input type="number" min="1" max="12" placeholder="  00">
                            </div>
                            <div class="input_no">
                                <input type="number" min="2020" max="2030" placeholder="  00">
                            </div>
                        </div>
                    </div>
                    <label for="Billing information">
                        <em>Billing information:</em> <br>
                    </label>
                    <div class="input_text">
                        <div class="text_head">
                            <h5>Street Address</h5>
                        </div>
                        <div class="input_area">
                            <input type="text" placeholder="write your address">
                        </div>
                    </div>
                    <div class="input_text">
                        <div class="text_head">
                            <h5>City</h5>
                        </div>
                        <div class="input_area">
                            <input type="text" placeholder="write your city name">
                        </div>
                    </div>
                    <div class="input_text">
                        <div class="text_head">
                            <h5>State / Province</h5>
                        </div>
                        <div class="input_area">
                            <input type="text" placeholder="write your state name">
                        </div>
                    </div>
                    <div class="input_text">
                        <div class="text_head">
                            <h5>Zip Code</h5>
                        </div>
                        <div class="input_area">
                            <input type="text" placeholder="Zip code">
                        </div>
                    </div>
                    <div class="radio_botton">
                        <input type="radio" name="" id=""> <span>Save the card infromation for future purchase</span>
                    </div>
                    <div class="buy_botton">
                        <a href="#">Buy Now</a>
                    </div>
                </div>

                <div class="check_out_right_side">
                    <h4>Verify Estimate Cost</h4>
                    <div class="payment_tab">
                        <div class="pay_tab_head">
                            <h4>Silver Package Bundle</h4>
                        </div>
                        <div class="file_info">
                            <div class="per_unit_cost">
                                <h4>$ 0.15 per drop</h4>
                            </div>
                            <div class="file_name">
                                <div class="records">
                                    <p>File name</p>
                                    <h6>value.csv</h6>
                                </div>
                            </div>
                            <div class="file_name">
                                <div class="records">
                                    <p>Number of Records</p>
                                    <h6>287</h6>
                                </div>
                            </div>
                            <div class="file_name">
                                <div class="records">
                                    <p>Total</p>
                                    <h6>$756843.0</h6>
                                </div>
                            </div>
                            <div class="file_name">
                                <div class="records">
                                    <p>Order subtotal</p>
                                    <h6>$675874.0</h6>
                                </div>
                            </div>
                        </div>
                        <div class="discount_code">
                            <h4>You Have Promo Code?</h4>
                            <div class="promo_in_box">
                                <div class="promo_input">
                                    <input type="text" placeholder="Enter your promo code">
                                </div>
                                <div class="promo_submit">
                                    <input type="submit" value="submit">
                                </div>
                            </div>
                        </div>
                        <p>You will only be charged for matches. <br>The actual price you pay will most likely be lower</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------Ending point of layout of check out page------------------>

    <?php get_template_part('footer');?>