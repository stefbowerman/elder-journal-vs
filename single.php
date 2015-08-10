<?php

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