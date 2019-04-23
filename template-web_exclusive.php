<?php
/**
 * Template Name: Web Exclusive Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'exclusive'); ?>
<?php endwhile; ?>
