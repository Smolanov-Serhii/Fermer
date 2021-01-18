<?php
/**
 * fermer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fermer
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'fermer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fermer_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fermer, use a find and replace
		 * to change 'fermer' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fermer', get_template_directory() . '/languages' );

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
				'main-menu' => esc_html__( 'Главное меню', 'fermer' ),
				'additional-menu' => esc_html__( 'Доп. меню', 'fermer' ),
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
				'fermer_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'fermer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fermer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fermer_content_width', 640 );
}
add_action( 'after_setup_theme', 'fermer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fermer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fermer' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fermer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fermer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fermer_scripts() {
    wp_enqueue_style( 'fermer-style', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION );
    wp_enqueue_style( 'fermer-fresco', get_template_directory_uri() . '/dist/css/fresco.css', array(), _S_VERSION );
	wp_style_add_data( 'fermer-style', 'rtl', 'replace' );
    wp_enqueue_script('jquery', get_template_directory_uri() . '/dist/js/jquery-3.5.1.js');
    wp_enqueue_script('fresco', get_template_directory_uri() . '/dist/js/fresco.min.js');
    wp_enqueue_script('newscript', get_template_directory_uri() . '/dist/js/common.js');
	wp_enqueue_script( 'fermer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fermer_scripts' );

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

add_action('customize_register', function($customizer) {

    $customizer->add_section(

        'section_one', array(

            'title' => 'Контактные данные',

            'description' => '',

            'priority' => 11,

        )

    );

    $customizer->add_setting('phone',

        array('default' => '+38 (000) 123-45-67')

    );

    $customizer->add_control('phone', array(

            'label' => 'Телефон 1',

            'section' => 'section_one',

            'type' => 'text',

        )

    );
    $customizer->add_setting('phone_2',

        array('default' => '+38 (000) 123-45-67')

    );

    $customizer->add_control('phone_2', array(

            'label' => 'Телефон 2',

            'section' => 'section_one',

            'type' => 'text',

        )

    );
    $customizer->add_setting('e-mail',

        array('default' => 'petro@ukr.net')

    );

    $customizer->add_control('e-mail', array(

            'label' => 'e-mail',

            'section' => 'section_one',

            'type' => 'email',

        )

    );
    $customizer->add_setting('facebook',

        array('default' => 'url')

    );

    $customizer->add_control('facebook', array(

            'label' => 'facebook',

            'section' => 'section_one',

            'type' => 'url',

        )

    );
    $customizer->add_setting('instagram',

        array('default' => 'url')

    );

    $customizer->add_control('instagram', array(

            'label' => 'instagram',

            'section' => 'section_one',

            'type' => 'url',

        )

    );
    $customizer->add_setting('youtube',

        array('default' => 'url')

    );

    $customizer->add_control('youtube', array(

            'label' => 'youtube',

            'section' => 'section_one',

            'type' => 'url',

        )

    );

});
add_action( 'init', 'register_post_types' );
function register_post_types(){

    register_post_type( 'relax', [
        'label'  => null,
        'labels' => [
            'name'               => 'Отдых', // основное название для типа записи
            'singular_name'      => 'relax', // название для одной записи этого типа
            'add_new'            => 'Добавить запись', // для добавления новой записи
            'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование записи', // для редактирования типа записи
            'new_item'           => 'Новая запись', // текст новой записи
            'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
            'search_items'       => 'Искать запись', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Отдых', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
    register_post_type( 'pets', [
        'label'  => null,
        'labels' => [
            'name'               => 'Питомцы', // основное название для типа записи
            'singular_name'      => 'pets', // название для одной записи этого типа
            'add_new'            => 'Добавить питомца', // для добавления новой записи
            'add_new_item'       => 'Добавление питомца', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование питомца', // для редактирования типа записи
            'new_item'           => 'Новый питомец', // текст новой записи
            'view_item'          => 'Смотреть питомца', // для просмотра записи этого типа.
            'search_items'       => 'Искать питомца', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Питомцы', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
    register_post_type( 'awards', [
        'label'  => null,
        'labels' => [
            'name'               => 'Награды', // основное название для типа записи
            'singular_name'      => 'awards', // название для одной записи этого типа
            'add_new'            => 'Добавить награду', // для добавления новой записи
            'add_new_item'       => 'Добавление награды', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование награды', // для редактирования типа записи
            'new_item'           => 'Новая награда', // текст новой записи
            'view_item'          => 'Смотреть награду', // для просмотра записи этого типа.
            'search_items'       => 'Искать награду', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Награды', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}