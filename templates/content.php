<article <?php post_class(); ?>>
    <div class="blog-item">
        <div class="content-wrapper">
            <span class="category"><?php
                foreach((get_the_category()) as $category) {
                    echo $category->cat_name . ' ';
                }
                ?></span>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
    </div>
</article>

