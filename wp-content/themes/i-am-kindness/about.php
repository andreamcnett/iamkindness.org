<?php
/*
Template Name: About
 */

get_header(); ?>

<div class="about page-intro">
	<div class="page-intro-text">
		<div class="copy">
			<h1>About Us</h1>
			<h6>We’re makers. We’re doers. We’re coming together to inspire confidence in others and ourselves through random acts of kindess. We’re I AM Kindess.</h6>
		</div>
	</div>
</div>
<div class="page-modules">
	<div class="left-text green">
		<div class="module-text">
			<h2>Random Acts of Kindness</h2>
			<p>A random act of kindess is a selfless act preformed by someone who wants to make someone else happy. Random acts of kindess make us smile, inspire confidence and encourage us to pass happiness along.</p>
		</div>
	</div>
	<div class="right-text teal">
		<div class="module-text">
			<h2>Our Events</h2>
			<p>Our events are held about once a month. The focus is always kindness and making others happy. You might find us giving makeovers to nursing home residents one month or handing out flowers to strangers another month. Events are low-stress and non-commital. Come to one or come to the them all!</p>
		</div>
	</div>
	<div class="left-image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/about-volunteer.jpg" alt="Volunteer" />
	</div>
	<div class="right-text white">
		<div class="module-text">
			<h2>Our Volunteers</h2>
			<p>Our volunteers come from all walks of life but have one thing in common: they like to make people happy. We’re a low-commitment volunteer obligation, but if you really like us, we encourage you to host your own event!</p>
			<form class="index-volunteer pure-form">
				<fieldset>
					<input type="email" placeholder="Email">
					<button type="submit" class="pure-button pure-button-primary">Sign in</button>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="full-background-image donors">
		<div class="right-text background">
			<div class="module-text">
				<h2>Our Donors</h2>
				<p>Partnering with I AM Kindess is tax deductiable, a great way to show your community support and may even help drive business! We work one-on-one with small and medium sized businesses to work your generous donation into an event.</p>
				<a class="more">Get Started <i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
	<div class="left-text white">
		<div class="module-text">
			<h2>A Message from Sarah</h2>
			<p>Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
			<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
		</div>
	</div>
	<div class="right-image">
		<img src="<?php echo get_template_directory_uri(); ?>/images/about-sarah.jpg" alt="Sarah Edwards" />
	</div>
</div>


<?php get_footer(); ?>
