<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package i-am-kindness
 */

/*
Template Name: Archive
*/

get_header(); ?>

	<?php if ( have_posts() ) : ?>
<div id="masonry-loop">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'masonry' ); ?>
    <?php endwhile; ?>
</div><!--/#masonry-loop-->

<?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
