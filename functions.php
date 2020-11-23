<?php
/**
 * novus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package novus
 */

if ( ! defined( 'NOVUS_VERSION' ) ) {
	define( 'NOVUS_VERSION', '1.0.0' );
	define( 'NOVUS_IMG', get_template_directory_uri() . '/images' );
	define( 'NOVUS_JS', get_template_directory_uri() . '/js' );
	define( 'NOVUS_ASSETS', get_template_directory_uri() . '/assets' );
}

if ( ! function_exists( 'novus_setup' ) ) :
	function novus_setup() {
		load_theme_textdomain( 'novus', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( [ 'menu-1' => esc_html__( 'Primary', 'novus' )] );
		register_nav_menus( [ 'menu-2' => esc_html__( 'Product Menu', 'novus' )] );
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'novus_custom_background_args',
				[
					'default-color' => 'ffffff',
					'default-image' => '',
				]
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			[
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			]
		);
		
		add_image_size( 'thumb-420', 420, 525, true );
		add_image_size( 'thumb-470', 470, 470, true );
		add_image_size( 'thumb-370', 370, 370, true );
		add_image_size( 'thumb-260', 260, 170, true );
		add_image_size( 'thumb-170', 170, 170, true );
	}
endif;
add_action( 'after_setup_theme', 'novus_setup' );

function novus_widgets_init() {
	register_sidebar(
		[
			'name'          => esc_html__( 'Sidebar', 'novus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'novus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
}
add_action( 'widgets_init', 'novus_widgets_init' );

function novus_scripts() {
	if ( is_singular( 'product' ) || is_archive( 'product' ) || is_archive( 'project' ) || is_singular( 'project' ) || is_page_template( 'template-pages/blog.php' ) || is_front_page() ) {
		wp_enqueue_style( 'swiper', NOVUS_ASSETS . '/slick.css', [], NOVUS_VERSION );
		wp_enqueue_script( 'swiper', NOVUS_ASSETS . '/slick.js', ['jquery'], NOVUS_VERSION, true );
	}
	wp_enqueue_style( 'novus-style', get_stylesheet_uri(), [], NOVUS_VERSION );

	wp_enqueue_script( 'scrollout', NOVUS_ASSETS . '/scrollout.js', [], NOVUS_VERSION, true );
	wp_enqueue_script( 'novus-script', NOVUS_JS . '/script.js', [], NOVUS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'novus_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'mb_relationships_init', function() {
	MB_Relationships_API::register( [
		'id'         => 'posts_to_pages',
		'from'       => 'post',
		'to'         => 'post',
		'reciprocal' => true, // THIS
	] );
} );

function add_current_nav_class($classes, $item) {

	// Getting the current post details
	global $post;

	// Get post ID, if nothing found set to NULL
	$id = ( isset( $post->ID ) ? get_the_ID() : NULL );

	// Checking if post ID exist...
	if (isset( $id )){

		// Getting the post type of the current post
		$current_post_type = get_post_type_object(get_post_type($post->ID));

		// Getting the rewrite slug containing the post type's ancestors
		$ancestor_slug = $current_post_type->rewrite ? $current_post_type->rewrite['slug'] : '';

		// Split the slug into an array of ancestors and then slice off the direct parent.
		$ancestors = explode('/',$ancestor_slug);
		$parent = array_pop($ancestors);

		// Getting the URL of the menu item
		$menu_slug = strtolower(trim($item->url));

		// Remove domain from menu slug
		$menu_slug = str_replace($_SERVER['SERVER_NAME'], "", $menu_slug);

		// If the menu item URL contains the post type's parent
		if (!empty($menu_slug) && !empty($parent) && strpos($menu_slug,$parent) !== false) {
			$classes[] = 'current-menu-item';
		}

		// If the menu item URL contains any of the post type's ancestors
		foreach ( $ancestors as $ancestor ) {
			if (!empty($menu_slug) && !empty($ancestor) && strpos($menu_slug,$ancestor) !== false) {
				$classes[] = 'current-page-ancestor';
			}
		}
	}
	// Return the corrected set of classes to be added to the menu item
	return $classes;

}
add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );

add_filter( 'rwmb_meta_boxes', 'novus_collections_homapage' );
function novus_collections_homapage( $meta_boxes ) {
	$prefix = '';

	$prod_terms = get_terms(
		'prod-category',
		[ 'orderby' => 'slug', 'hide_empty' => false ]
	);
	$collects = [];

	foreach ( $prod_terms as $term ) :
		$collects[ $term->slug ] = $term->name;
	endforeach;

	$meta_boxes[] = [
		'title'       => esc_html__( 'Collections Setting', 'novus' ),
		'id'          => 'collections',
		'post_types'  => ['page'],
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => [
			[
				'name'    => '',
				'id'      => 'chosen_collections',
				'type'    => 'checkbox_list',
				'options' => $collects,
				// 'inline' => true,
				'select_all_none' => true,
			]
		],
		'include'     => [
			'relation' => 'OR',
			'template' => ['template-pages/home.php'],
		],
	];

	return $meta_boxes;
}