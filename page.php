<?php
/**
 * Permet d'ajouter le header.php
 * c'est comme un include
 */
get_header();

the_post();
?>
<section class="main clearfix">

    <section class="top" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
        <div class="wrapper content_header clearfix">
            <div class="work_nav">

                <ul class="btn clearfix">
                    <li><a href="#" class="previous" data-title="Previous"></a></li>
                    <li><a href="index.html" class="grid" data-title="Portfolio"></a></li>
                    <li><a href="#" class="next" data-title="Next"></a></li>
                </ul>

            </div><!-- end work_nav -->
            <h1 class="title">Sed do eiusmod tempor incididunt ut labore et dolore seed magna aliqua.</h1>
        </div>
    </section><!-- end top -->

    <section class="wrapper">
        <div class="content">
            <?php the_content() ?>
        </div><!-- end content -->
    </section>
</section><!-- end main -->








<?php
/**
 * Permet d'ajouter le footer.php
 * c'est comme un include
 */
get_footer(); ?>
