<?php

/**
 * Template Name: Range with Sliders
 */
?>

<?php get_header(); ?>

<div class="range-page-with-slider-content">

    <!-- Banner Section -->
    <div class="range-banner">
        <div class="container compact-banner">
            <?php if (get_field('range_slider_banner_image')) :
                $image = get_field('range_slider_banner_image');
            ?>
                <div class="image-wrapper">
                    <img src="<?php echo esc_url($image); ?>" alt="banner" />
                </div>
            <?php endif ?>
        </div>
    </div>

    <div class="products-listing-wrapper">
        <div class="products-inner-wrapper">
            <div class="container">
                <div class="title-wrapper">
                    <h2><?php the_field('range_slider_section_title'); ?></h2>
                </div>

                <?php
                if (have_rows('items_repeater')) :
                    while (have_rows('items_repeater')) : the_row();
                ?>
                        <div class="row items-row">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="main-cat">
                                    <p class="main-cat-name">
                                        <?php the_sub_field('cat_name'); ?>
                                    </p>
                                </div>

                            </div>

                            <div class="col-xs-6 col-sm-8 col-md-9 col-lg-10">
                                <div class="products-slider-wrapper">
                                    <?php
                                    if (have_rows('product_items')) :
                                        while (have_rows('product_items')) : the_row();
                                    ?>
                                            <div class="product-item">
                                                <div class="product-item-inner">
                                                    <a href="<?php the_sub_field('product_link'); ?>" target="_blank">
                                                        <div class="product-img-wrap">
                                                            <img src="<?php the_sub_field('product_image'); ?>" />
                                                        </div>

                                                        <div class="hover-content">
                                                            <div class="product-name">
                                                                <?php the_sub_field('product_name'); ?>
                                                            </div>
                                                            <div class="shop-now">Shop Now</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                    <?php endwhile;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>


            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>