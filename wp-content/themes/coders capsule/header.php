<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coders Capsule
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- PreLoader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <!--Preloader-->
    <header id="site__header" class="main-header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <a class="navbar-brand" href="#">
    <?php
    $logo_image = get_theme_mod('custom_logo');

    if ($logo_image) {
        echo wp_get_attachment_image($logo_image, 'full', false, array('class' => 'custom-logo', 'title' => get_bloginfo('name'), 'alt' => get_bloginfo('name')));
    } else {
        // Default fallback image or text
        echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.svg" title="' . get_bloginfo('name') . '" alt="' . get_bloginfo('name') . '">';
    }
    ?>
</a>

                 </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                wp_nav_menu(array(
                    'theme_location' => 'your-menu-location', // Change 'primary-menu' to your actual menu location
                    'menu_class'     => 'navbar-nav navbar-left mx-auto',
                    'walker'         => new Custom_Nav_Walker(),
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'container'      => false, // Set container to false to disable it

                ));
                ?>
                    <ul class="navbar-nav ml-auto ">
                        <li>
                            <a class="btn btn-primary btn-round" href="#">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>