<article <?php post_class(); ?>>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <span class="category"><?php
        foreach((get_the_category()) as $category) {
            echo $category->cat_name . ' ';
        }
        ?></span>
</article>
