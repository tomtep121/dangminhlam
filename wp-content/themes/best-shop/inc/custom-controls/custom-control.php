<?php
/**
 * Best Shop Custom Control
 * 
 * @package Best_Shop
*/

if( ! function_exists( 'best_shop_register_custom_controls' ) ) :
    /**
     * Register Custom Controls
    */
    function best_shop_register_custom_controls( $wp_customize ){    
        // Load our custom control.
        require_once get_template_directory() . '/inc/custom-controls/note/class-note-control.php';
        require_once get_template_directory() . '/inc/custom-controls/radioimg/class-radio-image-control.php';
        require_once get_template_directory() . '/inc/custom-controls/repeater/class-repeater-setting.php';
        require_once get_template_directory() . '/inc/custom-controls/repeater/class-control-repeater.php';
        require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';    
                
        // Register the control type.
        $wp_customize->register_control_type( 'best_shop_Radio_Image_Control' );
        $wp_customize->register_control_type( 'best_shop_Toggle_Control' );
    }
    endif;
add_action( 'customize_register', 'best_shop_register_custom_controls' );