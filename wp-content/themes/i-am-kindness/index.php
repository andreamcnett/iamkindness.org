<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package i-am-kindness
 */

get_header( 'home' ); ?>

<div class="index-intro">
	<div class="intro-content">
		<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/index-big-logo.png" alt-"I AM Kindness logo" /></a>
		<h1 class="intro-statement">Busy makers and doers coming together to inspire confidence in others and themselves through random acts of kindness.</h1>
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
			<p>I AM Kindness is always looking for volunteers preform random acts of kindess around the Twin Cities. Spend one afternoon giving make-overs to the elderly or an evening distributing flowers to strangers on Nicolet. Events are held approximately once a month. The best part? There’s no commitment! Attend one or attend all!</p>
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
			<p>I AM KINDNESS is currently partnering with businesses to support our random acts of kindness. [insert types of items needed].</p>
			<p>Short on time but not cash? Make a tax-deductable donation to I AM Kindness!</p>
		</div>
		<div class="donate-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/index-donate-teaser.png" alt="Paint" />
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
