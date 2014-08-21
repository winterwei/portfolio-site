<?php

/*
	Template Name: Other Page, full-bleed, no Sidebar
*/ 

get_header();  ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php 
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail('');
        } 
        ?>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>


    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->






<?php get_footer(); ?>