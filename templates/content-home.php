<section class="grey-bg large-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 add-spacer">
                <?php get_template_part('templates/featured', 'home'); ?>
            </div>
        </div>
    </div>
</section>
<section class="subscription-cta">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar('subscribe-sb'); ?>
        </div>
    </div>
</section>
<?php if( get_field('make_blog_posts_visible') == 'yes' ): ?>
    <section class="triangle-home-bg home-padding">
        <div class="container">
            <div class="row">
                <?php $latest = new WP_Query( array( 'posts_per_page' => 4 ));
                if( $latest->have_posts() ) : ?>
                    <ul id="recent">
                        <?php while( $latest->have_posts() ) : $latest->the_post(); ?>
                            <li>
                                <a class="blog-item" href="<?php the_permalink(); ?>">
                                    <div class="content-wrapper">
                                        <span class="category"><?php
                                            foreach((get_the_category()) as $category) {
                                                echo $category->cat_name . ' ';
                                            }
                                            ?></span>
                                        <span class="h1"><?php the_title(); ?></span>
                                    </div>
                        <?php $thumb = get_field('thumbnail_image'); ?>
                                    <?php if ( $thumb ) : ?>
                                        <div class="styling-wrapper">
                                            <img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt']; ?>"/>
                                            <?php elseif ( has_post_thumbnail() ) : ?>
                                                <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
                                            <?php else: ?>
                                                <div class="featured-triangle"></div>
                                            <?php endif ?>
                                        </div> <!--end styling-wrapper-->
                                </a> <!--end blog-item-->
                            </li> <!--end li -->
                        <?php endwhile; ?>
                    </ul>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>