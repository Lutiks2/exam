<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Houses
 */

?>

<li>
    <div class="candidate-img">
        <?php the_post_thumbnail(); ?>
        <div class="candidate-hover"></div>
    </div>
    <div class="candidate-content">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_content(); ?></p>
    </div>

</li>