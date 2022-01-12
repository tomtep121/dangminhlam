<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Best_Shop
 */

?>
	<footer id="colophon" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
        <?php best_shop_footer_top(); ?>
        <div class="footer-bottom">
            <div class="container">
                <?php
                     best_shop_footer_menu(); 
                ?>
            </div>
            <div class="container footer-info">
                <?php 
                    best_shop_footer_site_info();
                   
                   best_shop_social_links(true);
                ?> 
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
