<?php
// including stylesheets
function required_stylesheet()
{
	wp_enqueue_style('default_stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'required_stylesheet');

//jquery
function update_jQuery()
{
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '3.3.1', true);
}
add_action('wp_enqueue_scripts', 'update_jQuery');

//including custom theme css and js
function custom_js_css()
{

	wp_enqueue_script('all_js', get_template_directory_uri() . '/js/all.min.js?v1.0', 'jquery', null, true);
	wp_enqueue_style('all_css', get_template_directory_uri() . '/css/main.min.css?v1.0');
	wp_localize_script('all_js', 'ajax_url', array(admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'custom_js_css');

//registering nav menus
function register_theme_menus()
{
	register_nav_menus(array(
		'header_nav' => __('Header Navigation'),
		'footer_nav' => __('Footer Navigation')
	));
}
add_action('init', 'register_theme_menus');

// add thumbnails to posts
add_theme_support('post-thumbnails');

// Create Sidebar
function wpdocs_theme_slug_widgets_init()
{
	register_sidebar(array(
		'name'          => __('Single Blog Post Sidebar', 'textdomain'),
		'id'            => 'single_sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

require get_template_directory() . '/load_more_blogs.php';


function my_acf_prepare_field($field)
{

	// Don't show this field once it contains a value.

	return false;
}
function remove_footer_admin()
{
	echo '<span id="footer-thankyou">Developed by <a href="https://fyber.co.uk" target="_blank">Fyber</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');


// Apply to fields named "example_field".
add_filter('acf/prepare_field/name=testimonials', 'my_acf_prepare_field');

//login details
function my_login_logo_url()
{
	return home_url();
}

//custom login
add_filter('login_headerurl', 'my_login_logo_url');

function custom_login_logo()
{
	echo '<style type="text/css">body#login h1 a,
	body.login h1 a { background: url(' . get_bloginfo('template_directory') . '/images/logo.png) 50% 50% no-repeat !important;   background-size: contain !important;}
	body.login {
		background-color: #8CD2F1;}
		body.login div#login form#loginform p.submit input#wp-submit {
			display: inline-block;
			padding: .0rem 3rem;

			border-radius: 3rem;
			color: white;
			transition: all 0.3s ease-in-out;
			text-decoration: none;
			position: relative;
			border: solid 0.3rem #8CD2F1;
			background-color:#8CD2F1;
		
	}
	body.login div#login form#loginform p.submit input#wp-submit:hover{
	
			background-color: white;
	
			color: #8CD2F1;
			text-decoration: none;
		
	}
	
	</style>';
}
add_action('login_head', 'custom_login_logo');

// Removes the Yoast Metabox for Roles other then Admins
// Returns true if user has specific role
function check_user_role($role, $user_id = null)
{
	if (is_numeric($user_id))
		$user = get_userdata($user_id);
	else
		$user = wp_get_current_user();
	if (empty($user))
		return false;
	return in_array($role, (array) $user->roles);
}

// Disable WordPress SEO meta box for all roles other than administrator and an example of how to add another
function wpse_init()
{
	if (!(check_user_role('administrator' /* || check_user_role('custom role') */))) {
		// Remove page analysis columns from post lists, also SEO status on post editor
		add_filter('wpseo_use_page_analysis', '__return_false');
		// Remove Yoast meta boxes
		add_action('add_meta_boxes', 'disable_seo_metabox', 100000);
	}
}
add_action('init', 'wpse_init');

function disable_seo_metabox()
{
	remove_meta_box('wpseo_meta', 'post', 'normal');
	remove_meta_box('wpseo_meta', 'page', 'normal');
}


/* Custom colors for Gutenberg */
function mytheme_setup_theme_supported_features()
{
	add_theme_support('editor-color-palette', array(
		array(
			'name'  => __('darkBlue', 'themeLangDomain'),
			'slug'  => 'darkBlue',
			'color' => '#163840',
		),
		array(
			'name'  => __('lightBlue', 'themeLangDomain'),
			'slug'  => 'lightBlue',
			'color' => '#8cd2f1',
		),
		array(
			'name'  => __('orange', 'themeLangDomain'),
			'slug'  => 'orange',
			'color' => '#fc6201',
		),
		array(
			'name'  => __('pink', 'themeLangDomain'),
			'slug'  => 'pink',
			'color' => '#f5a791',
		),
		array(
			'name'  => __('blue', 'themeLangDomain'),
			'slug'  => 'blue',
			'color' => '#46b1d3',
		),
		array(
			'name'  => __('green', 'themeLangDomain'),
			'slug'  => 'green',
			'color' => '#acca2c',
		),
		array(
			'name'  => __('purple', 'themeLangDomain'),
			'slug'  => 'purple',
			'color' => '#7d3c7d',
		),
		array(
			'name'  => __('charcoal', 'themeLangDomain'),
			'slug'  => 'charcoal',
			'color' => '#585757',
		),
		array(
			'name'  => __('light-grey', 'themeLangDomain'),
			'slug'  => 'light-grey',
			'color' => '#d9d8d9',
		),
		array(
			'name'  => __('grey', 'themeLangDomain'),
			'slug'  => 'grey',
			'color' => '#7b7b7b',
		),
		array(
			'name'  => __('yellow', 'themeLangDomain'),
			'slug'  => 'yellow',
			'color' => '#f9c71b',
		),
		array(
			'name'  => __('black', 'themeLangDomain'),
			'slug'  => 'black',
			'color' => '#231e1e',
		),
		array(
			'name'  => __('white', 'themeLangDomain'),
			'slug'  => 'white',
			'color' => '#fafafa',
		),
		// Add more custom colors here
	));
}
add_action('after_setup_theme', 'mytheme_setup_theme_supported_features');

// Disable comments for all post types
function disable_comments_post_types_support()
{
	$types = get_post_types();
	foreach ($types as $type) {
		if (post_type_supports($type, 'comments')) {
			remove_post_type_support($type, 'comments');
			remove_post_type_support($type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'disable_comments_post_types_support');


function user_is_admin()
{
	return in_array('administrator', wp_get_current_user()->roles);
}

// convert a string into a kebab-case equivalent - e.g. if $string = "Light Blue", it returns "light-blue"
function convert_to_kebab_case($string)
{
	$string = preg_replace('/\s+/', '-', $string); // Replace spaces with dashes
	$string = preg_replace('/([a-z])([A-Z])/', '$1-$2', $string); // Insert dash before new words in camelCase
	$string = preg_replace('#/#', '-', $string); // replaces forward slashes with dashes
	return strtolower($string); // Convert to lowercase
}
