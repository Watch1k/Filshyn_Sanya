<?php 
/*
Template Name: Страница приземления
*/
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="wp-content/themes/mytheme/style/bootstrap.min.css">
	<link rel="stylesheet" href="wp-content/themes/mytheme/style/landing-style.css">
	
	<script src="wp-content/themes/mytheme/js/jquery-1.10.2.min.js"></script>
	<script src="wp-content/themes/mytheme/js/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>
	
	<div class="container">
		
		 <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

        		<h1><?php the_title(); ?></h1>
        		<div class="text">
        			
                    <?php the_content(); ?>
        			
        		</div>        		

            <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
            <?php else : ?>
            <?php endif; ?>

	</div>
	
	<?php wp_footer(); ?>
</body>
</html>