<?php
/**
 * The front page template file
 *
 * @package exam
 */
?>

<?php get_header(); ?>
<section class="process container">
    <div class="heading">
        <h3><?php echo get_theme_mod('process_heading'); ?></h3>
    </div>
    <ul class="process-list ">
        <?php
        $args = [
            'post_type' => 'process',
            'order' => 'ASC',
            'posts_per_page' => 3,
        ];
        query_posts($args);
        while (have_posts()) : the_post();
            get_template_part('template-parts/process/content', 'process');
        endwhile;
        ?>
    </ul>
</section>
<section class="about clearfix container" style="background: <?php echo get_theme_mod('backgr_about_color'); ?>">
    <div class="clearfix container">
    <div class="about-content" >
        <div class="heading">
            <h3><?php echo get_theme_mod('about_heading'); ?></h3>
        </div>
        <div>
            <?php while (have_posts()):the_post(); ?>
                <div class="kontent">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
            <a class="reed-more" href="<?php the_permalink(); ?>">Reed more</a>
        </div>
    </div>
    <div class="about-img">
        <img src="<?php echo get_theme_mod('about_img'); ?>">
    </div>
    </div>
</section>
<section class="candidate-section container ">
    <div class="heading">
        <h3><?php echo get_theme_mod('candidate_heading'); ?></h3>
    </div>
    <ul class="candidate clearfix">
        <?php
        $args = [
            'post_type' => 'candidate',
            'order' => 'ASC',
            'posts_per_page' => 3,
        ];
        query_posts($args);
        while (have_posts()) : the_post();
            get_template_part('template-parts/candidate/content', 'candidate');
        endwhile;
        ?>
    </ul>
    <a class="reed-more" href="<?php the_permalink(); ?>">See more</a>
</section>
<section class="build" style="background: url('<?php echo get_theme_mod('set_build_background'); ?>') no-repeat center/cover">
    <div class="container build-wrap">
        <h3><?php echo get_theme_mod('build_heading'); ?></h3>
        <p><?php echo get_theme_mod('build_description'); ?></p>
        <div class="build-button">
            <a class="button"
               href="<?php echo get_theme_mod('url_build_button'); ?>">
                <?php echo get_theme_mod('text_build_button'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
