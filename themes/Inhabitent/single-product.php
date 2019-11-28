<?php
/**
 * The template for displaying all product post.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="single-shop-image">
				<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail('large'); ?>
				<?php endif; ?>
			</div>
			
			<div class="single-shop-content">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

			<p class="price">$<?php the_field('price'); ?></p>

			<p class="content"><?php the_content(); ?></p>

			</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
