<?php get_header(); ?>
<section class="portfolio-home clearfix">
  <div class="innerWrapper clearfix">
    <div class="left">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <article class="portfolio-item" id="portfolio-id-<?php echo get_the_ID(); ?>">
            <h2><?php the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
            <h4><?php the_field('short_description') ?></h4>
            <p><?php the_content(); ?></p>
            <?php
              $terms = get_the_terms( $post->ID, 'technologies' );         
              if ( $terms && ! is_wp_error( $terms ) ) : 
                $technology_links = array();
                foreach ( $terms as $term ) {
                  $technology_links[] = $term->name;
                }  
                $technologies_used = join( " / ", $technology_links );
            ?>

            <p>
              Technologies used: <span class="taxonomy"><?php echo $technologies_used; ?></span>
            </p>
            <?php endif; ?>


          </article>
      <?php endwhile; // end the loop?>

    </div><!--/left-->	
  </div> <!-- /.innerWrapper -->
</section> <!-- /.section -->
<?php get_footer(); ?>