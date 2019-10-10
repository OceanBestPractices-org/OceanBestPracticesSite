<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'contactus' ) ) : ?>

	<div class="contact-us">
		<?php dynamic_sidebar( 'contactus' ); ?>
	</div>

<?php endif; ?>
