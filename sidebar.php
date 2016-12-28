<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage delish
 * @since delish 1.0
 */
 ?>
<div class="col-md-4" id="sidebar">
      <?php do_action( 'before_sidebar' ); ?>
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
    	    <?php else : ?>
		<div class="alert alert-help">
			<p><?php _e("Please activate some Widgets.", "delish");  ?></p>
		</div>
		<?php endif; // end sidebar widget area ?>
</div>