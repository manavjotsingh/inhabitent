<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="products-content-area-wrapper ">
    <main id="main" class="site-main" role="main">

        <div class="product-type-container">
            <h2 class="shop-page-title">Shop Stuff</h2>
			<!-- getting the 4 terms -->
			
			<?php
            $terms = get_terms(array(
                'taxonomy' => 'product_type',
                'hide_empty' => 0,
            ));
            if (!empty($terms) && !is_wp_error($terms)) :
                ?>
                <div class="product-term">
                    <?php foreach ($terms as $term) : ?>
                        <a href="<?php echo get_term_link($term); ?>" class=""><?php echo $term->name; ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
		</div>

<!--  product loop -->
        <?php
        $args = [
            'post_type' => 'product',
            'order' => 'ASC',
            'posts_per_page' => 16
        ];
        $inhabitent_products = new WP_query($args); 
        ?>
        <div class="product-grid-display">
            <?php while ($inhabitent_products->have_posts()) : ($inhabitent_products->the_post()); ?>

                <div class="product-item">
                    <div class="item-image-container">
                        <a class="item-image-link" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full'); ?>
                        </a>
                    </div>
                    <div class="intem-info">
                        <div class="dots-stying">
                            <span class="item-title"><?php the_title(); ?></span>
                        </div>

                        <div class="item-price">&#36;<?php the_field('price'); ?></div>

                    </div>

                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
