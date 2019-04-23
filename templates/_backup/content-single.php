<section class="white-bg single-post-title-head">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <h5>BLOG</h5>
            </div>
        </div>
        <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
        <div class="story-title row  single-post-header">
            <div class="col-sm-11 col-md-offset-1">
                    <h1 class="entry-title text-left"><?php the_title(); ?></h1>
                    <?php get_template_part('templates/entry-meta'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-md-push-7">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                    <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    $image_id = get_post_thumbnail_id( $post->ID );
                    $img_meta       = wp_prepare_attachment_for_js($image_id);
                    $image_description    = $img_meta['description'] == '' ? '' : $img_meta['description'];
                    $image_alt      = $img_meta['alt'] == '' ? $image_description : $img_meta['alt'];
                    if($image_alt == '')
                        $image_alt = ($wp_query->post->post_title && $wp_query->post->post_title != '') ? $wp_query->post->post_title : '';
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" class="img-responsive aligncenter">

                <?php endif; ?>
            </div>
            <div class="col-md-6 story-content col-md-pull-4">
                <p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
                <?php the_content(); ?>
                <div class="row read-next white-box shadow">
                    <h6>Up Next</h6>
                    <?php previous_post_link('%link', '%title'); ?>
                    <?php the_category(', '); ?>
                    <img class="align-arrow" src="<?php bloginfo('template_directory'); ?>/dist/images/arrow_right.svg">

                </div>
                <div class="category-link">
                    <p>See more in <?php the_category(', '); ?></p>
            </div>
        </article>
        <?php endwhile; ?>
    </div>
</section>


