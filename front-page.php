<?php
/**
 * The template for displaying home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ignitepreservation
 */

get_header(); ?>

    <div id="primary" class="content-area col-md-12">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/post/content', 'page' );

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
