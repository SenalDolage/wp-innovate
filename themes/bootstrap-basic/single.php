<?php

/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php get_sidebar('left'); ?>
<div class="content-area" id="main-column">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<?php
			while (have_posts()) {
				the_post();

				get_template_part('content', get_post_format());
			?>
				<?php if (get_field('redirect_url')) { ?>
					<div class="visit-product-here-wrp">
						<h2>
							Visit This Product
							<a target="_blank" href="<?php the_field('redirect_url'); ?>">
								Here.
							</a>
						</h2>
					</div>
				<?php } ?>
			<?php
				echo "\n\n";

				bootstrapBasicPagination();

				echo "\n\n";

				// If comments are open or we have at least one comment, load up the comment template
				if (comments_open() || '0' != get_comments_number()) {
					comments_template();
				}

				echo "\n\n";
			} //endwhile;
			?>
		</div>
	</main>
</div>
<?php get_footer(); ?>