<?php get_header(); ?>

	<div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			<div class="entry">
				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
                <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>

				<?php the_content('<p class="serif">أكمل قراءة بقية الموضوع &raquo;</p>'); ?>

				<div class="navigation">
					<div class="alignleft"><?php previous_image_link() ?></div>
					<div class="alignright"><?php next_image_link() ?></div>
				</div>
				<br class="clear" />

				<p class="postmetadata alt">
					<small>
						هذه التدوينة أضيفت في تاريخ <?php the_time('j F Y') ?> في الساعة <?php the_time() ?>
						ضمن تصنيف <?php the_category(', ') ?>.
						<?php the_taxonomies(); ?>
						يمكنك متابعة أي ردود على التدوينة من خلال <?php post_comments_feed_link('RSS 2.0'); ?> رابط الخلاصات.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							يمكنك <a href="#respond">ترك تعليق</a>, أو <a href="<?php trackback_url(); ?>" rel="trackback">تعقيب</a> من خلال موقعك الشخصي.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							التعليقات مغلقة , و لكن يمكنك <a href="<?php trackback_url(); ?> " rel="trackback">التعقيب</a> من خلال موقعك الشخصي.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							يمكنك الانتقال الى نهاية الصفحة و اضافة تعليق. التنبيهات حالياً غير متاحة.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							التعليقات و التنبيهات حالياً غير متاحة.

						<?php } edit_post_link('تحرير','',''); ?>

					</small>
				</p>

			</div>

		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>عفواً، لا توجد محتويات لعرضها.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>