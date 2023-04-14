<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package labelle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="<?php echo get_template_directory_uri(); ?>/js/
	navigation.js"></script>
	<link
		href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&family=Roboto:wght@300;400;500;700&display=swap"
		rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'labelle'); ?>
		</a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<!-- <?php
				the_custom_logo();
				if (is_front_page() && is_home()):
					?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
				else:
					?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
				endif;
				$labelle_description = get_bloginfo('description', 'display');
				if ($labelle_description || is_customize_preview()):
					?>
					<p class="site-description">
						<?php echo $labelle_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</p>
				<?php endif; ?> -->
			</div><!-- .site-branding -->

			<!--<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="menu-toggle-icon"></span>
					<span class="menu-toggle-icon"></span>
					<span class="menu-toggle-icon"></span>
				</button>
				//<?php
				// wp_nav_menu(
				// 	array(
				// 		'theme_location' => 'menu-1',
				// 		'menu_id' => 'primary-menu',
				// 		'menu_class' => 'nav-menu',
				// 	)
				// );
				// ?>
			</nav>--><!-- #site-navigation -->
		</header><!-- #masthead -->