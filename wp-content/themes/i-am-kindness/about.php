<?php
/*
Template Name: About
 */

get_header(); ?>
<?php
$introimage = get_field('intro-image');
$sarahimage = get_field('sarah-image');
?>

<div class="about page-intro" style="background-image: url('<?php echo (isset($introimage['url'])) ? ($introimage['url']) : ("") ?>'); ">
	<div class="page-intro-text">
		<div class="copy">
			<h1><?php echo get_the_title(); ?></h1>
			<h6><?php the_field('page-intro'); ?></h6>
		</div>
	</div>
</div>
<div class="about page-modules">
	<div class="left-video">
		<iframe width="498" height="280" src="//www.youtube.com/embed/<?php the_field('youtube-video')?>" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="right-text">
		<h2><?php the_field('video-title')?></h2>
		<p><?php the_field('video-text')?></p>
	</div>
	<div class="left-text teal donors">
		<h2><?php the_field('about-donors-title')?></h2>
		<p><?php the_field('about-donors-text')?></p>
	</div>
	<div class="right-text purple volunteers">
		<h2><?php the_field('about-volunteers-title')?></h2>
		<p><?php the_field('about-volunteers-text')?></p>
	</div>
	<div class="left-image">
		<img class="sarah-image" src="<?php echo (isset($sarahimage['url'])) ? ($sarahimage['url']) : ("") ?>" />
	</div>
	<div class="right-text">
		<h2><?php the_field('sarah-title')?></h2>
		<p><?php the_field('sarah-text')?></p>
	</div>
	
<?php get_footer(); ?>
