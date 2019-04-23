<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	    $image_id_mobile = MultiPostThumbnails::get_post_thumbnail_id( 'page', 'feature-image-xs', $post->ID );
	    $image_id_retina = MultiPostThumbnails::get_post_thumbnail_id( 'page', 'feature-image-retina', $post->ID );

	    if($image_id_mobile) {
	      $image_mobile = wp_get_attachment_image_src( $image_id_mobile, 'single-post-thumbnail' );
      }

	    if($image_id_retina) {
				$image_retina = wp_get_attachment_image_src( $image_id_retina, 'single-post-thumbnail' );
			}

			$image_id = get_post_thumbnail_id( $post->ID );
      $img_meta       = wp_prepare_attachment_for_js($image_id);
      $image_description    = $img_meta['description'] == '' ? '' : $img_meta['description'];
      $image_alt      = $img_meta['alt'] == '' ? $image_description : $img_meta['alt'];

      if($image_alt == '')
        $image_alt = ($wp_query->post->post_title && $wp_query->post->post_title != '') ? $wp_query->post->post_title : '';
    ?>
            <div class="page-header">
              <img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" class="img-responsive <?php echo ($image_id_retina) ? 'hidden-xl' : '' ?> <?php echo ($image_id_mobile) ? ' hidden-xs' : '' ?>">
							<?php if($image_id_mobile) : ?>
                <?php
                  $imgmobile_meta       = wp_prepare_attachment_for_js($image_id_mobile);
                  $image_mobile_description    = $imgmobile_meta['description'] == '' ? '' : $imgmobile_meta['description'];
                  $image_mobile_alt      = $imgmobile_meta['alt'] == '' ? $image_mobile_description : $imgmobile_meta['alt'];

                  if($image_mobile_alt == '')
					          $image_mobile_alt = ($wp_query->post->post_title && $wp_query->post->post_title != '') ? $wp_query->post->post_title : '';
                ?>
                <img src="<?php echo $image_mobile[0]; ?>" alt="<?php echo $image_mobile_alt; ?>" class="img-responsive visible-xs">
							<?php endif; ?>
              <?php if($image_id_retina) : ?>
              <?php
                $imgretina_meta       = wp_prepare_attachment_for_js($image_id_retina);
                $image_retina_description    = $imgretina_meta['description'] == '' ? '' : $imgretina_meta['description'];
                $image_retina_alt      = $imgretina_meta['alt'] == '' ? $image_retina_description : $imgretina_meta['alt'];

                if($image_retina_alt == '')
					        $image_retina_alt = ($wp_query->post->post_title && $wp_query->post->post_title != '') ? $wp_query->post->post_title : '';
              ?>
                <img src="<?php echo $image_retina[0]; ?>" alt="<?php echo $image_retina_alt; ?>" class="img-responsive visible-xl">
              <?php endif; ?>
                <?php if(is_page('contact-us')) :?>
              <div class="header-content">
                <?php echo get_field('intro'); ?>
              </div>
                <?php endif; ?>
            </div>
<?php endif; ?>
