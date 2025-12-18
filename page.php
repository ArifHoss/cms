<?php
/**
 * Default Page Template
 *
 * This template displays static pages.
 */

get_header();
?>

<main id="main-content">
	<section>
		<div class="container">
			<div class="row">
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

				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
