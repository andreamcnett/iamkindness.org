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
		<form class="pure-form pure-form-stacked">
		    <fieldset>
		        <div class="pure-control-group">
		            <label for="name">Your Name</label>
		            <input id="name" type="text" placeholder="Firstname Lastname">
		        </div>
		        <div class="pure-control-group">
		            <label for="email">Email</label>
		            <input id="email" type="email" placeholder="youremail@email.com">
		        </div>
		        <label for="hair" class="pure-checkbox">
			        <input id="hair" type="checkbox" value="">
			        Hair-styling
			    </label>
			    <label for="styling" class="pure-checkbox">
			        <input id="styling" type="checkbox" value="">
			        Fashion Styling
			    </label>
			    <label for="makeup" class="pure-checkbox">
			        <input id="makeup" type="checkbox" value="">
			        Make-up
			    </label>
			    <label for="kind" class="pure-checkbox">
			        <input id="kind" type="checkbox" value="">
			       Being Kind
			    </label>
			    <label for="other" class="pure-checkbox">
			        <input id="other" type="checkbox" value="">
			       Other
			    </label>
		        <div class="pure-control-group">
		            <label for="something">Tell us anything about yourself</label>
		            <input id="something" type="something" placeholder="180 characters or less, please">
		        </div>
		        <button type="submit" class="pure-button pure-button-primary">Submit</button>
		    </fieldset>
		</form>
	</div>
</div>




<?php get_footer(); ?>
