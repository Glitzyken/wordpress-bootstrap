<?php
/**
 * The template for displaying Author bios
 *
 * @package WordPress
 * @subpackage wpbootstrap
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col col-lg-8 clearfix" role="main">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							
							<p class="meta"><?php esc_html_e( 'Posted', 'wpbootstrap' ); ?> <time datetime="<?php echo the_time( 'Y-m-j' ); ?>" pubdate><?php the_time(); ?></time> <?php esc_html_e( 'by', 'wpbootstrap' ); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php esc_html_e( 'filed under', 'wpbootstrap' ); ?> <?php the_category( ', ' ); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							
							<?php the_content(); ?>
							
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags','wpbootstrap' ) . ':</span> ', ' ', '</p>' ); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
						<header>
							<h1><?php esc_html_e( 'Not Found','wpbootstrap' ); ?></h1>
						</header>
						<section class="post_content">
							<p><?php esc_html_e( 'Sorry, but the requested resource was not found on this site.','wpbootstrap' ); ?></p>
						</section>
						<footer>
						</footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->

				<?php get_sidebar(); // sidebar 1. ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
