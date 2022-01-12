<?php
/**
 * Social Settings
 *
 * @package Best_Shop
 */
if( ! function_exists( 'best_shop_customize_register_header' ) ) :

function best_shop_customize_register_header( $wp_customize ) {
    
    

    /*--------------------------
     * SOCIAL LINKS SECTION
     --------------------------*/
    
    $wp_customize->add_section(
        'social_settings',
        array(
            'panel'     => 'theme_options',
            'title'         => esc_html__( 'Header Settings', 'best-shop' ),
            'priority'  => 11,
        )
    );
    
    /*----------------
     * HEADER STYLE
     -----------------*/ 
    
    $wp_customize->add_setting( 'header_layout', array(
          'capability' => 'edit_theme_options',
          'default' => best_shop_default_settings('header_layout'),
          'sanitize_callback' => 'best_shop_sanitize_radio',
    ) );
    
    
    $wp_customize->add_control( 'header_layout', array(
          'type' => 'radio',
          'section' => 'social_settings', // Add a default or your own section
          'label' => __( 'Header Style' ,'best-shop' ),
          'description' => __( 'Select Header Layout' , 'best-shop' ),
          'choices' => array(
              'default' => __( 'Default Header' , 'best-shop'),
              'woocommerce-bar' => __( 'WooCommerce Bar' , 'best-shop'),
              'transparent-header' => __( 'Transparent Header' , 'best-shop'),          
          ),
        
    ) );
    


    /** Enable Search */
    $wp_customize->add_setting( 
        'enable_search', 
        array(
            'default'           => best_shop_default_settings('enable_search'),
            'sanitize_callback' => 'best_shop_sanitize_checkbox'
        ) 
    );
    
    $wp_customize->add_control(
        new best_shop_Toggle_Control( 
            $wp_customize,
            'enable_search',
            array(
                'section'     => 'social_settings',
                'label'	      => esc_html__( 'Enable Search', 'best-shop' ),
                'description' => esc_html__( 'Enable to show Search icon at header.', 'best-shop' ),
            )
        )
    );
    

    
}
endif;
add_action( 'customize_register', 'best_shop_customize_register_header' );
