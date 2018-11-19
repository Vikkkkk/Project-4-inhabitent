<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
	<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		// the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
		    <?php 
    // Ge the terms for our products and do some cleve stuff with images. 
    $terms = get_terms(array(
    'taxonomy'=>'product_type',
    'hide_emepty' => 0,
	));?>
	<?php foreach($terms as $term): ?>
	<p>
            <a href="<?php echo get_term_link($term);?>">
              <?php echo $term->name;?></a>
          </p>
	<?php endforeach;?>
	
	</header><!-- .page-header -->

	<div class="product-grid">
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="grid-item">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
			<div class="product-price">
				$<?php echo CFS()->get('price'); ?>
			</div>

		</div><!--end of gird-item-->
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
	</div><!--end of product-grid-->
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>