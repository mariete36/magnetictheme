<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php
    /**
     * IMPORTANT SINON la mort
     * -> ajoute les styles et scripts par défaut de WP
     * -> ajoute les styles et scripts des plugins
     * -> ajoute vos styles et scripts
     */
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="logo">
        <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" title="Magnetic" alt="Magnetic"/></a>
    </div><!-- end logo -->

    <div id="menu_icon"></div>
    <?php
    $menu = 'header-menu';
    if(wp_is_mobile()) {
        $menu = 'header-mob';
    }

    wp_nav_menu( array(
            'theme_location' => $menu,
            'container' => 'nav'
    ));
    ?>

    <div class="footer clearfix">
        <ul class="social clearfix">
            <li><a href="#" class="fb" data-title="Facebook"></a></li>
            <li><a href="#" class="google" data-title="Google +"></a></li>
            <li><a href="#" class="behance" data-title="Behance"></a></li>
            <!--<li><a href="#" class="twitter" data-title="Twitter"></a></li>
            <li><a href="#" class="dribble" data-title="Dribble"></a></li>-->
            <li><a href="#" class="rss" data-title="RSS"></a></li>
        </ul><!-- end social -->

        <div class="rights">
            <p>Copyright © 2014 magnetic.</p>
            <p>Template by <a href="">Pixelhint.com</a></p>
        </div><!-- end rights -->
    </div ><!-- end footer -->
</header><!-- end header -->