<?php

//Фильтр от спама
add_filter('pre_comment_on_post', 'verify_spam');
function verify_spam($commentdata) {
      $spam_test_field = trim($_POST['comment']);
  if(!empty($spam_test_field)) wp_die('Спаму нет!');
      $comment_content = trim($_POST['real-comment']);
      $_POST['comment'] = $comment_content;
  return $commentdata;
}

# Breadcrumb
function the_breadcrumb() {
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home').'">';
		echo 'Главная';
		echo "</a> <span class='divider'>/</span></li> ";
		if (is_category() || is_single()) {
			echo "<li>";
			single_cat_title();
			echo "</li>";
			if (is_single()) {
			the_category(', ');
				echo " <span class='divider'>/</span><li> ";
				the_title();
				echo "</li>";
			}
		} elseif (is_page()) {
			echo "<li>";
			echo the_title();
			echo "</li>";
		}
		  elseif (is_tag()) {
			echo 'Записи с меткой "'; 
			single_tag_title();
			echo '"'; }
		elseif (is_day()) {echo "Архив за"; the_time('  jS F Y');}
		elseif (is_month()) {echo "Архив "; the_time(' F  Y');}
		elseif (is_year()) {echo "Архив за "; the_time(' Y');}
		elseif (is_author()) {echo "Архив автора";}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "Архив блога";}
		elseif (is_search()) {echo "Результаты поиска";}
			elseif (is_404()) {	echo '404 - Страница не найдена';}
	}
}

//Произвольное меню
if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'custom-menu'=>__('Custom menu'),
		)
	);
}

function custom_menu(){
	echo '<ul>';
	wp_list_pages('title_li=&');
	echo '</ul>';
}

// Регистрируем сайдбары
if ( function_exists('register_sidebar') ) {
	
    register_sidebar(array(
		'name' => 'Правый сайдбар',
		'before_widget' => '<div class="widget">',
        'before_title' => '<h2 class="sidebar-header">',
        'after_title' => '</h2><div class="text">',
        'after_widget' => '</div></div><hr />'
	));

	 register_sidebar(array(
		'name' => 'Сайдбар в футере',
		'before_widget' => '<div class="footer-widget">',
        'before_title' => '<h2>',
        'after_title' => '</h2><div class="text">',
        'after_widget' => '</div></div>'
	));

}

add_theme_support( 'post-thumbnails' );

?>