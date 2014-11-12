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
		<img src="<?php echo (isset($sarahimage['url'])) ? ($sarahimage['url']) : ("") ?>" />
	</div>
	<div class="right-text">
		<h2><?php the_field('sarah-title')?></h2>
		<p><?php the_field('sarah-text')?></p>
	</div>
	<!-- <div class="right-text white">
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
</div> -->


<?php get_footer(); ?>
