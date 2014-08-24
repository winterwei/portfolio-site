<?php get_header(); ?>
<div class="section">
  <div class="innerWrapper">
    <div class="left">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <article class="portfolio-item" id="portfolio-id-<?php echo get_the_ID(); ?>">
            <h2><?php the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
            <h4><?php the_field('short_description') ?></h4>
            <p><?php the_content(); ?></p>
            <?php the_terms($post->ID, 'technologies'); ?>

          </article>
      <?php endwhile; // end the loop?>

    </div><!--/left-->	
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>