<section class="white-bg internal-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <a class="back-issue" href="<?php $parentLink = get_permalink($post->post_parent); echo $parentLink; ?>"> Table of Contents</a>
            </div>
        </div>
        <div class="story-title row">
            <div class="col-sm-11">
                <h1 class="text-left"><?php the_title(); ?></h1>
                <span class="author"><?php echo get_field('author'); ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 story-content">
                <?php the_content(); ?>
                <?php if( get_field('link_to_story')) : ?>
                <a class="row read-next white-box shadow" href="<?php echo get_field('link_to_story'); ?>">
                    <h6>Read Next</h6>
                    <h4><?php echo get_field('read_next'); ?></h4>
                    <span class="author"><?php echo get_field('author_of_next_story'); ?></span>
                    <img class="align-arrow" src="<?php bloginfo('template_directory'); ?>/dist/images/arrow_right.svg">
                </a>
                <?php endif; ?>
                <div class="row indie-issue-order-cta">
                    <div class="col-md-5 col-sm-6">
                        <?php
                        $image = get_field('issue_image', $post->post_parent);
                        if( !empty($image) ): ?>
                            <img class="aligncenter img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>

                    </div>
                    <div class="col-md-7 col-sm-6"> 
                        <h2 class="h1"><?php echo get_field('link_message', $post->post_parent); ?>
                            <span class="subtitle">
                        ONLY $6
                    </span></h2>
                        <a class="btn grey-btn btn-padding" href="<?php echo get_field('link_to_order', $post->post_parent); ?>">Order Your Copy</a>
                    </div>
                </div>
            </div>
			        <div id="story-add" class="col-md-4">
            <div class="col-md-offset-2"><?php echo do_shortcode('[Sassy_Social_Share]'); ?></div>
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
                <?php
                $args = array(
                    'post_parent' => $post->ID,
                    'post_type' => 'any',
                    'numberposts' => 6,
                    'orderby' => 'menu_order'
                );

                $child_query = new WP_Query( $args );
                ?>

                <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="web_ex_white_box">
                        <span class="title">Web Exclusive</span>
                        <h2><?php the_title(); ?></h2>
                    </a>
                <?php endwhile; ?>

                <?php
                wp_reset_postdata(); ?>

        </div>
            </div>
        </div>
    </div>
</section>


