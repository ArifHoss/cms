<?php
/**
 * Template Name: Undersida 4
 *
 * Page template: Text column on left, featured image on right
 */

get_header();
?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-6">
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
				<div class="col-xs-12 col-sm-4 col-md-6">
					<?php
					if (has_post_thumbnail()) {
						the_post_thumbnail('large', array('class' => 'img-responsive'));
					} else {
						// Default image if no featured image
						echo '<img src="' . get_template_directory_uri() . '/img/photo.jpg" alt="' . get_the_title() . '" class="img-responsive" />';
					}
					?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
