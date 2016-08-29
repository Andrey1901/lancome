<?php /*Template Name: Homepage Template*/
get_header(); ?>
    <!-- Start Main -->
<!-- Web network buil -->
<section class="container-fluid issuance" id="main">
    <div class="container description-holder">
        <div class="row">
            <h2><?php echo get_field("first_title");?></h2>
            <p><?php echo get_field("first_description");?></p>
                <a href="<?php echo get_field("button_link");?>" class="more"><?php echo get_field("button_text");?></a>
        </div>
        <img src="<?php echo get_field("first_image");?>" alt="<?php echo get_field("alt_text_1");?>">
    </div>
</section>
<!-- Web network end -->
<!-- Video section start -->
<section class="container-fluid video" id="video">
    <div class="container description-holder clearfix">
        <div class="row">
            <img src="<?php echo get_field("second_image");?>" class="video-img" alt="<?php echo get_field("alt_text_2");?>">
            <h2><?php echo get_field("second_title");?></h2>
            <div class="text-button-block pull-right">
                <p><?php echo get_field("second_description");?></p>
                <a href="<?php echo get_field("button_link_2");?>" class="more"><?php echo get_field("button_text_2");?></a>
            </div>
            <div class="cam-holder list-inline">
                <a href="<?php echo get_field("small_img_1_link");?>"> <?php echo get_field("small_title1");?>
                    <img src="<?php echo get_field("small_img_1");?>" alt="<?php echo get_field("small_img_1_alt");?>">
                </a>
                <a href="<?php echo get_field("small_img_2_link");?>"> <?php echo get_field("small_title2");?>
                    <img src="<?php echo get_field("small_img_2");?>" alt="<?php echo get_field("small_img_2_alt");?>">
                </a>
            </div>

        </div>
    </div>
</section>
<!-- Video section end -->
<!-- SCUD section start -->
<secstion class="container-fluid skud" id="skud">
    <div class="container description-holder">
        <div class="row">
            <div class="col-sm-6">
                <h2><?php echo get_field("third_title");?></h2>
                <p><?php echo get_field("third_description");?></p>
                <a href="<?php echo get_field("button_link_3");?>" class="more"><?php echo get_field("button_text3");?></a>
            </div>
            <img src="<?php echo get_field("third_image");?>" alt="<?php echo get_field("alt_text_3");?>">
        </div>
    </div>
</secstion>
<!-- SCUD section end -->
<!-- PON section start -->
<section class="container-fluid pon" id="pon">
    <div class="container description-holder">
        <div class="row">
            <img src="<?php echo get_field("fourth_image");?>" alt="<?php echo get_field("alt_text_4");?>">
            <div class="pon-holder">
                <h2><?php echo get_field("fourth_title");?></h2>
                <p><?php echo get_field("fourth_description");?></p>
                <a href="<?php echo get_field("button_link4");?>" class="more"><?php echo get_field("button_text4");?></a>
            </div>

        </div>
    </div>
</section>
<!-- PON section end -->
    <!--End main-->
<?php get_footer(); ?>

