<?php

/**
 * Template Name: Ranges
 */
?>

<?php get_header(); ?>

<div class="ranges-content">
    <div class="categories-list">
        <?php
        $type = 'custom_post_type';
        $args = array(
            'post_type' => 'collection',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'ignore_sticky_posts' => true
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        ?>

        <?php if ($my_query->have_posts()) : ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php endwhile; ?>
        <?php
        endif;
        wp_reset_query();
        ?>
    </div>
</div>

<?php get_footer(); ?>