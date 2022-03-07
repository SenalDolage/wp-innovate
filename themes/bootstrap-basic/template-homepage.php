<?php

/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<!-- Hero Banner Section -->
<div class="hero-banner">
    <?php if (get_field('banner_image')) :
        $image = get_field('banner_image');
    ?>
        <div class="image-wrapper">
            <img src="<?php echo esc_url($image['url']); ?>" alt="banner" />
        </div>
    <?php else : ?>
        <div class="video-wrapper">
            <?php echo do_shortcode('[presto_player id=102]	'); ?>
        </div>
    <?php endif ?>
</div>

<!-- Collection Section -->
<section class="collection" style="background-color: #8c7b7b">
    <div class="container">
        <div class="title-wrapper">
            <h2>Collection</h2>
        </div>

        <div class="categories-list">
            <?php
            $args = array(
                'taxonomy' => 'category',
                'orderby' => 'name',
                'order'   => 'ASC',
                'terms' => array('uncategorized'),
                'operator' => 'NOT IN'
            );
            $cats = get_categories($args);
            foreach ($cats as $cat) {
            ?>
                <div class="category-item">
                    <img src="https://via.placeholder.com/370x300">
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- New in section  -->
<section class="new-in" style="background-color: #8c7b7b">
    <div class="container">
        <div class="title-wrapper">
            <h2>New In</h2>
        </div>

        <div class="new-list">
            <?php
            if (have_rows('new-repeater')) :
                while (have_rows('new-repeater')) : the_row();
            ?>
                    <div class="new-list-item">
                        <img src="<?php the_sub_field('left_column_image'); ?>" alt="new-product">
                        <div class="new-list-item-description">
                            <p class="new-list-title">
                                <?php the_sub_field('right_column_title'); ?>
                            </p>
                            <p class="new-list-subtitle">
                                <?php the_sub_field('right_column_subtitle'); ?>
                            </p>

                            <?php if (get_sub_field('new_arrival')) { ?>
                                <p class="new-list-arrival">New Arrival</p>
                            <?php } ?>

                            <div class="new-list-btn-wrapper">
                                <a href="<?php the_sub_field('shop_now_link'); ?>" class="new-list-btn" target="_blank">
                                    Shop Now
                                </a>
                                <a href="<?php the_sub_field('see_more_link'); ?>" class="new-list-btn" target="_blank">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="about-us" style="background-color: #8c7b7b">
    <div class="container">
        <div class="title-wrapper">
            <h2>About Us</h2>
        </div>
        <div class="row">
            <?php
            if (have_rows('about_us')) :
                while (have_rows('about_us')) : the_row();
            ?>
                    <div class="col-content col-md-4">
                        <div class="inner-col">
                            <h4><?php the_sub_field('title'); ?></h4>
                            <p><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>