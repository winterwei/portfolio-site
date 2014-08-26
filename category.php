<?php get_header(); ?>
<section class="category clearfix">
  <div class="innerWrapper clearfix">
    <div class="left">
    	<h1><?php printf( __( 'Category Archives: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' ); ?>
	

    </div> <!-- /.left -->
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</section> <!-- /.section -->
<?php get_footer(); ?>