<?php
/**
 * Permet d'ajouter le header.php
 * c'est comme un include
 */
get_header();

the_post();
?>

<header>
    <div class="logo">
        <a href="index.html"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" title="Magnetic" alt="Magnetic"/></a>
    </div><!-- end logo -->

    <div id="menu_icon"></div>
    <nav>
        <ul>
            <li><a href="index.html" class="selected">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">The Team</a></li>
            <li><a href="#">Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav><!-- end navigation menu -->

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

<section class="main clearfix">
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'order'          => 'DESC',
    );
    $query_articles = new WP_Query( $args );

    while ( $query_articles->have_posts() ) : $query_articles->the_post(); ?>

    <div class="work">
        <a href="<?php the_permalink() ?>">

            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), '466x466') ?>" class="media" alt="">

            <div class="caption">
                <div class="work_title">
                    <h1><?php the_title() ?></h1>
                </div>
            </div>
        </a>
    </div>

        <?php
    endwhile;
    wp_reset_postdata();
    ?>

</section><!-- end main -->

<?php
/**
 * Permet d'ajouter le footer.php
 * c'est comme un include
 */
get_footer(); ?>