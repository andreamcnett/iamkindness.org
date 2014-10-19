<?php
/*
Template Name: Stuff
 */

get_header(); ?>
<?php
$introimage = get_field('intro-image');
?>

<div class="page-intro-small" style="background-image: url('<?php echo (isset($introimage['url'])) ? ($introimage['url']) : ("") ?>'); ">
	<div class="page-intro-text">
		<div class="copy">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
	</div>
</div>
<div class="page-content">
	<div class="page-copy">
		<h2><?php the_field('page-sub-title'); ?></h2>
		<?php the_field('page-copy'); ?>
	</div> 
</div>




<?php get_footer(); ?>
