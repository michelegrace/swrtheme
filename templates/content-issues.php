<section class="white-bg">
    <div class="container">
        <div class="row">
            <?php if( have_rows('previous_issues') ): ?>
                    <?php while( have_rows('previous_issues') ): the_row();
                        // vars
                        $image = get_sub_field('issue_image');
                        $content = get_sub_field('issue_quarter');
                        $contentVolume = get_sub_field('volume_number');
                        $contentNum = get_sub_field('numbers');
                        $link = get_sub_field('read_link');

                        ?>

                        <div class="col-md-6 col-sm-6">
                            <a class="prev-issue" href="<?php echo $link; ?>">
                                <img class="aligncenter img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                <div class="prev-issues-wrapper text-center">
                                    <p><?php echo $content; ?></p>
                                    <p>Volume <?php echo $contentVolume; ?></p>
                                    <p>Numbers <?php echo $contentNum; ?></p>
                                    <div class="link-wrapper text-center">
                                        <a href="<?php echo $link; ?>" >Read</a> <span>/</span> <a href="<?php echo get_field('order_link'); ?>">Order Today</a>
                                    </div>

                                </div>
                            </a>

                        </div>

                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>