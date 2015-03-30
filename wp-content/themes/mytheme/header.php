<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="wp-content/themes/mytheme/style/bootstrap.min.css">
	<link rel="stylesheet" href="wp-content/themes/mytheme/style/style.css">
	
	<script src="wp-content/themes/mytheme/js/jquery-1.10.2.min.js"></script>
	<script src="wp-content/themes/mytheme/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
	<title>
		<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Результаты&nbsp; поиска<?php } ?>
		<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив автора<?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
		<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp;| &nbsp;<?php single_cat_title(); ?><?php } ?>
		<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp; <?php the_time('F'); ?><?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Метки&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	
	<div class="container">
		
		<header>
			<div class="info">
				<a href="http://localhost/wordpress"><img src="wp-content/themes/mytheme/images/logo.jpg" alt="logo" /></a>
			</div>
			
			<div class="banner">
				
			</div>
		</header>
		
		<div class="navbar">
	        <div class="navbar-inner">

		        <?php
			    if ( function_exists( 'wp_nav_menu' ) )
			        wp_nav_menu( 
				        array( 
				        'theme_location' => 'custom-menu',
				        'fallback_cb'=> 'custom_menu',
				        'container' => 'ul',
				        'menu_id' => 'nav',
				        'menu_class' => 'nav') 
					);
			    else custom_menu();
				?>
				
	        </div>
        </div>