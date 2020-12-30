
<?php get_template_part('header');?>

<?php ?>
    <!----------- Initial point of Page Marker --------->
    <div class="container_full">
        <div class="fix graphics_head_pic">
            <div class="graphics_background" style="background-image: url('<?php echo get_template_directory_uri();?>/img/leadgeneration_bg.png');">
                <!-- <img src="img/top-view-tools-marketing.png" alt="Lead generation lead_background Image"> -->
            </div>
            <div class="container" style="opacity: 1;">
                <h3>Lead Generation</h3>
                <h6>Home > Lead Generation</h6>
            </div>
        </div>

    </div>
    <!----------- Ending point of Page Marker --------->

    <!----------- Initial point of First Container --------->
    <div class="container_full">
        <div class="fix container">
            <section class="graphic_left_side_content">
                <div class="first_content_left_img">
                    <img src="<?php echo get_template_directory_uri();?>/img/leadGeneration1st.png" alt="Image of people">
                </div>
            </section>
            <?php get_template_part('first_container_text');?>
        </div>
    </div>
    <!----------- Ending point of First container --------->

    <!----------- Initial point of Second container ------->
    <?php get_template_part('second_container');?>
    <!----------- Ending point of Second container ------->

    <!----------- Initial  point of third container ------->
    <?php get_template_part('package_description');?>
    <!----------- Ending point of third container ------->

    <!--------Initial point of fourth container/ package portion ----------->
    <?php get_template_part('packages');?>
    <!--------Ending point of fourth container/ package portion ----------->

    <!-------- Initial point of fifth container of leadgeneration ----------->
    <?php get_template_part('fifth_container');?>
    <!--------Ending point of fifth container of leadgeneration ----------->

    <!--------Initial point of sixth container of leadgeneration ----------->
    <?php get_template_part('sixth_container');?>
    <!--------Ending point of sixth container of leadgeneration ----------->


    <?php get_template_part('footer');?>