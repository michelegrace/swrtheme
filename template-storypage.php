<?php
/**
 * Template Name: Story Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'story'); ?>
<?php endwhile; ?>
