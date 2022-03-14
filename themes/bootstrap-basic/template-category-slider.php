<?php

/**
 * Template Name: Range with Sliders
 */
?>

<?php get_header(); ?>

<div class="range-page-with-slider-content">

    <!-- Banner Section -->
    <div class="range-banner">
        <div class="container  compact-banner">
            <?php if (get_field('range_banner_image')) :
                $image = get_field('range_banner_image');
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
                <div class="row items-row">
                    <div class="col-md-4">
                        <div class="main-cat-name">

                        </div>

                    </div>

                    <div class="col-md-8">
                        <div class="products-slider-wrapper">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>