<?php
function gradient_starter_templates_get_current_theme_author(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Author');
}
function gradient_starter_templates_get_current_theme_slug(){
    $current_theme = wp_get_theme();
    return $current_theme->stylesheet;
}
function gradient_starter_templates_get_theme_screenshot(){
    $current_theme = wp_get_theme();
    return $current_theme->get_screenshot();
}
function gradient_starter_templates_get_theme_name(){
    $current_theme = wp_get_theme();
    return $current_theme->get('Name');
}

function gradient_starter_templates_get_templates_lists( $theme_slug ){
    
    $demo_templates_lists = array();
	
    switch ($theme_slug):

    case ( $theme_slug == "best-shop" ):

        $theme_slug = 'common';
    
        $demo_templates_lists = array(
            
            
           'shop-demo' =>array(
                'title' => __( 'Shop Demo', 'wp-starter-templates' ),/*Title*/
                'is_premium' => false,/*Premium*/
                'type' => 'elementor', /*Optional eg elementor or other page builders*/
                'author' => __( 'Gradient Themes', 'wp-starter-templates' ),/*Author Name*/
                'keywords' => array( 'woocommerce', 'business', 'elementor' ),/*Search keyword*/
                'template_url' => array(
                    'content' => gradient_starter_templates_TEMPLATE_URL.$theme_slug.'/best-shop/content.json',
                    'options' => gradient_starter_templates_TEMPLATE_URL.$theme_slug.'/best-shop/options.json',
                    'widgets' => gradient_starter_templates_TEMPLATE_URL.$theme_slug.'/best-shop/widgets.json'
                ),
                'screenshot_url' => gradient_starter_templates_TEMPLATE_URL.$theme_slug.'/best-shop/screenshot.png',/*Screenshot of block*/
                'demo_url' => 'https://wordpress.gradientthemes.com/brand-shop/home/',/*Demo Url*/
                /**/
                'plugins' => array(
					
						array(
							'name'      => 'Elementor Page Builder',
							'slug'      => 'elementor',
						),
						
						array(
							'name'      => 'WooCommerce',
							'slug'      => 'woocommerce',
						),
						
						array(
							'name'      => 'Product Quick View',
							'slug'      => 'yith-woocommerce-quick-view',
						),		
												
						array(
							'name'      => 'WP Forms',
							'slug'      => 'wpforms-lite',
							'main_file' => 'wpforms.php',
						),
                    
                        array(
                            'name'      => esc_html__('Wishlist', 'best-shop' ),
                            'slug'      => 'yith-woocommerce-wishlist',

                        ),
                    
                )
            ),
            


            
           'brand-shop' =>array(
                'title' => __( 'Brand Shop', 'wp-starter-templates' ),/*Title*/
                'is_premium' => false,/*Premium*/
                'type' => 'elementor', /*Optional eg elementor or other page builders*/
                'author' => __( 'Gradient Themes', 'wp-starter-templates' ),/*Author Name*/
                'keywords' => array( 'woocommerce', 'business', 'elementor' ),/*Search keyword*/
                'template_url' => array(
                    'content' => gradient_starter_templates_TEMPLATE_URL.$theme_slug.'/brand-shop/content.json',
                    'options' => gradient_starter_templates_TEMPLATE_URL.$theme_slug.'/brand-shop/options.json',
                    'widgets' => gradient_starter_templates_TEMPLATE_URL.$theme_slug.'/brand-shop/widgets.json'
                ),
                'screenshot_url' => gradient_starter_templates_TEMPLATE_URL.$theme_slug.'/brand-shop/screenshot.png',/*Screenshot of block*/
                'demo_url' => 'https://wordpress.gradientthemes.com/brand-shop/home-2/',/*Demo Url*/
                /**/
                'plugins' => array(
					
						array(
							'name'      => 'Elementor Page Builder',
							'slug'      => 'elementor',
						),
						
						array(
							'name'      => 'WooCommerce',
							'slug'      => 'woocommerce',
						),
						
						array(
							'name'      => 'Product Quick View',
							'slug'      => 'yith-woocommerce-quick-view',
						),		
												
						array(
							'name'      => 'WP Forms',
							'slug'      => 'wpforms-lite',
							'main_file' => 'wpforms.php',
						),
                    
                        array(
                            'name'      => esc_html__('Wishlist', 'best-shop' ),
                            'slug'      => 'yith-woocommerce-wishlist',

                        ),
                    
                )
            ),

            


        //	
        );	

    break;
    

    
		

    endswitch;
	
			

    return $demo_templates_lists;

}
