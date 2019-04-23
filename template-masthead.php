<?php
/**
 * Template Name: Masthead Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/nobanner', 'header'); ?>
  <?php get_template_part('templates/content', 'masthead'); ?>
<?php endwhile; ?>
