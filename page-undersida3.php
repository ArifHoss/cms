<?php
/**
 * Template Name: Undersida 3
 * 
 * Sidmall: Textspalt över hela sidans bredd
 *
 * Layout: 12 kolumner innehåll (fullbredd)
 * Ingen sidomeny - lämplig för innehållsrika sidor.
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
