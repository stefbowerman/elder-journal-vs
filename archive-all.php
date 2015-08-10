<?php
/**
 * Template Name: Archives All
 * The template for displaying Archive pages
 */

global $wp_query;

$temp = $wp_query;

// $wp_query = null;

$paged = get_query_var( 'page' ) ? absint( get_query_var( 'page' ) ) : 1;

$args = array( 'post_type' => 'post', 'posts_per_page' => 10 , 'paged' => $paged );

$wp_query = new WP_Query( $args );

// $wp_query = $my_query;

get_header(); ?>

      <?php if ( $wp_query->have_posts() ) : ?>

          <div class="page-title">
            <h1>Archives</h1>
          </div>

          <div class="page-listed-posts">

            <?php 
            // Start the Loop.
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
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
                    Posted: <?php elder_linkable_date(); ?>
                  </div>
                  <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="strong" title="<?php the_title(); ?>">Read Post ↦</a>
              </div>

            <?php endwhile; ?>

          </div>

        <?php //elder_paging_nav(); ?>

        <?php the_posts_pagination(); ?> 

        <div id="more-posts">
            <div class="previous-link"><?php previous_posts_link("< previous news") ?></div><div class="next-link"><?php next_posts_link ("more news >") ?></div>
        </div>

        <?php //wp_reset_postdata(); ?>

        <?php 
        else :
          echo 'No posts found...';

        endif;

    $wp_query = $temp;

get_footer();
