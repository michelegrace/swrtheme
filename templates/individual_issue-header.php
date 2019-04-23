<?php if (has_post_thumbnail( $post->ID ) ): ?>
<section class="issue-banner">
<?php
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$image_id = get_post_thumbnail_id( $post->ID );
$img_meta       = wp_prepare_attachment_for_js($image_id);
$image_description    = $img_meta['description'] == '' ? '' : $img_meta['description'];
$image_alt      = $img_meta['alt'] == '' ? $image_description : $img_meta['alt'];
if($image_alt == '')
    $image_alt = ($wp_query->post->post_title && $wp_query->post->post_title != '') ? $wp_query->post->post_title : '';
?>
    <img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>" class="img-responsive <?php echo ($image_id_retina) ? 'hidden-xl' : '' ?> <?php echo ($image_id_mobile) ? ' hidden-xs' : '' ?>">
    <div class="page-header">
        <h1><?php echo get_field('issue_quarter'); ?></h1>
        <p>Volume <?php echo get_field('volume_number'); ?></p>
        <p> <?php echo get_field('numbers'); ?></p>
    </div>
</section>
<?php endif; ?>