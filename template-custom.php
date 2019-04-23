<?php
/**
 * Template Name: No Banner Image Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/nobanner', 'header'); ?>
  <?php get_template_part('templates/content', 'nobannerpage'); ?>
<?php endwhile; ?>
