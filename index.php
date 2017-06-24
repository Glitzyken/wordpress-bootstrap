<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage wpbootstrap
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-8 clearfix" role="main">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
							
							<p class="meta"><?php esc_html_e( 'Posted', 'wpbootstrap' ); ?> <time datetime="<?php echo the_time( 'Y-m-j' ); ?>" pubdate><?php echo get_the_date( 'F jS, Y', '','', false ); ?></time> <?php esc_html_e( 'by', 'wpbootstrap' ); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php esc_html_e( 'filed under', 'wpbootstrap' ); ?> <?php the_category( ', ' ); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content( __( 'Read more &raquo;','wpbootstrap' ) ); ?>
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags','wpbootstrap' ) . ':</span> ', ' ', '' ); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php if ( function_exists( 'wp_bootstrap_page_navi' ) ) { // if expirimental feature is active. ?>
						
						<?php wp_bootstrap_page_navi(); // use the page navi function. ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links. ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link( esc_html_e( '&laquo; Older Entries', 'wpbootstrap' ) ) ?></li>
								<li class="next"><?php previous_posts_link( esc_html_e( 'Newer Entries &raquo;', 'wpbootstrap' ) ) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
						<header>
							<h1><?php esc_html_e( 'Not Found', 'wpbootstrap' ); ?></h1>
						</header>
						<section class="post_content">
							<p><?php esc_html_e( 'Sorry, but the requested resource was not found on this site.', 'wpbootstrap' ); ?></p>
						</section>
						<footer>
						</footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->

				<?php get_sidebar(); // sidebar 1. ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
