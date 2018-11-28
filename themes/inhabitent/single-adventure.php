<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php  inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<div class="product-price">
		<?php echo CFS()->get('price'); ?>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

			<!-- <?php the_post_navigation(); ?> this is the navigation for the post -->


			

		<?php endwhile; // End of the loop. ?>
		<div class="social-links">
                    <button type="button" class='btn inverse-btn'>
					<i class="fab fa-facebook-f"></i>
                        Like
                    </button>
                    <button type="button" class='btn inverse-btn'>
                        <i class='fab fa-twitter'></i>
                        Tweet
                    </button>
                    <button type="button" class='btn inverse-btn'>
                        <i class='fab fa-pinterest'></i>
                        Pin
                    </button>
				</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
