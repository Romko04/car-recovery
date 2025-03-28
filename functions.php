<?php
/**
 * EazyCarSolutions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EazyCarSolutions
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function eazycarsolutions_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on EazyCarSolutions, use a find and replace
		* to change 'eazycarsolutions' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'eazycarsolutions', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-1' => esc_html__( 'Header', 'eazycarsolutions' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'eazycarsolutions_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'eazycarsolutions_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eazycarsolutions_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eazycarsolutions_content_width', 640 );
}
add_action( 'after_setup_theme', 'eazycarsolutions_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function eazycarsolutions_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'eazycarsolutions' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'eazycarsolutions' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'eazycarsolutions_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function eazycarsolutions_scripts() {
    // Підключення стилю з папки assets
    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/libs/swiper-bundle.min.css', array(), _S_VERSION );

    wp_enqueue_style( 'eazycarsolutions-style', get_template_directory_uri() . '/assets/css/style.css', array('swiper-style'), _S_VERSION );


    // Підключення стилю для swiper з папки assets

    // Підключення основного скрипту з папки assets
    wp_enqueue_script( 'eazycarsolutions-main', get_template_directory_uri() . '/assets/js/main.js', array('swiper-script'), _S_VERSION, true );

    // Підключення скрипту для swiper з папки assets
    wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/libs/swiper-bundle.min.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'eazycarsolutions_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'crb_load' );

function crb_load() {
	require_once( __DIR__ . '/inc/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' ); // Для версии 1.6 и ниже
function crb_attach_theme_options() {
	require get_template_directory() . '/inc/custom-fields/pages-meta.php';
	require get_template_directory() . '/inc/custom-fields/theme-meta.php';

}

remove_action('wp_head', '_wp_render_title_tag', 1);


function eazycar_custom_meta_tags() {
    // Для одиночних сторінок або сторінок, де є кастомні поля
    if ( is_singular() || is_page() ) {
        // Отримуємо поточний шаблон сторінки
        $template = get_page_template_slug( get_queried_object_id() );

        // Перевірка шаблону сторінки та вибір відповідних кастомних полів
        if ( 'tmp-contacts.php' === $template ) {
            $custom_title = carbon_get_the_post_meta('contacts_page_title' );
            $custom_description = carbon_get_the_post_meta('contacts_page_description' );
            $custom_url = get_permalink();
        } elseif ( 'tmp-about.php' === $template ) {
            $custom_title = carbon_get_the_post_meta('about_page_title' );
            $custom_description = carbon_get_the_post_meta('about_page_description' );
            $custom_url = get_permalink();
        } elseif ( 'tmp-home.php' === $template ) {
            $custom_title = carbon_get_the_post_meta('home_page_title' );
            $custom_description = carbon_get_the_post_meta('home_page_description' );
            $custom_url = get_permalink();
        } else {
            // Для інших сторінок або шаблонів
            $custom_title = carbon_get_the_post_meta('home_page_title' );
            $custom_description = carbon_get_the_post_meta('home_page_description' );
            $custom_url = get_permalink();
        }

        // Виведення кастомного тайтлу
        if ( !empty( $custom_title ) ) {
            echo '<title>' . esc_html( $custom_title ) . '</title>';
        } else {
            echo '<title>' . get_bloginfo( 'name' ) . ' — Відновлення авто після ДТП | Київ</title>';
        }

        // Виведення кастомного дескрипшину
        if ( !empty( $custom_description ) ) {
            echo '<meta name="description" content="' . esc_attr( $custom_description ) . '">';
        } else {
            echo '<meta name="description" content="EazyCarSolutions надає послуги з відновлення автомобілів після ДТП у Києві. Повертаємо авто на дорогу швидко та якісно.">';
        }

        // Додавання Open Graph тегів
        if ( !empty( $custom_title ) ) {
            echo '<meta property="og:title" content="' . esc_attr( $custom_title ) . '">';
        }

        if ( !empty( $custom_description ) ) {
            echo '<meta property="og:description" content="' . esc_attr( $custom_description ) . '">';
        }

        echo '<meta property="og:image" content="' . get_template_directory_uri() . '/assets/images/previe.png' . '">';

        echo '<meta property="og:url" content="' . esc_url( $custom_url ) . '">';
        echo '<meta property="og:type" content="website">';
    } else {
        // Для інших сторінок
        echo '<title>' . get_bloginfo( 'name' ) . ' — Відновлення авто після ДТП | Київ</title>';
        echo '<meta name="description" content="EazyCarSolutions надає послуги з відновлення автомобілів після ДТП у Києві. Якість, швидкість, прозорість.">';

        // Open Graph для головної сторінки
        echo '<meta property="og:title" content="' . get_bloginfo( 'name' ) . ' — Відновлення авто після ДТП | Київ">';
        echo '<meta property="og:description" content="EazyCarSolutions надає послуги з відновлення автомобілів після ДТП у Києві. Якість, швидкість, прозорість.">';
        echo '<meta property="og:url" content="' . esc_url( home_url() ) . '">';
        echo '<meta property="og:type" content="website">';
    }
}


// Додаємо екшн хук для вставки тайтлів та дескрипшінів в <head>
add_action( 'wp_head', 'eazycar_custom_meta_tags', 1 );