<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 */

get_header();

    if ( have_posts() ) :
      // Start the Loop.
      while ( have_posts() ) : the_post();?>
        
        <article <?php post_class(); ?>>
          
          <div class="page-title">
            <h1><?php the_title(); ?></h1>
          </div>

          <div class="post-meta">
            <?php elder_linkable_date(); ?>
          </div>
          
          <div class="post-content">
            <?php the_content(); ?>
          </div>
        
        </article>

        <?php elder_post_siblings_links(); ?>

      <?php endwhile;

    endif;

get_footer();