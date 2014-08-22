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
      <div class="title clearfix">
        <h2>Portfolio</h2>
        <h3>Things I designed and built</h3>
      </div>
        <?php 
          $portfolioQuery = new WP_Query(
              array(
                'posts_per_page' => 4,
                'post_type' => 'portfolio'
                )
            ); ?>
        <?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>
            <figure class="col2">
              <div class="img-hover">
                <?php the_post_thumbnail('full'); ?>
                <h3><a href="<?php the_permalink(); ?>">View Project</a></h3>
              </div>
            <figcaption>
              <h4><?php the_field('portfolio_title') ?></h4>
              <p><?php the_field('short_description') ?></p>
            </figcaption>
            </figure>
        <?php endwhile; // end the loop?>
        <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<!-- Blog -->
<section class="blog main clearfix">
  <div class="innerWrapper clearfix">
    <div id="blog">
    <div class="title clearfix">
      <h2>Recent Blog</h2>
    </div>
      <?php 
        $blogQuery = new WP_Query(
            array(
              'posts_per_page' => 3,
              'post_type' => 'post'
              )
          ); ?>
      <?php while ($blogQuery->have_posts()) : $blogQuery->the_post(); ?>
        <article class="col3">
            <h3><a href="<?php the_field('blog_url') ?>"><?php the_title(); ?></a></h3>
            <p><?php the_field('blog_intro') ?></p>
            <h4><a href="<?php the_field('blog_url') ?>">Read More</a></h4>
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
    <div class="title clearfix">
      <h2>Contact Me</h2>
    </div>
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