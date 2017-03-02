<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-theme-boilerplate
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div id="page" class="site container">

            <header id="masthead" class="site-header row" role="banner">

                <div class="col-md-12 header-wrapper">
                    <div class="row">
                         <div class="header-top col-sm-12">
                             <?php get_template_part( 'template-parts/header/header', 'top' ); ?>
                         </div>
                     </div> <!-- .header-top -->

                    <!-- <div class="row">
                        <div class="site-branding col-md-4">
                            <?php
                            if ( is_front_page() && is_home() ) : ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php else : ?>
                                <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                            <?php
                            endif;

                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                                <h6 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h6>
                            <?php
                            endif; ?>
                        </div>
                    </div> --><!-- .site-branding -->

                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
                    <?php endif; ?>
                </div> <!-- header-wrapper -->
            </header> <!-- #masthead -->

            <div id="content" class="site-content row">
