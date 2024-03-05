<?php
//field values
$hero_image = !empty(get_field('hero_image')) ? get_field('hero_image') : 314; //image ID
$hero_heading = !empty(get_field('hero_heading')) ? get_field('hero_heading') : 'Unveil Brilliance: Where Your Ride Gets the Royal Treatment!'; //String
$hero_subheading = !empty(get_field('hero_subheading')) ? get_field('hero_subheading') : 'Elevate Your Car\'s Shine with Expert Detailing Services'; //String

?>

<div class="wmd_hero">
    <div class="row flex-xl-row-reverse flex-col align-items-center p-0 wmd_hero__content">
        <div class="col-12 col-xl-6 p-5">
            <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $hero_heading; ?></h1>
            <p class="lead"><?php echo $hero_subheading; ?></p>
            <div id="QuoteForm" style="scroll-margin-top: 300px;">
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" theme="orbital"]'); ?>
            </div>
        </div>
        <div class="col-12 col-xl-6 p-0 m-0 wmd_hero__image d-none d-xl-block">
            <?php $image_src = wp_get_attachment_image_src($hero_image, 'full'); ?>
            <img src="<?php echo $image_src; ?>" alt="<?php echo get_the_title($hero_image); ?>" width="600" height="600" srcset="<?php echo wmd_get_srcset($hero_image); ?>">
        </div>
    </div>
</div>