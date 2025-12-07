<?php
/**
 * Main Template File
 *
 * This is the fallback template file used when no more specific template is found.
 */

get_header();
?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<?php if (have_posts()) : ?>
					<div id="primary" class="col-xs-12 col-md-9">
						<?php
						if (is_home() && !is_front_page()) {
							?>
							<h1><?php single_post_title(); ?></h1>
							<?php
						}

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
					</div>

					<?php get_sidebar(); ?>

				<?php else : ?>
					<div class="col-xs-12">
						<h1><?php _e('Inget innehåll hittades', 'cms-labb1'); ?></h1>
						<p><?php _e('Tyvärr kunde inget innehåll hittas.', 'cms-labb1'); ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
