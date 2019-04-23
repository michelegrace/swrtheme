<section class="internal-grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-left"><?php echo wp_title('',true); ?></h1>
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
            <div class="col-md-offset-1 col-md-5">
                <?php the_content(); ?>
            </div>
            <div class="col-md-5 col-md-offset-1 triangle-bg">
                <div class="white-box quote-box">
                    <h2>
                        <?php echo get_field('quote_callout'); ?>
                    </h2>
                    <p class="auth"><?php echo get_field('quote_author'); ?></p>
                </div>
            </div>

        </div>
            </div>
        </section>
        <section id="masthead" class="white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-1">
                        <h2>Masthead</h2>
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
                    </div>
                    <div class="col-md-5">
                        <div class="flex-row">
                            <div class="flex-item">
                                <?php echo get_field('colophon'); ?>
                            </div>
                            <div class="flex-item flex-end">
<?php echo get_field('nonprofit_col'); ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
<section class="about-blog">
    <div class="dark-grey-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="h1">
                        <?php echo get_field('about_blog_header');?>
                        <small><?php echo get_field('about_blog_header_sub');?></small>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-bg shadow">
        <div class="container">
            <div class="row">
                <?php $latest = new WP_Query( array( 'posts_per_page' => 4 ));
                if( $latest->have_posts() ) : ?>
                    <ul id="recent">
                        <?php while( $latest->have_posts() ) : $latest->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <span class="h1"><?php the_title(); ?></span>
                                    <span class="category"><?php
                                        foreach((get_the_category()) as $category) {
                                            echo $category->cat_name . ' ';
                                        }
                                        ?></span>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>