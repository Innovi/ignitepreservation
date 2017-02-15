<?php
/**
 * Displays primary navigation
 *
 * @package Ignite Preservation
 * @version 1.0
 */

?>

<div class="navigation-wrapper row">
    <div class="col-sm-12 col-md-5">
        <div class="custom-header-media">
            <a href="<?php echo __('http://www.ignitepreservation.com/'); ?>"><?php the_custom_header_markup(); ?></a>
        </div>
    </div>
    <div class="col-md-7">
        <nav id="site-navigation" class="navbar navbar-default main-navigation" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             =>  2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'primary-navbar',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            =>  new wp_bootstrap_navwalker())
                );
            ?>
        </nav> <!-- #site-navigation -->
    </div>
</div>
