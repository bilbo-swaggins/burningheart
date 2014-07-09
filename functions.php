<?php

//for security, hide wp version in web pages and feeds
function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');

// use shortcodes in widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

//Register custom menus
function register_my_menus() {
  register_nav_menus(
    array(
		  'main-menu' => __( 'Main Menu' ),
		  )
  );

  add_action( 'init', 'register_my_menus' );

}


// Show gravatar

function show_avatar($comment, $size) {
	 $email=strtolower(trim($comment->comment_author_email));
	 $rating = "G"; // [G | PG | R | X]

	if (function_exists('get_avatar')) {
      echo get_avatar($email, $size);
   	}
   	else {

      $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
         " . md5($emaill) . "&size=" . $size."&rating=".$rating;
      echo "<img src='$grav_url'/>";
   	}
}

// Add custom menus to Dashboard when theme is active
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu',
			 )
	);
}

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the secondary sidebar. */
	register_sidebar(
		array(
			'id' => 'sticky-nav',
			'name' => __( 'Sticky Nav' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'description' => ( 'Sticky Sidebar' ),
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
  /* Register the search sidebar. */
  register_sidebar(
    array(
      'id' => 'search',
      'name' => __( 'Search Sidebar' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );

	// /* Register the footer widget area. */
	// register_sidebar(
	// 	array(
	// 		'id' => 'foot',
	// 		'name' => __( 'Footer Widget Area' ),
	// 		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	// 		'after_widget' => '</div>',
	// 		'before_title' => '<h3 class="widget-title">',
	// 		'after_title' => '</h3>'
	// 	)
	// );


	/* Repeat register_sidebar() code for additional sidebars. */
}



/* Adds featured image */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails');
	set_post_thumbnail_size( 130, 130, true ); // default Post Thumbnail dimensions (cropped)

}


// Remove rel attribute from the category list
function remove_category_list_rel($output)
{
  $output = str_replace(' rel="category tag"', '', $output);
  return $output;
}
add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');
