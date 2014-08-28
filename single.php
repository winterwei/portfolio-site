<?php get_header(); ?>
<section class="blog-single clearfix">
  <div class="innerWrapper clearfix">
    <div class="left">
      <div class="back-to-blog">
        <h3><a href="<?php echo home_url( '/' ); ?>blog">&larr; All Blog Posts</a></h3>
      </div>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <h2 class="sub-title"><?php the_field('blog_intro') ?></h2>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
          </div><!-- .entry-content -->


          <div class="entry-utility">
            <h3><?php twentyten_posted_in(); ?></h3>
            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <div class="nav-previous">
             <h3><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></h3>
          </div>
          <div class="nav-next">
            <h3><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></h3>
          </div>
        </div><!-- #nav-below -->

        
        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div>
  </div> <!-- /.innerWrapper -->
</section> <!-- /.section -->
<?php get_footer(); ?>