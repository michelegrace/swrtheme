<?php if ( is_home() && is_front_page() ) : ?>
    <section class="subscription-cta">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('subscribe-sb'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>