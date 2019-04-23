<section class="issues-hero" style="background-color:<?php the_field('background_color'); ?>70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1 class="text-left"><?php echo wp_title('',true); ?></h1>
            </div>
            <div class="col-md-4 col-md-offset-1 col-sm-7">
                <?php
                $newimage = get_field('new_issue');
                if( !empty($newimage) ): ?>
                    <a class="enlarge-hover" href="<?php echo get_field('read_link'); ?>">
                        <img class="aligncenter img-responsive" src="<?php echo $newimage['url']; ?>" alt="<?php echo $newimage['alt']; ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="internal-issue-handler position-handler">
                    <h2 class="small">Current issue</h2>
                    <p><?php echo get_field('what_quarter_is_this_issue'); ?></p>
                    <p>Volume <?php echo get_field('volume_number'); ?></p>
                    <p>Numbers <?php echo get_field('what_numbers'); ?></p>
                    <div class="link-wrapper">
                        <a href="<?php echo get_field('read_link'); ?>">Read</a> <span>/</span> <a href="<?php echo get_field('order_link'); ?>">Order Today</a>
                    </div>
                </div>
        </div>
    </div>
</section>