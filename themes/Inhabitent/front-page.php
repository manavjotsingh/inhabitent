<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

					<?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        );
                    $posts_for_frontpage = new WP_Query($args);
				  ?>  <!-- just grabbing three posts -->
					<ul>
					<?php if ( $posts_for_frontpage->have_posts() ) : ?>
					<?php while ( $posts_for_frontpage->have_posts() ) : $posts_for_frontpage->the_post(); ?>
						<li>
							
								<img src="<?php the_post_thumbnail_url() ?>"/>
							
							<div>
								<span>
									<time> 
										<?php echo get_the_date();?>
									</time>
									<span>
										<?php echo " / "; comments_number();?>
									</span>
								</span>
								<h3>
                                	<a href=<?php the_permalink(); ?>>
                                    <?php the_title(); ?>
                                	</a>
								</h3>
								<a href=<?php the_permalink() ?>>Read Entry</a>
							</div>
						</li>
					<?php endwhile; ?>
					<?php the_posts_navigation(); ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<h2>No Posts Found</h2>
					</ul>
<?php endif; ?>

						

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
