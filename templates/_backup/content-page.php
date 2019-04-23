<?php if (! is_page('contact-us')):?>
<section class="white-bg intro-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <?php echo get_field('intro'); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php the_content(); ?>
