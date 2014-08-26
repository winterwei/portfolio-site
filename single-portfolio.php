<?php get_header(); ?>

<section class="portfolio-single clearfix">
  <div class="innerWrapper clearfix">
    <div class="portfolio-full">
    <div class="back-to-portfolio">
      <h3><a href="<?php echo home_url( '/' ); ?>portfolio">&larr; All Projects</a></h3>
    </div>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        

        <h2><?php the_title(); ?></h2>

        <?php while( has_sub_field('featured_image') ): ?>
          <div class="image">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['sizes']['large'] ?>">
          </div>
          <!-- Our sub fields go here -->
        <?php endwhile; ?>
        <p><?php the_content(); ?></p>
        <h3 class="button"><a href="<?php the_field('project_url') ?>" target="_blank">View Site Live</a></h3>

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

        <h3 class="taxonomy">
          <strong>Technologies used:</strong> <span><?php echo $technologies_used; ?></span>
        </h3>

        <?php endif; ?>
        
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>