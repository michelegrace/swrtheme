<section class="internal-grey-bg">
    <div class="container">
        <?php if (is_page('subscribe')): ?>
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1">
                <h1><?php echo get_field('internal_header'); ?></h1>
                <div class="row add-bottom-padding">
                    <div class="col-md-6 col-md-offset-3"><?php the_content(); ?></div>
                </div>
                <h3><?php echo get_field('table_title'); ?></h3>
                <?php if( have_rows('tables') ): ?>

                        <?php while( have_rows('tables') ): the_row();
                            // vars
                            $subscript = get_sub_field('subscription_length');
                            $cost = get_sub_field('cost_of_subscription');
                            $order = get_sub_field('order_url');
                            ?>

                        <div class="row subscription-row align-items-center">
                            <div class="col-xs-4 col-sub-1"><span><?php echo $subscript; ?></span></div>
                            <div class="col-xs-4 col-sub-2"><span><b><?php echo $cost; ?></b></span></div>
                            <div class="col-xs-4 col-sub-3"><a href="<?php echo $order; ?>" class="btn white-btn shadow">Order</a></div>

                        </div>
                        <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
                <?php else: { ?>
            <div class="row">
                <h1><?php echo wp_title('',true); ?></h1>
                <?php if( have_rows('prize_award') ): ?>

                    <div class="prize-awards-row row">

                        <?php while( have_rows('prize_award') ): the_row();

                            // vars
                            $title = get_sub_field('prizeaward_title');
                            $info = get_sub_field('info_about_award');
                            $deadline = get_sub_field('deadline');
                            $url = get_sub_field('submit_button_url');
                            $popup = get_sub_field('add_pop-up_for_requirements');
                            $requirement = get_sub_field('requirement_information');
                            ?>

                            <div class="col-md-6 adding-right-padding">
                                <h3><?php echo $title; ?></h3>
                                <p class="prize-info"><?php echo $info; ?></p>
                                <p class="deadline"><?php echo $deadline; ?></p>
                                <?php if( get_sub_field('add_pop-up_for_requirements') == 'yes' ): ?>
                                <div class="flex-row row">
                                    <div class="col-md-4 col-sm-3">
                                        <a class="btn white-btn shadow" href="<?php echo $url; ?>" target="_blank">Submit</a>
                                    </div>
                                    <div class="col-md-4 col-sm-6 flex-item">
                                        <a data-toggle="modal" class="view-more underline" href="#myModal" target="_blank">Requirements</a>
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                        <?php if( get_sub_field('add_pop-up_for_requirements') == 'yes' ): ?>
                            <div id="myModal" class="modal" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <h3 class="modal-title"><?php echo $title; ?></h3>
                                                        <p><?php echo $requirement; ?></p>
                                                        <a class="btn white-btn shadow" href="<?php echo $url; ?>" target="_blank">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>
<?php } endif; ?>

            </div>
    </div>
</section>


