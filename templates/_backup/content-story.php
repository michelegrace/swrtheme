<section class="white-bg internal-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <?php
                echo do_shortcode( '[breadcrumb]' );
                ?>
            </div>
            <div class="col-md-3">
                <a class="back-issue" href="<?php $parentLink = get_permalink($post->post_parent); echo $parentLink; ?>"><img class="align-arrow" src="http://sandbox.michelesmolensky.com/swr/wp-content/themes/swrtheme/dist/images/arrow_right.svg"> Table of Contents</a>
            </div>
        </div>
        <div class="story-title row">
            <div class="col-sm-11 col-md-offset-1">
                <h1 class="text-left"><?php the_title(); ?></h1>
                <span class="author"><?php echo get_field('author'); ?></span>
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

            <?php if( have_rows('web_exclusive') ): ?>
                    <?php while( have_rows('web_exclusive') ): the_row();
                        // vars
                        $url = get_sub_field('link_to');
                        $title = get_sub_field('title_of_web_exclusive');
                        ?>
                        <a href="<?php echo $url; ?>" class="web_ex_white_box">
                            <span class="title">Web Exclusive</span>
                            <h2><?php echo $title; ?></h2>
                        </a>
                    <?php endwhile; ?>
            <?php endif; ?>

        </div>
            <div class="col-md-6 story-content col-md-pull-4">
                <?php the_content(); ?>
                <a class="row read-next white-box shadow" href="<?php echo get_field('link_to_story'); ?>">
                    <h6>Read Next</h6>
                    <h4><?php echo get_field('read_next'); ?></h4>
                    <span class="author"><?php echo get_field('author_of_next_story'); ?></span>
                    <img class="align-arrow" src="<?php bloginfo('template_directory'); ?>/dist/images/arrow_right.svg">
                </a>
                <div class="row indie-issue-order-cta">
                    <div class="col-md-5 col-sm-6">
                        <?php
                        $image = get_field('issue_image');
                        if( !empty($image) ): ?>
                            <img class="aligncenter img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>

                    </div>
                    <div class="col-md-7 col-sm-6">
                        <h2 class="h1"><?php echo get_field('call_out_text'); ?>
                            <span class="subtitle">
                        <?php echo get_field('cost_tagline'); ?>
                    </span></h2>
                        <a class="btn grey-btn btn-padding" href="<?php echo get_field('link_to_order'); ?>">Order Your Copy</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>


