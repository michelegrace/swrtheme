<section class="home-hero">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 col-sm-6 col-xs-12 header-issue-image">
                <?php

                $image = get_field('issue_image');

                if( !empty($image) ): ?>
                    <a href="<?php echo get_field('link_to_read_current_issue'); ?>">
                        <img class="enlarge-hover aligncenter img-responsive current-issue-home" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-md-6 flex-inner">
                <div class="position-handler">
                    <h1><a href="<?php echo get_field('link_to_read_current_issue'); ?>"><?php echo get_field('hero_caption_text'); ?></a></h1>
                    <img src="<?php bloginfo('template_directory'); ?>/dist/images/horseman@2x-100_filled.png" class="img-responsive aligncenter home-header-icon" />
                </div>
            </div>
        </div>
</section>