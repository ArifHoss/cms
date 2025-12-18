<?php
/**
 * Template Name: Undersida 2
 * 
 * Sidmall: Textspalt med sidomeny till vänster
 *
 * Layout: 3 kolumner sidomeny | 9 kolumner innehåll
 * Sidomenyn visar länkar till alla sidor med undersida-mallar.
 * 
 * @package CMS_Labb1
 * @since 1.0
 */

get_header();
?>

<main id="main-content">
	<section>
		<div class="container">
			<div class="row">
				<!-- Sidebar on the left (appears first in DOM, uses col-md-3) -->
				<aside id="secondary" class="col-xs-12 col-md-3">
					<ul class="side-menu">
						<?php
						// Get all pages with the same template or all subpages
						$pages = get_pages(array(
							'sort_column' => 'menu_order',
							'sort_order' => 'ASC',
						));

						foreach ($pages as $page) {
							$template = get_page_template_slug($page->ID);
							if (strpos($template, 'undersida') !== false || empty($template)) {
								$class = ($page->ID == get_the_ID()) ? ' class="current"' : '';
								echo '<li' . $class . '><a href="' . get_permalink($page->ID) . '">' . $page->post_title . '</a></li>';
							}
						}
						?>
					</ul>
				</aside>

				<!-- Content on the right (appears second in DOM, uses col-md-9) -->
				<div id="primary" class="col-xs-12 col-md-9">
					<?php
					while (have_posts()) :
						the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h1><?php the_title(); ?></h1>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
						<?php
					endwhile;
					?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
