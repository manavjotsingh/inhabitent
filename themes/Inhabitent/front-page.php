<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<section class="product-section-container">
    <h2 class="front-page-title">Shop Stuff</h2>

        <?php
            $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>

               <div class="product-block-wrapper">
                  <?php foreach ( $terms as $term ) : ?>
                <div class="product-block-single">
                     <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                     <p class="product-desc-text"><?php echo $term->description; ?></p>
                     <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                  </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>

	<div id="primary" class="journal-content-area">
		<main id="main" class="journal-container" role="main">

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
								<h3 class="front-page-journal-title">
                                	<a href=<?php the_permalink(); ?>>
                                    <?php the_title(); ?>
                                	</a>
								</h3>
								<a href=<?php the_permalink() ?> class="front-page-journal-btn">Read Entry</a>
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


<?php get_footer(); ?>
