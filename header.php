<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrap">

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-sm-6">
					<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
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
						<i class="fa fa-search"></i>
						<i class="fa fa-bars menu-icon"></i>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="mobile-search">
		<?php get_search_form(); ?>
	</div>

	<nav id="nav">
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
