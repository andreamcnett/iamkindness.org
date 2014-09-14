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
		<img src="<?php echo get_template_directory_uri(); ?>/images/index-big-logo.png" alt-"I AM Kindness logo" />
		<h1 class="intro-statement">Busy makers and doers coming together to inspire confidence in others and themselves through random acts of kindness.</h1>
		<h4>Learn More <i class="fa fa-chevron-right"></i></h4>
		<ul class="index-menu">
			<li><a href="#">About</a></li>
			<li><a href="#">Volunteer</a></li>
			<li><a href="#">Donate</a></li>
			<li><a href="#">Blog</a></li>
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
</div>	

<?php get_footer(); ?>
