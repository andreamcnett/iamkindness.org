<?php
/**
 * i-am-kindness functions and definitions
 *
 * @package i-am-kindness
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'i_am_kindness_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function i_am_kindness_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on i-am-kindness, use a find and replace
	 * to change 'i-am-kindness' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'i-am-kindness', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'i-am-kindness' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'i_am_kindness_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // i_am_kindness_setup
add_action( 'after_setup_theme', 'i_am_kindness_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function i_am_kindness_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'i-am-kindness' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'i_am_kindness_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function i_am_kindness_scripts() {
	wp_enqueue_style( 'i-am-kindness-style', get_stylesheet_uri() );

	wp_enqueue_script( 'i-am-kindness-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '', true);

    wp_enqueue_script( 'i-am-kindness-layout', get_template_directory_uri() . '/js/layout.js', array('masonry'), '20120206', true );

	wp_enqueue_script( 'i-am-kindness-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'i_am_kindness_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function wpb_adding_scripts() {
wp_register_script('masonry', plugins_url('masonry.js', __FILE__));
wp_enqueue_script('masonry', array('images-loaded'));
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  

if ( ! function_exists( 'slug_masonry_init' )) :
function slug_masonry_init() { ?>
<script>
    //set the container that Masonry will be inside of in a var
    var container = document.querySelector('#masonry-loop');
    //create empty var msnry
    var msnry;
    // initialize Masonry after all images have loaded
    imagesLoaded( container, function() {
        msnry = new Masonry( container, {
            itemSelector: '.masonry-entry'
        });
    });
</script>
<?php }
//add to wp_footer
add_action( 'wp_footer', 'slug_masonry_init' );
endif; // ! slug_masonry_init exists


function reset_editor()
{
     global $_wp_post_type_features;

     $post_type="page";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}

add_action("init","reset_editor");
