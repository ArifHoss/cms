	<footer id="footer">
		<div class="container">
			<div class="row top">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<h4>Kort om oss</h4>
					<?php
					// Display widget area or default text
					if (is_active_sidebar('footer-widgets')) {
						dynamic_sidebar('footer-widgets');
					} else {
						?>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
						<p>Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.</p>
						<?php
					}
					?>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<h4>Kontaktuppgifter</h4>
					<p>
						The Company<br />
						<?php
						// You can add custom contact info via theme options or hardcode
						$address = get_option('cms_labb1_address', 'Gatgatan 1<br />123 45 Någonstans');
						echo $address;
						?>
					</p>
					<p>
						<?php
						$phone = get_option('cms_labb1_phone', 'Tel: 0123456789');
						$email = get_option('cms_labb1_email', 'info@thecompany.com');
						echo $phone . '<br />';
						echo 'E-post: <a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>';
						?>
					</p>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<h4>Social media</h4>
					<ul class="social">
						<?php
						// Social media links - can be customized via theme options
						$social_links = array(
							'facebook' => get_option('cms_labb1_facebook', '#'),
							'twitter' => get_option('cms_labb1_twitter', '#'),
							'instagram' => get_option('cms_labb1_instagram', '#'),
							'linkedin' => get_option('cms_labb1_linkedin', '#'),
						);

						if ($social_links['facebook']) {
							echo '<li><i class="fa fa-facebook"></i> <a href="' . esc_url($social_links['facebook']) . '">Facebook</a></li>';
						}
						if ($social_links['twitter']) {
							echo '<li><i class="fa fa-twitter"></i> <a href="' . esc_url($social_links['twitter']) . '">Twitter</a></li>';
						}
						if ($social_links['instagram']) {
							echo '<li><i class="fa fa-instagram"></i> <a href="' . esc_url($social_links['instagram']) . '">Instagram</a></li>';
						}
						if ($social_links['linkedin']) {
							echo '<li><i class="fa fa-linkedin"></i> <a href="' . esc_url($social_links['linkedin']) . '">LinkedIn</a></li>';
						}
						?>
					</ul>
				</div>
			</div>
			<div class="row bottom">
				<div class="col-xs-12">
					<p>Copyright &copy; <?php echo get_bloginfo('name'); ?>, <?php echo date('Y'); ?></p>
				</div>
			</div>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
