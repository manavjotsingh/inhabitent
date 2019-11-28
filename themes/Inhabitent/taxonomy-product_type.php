<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div id="primary" class="products-content-area ">
    <main id="main" class="site-main" role="main">

        <section class="product-type-container product-taxonomy-terms">
            <h1><?php single_term_title(); ?></h1>
            <?php the_archive_description(); ?>
        </section>
        <div class="product-grid-display">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                    <div class="product-item">
                        <div class="item-image-container">
                            <a class="item-image-link" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full'); ?>
                            </a>
                        </div>
                        <div class="item-info">
                            <div class="item-title">
                               <?php the_title(); ?>
                            </div>

                            <div class="item-price">&#36;<?php the_field('price'); ?></div>

                        </div>

                    </div>
                <?php endwhile;
                else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>