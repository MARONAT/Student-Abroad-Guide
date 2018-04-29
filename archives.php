<?php
/*
Template Name: أرشيف
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn">

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<h2>الأرشيف حسب الأشهر:</h2>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h2>الأرشيف حسب التصنيفات:</h2>
  <ul>
     <?php wp_list_categories(); ?>
  </ul>

</div>

<?php get_footer(); ?>
