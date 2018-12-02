<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exam
 */

?>

<footer class="container">
    <div class="top-footer">
        <div class="footer-logo">
            <img src="<?php echo get_theme_mod('footer_img'); ?>">
        </div>
        <nav class="footer-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_id' => 'footer',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'menu_class' => 'footer-list clearfix',
            ));
            ?>
        </nav>
        <div class="newsletter">
            <span><?php echo get_theme_mod('footer_newsletter'); ?></span>
        </div>
    </div>
    <div class="bottom-footer clearfix">
        <div class="copy">
            <span><?php echo get_theme_mod('footer_copy'); ?></span>
        </div>
        <div class="author-block">
            <span><?php echo get_theme_mod('footer_design'); ?></span>
            <span><?php echo get_theme_mod('footer_develop'); ?></span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
