<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage wpbootstrap
 * @since 1.0
 * @version 1.0
 */

/*
Template Name: Full Width Page
*/

?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col col-lg-12 clearfix" role="main">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
						
						<header>
							
							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags','wpbootstrap' ) . ': ', ', ', '</span>' ); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
						<header>
							<h1><?php esc_html_e( 'Not Found', 'wpbootstrap' ); ?></h1>
						</header>
						<section class="post_content">
							<p><?php esc_html_e( 'Sorry, but the requested resource was not found on this site.', 'wpbootstrap'); ?></p>
						</section>
						<footer>
						</footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->

				<?php // get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
