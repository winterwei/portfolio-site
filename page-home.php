<?php

/*
	Template Name: Home full page, No Sidebar
*/ 

get_header();  ?>


<!-- Hero image and headline -->
<section class="hero clearfix" id="home">
  <div class="innerWrapper">
    <div class="headlineWrapper">
      <h1>WINTER WEI</h1>
      <h2>Web Developer and Illustrator</h2>
    </div>
  </div>
</section>




<!-- scroll-to-top button -->

<a href="#home" class="scroll-top">
  <div class="circle">
      <i class="fa fa-angle-double-up fa-stack-1x fa-inverse"></i>
  </div>
</a>


<!-- About -->
<section class="about main clearfix">
  <div class="innerWrapper clearfix">
    <div id="about">
    <div class="hidden clearfix"></div>
    <div class="title">
      <h2><?php the_field('about_title') ?></h2>
      <h3><?php the_field('about_tagline') ?></h3>
    </div>
    <div class="about-image clearfix">
      <?php $image = get_field('about_headshot'); ?>
      <img src="<?php echo $image['sizes']['thumbnail'] ?>">
    </div>
    <div class="text clearfix">
      <?php the_field('about_content') ?>
    </div>
    </div>
  </div>
</section>


<!-- Skills -->
<section class="skills main clearfix">
  <div class="innerWrapper clearfix">
    <div id="skills">
    <div class="hidden clearfix"></div>
      <div class="title clearfix">
        <h2>Skills</h2>
      </div>
      <?php get_field('skill_set'); ?>
      <?php while( has_sub_field('skill_set') ): ?>
        <div class="skill-set clearfix">
          <p class="skill-title"><?php the_sub_field('skill_title'); ?>: </p>
            <?php while( has_sub_field('skill_list') ): ?>
                <span class="skill-name"><?php the_sub_field('indi_skills'); ?></span>
            <?php endwhile; ?>
          </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>


<!-- Portfolio -->
<section class="portfolio main clearfix">
  <div class="innerWrapper clearfix">
    <div id="portfolio">
    <div class="hidden clearfix"></div>
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
          <div class="col2 clearfix">
            <a href="<?php the_permalink(); ?>">
              <figure>
                <?php the_post_thumbnail('full'); ?>
                <figcaption class="hover clearfix">
                  <h4><?php the_field('portfolio_title') ?></h4>
                  <p><?php the_field('short_description') ?></p>
                </figcaption>
              </figure>
              <figcaption class="no-hover clearfix">
                <h4><?php the_field('portfolio_title') ?></h4>
                <p><?php the_field('short_description') ?></p>
                <div>
                <a class="no-hover-link" href="<?php the_permalink(); ?>">See Details</a>
                </div>
              </figcaption>

            </a>
          </div>
        <?php endwhile; // end the loop?>
        <?php wp_reset_postdata(); ?>
    </div>
  </div>
        <div class="button">
          <a href="<?php echo home_url( '/' ); ?>portfolio">See all my work</a>
        </div>
</section>

<!-- Blog -->
<section class="blog main clearfix">
  <div class="innerWrapper clearfix">

      <div id="blog">
        <div class="hidden clearfix"></div>
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
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('blog_intro') ?></p>
              <div class="read-more"><a href="<?php echo get_permalink(); ?>">Read more</a></div>
          </article>
        <?php endwhile; // end the loop?>
        <?php wp_reset_postdata(); ?>
      </div>
    <div class="button clearfix">
      <a href="<?php echo home_url( '/' ); ?>blog">Read all blog posts</a>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="contact main clearfix">
  <div class="innerWrapper clearfix">
    <div id="contact">
    <div class="hidden clearfix"></div>
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