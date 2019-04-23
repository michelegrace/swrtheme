<section class="white-bg internal-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
            </div>
        </div>
        <div class="story-title row">
            <div class="col-sm-11">
                <h1 class="text-left"><?php the_title(); ?></h1>
                <div class="exclusive-meta">
                    <span class="author">WEB EXCLUSIVE</span> <span class="post-date"><?php the_date(); ?></span>
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-6 story-content">
                <?php the_content(); ?>
            </div>
			<div id="story-add" class="col-md-4">
            <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            $image_id = get_post_thumbnail_id( $post->ID );
            $img_meta       = wp_prepare_attachment_for_js($image_id);
            $image_description    = $img_meta['description'] == '' ? '' : $img_meta['description'];
            $image_alt      = $img_meta['alt'] == '' ? $image_description : $img_meta['alt'];
            if($image_alt == '')
                $image_alt = ($wp_query->post->post_title && $wp_query->post->post_title != '') ? $wp_query->post->post_title : '';
            ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" class="img-responsive aligncenter">

            <?php endif; ?>
            <?php
            $args = array(
                'exclude' => $post->ID,
                'post_parent'    => $post->post_parent, // Get this pages id and find the children
                'depth' => 1,
                'post_type' => 'any',
                'numberposts' => 6,
                'orderby' => 'menu_order'
            );

            $sibling_query = new WP_Query( $args );
            ?>

            <?php while ( $sibling_query->have_posts() ) : $sibling_query->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="web_ex_white_box">
                    <span class="title">Web Exclusive</span>
                    <h2><?php the_title(); ?></h2>
                </a>
            <?php endwhile; ?>

            <?php
            wp_reset_postdata(); ?>

            </div> <!--end story add -->
        </div>
    </div>
</section>
<script>
        (function($) {
            $(function(){
                $("a.web_ex_white_box").each(function(){
                    if ($(this).attr("href") === window.location.href){
                        $(this).addClass("selected").attr("disabled","disabled");
                    }
                });
            });
        })( jQuery );
</script>


