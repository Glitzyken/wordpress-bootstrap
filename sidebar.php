<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage wpbootstrap
 * @since 1.0
 * @version 1.0
 */

?>

				<div id="sidebar1" class="col-sm-4" role="complementary">
				
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php esc_html_e( 'Please activate some Widgets','wpbootstrap' ); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>
