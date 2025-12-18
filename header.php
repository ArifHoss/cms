<?php
/**
 * Header Template - Sidhuvud
 *
 * Denna mall innehåller:
 * - DOCTYPE och HTML-start
 * - Head-sektion med meta-taggar och wp_head()
 * - Skip-links för tillgänglighet
 * - Logo/webbplatsnamn
 * - Sökformulär (desktop och mobil)
 * - Mobil menyknapp (hamburger)
 * - Huvudnavigation (dynamisk meny)
 * 
 * @package CMS_Labb1
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip Links for Accessibility -->
<a class="skip-link screen-reader-text" href="#main-content">
	<?php _e('Hoppa till innehåll', 'cms-labb1'); ?>
</a>
<a class="skip-link screen-reader-text" href="#nav">
	<?php _e('Hoppa till navigation', 'cms-labb1'); ?>
</a>

<div id="wrap">

	<header id="header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-sm-6">
					<a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?> - <?php _e('Gå till startsidan', 'cms-labb1'); ?>">
						<?php
						if (has_custom_logo()) {
							the_custom_logo();
						} else {
							bloginfo('name');
						}
						?>
					</a>
				</div>
				<div class="col-sm-6 hidden-xs">
					<?php get_search_form(); ?>
				</div>
				<div class="col-xs-4 text-right visible-xs">
					<div class="mobile-menu-wrap">
						<button type="button" class="mobile-search-toggle" aria-label="<?php _e('Öppna sökfält', 'cms-labb1'); ?>" aria-expanded="false">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
						<button type="button" class="mobile-menu-toggle" aria-label="<?php _e('Öppna meny', 'cms-labb1'); ?>" aria-expanded="false" aria-controls="nav">
							<i class="fa fa-bars menu-icon" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="mobile-search">
		<?php get_search_form(); ?>
	</div>

	<nav id="nav" role="navigation" aria-label="<?php _e('Huvudnavigation', 'cms-labb1'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'menu_class'     => 'menu',
						'container'      => false,
						'fallback_cb'    => 'cms_labb1_fallback_menu',
					));
					?>
				</div>
			</div>
		</div>
	</nav>
