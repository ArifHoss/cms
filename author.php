<?php
/**
 * Author Template - Författarsida
 *
 * Denna mall visar alla inlägg av en specifik författare.
 * 
 * Inkluderar:
 * - Författarnamn som rubrik
 * - Inläggslista med metadata
 * - Paginering
 * - Sidofält med widgets
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
				<div id="primary" class="col-xs-12 col-md-9">
					<h1><?php echo get_the_author(); ?></h1>

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
						<p><?php _e('Inga inlägg hittades av denna författare.', 'cms-labb1'); ?></p>
					<?php endif; ?>
				</div>

				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
