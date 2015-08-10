<?php
/**
 * Template Name: Archives
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


get_header(); ?>

<?php 
// Override this var because by default we only show 1 post per page
query_posts( 'posts_per_page=20' ); ?>

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
                    Posted: <?php elder_linkable_date(); ?>
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
