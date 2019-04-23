<section class="internal-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-left"><?php echo get_the_title(); ?></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10">
                        <?php echo get_field('about_intro'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <?php if( get_field('masthead')): ?>
                <section id="masthead">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <?php if( have_rows('masthead') ): ?>
                                    <?php while( have_rows('masthead') ): the_row();
                                        // vars
                                        $position = get_sub_field('new_position_title');
                                        ?>
                                        <h3><?php echo $position; ?></h3>
                                        <?php if( have_rows('staff_under_position') ): ?>
                                            <ul class="members">
                                                <?php while( have_rows('staff_under_position') ): the_row();
                                                    // vars
                                                    $staff_members = get_sub_field('staff_members');
                                                    $affil = get_sub_field('affiliations');
                                                    ?>
                                                    <li><p><?php echo $staff_members; ?>
                                                            <?php if ($affil) : ?>
                                                                <span><?php echo $affil; ?> </span>
                                                            <?php endif; ?>
                                                        </p></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div> <!--end col-md-6 -->
                            <?php endif;?>
                            <?php if( get_field('quote_callout')): ?>
                            <div class="col-md-4 col-md-offset-1">
                                
                                <div class="flex-row">
                                    <div class="flex-item">
                                        <?php echo get_field('colophon'); ?>
                                    </div>
                                    <div class="flex-item flex-end">
                                        <?php echo get_field('nonprofit_col'); ?>
                                    </div>
                                </div> <!--end flex-row-->
                            </div> <!--end col-md--5 -->
                        </div> <!--end row-->
                            <?php endif;?> <!--end quote-->
                    </div>
                </section>
        </div>
    </div>
</section>