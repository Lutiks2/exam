<?php
/**
 * The template for displaying all pages
 *
 * @package exam
 */
get_header('lite'); ?>
<div class="blog-bacgr" style="background:<?php echo get_theme_mod('blog_backgr_color'); ?>">
<div class="container">
    <ul class="blog-page">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = [
//            'order' => 'ASC',
            'posts_per_page' => 2,
            'paged' => $paged,
        ];
        query_posts($args);
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/blog/content', 'blog-page');

        endwhile;
        echo paginate_links();
        ?>
    </ul>
</div>
</div>
<?php
get_footer();
