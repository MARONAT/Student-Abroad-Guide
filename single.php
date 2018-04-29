<?php get_header(); ?>

	<div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>
<div class="clear"></div>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
<small>الكاتب : <?php the_author() ?> بتاريخ : <?php the_time('j F Y') ?> | <?php edit_post_link('تحرير', '', ''); ?></small>
			<div class="entry">
				<?php the_content('<p class="serif">للمزيد  &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>صفحات:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>وسوم: ', ', ', '</p>'); ?>			

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>عفواً، لا توجد محتويات لعرضها.</p>

<?php endif; ?>

	</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>