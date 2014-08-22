<?php

/*
	Template Name: Home full page, No Sidebar
*/ 

get_header();  ?>


<!-- Hero image and headline -->
<section class="hero clearfix" id="home">
  <div class="innerWrapper">
    <div class="headlineWrapper">
      <h1>Winter Wei</h1>
      <h2>Web Developer and Illustrator</h2>
    </div>
  </div>
</section>

<!-- About -->
<section class="about main clearfix">
  <div class="innerWrapper clearfix">
    <div id="about">
      <div class="about-image clearfix">
        <?php $image = get_field('about_headshot'); ?>
        <img src="<?php echo $image['sizes']['thumbnail'] ?>">
      </div>
      <div class="text clearfix">
        <h2><?php the_field('about_title') ?></h2>
        <h3><?php the_field('about_tagline') ?></h3>
        <?php the_field('about_content') ?>
      </div>
    </div>
    
  </div>
</section>


<!-- Portfolio -->
<section class="portfolio main clearfix">
  <div class="innerWrapper clearfix">
    <div id="portfolio">
      <h2>Things I've done</h2>
        <?php 
          $portfolioQuery = new WP_Query(
              array(
                'posts_per_page' => 4,
                'post_type' => 'portfolio'
                )
            ); ?>
        <?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>
          <div class="col2">
            <figure class="img-hover">
              <?php the_post_thumbnail('large'); ?>
              <a href="<?php the_permalink(); ?>">View Project</a>
            </figure>
            <figcaption>
              <h4><?php the_field('portfolio_title') ?></h4>
              <p><?php the_field('short_description') ?></p>
            </figcaption>
          </div>
        <?php endwhile; // end the loop?>
        <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<!-- Blog -->
<section class="blog main clearfix">
  <div class="innerWrapper clearfix">
    <div id="blog">
      <?php 
        $blogQuery = new WP_Query(
            array(
              'posts_per_page' => 2,
              'post_type' => 'post'
              )
          ); ?>
      <?php while ($blogQuery->have_posts()) : $blogQuery->the_post(); ?>
        <article class="col2">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h3><?php the_excerpt(); ?></h3>
          <p><?php the_field('blog_intro') ?></p>
        </article>
      <?php endwhile; // end the loop?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="contact main clearfix">
  <div class="innerWrapper clearfix">
    <div id="contact">
      <div class="contact-msg">
        <p><?php the_field('contact_message') ?></p>
      </div>
      <div class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="44" title="Contact form 1"]' ); ?>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>