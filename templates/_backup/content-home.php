<section class="grey-bg large-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 add-spacer">
                <h2 class="small">Table of Contents</h2>
            </div>
            <div class="col-md-6">

                <?php if( have_rows('table_of_contents') ): ?>
                    <h3>Essays</h3>
                    <ul class="table_of_content essays">
                        <?php while( have_rows('table_of_contents') ): the_row();
                            $title = get_sub_field('essay_title');
                            $author = get_sub_field('essay_author');
                            $link = get_sub_field('link_to_article');
                            ?>

                            <li>
                                <?php if( $link ): ?>
                                    <a href="<?php echo $link; ?>">
                                        <h4><?php echo $title; ?></h4>
                                        <span class="author">
                                            <?php echo $author; ?>
                                        </span>
                                    </a>
                                <?php else : ?>
                                    <a class="disabled" disabled >
                                        <h4><?php echo $title; ?></h4>
                                        <span class="author">
                                            <?php echo $author; ?>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <?php if( have_rows('table_of_contents_fiction') ): ?>
                    <h3>Fiction</h3>
                    <ul class="table_of_content fiction">
                        <?php while( have_rows('table_of_contents_fiction') ): the_row();
                            $title = get_sub_field('fiction_title');
                            $author = get_sub_field('fiction_author');
                            $link = get_sub_field('link_to_article');
                            ?>

                            <li>
                                <?php if( $link ): ?>
                                    <a href="<?php echo $link; ?>">
                                        <h4><?php echo $title; ?></h4>
                                        <span class="author">
                                            <?php echo $author; ?>
                                        </span>
                                    </a>
                                <?php else : ?>
                                    <a class="disabled" disabled >
                                        <h4><?php echo $title; ?></h4>
                                        <span class="author">
                                            <?php echo $author; ?>
                                        </span>
                                    </a>
                                <?php endif; ?>

                            </li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <?php if( have_rows('table_of_contents_poetry') ): ?>
                    <h3>Poetry</h3>
                    <ul class="table_of_content fiction">
                        <?php while( have_rows('table_of_contents_poetry') ): the_row();
                            $title = get_sub_field('poetry_title');
                            $author = get_sub_field('poetry_author');
                            $link = get_sub_field('link_to_article');
                            ?>

                            <li>
                                <?php if( $link ): ?>
                                    <a href="<?php echo $link; ?>">
                                        <h4><?php echo $title; ?></h4>
                                        <span class="author">
                                            <?php echo $author; ?>
                                        </span>
                                    </a>
                                <?php else : ?>
                                    <a class="disabled" disabled >
                                        <h4><?php echo $title; ?></h4>
                                        <span class="author">
                                            <?php echo $author; ?>
                                        </span>
                                    </a>
                                <?php endif; ?>

                            </li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>
                <a class="btn white-btn btn-padding" href="<?php echo get_field('order_url'); ?>">Order Your Copy</a>
            </div>
        </div>
    </div>
</section>