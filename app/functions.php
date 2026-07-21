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

    if (is_page_template('gallery.php')) {
        wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), '5.0');
        wp_enqueue_script('fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), '5.0', true);
    }
}
add_action('wp_enqueue_scripts', 'custom_js_css');


// GOOGLE MAP API 


function custom_google_map_scripts()
{
    wp_enqueue_script(
        'google-maps',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyD__PfKxYEU_vH3xC_mtRApSjp8946sdRY&callback=initCustomGoogleMap&loading=async',
        array('all_js'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'custom_google_map_scripts');

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
        'name' => __('Single Blog Post Sidebar', 'textdomain'),
        'id' => 'single_sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

// require get_template_directory() . '/load_more_blogs.php';


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
// add_filter('login_headerurl', 'my_login_logo_url');

// function custom_login_logo()
// {
// 	echo '<style type="text/css">body#login h1 a,
// 	body.login h1 a { background: url(' . get_bloginfo('template_directory') . '/images/logo.png) 50% 50% no-repeat !important;   background-size: contain !important;}
// 	body.login {
// 		background-color: #8CD2F1;}
// 		body.login div#login form#loginform p.submit input#wp-submit {
// 			display: inline-block;
// 			padding: .0rem 3rem;

// 			border-radius: 3rem;
// 			color: white;
// 			transition: all 0.3s ease-in-out;
// 			text-decoration: none;
// 			position: relative;
// 			border: solid 0.3rem #8CD2F1;
// 			background-color:#8CD2F1;

// 	}
// 	body.login div#login form#loginform p.submit input#wp-submit:hover{

// 			background-color: white;

// 			color: #8CD2F1;
// 			text-decoration: none;

// 	}

// 	</style>';
// }
// add_action('login_head', 'custom_login_logo');

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
// function mytheme_setup_theme_supported_features()
// {
// 	add_theme_support('editor-color-palette', array(
// 		array(
// 			'name'  => __('darkBlue', 'themeLangDomain'),
// 			'slug'  => 'darkBlue',
// 			'color' => '#163840',
// 		),
// 		array(
// 			'name'  => __('lightBlue', 'themeLangDomain'),
// 			'slug'  => 'lightBlue',
// 			'color' => '#8cd2f1',
// 		),
// 		array(
// 			'name'  => __('orange', 'themeLangDomain'),
// 			'slug'  => 'orange',
// 			'color' => '#fc6201',
// 		),
// 		array(
// 			'name'  => __('pink', 'themeLangDomain'),
// 			'slug'  => 'pink',
// 			'color' => '#f5a791',
// 		),
// 		array(
// 			'name'  => __('blue', 'themeLangDomain'),
// 			'slug'  => 'blue',
// 			'color' => '#46b1d3',
// 		),
// 		array(
// 			'name'  => __('green', 'themeLangDomain'),
// 			'slug'  => 'green',
// 			'color' => '#acca2c',
// 		),
// 		array(
// 			'name'  => __('purple', 'themeLangDomain'),
// 			'slug'  => 'purple',
// 			'color' => '#7d3c7d',
// 		),
// 		array(
// 			'name'  => __('charcoal', 'themeLangDomain'),
// 			'slug'  => 'charcoal',
// 			'color' => '#585757',
// 		),
// 		array(
// 			'name'  => __('light-grey', 'themeLangDomain'),
// 			'slug'  => 'light-grey',
// 			'color' => '#d9d8d9',
// 		),
// 		array(
// 			'name'  => __('grey', 'themeLangDomain'),
// 			'slug'  => 'grey',
// 			'color' => '#7b7b7b',
// 		),
// 		array(
// 			'name'  => __('yellow', 'themeLangDomain'),
// 			'slug'  => 'yellow',
// 			'color' => '#f9c71b',
// 		),
// 		array(
// 			'name'  => __('black', 'themeLangDomain'),
// 			'slug'  => 'black',
// 			'color' => '#231e1e',
// 		),
// 		array(
// 			'name'  => __('white', 'themeLangDomain'),
// 			'slug'  => 'white',
// 			'color' => '#fafafa',
// 		),
// 		// Add more custom colors here
// 	));
// }
// add_action('after_setup_theme', 'mytheme_setup_theme_supported_features');

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

// ---------------------------------------------------------
// DYNAMIC MENU RESOURCES
// ---------------------------------------------------------

function register_menu_dynamic_resources()
{
    // 1. Menu Items Custom Post Type
    $item_labels = array(
        'name' => 'Menu Items',
        'singular_name' => 'Menu Item',
        'add_new' => 'Add New Item',
        'add_new_item' => 'Add New Menu Item',
        'edit_item' => 'Edit Menu Item',
        'new_item' => 'New Menu Item',
        'all_items' => 'All Menu Items',
        'view_item' => 'View Menu Item',
        'search_items' => 'Search Menu Items',
        'not_found' => 'No menu items found',
        'not_found_in_trash' => 'No menu items found in Trash',
        'menu_name' => 'Menu Items'
    );

    $item_args = array(
        'labels' => $item_labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-food',
        'supports' => array('title', 'thumbnail'),
        'show_in_rest' => true, // Enable Gutenberg editor
    );

    register_post_type('menu_item', $item_args);

    // 2. Menu Categories Custom Taxonomy
    $cat_labels = array(
        'name' => 'Menu Categories',
        'singular_name' => 'Menu Category',
        'search_items' => 'Search Categories',
        'all_items' => 'All Categories',
        'parent_item' => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item' => 'Edit Category',
        'update_item' => 'Update Category',
        'add_new_item' => 'Add New Category',
        'new_item_name' => 'New Category Name',
        'menu_name' => 'Categories',
    );

    $cat_args = array(
        'hierarchical' => true,
        'labels' => $cat_labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'menu-category'),
        'show_in_rest' => true,
    );

    register_taxonomy('menu_category', array('menu_item'), $cat_args);
}
add_action('init', 'register_menu_dynamic_resources');


// Code of Gallery Page

function create_gallery_post_type()
{
    register_post_type('gallery', array(
        'labels' => array(
            'name' => 'Gallery',
            'singular_name' => 'Gallery Item'
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-format-gallery'
    ));
}
add_action('init', 'create_gallery_post_type');

function create_gallery_taxonomy()
{
    register_taxonomy('gallery_category', 'gallery', array(
        'label' => 'Categories',
        'hierarchical' => true,
        'public' => true
    ));
}
add_action('init', 'create_gallery_taxonomy');

// Code of Gallery Page Ends 

// ---------------------------------------------------------
// VOUCHER & BASKET FUNCTIONALITY
// ---------------------------------------------------------

// 1. Session Initialization
function theme_init_session()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}
add_action('init', 'theme_init_session');

// 2. Register Custom Post Type for Voucher Orders
function create_voucher_order_cpt()
{
    register_post_type('voucher_order', array(
        'labels' => array(
            'name' => 'Voucher Orders',
            'singular_name' => 'Voucher Order',
            'menu_name' => 'Voucher Orders',
            'all_items' => 'All Orders',
            'view_item' => 'View Order',
            'search_items' => 'Search Orders',
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title'),
        'capability_type' => 'post',
        'has_archive' => false,
    ));
}
add_action('init', 'create_voucher_order_cpt');

// 3. Handle Add to Basket (Gift Voucher Form)
function handle_add_to_basket()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $amount = isset($_POST['voucher_custom_amount']) && !empty($_POST['voucher_custom_amount']) ? floatval($_POST['voucher_custom_amount']) : floatval($_POST['voucher_amount_select']);

        $item = array(
            'id' => uniqid('voucher_'),
            'type' => 'gift_card',
            'amount' => $amount,
            'first_name' => sanitize_text_field($_POST['addressee_first_name']),
            'last_name' => sanitize_text_field($_POST['addressee_last_name']),
            'email' => sanitize_email($_POST['addressee_email']),
            'message' => sanitize_textarea_field($_POST['gift_message']),
            'quantity' => 1
        );

        if (!isset($_SESSION['basket_items'])) {
            $_SESSION['basket_items'] = array();
        }

        // Add item to basket
        $_SESSION['basket_items'][] = $item;

        // Redirect to basket page
        wp_redirect(home_url('/basket/'));
        exit;
    }
}
add_action('admin_post_nopriv_add_to_basket', 'handle_add_to_basket');
add_action('admin_post_add_to_basket', 'handle_add_to_basket');

// 4. AJAX: Update Basket Quantity
function update_basket_qty()
{
    $item_id = sanitize_text_field($_POST['item_id']);
    $qty = intval($_POST['quantity']);

    if (isset($_SESSION['basket_items'])) {
        foreach ($_SESSION['basket_items'] as $index => $item) {
            if ($item['id'] === $item_id) {
                if ($qty > 0) {
                    $_SESSION['basket_items'][$index]['quantity'] = $qty;
                } else {
                    unset($_SESSION['basket_items'][$index]);
                }
                break;
            }
        }
        $_SESSION['basket_items'] = array_values($_SESSION['basket_items']); // Re-index
    }

    wp_send_json_success();
}
add_action('wp_ajax_nopriv_update_basket_qty', 'update_basket_qty');
add_action('wp_ajax_update_basket_qty', 'update_basket_qty');

// 5. AJAX: Remove Basket Item
function remove_basket_item()
{
    $item_id = sanitize_text_field($_POST['item_id']);

    if (isset($_SESSION['basket_items'])) {
        foreach ($_SESSION['basket_items'] as $index => $item) {
            if ($item['id'] === $item_id) {
                unset($_SESSION['basket_items'][$index]);
                break;
            }
        }
        $_SESSION['basket_items'] = array_values($_SESSION['basket_items']);
    }

    wp_send_json_success();
}
add_action('wp_ajax_nopriv_remove_basket_item', 'remove_basket_item');
add_action('wp_ajax_remove_basket_item', 'remove_basket_item');

// 6. AJAX: Process Checkout
function process_checkout()
{
    if (!isset($_SESSION['basket_items']) || empty($_SESSION['basket_items'])) {
        wp_send_json_error(array('message' => 'Your basket is empty.'));
    }

    // Capture Buyer Details
    $buyer_email = sanitize_email($_POST['email']);
    $buyer_first = sanitize_text_field($_POST['first_name']);
    $buyer_last = sanitize_text_field($_POST['last_name']);
    $buyer_phone = sanitize_text_field($_POST['phone']);

    // Calculate Total
    $total = 0;
    foreach ($_SESSION['basket_items'] as $item) {
        $total += ($item['amount'] * $item['quantity']);
    }

    // Add Shipping (matching basket.php static value)
    $shipping = 9.50;
    $final_total = $total + $shipping;

    // Create Order Post
    $order_id = wp_insert_post(array(
        'post_title' => 'Order by ' . $buyer_first . ' ' . $buyer_last . ' (' . date('Y-m-d H:i:s') . ')',
        'post_type' => 'voucher_order',
        'post_status' => 'publish',
    ));

    if ($order_id) {
        // Save Buyer Meta
        update_post_meta($order_id, 'buyer_email', $buyer_email);
        update_post_meta($order_id, 'buyer_first_name', $buyer_first);
        update_post_meta($order_id, 'buyer_last_name', $buyer_last);
        update_post_meta($order_id, 'buyer_phone', $buyer_phone);
        update_post_meta($order_id, 'order_total', $final_total);

        // Save Items and Send Emails
        foreach ($_SESSION['basket_items'] as $index => $item) {
            update_post_meta($order_id, 'item_' . $index . '_type', $item['type']);
            update_post_meta($order_id, 'item_' . $index . '_amount', $item['amount']);
            update_post_meta($order_id, 'item_' . $index . '_qty', $item['quantity']);

            if ($item['type'] === 'gift_card') {
                update_post_meta($order_id, 'item_' . $index . '_recipient_name', $item['first_name'] . ' ' . $item['last_name']);
                update_post_meta($order_id, 'item_' . $index . '_recipient_email', $item['email']);
                update_post_meta($order_id, 'item_' . $index . '_message', $item['message']);

                // Send Email to recipient
                $subject = "You've received a Gift Voucher from The Last Drop!";
                $message = "Hi " . $item['first_name'] . ",\n\n";
                $message .= $buyer_first . " " . $buyer_last . " has sent you a €" . number_format($item['amount'], 2) . " gift voucher for The Last Drop!\n\n";
                if (!empty($item['message'])) {
                    $message .= "Message: " . $item['message'] . "\n\n";
                }
                $message .= "Enjoy!\n";

                wp_mail($item['email'], $subject, $message);
            }
        }

        // Clear session basket
        unset($_SESSION['basket_items']);

        wp_send_json_success(array('message' => 'Order processed successfully.'));
    } else {
        wp_send_json_error(array('message' => 'Failed to create order.'));
    }
}
add_action('wp_ajax_nopriv_process_checkout', 'process_checkout');
add_action('wp_ajax_process_checkout', 'process_checkout');

// 7. Admin Meta Box for Voucher Orders
function add_voucher_order_meta_boxes()
{
    add_meta_box(
        'voucher_order_details',
        'Order Details',
        'render_voucher_order_details',
        'voucher_order',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_voucher_order_meta_boxes');

function render_voucher_order_details($post)
{
    // Get Buyer Info
    $buyer_first = get_post_meta($post->ID, 'buyer_first_name', true);
    $buyer_last = get_post_meta($post->ID, 'buyer_last_name', true);
    $buyer_email = get_post_meta($post->ID, 'buyer_email', true);
    $buyer_phone = get_post_meta($post->ID, 'buyer_phone', true);
    $order_total = get_post_meta($post->ID, 'order_total', true);

    echo '<h3>Buyer Details</h3>';
    echo '<p><strong>Name:</strong> ' . esc_html($buyer_first . ' ' . $buyer_last) . '</p>';
    echo '<p><strong>Email:</strong> <a href="mailto:' . esc_attr($buyer_email) . '">' . esc_html($buyer_email) . '</a></p>';
    echo '<p><strong>Phone:</strong> ' . esc_html($buyer_phone) . '</p>';
    echo '<p><strong>Order Total:</strong> €' . number_format((float) $order_total, 2) . '</p>';

    echo '<hr>';
    echo '<h3>Items</h3>';

    // Find all item metas
    $all_meta = get_post_meta($post->ID);
    $items = array();

    // Parse meta keys to group items by index
    foreach ($all_meta as $key => $values) {
        if (preg_match('/^item_(\d+)_(.*)$/', $key, $matches)) {
            $index = $matches[1];
            $field = $matches[2];
            if (!isset($items[$index])) {
                $items[$index] = array();
            }
            $items[$index][$field] = $values[0];
        }
    }

    if (empty($items)) {
        echo '<p>No items found.</p>';
    } else {
        foreach ($items as $index => $item) {
            echo '<div style="background:#f9f9f9; border:1px solid #ddd; padding:15px; margin-bottom:15px;">';
            echo '<p><strong>Item Type:</strong> ' . esc_html(isset($item['type']) ? $item['type'] : 'Unknown') . '</p>';
            echo '<p><strong>Amount:</strong> €' . number_format((float) (isset($item['amount']) ? $item['amount'] : 0), 2) . '</p>';
            echo '<p><strong>Quantity:</strong> ' . esc_html(isset($item['qty']) ? $item['qty'] : 0) . '</p>';

            if (isset($item['type']) && $item['type'] === 'gift_card') {
                echo '<h4 style="margin-top:10px; margin-bottom:5px;">Recipient Details:</h4>';
                echo '<p><strong>Name:</strong> ' . esc_html(isset($item['recipient_name']) ? $item['recipient_name'] : '') . '</p>';
                echo '<p><strong>Email:</strong> ' . esc_html(isset($item['recipient_email']) ? $item['recipient_email'] : '') . '</p>';
                if (!empty($item['message'])) {
                    echo '<p><strong>Message:</strong> ' . nl2br(esc_html($item['message'])) . '</p>';
                }
            }
            echo '</div>';
        }
    }
}
