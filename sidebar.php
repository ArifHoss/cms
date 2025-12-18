<?php
/**
 * Sidebar Template
 * 
 * Displays the sidebar widget area with search, pages, archive, and categories.
 */
?>

<aside id="secondary" class="col-xs-12 col-md-3" role="complementary" aria-label="<?php _e('Sidofält', 'cms-labb1'); ?>">
	<div id="sidebar">
		<?php
		if (is_active_sidebar('sidebar-1')) {
			dynamic_sidebar('sidebar-1');
		} else {
			// Default sidebar content
			?>
			<ul>
				<li>
					<?php get_search_form(); ?>
				</li>
			</ul>
			<ul role="navigation">
				<li class="pagenav">
					<h2><?php _e('Sidor', 'cms-labb1'); ?></h2>
					<ul>
						<?php
						wp_list_pages(array(
							'title_li' => '',
						));
						?>
					</ul>
				</li>
				<li>
					<h2><?php _e('Arkiv', 'cms-labb1'); ?></h2>
					<ul>
						<?php
						wp_get_archives(array(
							'type' => 'monthly',
						));
						?>
					</ul>
				</li>
				<li class="categories">
					<h2><?php _e('Kategorier', 'cms-labb1'); ?></h2>
					<ul>
						<?php
						wp_list_categories(array(
							'title_li' => '',
						));
						?>
					</ul>
				</li>
			</ul>
			<?php
		}
		?>
	</div>
</aside>
