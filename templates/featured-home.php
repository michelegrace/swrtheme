<?php if( have_rows('featured_items') ): ?>
<?php while( have_rows('featured_items') ): the_row(); ?>
<?php if( get_sub_field('what_sort_of_featured_item_would_you_like_to_add') == 'featurePost' ): ?>
    <div id="featured" class="col-sm-12">
        <?php if( have_rows('featured_post') ):
        while( have_rows('featured_post') ): the_row();
            $feattitle = get_sub_field('article_title');
            $subtitle = get_sub_field('subtitle');
            $byline = get_sub_field('byline');
            $url = get_sub_field('link_to_article');
            $img = get_sub_field('featured_image');
                ?>
                <a href="<?php echo $url; ?>" class="flex-row no-internal-padding">
                    <div class="col col-sm-8 featured-wrapper flex-row">
                        <span class="category">From the Magazine</span>
                        <h2 class="h1">
                            <?php echo $feattitle; ?>
                        </h2>
                        <span class="flex-item flex-bottom">
                        <span class="byline"><?php echo $subtitle; ?> <span class="by">By</span> <span class="author"><?php echo $byline; ?></span></span>
                    </span>
                        <?php if( $img): ?>
                            <div class="triangle-top" >
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col col-sm-4">
                        <?php if( $img): ?>
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        <?php endif; ?>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
            <?php endif; ?>
<?php endif; ?>
<?php if( get_sub_field('what_sort_of_featured_item_would_you_like_to_add') == 'webEx' ): ?>
            <div id="addFeatured" class="col-sm-4">
            <?php if( have_rows('featured_web_ex') ):
                while( have_rows('featured_web_ex') ): the_row();
                    $title = get_sub_field('article_title');
                    $url = get_sub_field('link_to_article');
                    $img = get_sub_field('featured_image');
                    ?>
                    <a href="<?php echo $url; ?>" class="flex-row flex-column">
                        <div class="featured-content flex-item flex-column">
                            <div class="featured-wrapper">
                                <span class="category">Web Exclusive</span>
                                <h2 class="h1">
                                    <?php echo $title; ?>
                                </h2>
                            </div>
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        </div>
                    </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php if( get_sub_field('what_sort_of_featured_item_would_you_like_to_add') == 'fromMag' ): ?>
            <div id="addFeatured" class="col-sm-4">
            <?php if( have_rows('featured_from_mag') ):
                while( have_rows('featured_from_mag') ): the_row();
                    $title = get_sub_field('article_title');
                    $url = get_sub_field('link_to_article');
                    $img = get_sub_field('featured_image');
                    $subtitle = get_sub_field('subtitle');
                    $byline = get_sub_field('byline');
                    ?>
                    <a href="<?php echo $url; ?>" class="flex-row flex-column">
                        <div class="featured-content flex-item flex-column">
                            <div class="featured-wrapper flex-row flex-column">
                                <span class="category">From the Magazine</span>
                                <h2 class="h1">
                                    <?php echo $title; ?>
                                </h2>
                                <span class="flex-item flex-bottom">
                                    <span class="byline"><?php echo $subtitle; ?> <span class="by">By</span> <span class="author"><?php echo $byline; ?></span></span>
                                </span>
                                <div class="triangle-top" >
                                </div>
                            </div>
                            <?php if( $img): ?>
                            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                            <?php endif; ?>
                        </div>
                    </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
