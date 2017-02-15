<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-theme-boilerplate
 */

?>

        </div> <!-- #content -->

        <footer id="colophon" class="site-footer row" role="contentinfo">
            <div class="col-md-12 footer-wrapper">

                <div class="row site-info">
                    <div class="col-md-4 site-about">
                        <h5>About Ignite Preservation</h5>
                        <p class="text-justify">Established in 2016, IGNITE IT is a preservation and technology-enabled services company offering an integrated set of back-office and customer facing front-office services that support the entire customer lifecycle.</p>
                    </div>
                    <div class="col-md-6 col-md-offset-2 site-contact">
                        <h5>Contact Info</h5>
                        <ul class="list-unstyled">
                            <li>Ignite Preservation</li>
                            <li><i class="fa fa-home" aria-hidden="true"></i> 33 Topkhana Road, Meherbaplaza (8th Floor), Purana Paltan, Dhaka-1000</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+8801985553800">+88 01985-553-800</a></li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:contact@ignitepreservation.com">contact@ignitepreservation.com</a></li>
                            <li><a href="http://www.ignitepreservation.com">www.ignitepreservation.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="copyright-info col-md-12 text-center">
                        <div class="copyright">
                            <h5>&copy; 2016 - <?php echo date("Y"); ?> Ignite Preservation <span class="sep"> | </span>All Rights Reserved</h5>
                        </div>
                    </div>
                </div><!-- .copyright-info -->

                <div class="row">
                    <div class="dev-info col-md-12 text-center">
                        <?php printf( esc_html__( '%1$s by %2$s.', 'ignitepreservation' ), 'Design and Developed', '<a href="http://innovi.com.bd/" rel="developer">Innovi</a>' ); ?>
                    </div>
                </div><!-- .dev-info -->

            </div><!-- .footer-wrapper -->
        </footer><!-- .site-footer -->
    </div><!-- #page -->

    <?php wp_footer(); ?>

    </body>
</html>
