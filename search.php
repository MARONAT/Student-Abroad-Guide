<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">نتائج البحث</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; المواضيع السابق') ?></div>
			<div class="alignright"><?php previous_posts_link('المواضيع اللاحقة &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('j F Y') ?></small>

				<p class="postmetadata"><?php the_tags('وسوم: ', ', ', '<br />'); ?> ضمن تصنيف <?php the_category(', ') ?> | <?php edit_post_link('تحرير', '', ' | '); ?>  <?php comments_popup_link('لا تعليقات &#187;', 'تعليق واحد &#187;', 'التعليقات: % &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; المواضيع السابق') ?></div>
			<div class="alignright"><?php previous_posts_link('المواضيع اللاحقة &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">لا يوجد محتوى يناسب بحثك, حاول عمل بحث آخر.</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>