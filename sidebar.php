	<div id="sidebar">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>أنت حالياً تتصفح أرشيف التصنيف: <?php single_cat_title(''); ?></p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>أنت حالياً تتصفح <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> أرشيف المدونة ليوم <?php the_time('j F Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>أنت حالياً تتصفح <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> أرشيف المدونة لشهر <?php the_time('F Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>أنت حالياً تتصفح <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> أرشيف المدونة لعام <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>أنت بحثت في <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> أرشيف المدونة عن <strong>'<?php the_search_query(); ?>'</strong>. إذا لم تجد شيئاً في نتائج البحث يمكنك تجربة هذه الروابط.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>أنت حالياً تتصفح <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> أرشيف المدونة</p>

			<?php } ?>

			</li> <?php }?>

			<li><h2>الأرشيف</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h2>التصنيفات</h2>'); ?>

			<?php /* If this is the frontpage  if ( is_home() || is_page() ) { */?>
				<?php wp_list_bookmarks(); ?>

				<li><h2>منوعات</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
			
				</ul>
				</li>
			<?php //} ?>

			<?php endif; ?>
		</ul>
	</div>