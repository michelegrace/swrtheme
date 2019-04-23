<?php
/**
 * Template Name: Magazine Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/issues', 'header'); ?>
  <?php get_template_part('templates/content', 'issues'); ?>
<?php endwhile; ?>
