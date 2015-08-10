<?php

get_header(); ?>

      <?php if ( have_posts() ) : ?>

        <div class="page-title">
          <h1>
            <?php
              if ( is_day() ) :
                printf( get_the_date() );

              elseif ( is_month() ) :
                printf( get_the_date('F Y') );

              elseif ( is_year() ) :
                printf( get_the_date('Y') );

              elseif ( is_tag() ) :
                printf('Tagged: %1$s', single_tag_title('', false));

              else :
                echo 'Archives';

              endif;
            ?>
          </h1>
        </div>

          <div class="page-listed-posts">

            <?php 
            // Start the Loop.
            while ( have_posts() ) : the_post(); ?>
              <div class="page-listed-post">
                
                <div class="page-listed-post-thumb">
                  <?php if(has_post_thumbnail()){ the_post_thumbnail('thumbnail'); } ?>
                </div> 
                
                <h4 class="page-subtitle" title="<?php the_title(); ?>">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title() ?>
                  </a>
                </h4>

                <div class="page-listed-post-content">
                  <div class="page-listed-post-meta">
                    Posted: <?php echo get_the_date('F j, Y'); ?>
                  </div>
                  <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="strong" title="<?php the_title(); ?>">Read Post ↦</a>
              </div>

            <?php 

            endwhile;?>

          </div>

        <?php elder_paging_nav(); ?>

        <?php 
        else :
          echo 'No posts found...';

        endif;

get_footer();
