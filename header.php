<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<title>
	  <?php
	    if( ! is_home() ):
	      wp_title( '|', true, 'right' );
	    endif;
	    bloginfo( 'name' );
	  ?>
	</title>
	

	<meta name="twitter:site" content="@BenoitChampy">

	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/favicon.png" />
	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory');?>/favicon.png" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="mobile-nav">
		<div class="logo-container">
			<a href="<?php echo home_url( '/' ); ?>" class="logo" >
		      <img src="<?php bloginfo('template_directory');?>/imgs/bc-logo.png" width="60" height="60" alt="BC" />
		    </a>
		</div>
	</div>
	
	<header class="show-for-medium-up">
		<div class="logo-container">
			<a href="<?php echo home_url( '/' ); ?>" class="logo" >
		      <img src="<?php bloginfo('template_directory');?>/imgs/bc-logo.png" width="60" height="60" alt="BC" />
		    </a>
		</div>
		<div class="nav-container">
			<h1>
				<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
			</h1>
			<h2>
				<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('description'); ?></a>
			</h2>
	
			<nav role="navigation">
				
				<?php 
				  // Uncomment to show menu
				  wp_nav_menu( array( 'menu' => 'Main' ) );
				?>
				<?php //get_sidebar(); ?>
			</nav>
		</div>
	</header>

	<div class="main-wrapper">
		<div id="main" role="main" class="row main">
			<div class="large-12 columns">
				<section>
