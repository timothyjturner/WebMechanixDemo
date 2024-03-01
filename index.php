<?php get_header(); ?>
<div class="lag-main-content" data-text-for-quote="<?php echo get_theme_mod( 'text_for_quote_message' ); ?>">
    <div class="lag-wrap">
        <?php the_content(); ?>
        <?php if( have_rows('sections') ): 
        $section_counter = 0;
        ?>

        <?php while ( have_rows('sections') ) : the_row(); 
        $section_counter++;
        ?>

        <?php if( get_row_layout() == 'popup_images_section' ) : ?>
        <div class="lag-section lag-section-<?php echo $section_counter;?> lag-section--features">
            <div class="lag-section--features__inner">

                <?php while ( have_rows('popup_element') ) : the_row();
                $popup_uid = uniqid();
                $popup_image = get_sub_field('icon_image');
                $popup_background = get_sub_field('background_image');
                $popup_title = get_sub_field('title');
                $popup_content = get_sub_field('popup_content');
                ?>
                <a href="#" class="lag-section--features__feature__learn-more-link lag-modal-link" data-modal="<?php echo $popup_uid; ?>">
                    <div class="lag-section--features__feature">
                        <div class="lag-section--features__feature__image-container">
                            <img src="<?php echo $popup_image; ?>" alt="" class="lag-section--features__feature__image">
                        </div>

                        <h3 class="lag-section--features__feature__title"><?php echo $popup_title; ?></h3>
                        <p>Learn More</p>
                    </div>
                </a>
                <div class="lag-modal" data-modal-id="<?php echo $popup_uid; ?>">
                    <div class="lag-modal__inner">
                        <?php echo $popup_content; ?>
                        <?php if($popup_background && ($popup_background != '')) { ?>
                            <img src="<?php echo $popup_background; ?>" class="lag-modal__background" />
                        <?php } ?>
                    </div>
                </div>   

                <?php endwhile; ?>

            </div>
        </div>

        <?php elseif( get_row_layout() == 'standard_section' ) : ?>
        <?php 
        $standard_background = get_sub_field('standard_background_color');
        $standard_content = get_sub_field('content');
        $standard_borders = get_sub_field('add_top_and_bottom_borders');
        $border_style_css = $standard_borders ? 'border-top: 1px solid #000;border-bottom: 1px solid #000;' : '';
        ?>
        <div class="lag-section lag-section-<?php echo $section_counter;?>" style="background-color:<?php echo $standard_background . ';' . $border_style_css; ?>"> 
            <?php echo $standard_content; ?>

        </div>

        <?php elseif( get_row_layout() == 'big_title' ) : 

        $big_title = get_sub_field('title');
        $big_title_background_color = get_sub_field('background_color');

        ?>

        <div class="lag-big-title lag-section-<?php echo $section_counter;?>" style="background-color:<?php echo $big_title_background_color; ?>">
            <h2 class="lag-section--start-your-quote__title"><?php echo $big_title ?></h2>
        </div>

        <?php elseif( get_row_layout() == 'brands_slider_section' ) : ?>
        <div class="lag-section lag-section-<?php echo $section_counter;?> lag-section--brands">
            <div class="lag-section--brands__inner">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Acura.png" alt="Acura Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Buick.png" alt="Buick Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Cadillac.png" alt="Cadillac Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Chrysler.png" alt="Chrysler Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Dodge.png" alt="Dodge Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Jeep.png" alt="Jeep Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Ram.png" alt="Ram Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Ford.png" alt="Ford Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/GMC.png" alt="GMC Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Honda.png" alt="Honda Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Hyundai.png" alt="Hyundai Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Infiniti.png" alt="Infiniti Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Jaguar.png" alt="Jaguar Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/LandRover.png" alt="Land Rover Logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/brands-slider/Nissan.png" alt="Nissan Logo">
            </div>
        </div>

        <?php elseif( get_row_layout() == 'customer_reviews_section' ) : ?> 
        <div class="lag-section lag-section-<?php echo $section_counter;?> lag-section--referrals">
            <div class="lag-section--referrals__inner">

                <?php while ( have_rows('customer_review') ) : the_row();
                $customer_quote = get_sub_field('cust_quote');
                $customer_name = get_sub_field('cust_name');
                $customer_location = get_sub_field('cust_location');
                ?> 

                <div class="lag-referral">
                    <div class="lag-referral__text-container"><p><?php echo $customer_quote; ?></p></div>
                    <div class="lag-referral__details-container">
                        <?php if($customer_name and ( ($customer_name != '') or ($customer_name != ' ') )) { ?>
                        <span class="lag-referral__person"><?php echo $customer_name; ?></span>
                        <?php } ?>
                        <?php if($customer_location and ( ($customer_location != '') or ($customer_location != ' ') )) { ?>
                        <span class="lag-referral__location"><?php echo $customer_location; ?></span>
                        <?php } ?>
                    </div>
                </div>


                <?php endwhile; ?>

            </div>
        </div>

        <?php elseif( get_row_layout() == 'location_services' ) : ?> 

        <div class="lag-section lag-section-<?php echo $section_counter;?> lag-section--locations" id="Locations">
            <div class="lag-section--locations__inner">
                <div class="lag-section--locations__inner__col lag-section--locations__inner__col--map">
                </div>
                <div class="lag-section--locations__inner__col lag-section--locations__inner__col--select">
                    <div class="lag-section--locations__inner__col--select__inner">
                        <h2 class="lag-section--locations__inner__col--select__title">Service Type:</h2>
                        <div class="lag-section--locations__inner__col--select__select-container">
                            <select name="lagLocationSelect" id="lagLocationSelect" class="lag-section--locations__inner__col--select__select" data-services="">
                            </select>   
                        </div>  
                    </div>
                    <div class="lag-section--locations__inner__col--select__inner-list-container">
                        <h2 class="lag-section--locations__inner__col--select__title">Available Locations:</h2>
                        <ul>
                            <?php while ( have_rows('location') ) : the_row(); ?>
                            <li class="lag-section--locations__inner__col--select__inner-list-container__item" data-name="<?php echo get_sub_field('dealer_name'); ?>" data-lat="<?php echo get_sub_field('latitude'); ?>" data-lon="<?php echo get_sub_field('longitude'); ?>" data-services="<?php echo implode(',', get_sub_field('services')); ?>">
                                <h3 class="lag-section--locations__inner__col--select__inner-list-container__item__title"><?php echo get_sub_field('dealer_name'); ?></h3>
                                <p class="lag-section--locations__inner__col--select__inner-list-container__item__details"><?php echo get_sub_field('dealer_details'); ?></p>
                            </li>
                            <?php endwhile; ?>                                                                      
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php endwhile; ?>

        <?php endif; ?>
        <div class="lag-modal" data-modal-id="warranty">
            <div class="lag-modal__inner">
                <h3>Warranty Content</h3>
                <p>Warranty content will go here!</p>
            </div>
        </div>
        <?php get_footer(); ?>