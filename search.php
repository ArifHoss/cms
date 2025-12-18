<?php
/**
 * Search Results Template - Sökresultat
 *
 * Denna mall visar sökresultat efter en sökning.
 * 
 * Inkluderar:
 * - Sökordet i rubriken
 * - Nytt sökformulär
 * - Matchande inlägg/sidor
 * - Paginering vid många resultat
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
				<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
					<h1>
						<?php
						printf(
							__('Sökresultat för: %s', 'cms-labb1'),
							'<span>' . get_search_query() . '</span>'
						);
						?>
					</h1>

					<div class="searchform-wrap">
						<?php get_search_form(); ?>
					</div>

					<?php if (have_posts()) : ?>
						<?php
						while (have_posts()) :
							the_post();
							?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php if (has_post_thumbnail()) : ?>
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
									</a>
								<?php endif; ?>

								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>

								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <?php the_category(', '); ?>
									</li>
								</ul>

								<?php the_excerpt(); ?>
							</article>
							<?php
						endwhile;

						// Pagination
						the_posts_pagination(array(
							'prev_text' => __('Föregående', 'cms-labb1'),
							'next_text' => __('Nästa', 'cms-labb1'),
						));
						?>
					<?php else : ?>
						<p><?php _e('Inga resultat hittades. Försök igen med andra sökord.', 'cms-labb1'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
