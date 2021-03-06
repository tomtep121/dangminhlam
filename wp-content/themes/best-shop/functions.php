<?php
/**
 * Best Shop functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Best_Shop
 */

if ( ! function_exists( 'best_shop_default_settings' ) ) :

function best_shop_default_settings($setting_name){
	$values = array (

        'address_title' => esc_html__('Visit Us:', 'best-shop'),
        'address' => esc_html__('30 Wall St, New York, NY 1000, USA', 'best-shop'),
        'mail_title' => esc_html__('Mail Us:', 'best-shop'),
        'mail_description' => '',
        'phone_title' => esc_html__('Call Us:', 'best-shop'),
        'phone_number' => esc_html__('+1 (800) 123 456 789', 'best-shop'),
        
        'heading_font' => 'Poppins',
        'body_font' => 'Open Sans',
        'footer_copyright' => '',
        
        'primary_color' => '#ffd800',
        'secondary_color' => '#32B9A5',
        
        'logo_width' => '130',
        
        'enable_search' => true,
        'ed_social_links' => true,
        'social_links' => '',
        
        'header_layout' => 'woocommerce-bar',
        
        'enable_top_bar' => true,        
        'top_bar_left_content' => 'menu',
        'top_bar_left_text' => esc_html__('edit top bar text', 'best-shop'),
        'top_bar_right_content' => 'menu_social',
        
        'page_sidebar_layout' => 'right-sidebar',
        'post_sidebar_layout' => 'right-sidebar',
        'layout_style' => 'right-sidebar',
        'woo_sidebar_layout' => 'left-sidebar',        
        
        'post_page_note_text' => '',
        'enable_post_author' => false,
        'enable_post_date' => false,
        'enable_banner_comments' => false,
        'enable_post_read_calc' => false,
        'read_words_per_minute' => 200,
        'related_post_title' => esc_html__( 'You might also like', 'best-shop' ),
        'home_text' => esc_html__( 'Home', 'best-shop' ),
        
        'enable_breadcrumb' => true,
                
        'enable_banner_section' => 'static_banner',
        'banner_title' => esc_html__( 'Donec Cras Ut Eget Justo Nec Semper Sapien Viverra Ante', 'best-shop' ),
        'banner_content' => esc_html__( 'Structured gripped tape invisible moulded cups for sauppor firm hold strong powermesh front liner sport detail.', 'best-shop' ),
        'banner_btn_label' => esc_html__( 'Read More', 'best-shop' ),
        'banner_link' => '#',
        'banner_btn_two_label' => esc_html__( 'About Us', 'best-shop' ),
        'banner_btn_two_link' => '#',
        
        'enable_newsletter_section' => true,
        'newsletter_shortcode' => '',
        
        'blog_section_title' => esc_html__( 'Blog Posts', 'best-shop' ),
        
        'footer_text_color' => '#eee',
        'footer_color' => '#000',
        'footer_link' => 'https://gradientthemes.com/',
    );
					 
	return $values[$setting_name];
}

endif;

/* 
 * Get default setting if no saved settings 
 */

if ( ! function_exists( 'best_shop_get_setting' ) ) :

function best_shop_get_setting($setting_name){
    
    return get_theme_mod($setting_name, best_shop_default_settings($setting_name)); 
    
}

endif;


$best_shop_theme_data = wp_get_theme();
if( ! defined( 'best_shop_VERSION' ) ) define( 'best_shop_VERSION', $best_shop_theme_data->get( 'Version' ) );
if( ! defined( 'best_shop_NAME' ) ) define( 'best_shop_NAME', $best_shop_theme_data->get( 'Name' ) );

if ( ! function_exists( 'best_shop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function best_shop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Best Shop, use a find and replace
		 * to change 'best-shop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'best-shop', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary', 'best-shop' ),
				'footer-menu'  => esc_html__( 'Footer Menu', 'best-shop' ),
                'top-bar-right-menu'  => esc_html__( 'Top Bar Right Menu', 'best-shop' ),
                'top-bar-left-menu'  => esc_html__( 'Top Bar Left Menu', 'best-shop' ),
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
				'best_shop_custom_background_args',
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
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		add_image_size( 'best_shop_popular_posts', 447, 367, true );
		add_image_size( 'best_shop_archive', 420, 345, true );
		add_image_size( 'best_shop_editor', 446, 297, true );

	}
endif;
add_action( 'after_setup_theme', 'best_shop_setup' );

if( ! function_exists( 'best_shop_content_width' ) ) :
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function best_shop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'best_shop_content_width', 820 );
}
endif;
add_action( 'after_setup_theme', 'best_shop_content_width', 0 );

if( ! function_exists( 'best_shop_scripts' ) ) :

/**
 * Enqueue scripts and styles.
 */
function best_shop_scripts() {

	wp_enqueue_style( 'best-shop-google-fonts', best_shop_google_fonts_url(), array(), null );
    
    wp_enqueue_style( 'best-shop-bootstrap', get_template_directory_uri().'/css/bootstrap.css', array() );
    wp_enqueue_script( 'best-shop-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );


	wp_enqueue_style( 'best-shop-style', get_stylesheet_uri(), array(), best_shop_VERSION );
	wp_style_add_data( 'best-shop-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'best-shop-navigation', get_template_directory_uri() . '/inc/assets/js/navigation.js', array(), best_shop_VERSION, true );

	wp_enqueue_script( 'best-shop-model', get_template_directory_uri() . '/js/modal.js', array(), best_shop_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'best-shop-custom', get_template_directory_uri() . '/js/custom.js',array( 'jquery' ), best_shop_VERSION, true );
		
}
endif;
add_action( 'wp_enqueue_scripts', 'best_shop_scripts' );

if ( ! function_exists( 'best_shop_admin_scripts' ) ) :
/**
 * Enqueue admin css
*/
function best_shop_admin_scripts() {
	wp_enqueue_style( 'best-shop-admin-style', get_template_directory_uri() . '/inc/assets/css/admin.css', array(),	best_shop_VERSION );
}
endif;
add_action( 'admin_enqueue_scripts', 'best_shop_admin_scripts' );



if( ! function_exists( 'best_shop_google_fonts_url' ) ) :
/**
 * Register google font.
 */
function best_shop_google_fonts_url() {
    $fonts_url = '';

  		/*
		 * Translators: If there are characters in your language that are not
		 * supported by "Open Sans", sans-serif;, translate this to 'off'. Do not translate
		 * into your own language.
		 */
		$typography = _x( 'on', 'Open Sans font: on or off', 'best-shop' ); 
	
		if ( 'off' !== $typography ) {
			$font_families = array();
			
			$font_families[] = best_shop_get_setting('heading_font').':300,300i,400,400i,700,700i';
			$font_families[] = best_shop_get_setting('body_font').':300,300i,400,400i,500,500i,600,600i';
			
	 
			$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
			);
			
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
			
			
		} 

    return esc_url( $fonts_url );
}
endif;



if( ! function_exists( 'best_shop_body_classes' ) ) :
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
	function best_shop_body_classes( $classes ) {

		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		if(  is_archive() || is_search() ){
			$classes[] = 'layout-grid';
		}

		if( get_background_image() ) {
			$classes[] = 'custom-background-image';
		}
		
		// Adds a class of custom-background-color to sites with a custom background color.
		if( get_background_color() != 'ffffff' ) {
			$classes[] = 'custom-background-color';
		}

		$classes[] = best_shop_sidebar_layout();
        

		return $classes;
	}
endif;
add_filter( 'body_class', 'best_shop_body_classes' );

if( ! function_exists( 'best_shop_pingback_header' ) ) :
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function best_shop_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
endif;
add_action( 'wp_head', 'best_shop_pingback_header' );

if ( ! function_exists( 'best_shop_widgets_init' ) ) :
/**
 * Best Shop Widget Areas
 * 
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package Best_Shop
 */
function best_shop_widgets_init(){    
    $sidebars = array(
        'sidebar-1'   => array(
            'name'        => __( 'Sidebar', 'best-shop' ),
            'id'          => 'sidebar-1', 
            'description' => __( 'Default Sidebar', 'best-shop' ),
        ),
        'woo-sidebar'   => array(
            'name'        => __( 'WooCommerce Sidebar', 'best-shop' ),
            'id'          => 'woo-sidebar', 
            'description' => __( 'WooCommerce Sidebar', 'best-shop' ),
        ),        
        'header-widget'      => array(
            'name'        => __( 'Homepage Advertisement', 'best-shop' ),
            'id'          => 'header-widget',
            'description' => __( 'Place an "Image" widget for advertisement in the homepage. Recommended image size is 1440px by 230px.', 'best-shop' ),
        ),
        'advanced-footer-widget-1'=> array(
            'name'        => __( 'Footer One', 'best-shop' ),
            'id'          => 'advanced-footer-widget-1', 
            'description' => __( 'Add footer one widgets here.', 'best-shop' ),
        ),
        'advanced-footer-widget-2'=> array(
            'name'        => __( 'Footer Two', 'best-shop' ),
            'id'          => 'advanced-footer-widget-2', 
            'description' => __( 'Add footer two widgets here.', 'best-shop' ),
        ),
        'advanced-footer-widget-3'=> array(
            'name'        => __( 'Footer Three', 'best-shop' ),
            'id'          => 'advanced-footer-widget-3', 
            'description' => __( 'Add footer three widgets here.', 'best-shop' ),
        ),
        'advanced-footer-widget-4'=> array(
            'name'        => __( 'Footer Four', 'best-shop' ),
            'id'          => 'advanced-footer-widget-4', 
            'description' => __( 'Add footer four widgets here.', 'best-shop' ),
        )
    );
    
    foreach( $sidebars as $sidebar ){
        register_sidebar( array(
    		'name'          => esc_html( $sidebar['name'] ),
    		'id'            => esc_attr( $sidebar['id'] ),
    		'description'   => esc_html( $sidebar['description'] ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title" itemprop="name">',
    		'after_title'   => '</h2>',
    	) );
    }

}
endif;
add_action( 'widgets_init', 'best_shop_widgets_init' );

/**
 * Custom Header
 */

 if ( ! function_exists( 'best_shop_custom_header_setup' ) ) :
/**
 * Set up the WordPress core custom header feature.
 *
 * @uses best_shop_header_style()
 */
function best_shop_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'best_shop_custom_header_args',
			array(
				'default-image'      => get_template_directory_uri() . '/images/header-image.jpg',
				'default-text-color' => '#000000',
				'width'              => 1920,
				'height'             => 760,
				'flex-height'        => true,
				'video'         	 => true,
				'wp-head-callback'   => 'best_shop_header_style',
			)
		)
	);

	register_default_headers( array(
        'default-image' => array(
            'url'           => '%s/images/header-image.jpg',
            'thumbnail_url' => '%s/images/header-image.jpg',
            'description'   => __( 'Default Header Image', 'best-shop' ),
        ),
    ) );
	
}
endif;
add_action( 'after_setup_theme', 'best_shop_custom_header_setup' );

if ( ! function_exists( 'best_shop_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see best_shop_custom_header_setup().
	 */
	function best_shop_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
        <?php       
        
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
			// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;

/**
 * Custom fonts and colours
 */

function best_shop_custom_css() {
?>
	<style type="text/css" id="custom-theme-colors" >
        :root {
            --glt-primary-color: <?php echo esc_html(best_shop_get_setting('primary_color')); ?> ;
            --glt-secondary-color: <?php echo esc_html(best_shop_get_setting('secondary_color')); ?> ;
            --glt-primary-font: <?php echo esc_html(best_shop_get_setting('heading_font')).', Serif'; ?> ;
            --glt-secondary-font: <?php echo esc_html(best_shop_get_setting('body_font')).', Sans Serif'; ?> ;
            --logo-width: <?php echo absint(best_shop_get_setting('logo_width')); ?> ;
            --footer-color: <?php echo esc_html(best_shop_get_setting('footer_color')); ?> ;
            --footer-text-color: <?php echo esc_html(best_shop_get_setting('footer_text_color')); ?> ;
        }
        .site-branding img.custom-logo {
            max-width:<?php echo esc_html(best_shop_get_setting('logo_width')); ?>px ;    
        }
	</style>
<?php
}
add_action( 'wp_head', 'best_shop_custom_css' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Product slider widget
 */
require get_template_directory() . '/inc/widgets/product-slider.php';

/**
 * Product category widget
 */
require get_template_directory() . '/inc/widgets/product-category-grid.php';

/**
 * Product grid
 */
require get_template_directory() . '/inc/widgets/product-grid.php';

/**
 * Post slider widget
 */
require get_template_directory() . '/inc/widgets/post-slider.php';

/**
 * Featured Category
 */
require get_template_directory() . '/inc/widgets/cat-list.php';


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

if (class_exists('WP_Customize_Control')) {
    
    /**
     * Custom Controls
     */
    require get_template_directory() . '/inc/custom-controls/custom-control.php';

    /**
     * Customizer additions.
     */
    require get_template_directory() . '/inc/customizer/customizer.php';
   
}

/**
 *Partial refresh functions
 */
require get_template_directory() . '/inc/customizer/partial-refresh.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * TGM Plugin activation
*/
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';

/**
 * Add theme compatibility function for woocommerce if active
*/
if( best_shop_is_woocommerce_activated() ){
    require get_template_directory() . '/inc/woo-functions.php';    
}

/**
 * Metabox
 */
require get_template_directory() . '/inc/metabox.php';

add_filter( 'best_shop_header_video_settings', 'best_shop_header_video_settings');
function best_shop_header_video_settings( $settings ) {
  $settings['l10n'] = array(
    'pause'      => __( 'Pause video', 'best-shop' ),
    'play'       => __( 'Start video', 'best-shop'),
    'pauseSpeak' => __( 'Video paused', 'best-shop'),
    'playSpeak'  => __( 'Video playing.', 'best-shop'),
  );
  return $settings;
}

/*
 * Header Style
 */

$best_shop_header_layout = array(   
    'customizer-setting'=> array(
    	 'value'     => 'customizer-setting',
    	 'label'     => __( 'Use Customizer Header Layout', 'best-shop' ),
   	),
    'woocommerce-bar'     => array(
    	 'value'     => 'woocommerce-bar',
    	 'label'     => __( 'Show WooCommerce Options Bar', 'best-shop' ),
    ),
    'transparent-header' => array(
         'value'     => 'transparent-header',
    	 'label'     => __( 'Transparent Header', 'best-shop' ),
    ),
);

function best_shop_get_header_style(){
    global $post;
    
      if ($post){
          return get_post_meta( $post->ID, '_best_shop_header_layout', true );
      } else {
          return '';
      }
}


$best_shop_product_categories = array() ;

if(!class_exists('best_shop_Category_Item')) { 
class best_shop_Category_Item {
	public $image_url;
	public $link;
	public $name;
	public $count;
	public $id;
 }
}

function best_shop_set_all_product_categories () {
				$product_args = array(
						'taxonomy' => 'product_cat',
						'orderby' => 'date',
						'order' => 'ASC',
						'show_count' => 1,
						'pad_counts' => 0,
						'hierarchical' => 1,
						'title_li' => '',
						'hide_empty' => 1,
				);
				
				global $best_shop_product_categories;
				$best_shop_product_categories = array() ;

				$all_categories = get_categories($product_args);
				
				
				foreach ($all_categories as $cat) {

					$item = new best_shop_Category_Item();
					$item->name = ($cat->cat_name) ;
					$item->count = absint($cat->count);
					$item->id = ($cat->term_id);
					
					$thumbnail_id = get_term_meta($item->id, 'thumbnail_id', true);
										
					$item->image_url = wp_get_attachment_url($thumbnail_id);
					$item->link = esc_url(get_term_link($cat->slug, 'product_cat'));
					
					array_push($best_shop_product_categories, $item );				
				
				}
				
}


add_action( 'best_shop_loop_add_to_cart', 'woocommerce_template_loop_add_to_cart', 10 );

/*
 * https://developer.wordpress.org/reference/hooks/admin_notices/
 *
 * Displays theme info / quick help 
 */

global $pagenow; 
  

if($pagenow == 'index.php' || $pagenow == 'themes.php'){
	if ( isset( $_GET['hide_admin_notice'] ) ) {
		 update_option('best_shop_hide_admin_notice', 'dismiss-notice');
	} else {
		$best_shop_notice = get_option('best_shop_hide_admin_notice', '');
		if ($best_shop_notice != 'dismiss-notice' || $best_shop_notice == '') {	
		  add_action( 'admin_notices', 'best_shop_admin_notice_info' );
		}
	}
}

function best_shop_admin_notice_info() {
    $class = 'notice notice-info is-dismissible';
    $message = __( 'Customize page Header: Edit page-> Header style, More Options goto customizer -> Theme Options', 'best-shop' );
    $dismiss = __( 'Dismiss', 'best-shop');
    printf( '<div class="%1$s"> <p> 
	
	<a class="best-shop-btn-get-started button button-primary best-shop-button-padding" href="#" data-name="" data-slug="" >'.esc_html__("Install Demo and Complete Instalaltion... ","best-shop").'</a>	
	<a class="button button-primary best-shop-button-padding" target="_blank" href="'.esc_url( "https://www.gradientthemes.com/product/wordpress-shopping-cart-theme/" ).'" >'.esc_html( 'Theme Tutorial', 'best-shop').'</a>
	<span>%2$s</span>&nbsp;&nbsp; <em><a href="?hide_admin_notice" target="_self"  class="dismiss-notice">%3$s</a></em> </p></div>', esc_attr( $class ), esc_html( $message ), esc_html( $dismiss ) ); 
}


/* demo installter custom settings */
add_action('advanced_export_include_options','best_shop_include_my_options');
 function best_shop_include_my_options( $included_options ){
     $my_options = array(
         '_best_shop_header_layout',
     );
     return array_unique (array_merge( $included_options, $my_options));
 }
 
