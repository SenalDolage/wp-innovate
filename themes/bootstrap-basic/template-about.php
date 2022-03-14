<?php

/**
 * Template Name: About
 */
?>

<?php get_header(); ?>

<div class="range-page-with-slider-content">

    <!-- Banner Section -->
    <div class="range-banner">
        <div class="container">
            <?php if (get_field('about_banner_image')) :
                $image = get_field('about_banner_image');
            ?>
                <div class="image-wrapper">
                    <img src="<?php echo esc_url($image); ?>" alt="banner" />
                </div>
            <?php endif ?>
        </div>
    </div>


    <section class="about-us about-template" id="about">
        <div class="container">
            <div class="title-wrapper">
                <h2><?php the_field('list_section_title'); ?></h2>
            </div>
            <div class="row">
                <?php
                if (have_rows('about_points_repeater')) :
                    while (have_rows('about_points_repeater')) : the_row();
                ?>
                        <div class="col-content col-sm-12">
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

</div>

<?php get_footer(); ?>