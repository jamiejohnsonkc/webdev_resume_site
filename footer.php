<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">


<div class="footer-content__container">
	<a href="tel:+1 913-207-6966">call</a>
	<a href="mailto:jamie@jamie-johnson.me">email</a>
	<a href="/wp-content/uploads/2019/10/Jamie-Johnson-Frontend-Development.pdf">resume.pdf</a>

</div>
			

				<footer class="site-footer" id="colophon">

					<!-- .site-info -->	<div class="site-info">&copy;2019 jamie johnson</div>

				</footer><!-- #colophon -->

		

		



</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

</body>

</html>

