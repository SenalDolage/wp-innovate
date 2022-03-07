<?php

/**
 * Displaying archive page (category, tag, archives post, author's post)
 * 
 * @package bootstrap-basic
 */

get_header();

$main_column_size = bootstrapBasicGetMainColumnSize();
?>

<div class="content-area" id="main-column" style="background: #808080;">
	<main id="main" class="site-main" role="main">
		<?php if (have_posts()) { ?>
			<?php
			$args = array(
				'post_type'  => 'collections',
			);
			$postslist = get_posts($args);
			$categories = get_categories($args);

			foreach ($categories as $cat) {
				$catId = $cat->term_id;
				$postArgs = array(
					'post_type'  => 'collections',
					'posts_per_page' => -1,
					'offset' => 0,
					'category' => $catId
				);
				$allPosts = get_posts($postArgs);
			?>
				<div class="content-box">
					<div class="container">
						<div class="cat-name-wrap">
							<h2 class="cat-name"><?php echo $cat->name ?> Range</h2>
						</div>
						<div class="items">
							<div class="row product-items-wrapper">
								<?php foreach ($allPosts as $post) { ?>
									<div class="col-md-3 product-item">
										<div class="product-item-inner">
											<a href="<?php the_field('redirect_url'); ?>" target="_blank">
												<div class="product-img-wrap">
													<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" />
												</div>

												<div class="hover-content">
													<div class="product-name">
														<?php echo $post->post_title ?>
													</div>
													<div class="shop-now">Shop Now</div>
												</div>
											</a>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

		<?php } else { ?>
			<?php get_template_part('no-results', 'archive'); ?>
		<?php } //endif; 
		?>
	</main>
</div>

<?php get_footer(); ?>