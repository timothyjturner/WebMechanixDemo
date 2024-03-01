<?php
//field values
$hero_image = !empty(get_field('hero_image')) ? get_field('hero_image') : 314; //image ID
$hero_heading = !empty(get_field('hero_heading')) ? get_field('hero_heading') : 'Unveil Brilliance: Where Your Ride Gets the Royal Treatment!'; //String
$hero_subheading = !empty(get_field('hero_subheading')) ? get_field('hero_subheading') : 'Elevate Your Car\'s Shine with Expert Detailing Services'; //String
$hero_button_title = !empty(get_field('hero_button_title')) ? get_field('hero_button_title') : 'Start your quote'; //String
$hero_button_link = !empty(get_field('hero_button_link')) ? get_field('hero_button_link') : '#StartYourQuoteForm'; //String

?>

<div class="container wmd_hero">
    <div class="row flex-lg-row flex-col align-items-center p-0 wmd_hero__content">
        <div class="col-12 col-lg-6 p-5">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $hero_heading; ?></h1>
            <p class="lead"><?php echo $hero_subheading; ?></p>
            <div class="d-grid gap-2 d-flex justify-content-center justify-content-lg-start wmd_hero__button">
                <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $hero_button_link; ?>"><?php echo $hero_button_title; ?></a></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 p-0 m-0 wmd_hero__image d-none d-lg-block">
            <?php $image_src = wp_get_attachment_image_src($hero_image, 'full'); ?>
            <img src="<?php echo $image_src; ?>" alt="<?php echo get_the_title($hero_image); ?>" width="600" height="600" srcset="<?php echo wmd_get_srcset($hero_image); ?>">
        </div>
    </div>
    <div class="col-12 col-lg-6 p-0 m-0 wmd_hero__image d-block d-lg-none">
        <?php $image_src = wp_get_attachment_image_src($hero_image, 'full'); ?>
        <img src="<?php echo $image_src; ?>" alt="<?php echo get_the_title($hero_image); ?>" width="600" height="600" srcset="<?php echo wmd_get_srcset($hero_image); ?>">
    </div>
</div>