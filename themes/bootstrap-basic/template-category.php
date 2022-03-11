<?php

/**
 * Template Name: Range
 */
?>

<?php get_header(); ?>

<div class="range-page-content">

    <!-- Banner Section -->
    <div class="range-banner">
        <?php if (get_field('range_banner_image')) :
            $image = get_field('range_banner_image');
        ?>
            <div class="image-wrapper">
                <img src="<?php echo esc_url($image); ?>" alt="banner" />
            </div>
        <?php endif ?>
    </div>

    <!-- Products Listing Section -->
    <div class="range-products-wrapper">
        <div class="container">
            <div class="title-wrapper">
                <h2>PRODUCTS</h2>
            </div>

            <div class="row product-items-wrapper">
                <?php
                if (have_rows('product_repeater')) :
                    while (have_rows('product_repeater')) : the_row();
                ?>
                        <div class="product-item">
                            <div class="product-item-inner">
                                <a href="<?php the_sub_field('product_redirect_link'); ?>" target="_blank">
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

</div>

<?php get_footer(); ?>