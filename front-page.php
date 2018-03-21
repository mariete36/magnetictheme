<?php
/**
 * Permet d'ajouter le header.php
 * c'est comme un include
 */
get_header();

the_post();
?>

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