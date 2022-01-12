<?php
/**
 * Layout Settings
 *
 * @package Best_Shop
 */
if ( ! function_exists( 'best_shop_customize_register_layout' ) ) :

function best_shop_customize_register_layout( $wp_customize ) {
    
    /** Layout Settings */
    $wp_customize->add_section( 
        'layout_settings',
         array(
            'priority'    => 45,
            'capability'  => 'edit_theme_options',
            'title'       => esc_html__( 'Layout Settings', 'best-shop' ),
            'description' => esc_html__( 'Change different page layout from here.', 'best-shop' ),
            'panel'    => 'theme_options',
        ) 
    );
    
    
    
    
   /** Woo Sidebar layout */
    $wp_customize->add_setting( 
        'woo_sidebar_layout', 
        array(
            'default'           => best_shop_default_settings('woo_sidebar_layout'),
            'sanitize_callback' => 'best_shop_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
		new best_shop_Radio_Image_Control(
			$wp_customize,
			'woo_sidebar_layout',
			array(
				'section'	  => 'layout_settings',
				'label'		  => esc_html__( 'WooCommerce Sidebar Layout', 'best-shop' ),
				'description' => esc_html__( 'This is the WooCommerce sidebar layout for pages. You can override the WooCommerce sidebar layout for individual page in respective page.', 'best-shop' ),
				'choices'	  => array(
					'no-sidebar'    => get_template_directory_uri() . '/images/sidebar/general-full.jpg',
					'left-sidebar'  => get_template_directory_uri() . '/images/sidebar/general-left.jpg',
                    'right-sidebar' => get_template_directory_uri() . '/images/sidebar/general-right.jpg',
				)
			)
		)
	);
    
    


    /** Page Sidebar layout */
    $wp_customize->add_setting( 
        'page_sidebar_layout', 
        array(
            'default'           => best_shop_default_settings('page_sidebar_layout'),
            'sanitize_callback' => 'best_shop_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
		new best_shop_Radio_Image_Control(
			$wp_customize,
			'page_sidebar_layout',
			array(
				'section'	  => 'layout_settings',
				'label'		  => esc_html__( 'Page Sidebar Layout', 'best-shop' ),
				'description' => esc_html__( 'This is the general sidebar layout for pages. You can override the sidebar layout for individual page in respective page.', 'best-shop' ),
				'choices'	  => array(
					'no-sidebar'    => get_template_directory_uri() . '/images/sidebar/general-full.jpg',
					'left-sidebar'  => get_template_directory_uri() . '/images/sidebar/general-left.jpg',
                    'right-sidebar' => get_template_directory_uri() . '/images/sidebar/general-right.jpg',
				)
			)
		)
	);
    
    /** Post Sidebar layout */
    $wp_customize->add_setting( 
        'post_sidebar_layout', 
        array(
            'default'           => best_shop_default_settings('post_sidebar_layout'),
            'sanitize_callback' => 'best_shop_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
		new best_shop_Radio_Image_Control(
			$wp_customize,
			'post_sidebar_layout',
			array(
				'section'	  => 'layout_settings',
				'label'		  => esc_html__( 'Post Sidebar Layout', 'best-shop' ),
				'description' => esc_html__( 'This is the general sidebar layout for posts & custom post. You can override the sidebar layout for individual post in respective post.', 'best-shop' ),
				'choices'	  => array(
					'no-sidebar'    => get_template_directory_uri() . '/images/sidebar/general-full.jpg',
					'left-sidebar'  => get_template_directory_uri() . '/images/sidebar/general-left.jpg',
                    'right-sidebar' => get_template_directory_uri() . '/images/sidebar/general-right.jpg',
				)
			)
		)
	);
    
    /** Post Sidebar layout */
    $wp_customize->add_setting( 
        'layout_style', 
        array(
            'default'           => best_shop_default_settings('layout_style'),
            'sanitize_callback' => 'best_shop_sanitize_radio'
        ) 
    );
    
    $wp_customize->add_control(
		new best_shop_Radio_Image_Control(
			$wp_customize,
			'layout_style',
			array(
				'section'	  => 'layout_settings',
				'label'		  => esc_html__( 'Default / Archive Sidebar Layout', 'best-shop' ),
				'description' => esc_html__( 'This is the general sidebar layout for whole site.', 'best-shop' ),
				'choices'	  => array(
					'no-sidebar'    => get_template_directory_uri() . '/images/sidebar/general-full.jpg',
                    'left-sidebar'  => get_template_directory_uri() . '/images/sidebar/general-left.jpg',
                    'right-sidebar' => get_template_directory_uri() . '/images/sidebar/general-right.jpg',
				)
			)
		)
	);
    

    
}
endif;
add_action( 'customize_register', 'best_shop_customize_register_layout' );