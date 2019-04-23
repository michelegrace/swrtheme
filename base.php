<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap" role="document">
        <main>
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <script>
        new WOW().init();
    </script>
<script>
    jQuery('#myModal').on('shown.bs.modal', function () {
        jQuery('#myInput').trigger('focus')
    })
</script>
    <script>
        document.getElementById("main-menu-toggle").onclick = function() {myFunction()};

        function myFunction() {
            document.getElementById("hamburger-menu").classList.add("menu-drop");
            document.getElementById("main-menu-toggle").classList.add("hidden");
            document.getElementById("menu-close").classList.remove("hidden");
        }

        document.getElementById("menu-close").onclick = function() {hideMenuFunction()};

        function hideMenuFunction() {
            document.getElementById("hamburger-menu").classList.remove("menu-drop");
            document.getElementById("main-menu-toggle").classList.remove("hidden");
        }

        var menu = document.getElementById("hamburger-menu");
        menu.addEventListener('click', handleMenuClick);

        function handleMenuClick(event) {
            if (event.target instanceof HTMLAnchorElement) {
                document.getElementById("hamburger-menu").classList.remove("menu-drop");
                document.getElementById("main-menu-toggle").classList.remove("hidden");
            }
        }
        </script>

  </body>
</html>
