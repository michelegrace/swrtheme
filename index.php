<?php get_template_part('templates/page', 'header'); ?>
<section id="main-blog" class="triangle-home-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if (!have_posts()) : ?>
                    <div class="alert alert-warning">
                        <?php _e('Sorry, no results were found.', 'sage'); ?>
                    </div>
                    <?php get_search_form(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
