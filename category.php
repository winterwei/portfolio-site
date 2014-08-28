<?php get_header(); ?>
<section class="category clearfix">
  <div class="innerWrapper clearfix">
    <div class="left">
    	<h1><?php printf( __( 'All blog posts in: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

                <div class="entry-meta">
                  <p><?php twentyten_posted_on(); ?></p>
                </div><!-- .entry-meta -->

                <section class="entry-content">
                    <?php the_excerpt(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                </section><!-- .entry-content -->
                </article>
            <?php endwhile; // end the loop?>

	

    </div> <!-- /.left -->
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</section> <!-- /.section -->
<?php get_footer(); ?>