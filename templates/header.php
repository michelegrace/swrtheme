<div class="mega-header-wrapper fixed-top">
    <div class="logo-wrapper">
    <div class="logo-bg"></div>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a>
</div>
<header>
        <div class="container">
            <div class="row">
                <a href="#main-menu"
                   class="menu-toggle"
                   role="button"
                   id="main-menu-toggle"
                   aria-expanded="false"
                   aria-controls="main-menu"
                   aria-label="Open main menu">
                    <span class="sr-only">Open main menu</span>
                    <span class="more">More</span>
                    <img class="ham-menu" src="<?php bloginfo('template_directory'); ?>/dist/images/hamburger_menu.svg">
                </a>
                <div class="col-md-3 col-md-offset-1 col-sm-offset-1 col-sm-11 col-xs-11 col-xs-offset-1">
                    <a class="title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo( get_bloginfo( 'title' ) ); ?></a>
                </div>
                <div class="col-md-5 col-sm-offset-1 col-sm-11 hidden-xs">
                    <nav class="navbar" role="navigation">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <?php /* Primary navigation */
                            wp_nav_menu( [
                                    'menu' => 'primary_navigation',
                                    'depth' => 1,
                                    'container' => false,
                                    'menu_class' => 'nav navbar',
                                    'walker' => new wp_bootstrap_navwalker()]
                            );
                            ?>
                        </div>
                    </nav> <!--large and incharge menu -->
                    </div>

                </div>
            </div>
</header>
<nav id="hamburger-menu" class="hamburger-menu">
    <a href="#ham-menu-toggle" class="menu-close hidden" id="menu-close">
        <img class="align-arrow" src="<?php bloginfo('template_directory'); ?>/dist/images/close.svg">
    </a>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-11 remove-padding col-sm-10 col-sm-offset-2 col-xs-offset-1 col-xs-11">
                <a class="small-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo( get_bloginfo( 'title' ) ); ?></a>
            </div>
            <div class="remove-padding col-md-offset-1 col-md-5 col-sm-5 col-sm-offset-2 col-xs-offset-1 col-xs-11">
                <?php wp_nav_menu( array( 'theme_location' => 'secondary_navigation' ) ); ?>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-offset-1 col-xs-11 xs-remove-padding">
                <?php wp_nav_menu( array( 'theme_location' => 'internal_navigation' ) ); ?>
                <?php dynamic_sidebar('social-sb'); ?>
            </div>
        </div>
    </div>

</nav>
</div>

