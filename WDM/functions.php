<?php




//adds the featured image box to pages
	add_theme_support( 'post-thumbnails' );




//adds custom placeholder text to search fields
	function my_search_form($text) {
		$text = str_replace('id="s"', 'id="s" placeholder="Search me!"', $text);
		return $text;
		}
	add_filter('get_search_form', 'my_search_form');




//adds the posts sidebar widgets area
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'Widgets for the sidebar.',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    }



//adds SVG image support
	function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
	}
	add_filter( 'upload_mimes', 'cc_mime_types' );




?>