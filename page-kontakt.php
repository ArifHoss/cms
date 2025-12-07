<?php
/**
 * Template Name: Kontakt
 *
 * Contact page template with contact form
 */

get_header();
?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<?php
					while (have_posts()) :
						the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h1><?php the_title(); ?></h1>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>

							<?php
							// Display contact form if Contact Form 7 is installed
							if (function_exists('wpcf7_contact_form')) {
								// Try to get the first contact form
								$contact_forms = get_posts(array(
									'post_type' => 'wpcf7_contact_form',
									'posts_per_page' => 1,
								));

								if (!empty($contact_forms)) {
									echo do_shortcode('[contact-form-7 id="' . $contact_forms[0]->ID . '"]');
								} else {
									// Fallback: simple HTML form
									?>
									<form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
										<input type="hidden" name="action" value="cms_labb1_contact_form">
										<?php wp_nonce_field('cms_labb1_contact_form', 'cms_labb1_contact_nonce'); ?>
										<label for="contact-name"><?php _e('Namn', 'cms-labb1'); ?></label>
										<input type="text" id="contact-name" name="contact_name" required />

										<label for="contact-email"><?php _e('E-post', 'cms-labb1'); ?></label>
										<input type="email" id="contact-email" name="contact_email" required />

										<label for="contact-message"><?php _e('Meddelande', 'cms-labb1'); ?></label>
										<textarea id="contact-message" name="contact_message" required></textarea>

										<input type="submit" value="<?php _e('Skicka', 'cms-labb1'); ?>" />
									</form>
									<?php
								}
							} else {
								// Simple HTML form if no Contact Form 7
								?>
								<form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
									<input type="hidden" name="action" value="cms_labb1_contact_form">
									<?php wp_nonce_field('cms_labb1_contact_form', 'cms_labb1_contact_nonce'); ?>
									<label for="contact-name"><?php _e('Namn', 'cms-labb1'); ?></label>
									<input type="text" id="contact-name" name="contact_name" required />

									<label for="contact-email"><?php _e('E-post', 'cms-labb1'); ?></label>
									<input type="email" id="contact-email" name="contact_email" required />

									<label for="contact-message"><?php _e('Meddelande', 'cms-labb1'); ?></label>
									<textarea id="contact-message" name="contact_message" required></textarea>

									<input type="submit" value="<?php _e('Skicka', 'cms-labb1'); ?>" />
								</form>
								<?php
							}
							?>
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
