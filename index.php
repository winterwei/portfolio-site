<?php get_header(); ?>
<section class="blog-index clearfix">
  <div class="innerWrapper clearfix">
    <div class="left">
    		<?php get_template_part( 'loop', 'index' );	?>

    		<h1>what happened??</h1>
    </div> <!--/left-->
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</section> <!-- /.section -->
<?php get_footer(); ?>