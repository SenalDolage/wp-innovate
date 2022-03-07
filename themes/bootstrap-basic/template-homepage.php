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
<section class="collection" style="background-color: red">
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

<!-- About Us Section -->
<section class="about-us">
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
                        <h4><?php the_sub_field('title'); ?></h4>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>