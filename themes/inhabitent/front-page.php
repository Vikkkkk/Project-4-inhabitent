<?php
/**
 * Template Name: Front-Page
 */

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

  <section class="home-hero">
    <img src ="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'?>"
        class ="logo" alt="Inhabitent full logo" />
  </section>

  <section class="frontpage-shop shop-container">
    <h2>Shop Stuff</h2>
    <?php 
    // Ge the terms for our products and do some cleve stuff with images. 
    $terms = get_terms(array(
    'taxonomy'=>'product_type',
    'hide_emepty' => 0,
    ));?>
    <div class="frontpage-product-blocks">
      <?php foreach($terms as $term): ?>
        <div class="frontpage-term">
          <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug . '.svg'; ?>" 
            alt="<?php echo $term->name; ?>" /> 

          <p>
            <?php echo $term->description; ?>
          </p>
          <p class="category-link">
            <a href="<?php echo get_term_link($term);?>">
              <?php echo $term->name;?> Stuff</a>
          </p>
        </div>
      <?php endforeach;?>
    </div>
  </section>


  <?php
  /*
  * Get the blog Journal Entries
  * */
  $args = array(
  'order' => 'DSC',
  'posts_per_page' => 3,
  'post_type' => 'post'
    );
  $journal_posts = get_posts( $args ); // returns an array of posts
  ?>
  <section class="front-page-journal">
    <h2>Inhabitent Journal</h2>
    <div class="frontpage-journal-blocks">
    <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
      <article class ="journal-entry">
        <div class="img-container">
          <?php  /* Content from your array of post results goes here */ 
              if(has_post_thumbnail()){
              the_post_thumbnail('large');
              } 
          ?>
        </div>
        <div class="journal-info">
          <div class="entry-meta">
          <?php 
            inhabitent_posted_on();
            echo '/';
            comments_number('0 Comments','1 Comment','% Comments');
          ?>
          </div>
          <div class="permalink">
            <a href="<?php echo get_the_permalink(); ?>">
            <?php the_title();?>
            </a>
          </div>
          <a class="read-more" href="<?php echo get_the_permalink(); ?>">
              Read more
          </a>
        </div>
      </article>
    <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </section>


  <!-- adventure time! -->
  <?php
  /*
  * Get the adventure entries
  * */
  $args = array(
  'order' => 'ASC',
  'posts_per_page' => 4,
  'post_type' => 'adventure'
    );
  $adventure_posts = get_posts( $args ); // returns an array of posts
  ?>
  <section class="front-page-adventure">
    <h2 class="adventure-header">Latest Adventures</h2>
    <div class="frontpage-adventure-blocks">
    <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
      <article class ="adventure-entry">
        <div class="img-container">
          <?php  /* Content from your array of post results goes here */ 
              if(has_post_thumbnail()){
              the_post_thumbnail('large');
              } 
          ?>
        </div>
        <div class="adventure-info">
          
          <div class="permalink">
            <a href="<?php echo get_the_permalink(); ?>">
            <?php the_title();?>
            </a>
          </div>

          <a class="read-more" href="<?php echo get_the_permalink(); ?>">
              Read more
          </a>
        </div>
        <div class="shadow">.</div>
      </article>
    <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </section>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
