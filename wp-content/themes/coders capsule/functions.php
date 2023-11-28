<?php
// Enable SVG file uploads
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');
// Custom Logo
add_theme_support('custom-logo');
// Styles And Scripts
function enqueue_custom_assets() {
    // Enqueue Styles
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3', 'all');
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11', 'all');
    wp_enqueue_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), 'all');
    wp_enqueue_style('font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2', 'all');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

    // Enqueue Scripts
    wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', false);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', false);
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false);
    wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.5.1.min.js', false);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js',false);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_assets');

// Nav Walker
class Custom_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        // Depth-dependent classes.
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    // Depth-dependent classes.
    $depth_class = ($depth) ? ' dropdown-item' : ' nav-item';

    // Ensure $args is an object.
    if (!is_object($args)) {
        $args = (object) $args;
    }
// Passed classes.
$classes = empty($item->classes) ? array() : (array) $item->classes;

// Check if the current menu item has children
$has_children = in_array('menu-item-has-children', $item->classes);

// Add a class for dropdown if the item has children
if ($has_children) {
    $classes[] = 'dropdown';
}

$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
$class_names = ' class=" ' . esc_attr($class_names) . $depth_class . '"';

// Build HTML.
$output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $class_names . '>';


    // Link attributes.
$attributes = !empty($item->class) ? ' class="nav-link ' . esc_attr($item->class) . '"' : ' class="nav-link"';
$attributes .= !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

// Link content.
$item_output = $args->before;
$item_output .= '<a' . $attributes . '>';
$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
$item_output .= '</a>';
$item_output .= $args->after;


    // Output.
    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
}

}

// Enable navigation
function theme_name_register_menus() {
    register_nav_menus(
        array(
            'your-menu-location' => __( 'Your Menu Location', 'theme_name' ),
        )
    );
}
add_action( 'after_setup_theme', 'theme_name_register_menus' );


/**
 * Add a new options page named "Slider".
 */
function myprefix_register_sliders_page() {
    add_menu_page(
        'Sliders', // Page title
        'Sliders', // Menu Title
        'manage_options', // Capability
        'sliders', // Menu Slug
        'sliders_page_html', // Callback
        '', // Icon Url
        2 // Order
    );
}
add_action( 'admin_menu', 'myprefix_register_sliders_page' );

/**
 * The "My Options" page html.
 */
function sliders_page_html() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    if ( isset( $_GET['settings-updated'] ) ) {
        add_settings_error(
            'my_options_mesages',
            'my_options_message',
            esc_html__( 'Settings Saved', 'text_domain' ),
            'updated'
        );
    }

    settings_errors( 'my_options_mesages' );

    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
                settings_fields( 'my_options_group' );
                do_settings_sections( 'my_options' );
                submit_button( 'Save Settings' );
            ?>
        </form>
    </div>
    <?php
}
function myprefix_register_settings() {
    register_setting( 'my_options', 'my_options' );

    add_settings_section(
        'my_options_sections',
        false,
        false,
        'my_options'
    );

    add_settings_field(
        'my_option_1',
        esc_html__( 'My Option 1', 'text_domain' ),
        'render_my_option_1_field',
        'my_options',
        'my_options_sections',
        [
            'label_for' => 'my_option_1',
        ]
    );
}
add_action( 'admin_init', 'myprefix_register_settings' );



function render_my_option_1_field( $args ) {
    $value = get_option( 'my_options' )[$args['label_for']] ?? '';
    ?>
    <input
        type="text"
        id="<?php echo esc_attr( $args['label_for'] ); ?>"
        name="my_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
        value="<?php echo esc_attr( $value ); ?>">
    <p class="description"><?php esc_html_e( 'This is a description for our field.', 'text_domain' ); ?></p>
    <?php
}

// Acf Json Hook
//Change ACF Local JSON save location to /acf folder inside this plugin
add_filter('acf/settings/save_json', function() {
	return dirname(__FILE__) . '/acf-json';
});

//Include the /acf folder in the places to look for ACF Local JSON files
add_filter('acf/settings/load_json', function() {
	$paths[] = dirname(__FILE__) . '/acf-json';
	return $paths;
});