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

<?php if ( is_active_sidebar( 'stayuptodate' ) ) : ?>

	<div class="stay-up-to-date">
		<?php dynamic_sidebar( 'stayuptodate' ); ?>
	</div>

<?php endif; ?>
