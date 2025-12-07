<?php
/**
 * Front Page Template
 *
 * This template is used for the homepage when a static page is set as the front page.
 */

get_header();
?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php
					// Get hero image and text from page content or custom fields
					$hero_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
					if (!$hero_image) {
						$hero_image = get_template_directory_uri() . '/img/city.jpg';
					}
					?>
					<div class="hero">
						<img src="<?php echo esc_url($hero_image); ?>" alt="<?php bloginfo('name'); ?>" />
						<div class="text">
							<?php
							if (have_posts()) {
								while (have_posts()) {
									the_post();
									?>
									<h1><?php the_title(); ?></h1>
									<?php
									$content = get_the_content();
									if ($content) {
										$excerpt = wp_trim_words(strip_tags($content), 30);
										echo '<p>' . esc_html($excerpt) . '</p>';
									} else {
										?>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
										<?php
									}
									?>
									<?php
								}
							} else {
								// Default welcome message
								?>
								<h1>Hej och välkommen!</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
								<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
