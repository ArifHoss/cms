<?php
/**
 * Single Post Template - Enskilt blogginlägg
 *
 * Denna mall visar ett enskilt blogginlägg med:
 * - Utvald bild (om sådan finns)
 * - Rubrik
 * - Metadata: datum, författare, kategorier
 * - Fullständigt innehåll
 * - Navigation till föregående/nästa inlägg
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
					<?php
					while (have_posts()) :
						the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
							<?php endif; ?>

							<h1 class="title"><?php the_title(); ?></h1>

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

							<div class="entry-content">
								<?php the_content(); ?>
							</div>

							<?php
							// Post navigation
							the_post_navigation(array(
								'prev_text' => '<span class="nav-subtitle">' . __('Föregående:', 'cms-labb1') . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . __('Nästa:', 'cms-labb1') . '</span> <span class="nav-title">%title</span>',
							));
							?>
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
