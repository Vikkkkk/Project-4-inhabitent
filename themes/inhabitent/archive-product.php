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
	<div class ="container">
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				$terms = get_terms(array(
				'taxonomy'=>'product_type',
				'hide_emepty' => 0,
				));?>
			<div class="product-type-container">
			<?php foreach($terms as $term): ?>
				<p class="product-type">
					<a href="<?php echo get_term_link($term);?>">
					<?php echo $term->name;?></a>
				</p>
			<?php endforeach;?>
			</div>
		
		</header><!-- .page-header -->

		<div class="product-grid">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="grid-item">
				<div class="image-container">
					<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php sprintf( '<a href="%s" rel="bookmark">', esc_url( the_permalink() ) );?>">			
						<?php the_post_thumbnail( 'large'); ?>
					</a>
					<?php endif; ?>
					
				</div> 
				<div class="product-info">
					<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					<!-- <?php the_title('<h3>','</h3>' ); ?> -->
				
					<p class="product-price">
						$<?php echo CFS()->get('price'); ?>
					</p><!--end of product-price-->
				</div><!--end of product-info-->
			</div><!--end of gird-item-->
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</div><!--end of product-grid-->
	</div><!--end of container-->
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
