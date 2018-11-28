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
	<div class="img-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</div><!-- end of img container -->
	<div class="content-container">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="product-price">
			$<?php echo CFS()->get('price'); ?>
		</div>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
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
		</div><!-- .entry-content -->
	</div><!-- end of content container -->
</article><!-- #post-## -->
<?php endwhile; // End of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
