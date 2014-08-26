<?php get_header(); ?>
<section class="portfolio-home clearfix">
  <div class="innerWrapper clearfix">
    <div class="full">
    <div class="title clearfix">
      <h2>Portfolio</h2>
    </div>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <article class="portfolio-item" id="portfolio-id-<?php echo get_the_ID(); ?>">
            <a href="<?php the_permalink(); ?>">
              <div class="panel">
                <?php the_post_thumbnail('large'); ?>
                <h3><?php the_title(); ?></h3>
              </div>
            </a>
          </article>
      <?php endwhile; // end the loop?>
    </div><!--/left-->	
  </div> <!-- /.innerWrapper -->
</section> <!-- /.section -->
<?php get_footer(); ?>