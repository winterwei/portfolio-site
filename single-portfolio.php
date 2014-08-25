<?php get_header(); ?>

<section class="portfolio-single clearfix">
  <div class="innerWrapper clearfix">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <h2><?php the_title(); ?></h2>
        <?php while( has_sub_field('images') ): ?>
        <?php endwhile; ?>
        <p><?php the_content(); ?></p>
        <h3><a href="<?php the_field('project_url') ?>">View Site Live</a></h3>
        <?php the_post_thumbnail('full'); ?>

        <!-- Loop to spit out individual taxonomy terms without links-->
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
        
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>