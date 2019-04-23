<?php if ( ! is_page(array(142, 37, 33))) : ?>
<section class="subscription-cta">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar('subscribe-sb'); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(is_home() || is_front_page() ): ?>
<section class="triangle-bg" style="background-color:<?php the_field('background_color'); ?>70">
    <div class="container">
        <div class="row">
                <?php $latest = new WP_Query( array( 'posts_per_page' => 4 ));
                if( $latest->have_posts() ) : ?>
                    <ul id="recent">
                        <div class="blog-wrap"><h3><a class="underline" href="/blog">Blog</a></h3></div>
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
</section>
<?php endif; ?>
<footer class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img class="aligncenter img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/horseman.jpg" alt="small drawing of a man on a horse">
                <?php dynamic_sidebar('footer-sb'); ?>
            </div>
        </div>
    </div>
</footer>
