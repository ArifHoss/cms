<?php
/**
 * 404 Error Template - Felsida
 *
 * Denna mall visas när en sida inte hittas (HTTP 404).
 * 
 * Innehåller:
 * - Felmeddelande på svenska
 * - Länk tillbaka till startsidan
 * - Sökformulär
 * - Lista med populära sidor
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
				<div class="col-xs-12">
					<article>
						<h1><?php _e('404 - Sidan hittades inte', 'cms-labb1'); ?></h1>
						<p><?php _e('Tyvärr kunde sidan du söker inte hittas. Den kan ha flyttats eller tagits bort.', 'cms-labb1'); ?></p>
						<p>
							<a href="<?php echo esc_url(home_url('/')); ?>" class="button">
								<?php _e('Tillbaka till startsidan', 'cms-labb1'); ?>
							</a>
						</p>

						<h2><?php _e('Sök på webbplatsen', 'cms-labb1'); ?></h2>
						<?php get_search_form(); ?>

						<h2><?php _e('Populära sidor', 'cms-labb1'); ?></h2>
						<ul>
							<?php
							wp_list_pages(array(
								'title_li' => '',
								'number' => 5,
								'sort_column' => 'post_date',
								'sort_order' => 'DESC',
							));
							?>
						</ul>
					</article>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
