<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head> 
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css"  href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
  
	<?php	if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->


</head>


<body <?php body_class(); ?>>

<header class="clearfix">
  <div class="innerWrapper clearfix">
  	<div class="logo">
      <h1>
        <a data-id="home" class="scroll-link" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
    </div>
    <nav class="main-nav clearfix" id="main-nav">
      <ul class="main-nav-menu">
        <li><a data-id="about" class="scroll-link" href="#about">About</a></li>
        <li><a data-id="portfolio" class="scroll-link" href="#portfolio">Portfolio</a></li>
        <li><a data-id="blog" class="scroll-link" href="#blog">Blog</a></li>
        <li><a data-id="contact" class="scroll-link" href="#contact">Contact</a></li>
      </ul>
    </nav>
  </div> <!-- /.innerWrapper -->
</header><!--/.header-->

