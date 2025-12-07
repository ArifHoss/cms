<?php
/**
 * Template Name: Undersida 3
 *
 * Page template: Full-width text column
 */

get_header();
?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12">
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
