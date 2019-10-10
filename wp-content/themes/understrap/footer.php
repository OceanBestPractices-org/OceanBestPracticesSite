<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?> footer-container">

		<div class="row">

			<div class="col-md-3">
                <?php get_template_part( 'sidebar-templates/sidebar', 'contactus' ); ?>
                <div class="socials" style="margin-bottom: 10px;">
					<!-- <div class="social-facebook">
						<a target="_blank" href="<?php echo esc_attr(get_option('wp_ts_facebook')); ?>">
							<i class="fab fa-facebook-f"></i>
						</a>
					</div> -->
					<div class="social-twitter">
						<a target="_blank" href="<?php echo esc_attr(get_option('wp_ts_twitter')); ?>">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
            </div><!--col end -->
            
            <div class="col-md-2">
                <?php get_template_part( 'sidebar-templates/sidebar', 'footermenu' ); ?>
            </div><!--col end -->
            
            <div class="col-md-7">
                <?php get_template_part( 'sidebar-templates/sidebar', 'stayuptodate' ); ?>
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

