<?php get_header(); ?>

<section class="section">
  <div class="innerWrapper">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <h2><?php the_title(); ?></h2>
        <?php while( has_sub_field('images') ): ?>
        <?php endwhile; ?>
        <h4><?php the_field('short_description') ?></h4>
        <h3><a href="<?php the_field('project_url') ?>">View Site Live</a></h3>
        <p><?php the_content(); ?></p>
        <?php the_post_thumbnail('full'); ?>
        <?php the_terms($post->ID, 'technologies'); ?>
        
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>