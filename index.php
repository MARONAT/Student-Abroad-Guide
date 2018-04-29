<?php get_header(); ?>
	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small>الكاتب : <?php the_author() ?> بتاريخ : <?php the_time('j F Y') ?> | <?php edit_post_link('تحرير', '', ' | '); ?>  <?php comments_popup_link('لا تعليقات &#187;', 'تعليق واحد &#187;', 'التعليقات: % &#187;'); ?></small>

				<div class="entry">
					<?php the_content('للمزيد &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('وسوم: ', ', ', '<br />'); ?> ضمن  <?php the_category(', ') ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; المواضيع السابق') ?></div>
			<div class="alignright"><?php previous_posts_link('المواضيع اللاحقة &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">غير موجود</h2>
		<p class="center">عفواً، لا توجد محتويات لعرضها.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>