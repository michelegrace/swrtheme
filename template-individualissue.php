<?php
/**
 * Template Name: Individual Issue Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/individual_issue', 'header'); ?>
  <?php get_template_part('templates/content', 'individual_issue'); ?>
<?php endwhile; ?>
