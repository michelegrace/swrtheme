<section class="white-bg internal-padding">
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
            </div>
        </div>
        <div class="row indie-issue-order-cta">
            <div class="col-md-4 col-md-offset-2 col-sm-6">
                <?php the_content();?>
            </div>
            <div class="col-md-5 col-sm-6">
                <h2 class="h1"><?php echo get_field('call_out_text'); ?>
                    <span class="subtitle">
                        <?php echo get_field('cost_tagline'); ?>
                    </span></h2>
                <a class="btn grey-btn btn-padding" href="<?php echo get_field('link_to_order'); ?>">Order Your Copy</a>
            </div>
        </div>
    </div>
</section>