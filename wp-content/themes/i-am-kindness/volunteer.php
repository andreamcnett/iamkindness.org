<?php
/*
Template Name: Volunteer
 */

get_header(); ?>
<?php
$introimage = get_field('intro-image');
?>

<div class="page-intro" style="background-image: url('<?php echo (isset($introimage['url'])) ? ($introimage['url']) : ("") ?>'); ">
	<div class="page-intro-text">
		<div class="copy">
			<h1><?php echo get_the_title(); ?></h1>
			<h6><?php the_field('page-intro'); ?></h6>
		</div>
	</div>
</div>
<div class="page-content">
	<div class="alert">
		<div class="alert-text">
			<h3>Upcoming Event</h3>
			<p><?php the_field('alert-text'); ?>Upcoming event Volunteer during I AM MPLS!, our annual fundraising event. We’re looking for a number of people to help us set up, take tickets and run coat-check. The best part? Get into the event for free! Email sarah@iamkindess.com to sign up!</p>
		</div>
	</div>
	<div class="page-copy">
        <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
	</div>
</div>




<?php get_footer(); ?>
