<?php
/*
Template Name: Home
*/

get_header( 'home' ); ?>
<?php
$introimage = get_field('intro-image');
$donateimage = get_field('donate-image');
?>

<div class="index-intro" style="background-image: url('<?php echo (isset($introimage['url'])) ? ($introimage['url']) : ("") ?>'); ">
	<div class="intro-content">
		<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/index-big-logo.png" alt-"I AM Kindness logo" /></a>
		<h1 class="intro-statement"><?php the_field('intro-statement'); ?></h1>
		<h4>Learn More <i class="fa fa-chevron-right"></i></h4>
		<ul class="index-menu">
			<li><a href="/about">About</a></li>
			<li><a href="/volunteer">Volunteer</a></li>
			<li><a href="/donate">Donate</a></li>
			<li><a href="/blog">Blog</a></li>
		</ul>
	</div>
</div>
<div class="index-main-content">
	<div class="volunteer-teaser">
		<div class="volunteer-text">
			<h2>Volunteer</h2>
			<p><?php the_field('volunteer-teaser'); ?></p>
			<form class="index-volunteer pure-form">
				<fieldset>
					<input type="email" placeholder="Email">
					<button type="submit" class="pure-button pure-button-primary">Sign in</button>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="donate-teaser">
		<div class="donate-text">
			<h2>Donate</h2>
			<p><?php the_field('donate-teaser'); ?></p>
		</div>
		<div class="donate-image">
			<img src="<?php echo (isset($donateimage['url'])) ? ($donateimage['url']) : ("") ?>" />
		</div>
		<div class="donate-buttons">
			<a class="more">Donate Items <i class="fa fa-chevron-right"></i></a> <a class="more">Donate Cash <i class="fa fa-chevron-right"></i></a>
		</div>
	</div>
	<div class="blog-teaser">
		<div class="blog-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/index-blog-teaser.jpg" alt="Kids making art" />
		</div>
		<div class="blog-text">
			<h2>From the Blog</h2>
			<h5 class="date">10.15.14</h5>
			<h3 class>Ridiculus Tortor Justo Ligula Vehicula</h3>
			<p>Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<a class="more">Read More <i class="fa fa-chevron-right"></i></a>
		</div>
	</div>
</div>	

<?php get_footer(); ?>
