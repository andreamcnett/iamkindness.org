<?php
/*
Template Name: Donate
 */

get_header(); ?>
<?php
$introimage = get_field('intro-image');
?>

<div class="about page-intro" style="background-image: url('<?php echo (isset($introimage['url'])) ? ($introimage['url']) : ("") ?>'); ">
	<div class="page-intro-text">
		<div class="copy">
			<h1><?php echo get_the_title(); ?></h1>
			<h6><?php the_field('page-intro'); ?></h6>
		</div>
	</div>
</div>
<div class="page-modules">
	<div class="left-text green">
		<div class="module-text">
			<h2><?php the_field('left-text-title'); ?></h2>
			<p><?php the_field('left-text'); ?></p>
		</div>
	</div>
	<div class="right-text teal">
		<div class="module-text">
			<h2><?php the_field('right-text-title'); ?></h2>
			<p><?php the_field('right-text'); ?></p>
		</div>
	</div>
</div>


<?php get_footer(); ?>
