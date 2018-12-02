<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Houses
 */

?>

<li class="clearfix">
    <div class="blog-img">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="blog-heading-post">
        <h3 class="heading-post">
            <a href="<?php the_permalink(); ?>" class="title-home-post">
                <?php the_title(); ?>
            </a>
        </h3>
        <span class="author-post">By <?php the_author(); ?></span>
        <span class="my-date">
            <?php the_modified_date('j F, Y'); ?>
        </span>
        <div class="excerpt"><?php the_excerpt(); ?></div>
        <a href="<?php the_permalink(); ?>" class="reed-more">
            See more
        </a>
    </div>

</li>