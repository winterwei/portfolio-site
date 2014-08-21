<?php

/*
	Template Name: Home full page, No Sidebar
*/ 

get_header();  ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
    
    <!-- now 'about' is a custom field... -->
    <h2><?php the_field('about_title') ?></h2>
    <p><?php the_field('about_content') ?></p>
    
    <?php $image = get_field('about_headshot'); ?>
    <img src="<?php echo $image['sizes']['thumbnail'] ?>">


    <!-- try to pull the custom field (about) on homepage field group -->


    <p><?php the_field('about') ?></p>
      <!-- start of a custom one-page loop -->
      <?php

      $onePageQuery = new WP_Query( 
        array( 
          'posts_per_page' => -1,
          'post_type' => 'page', 
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'post__not_in' => array( 19 )
          ) 
      ); ?>

      <?php if ( $onePageQuery->have_posts() ) : ?>

        <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

          <section id="<?php echo $post->post_name; ?>">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>

            <!-- custom loop to pull portfolio entries -->
            <?php 
              $portfolioQuery = new WP_Query(
                  array(
                    'post_per_page' => 4,
                    'post_type' => 'portfolio'
                    )
                ); ?>
            <?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>
              <?php the_post_thumbnail('medium'); ?>
              <h4><?php the_field('short_description') ?></h4>
            <?php endwhile; // end the loop?>


          </section>
        <?php endwhile; ?>
        
        <?php wp_reset_postdata(); ?>
        
      <?php else:  ?>
        [stuff that happens if there aren't any posts]
      <?php endif; ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>