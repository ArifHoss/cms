<form id="searchform" class="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _e('Sök efter:', 'cms-labb1'); ?></label>
		<input type="text" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Sök efter:', 'cms-labb1'); ?>" />
		<input type="submit" value="<?php _e('Sök', 'cms-labb1'); ?>" />
	</div>
</form>
