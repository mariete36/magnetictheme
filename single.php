<?php
/**
 * Permet d'ajouter le header.php
 * c'est comme un include
 */
    get_header();


/**
 * IMPORTANT
 * Permet d'initialiser les fonctions de WP pour un article
 * Sans the_post(), on ne pourrait pas utiliser les fonctions juste en dessous
 */
    the_post();


?>



<h2><?php the_title() // titre ^^ en même ça peut pas être autre chose :D ?></h2>

<?php echo get_the_date() // la date ?> - <?php the_author() // l'auteur ?>

<div class="cat">
    <?php
    /**
     * On récupère toutes les catégories liées à l'article qu'on consulte
     * par défaut WP a des catégories
     * pour WP les catégories sont nommées taxonomy
     * category est le nom de la taxonomy
     * Quand on crééra de nouvelle taxonomy, c'est juste 'category' qu'il faudra modifier et op tout le reste fonctionnera
     */
    $categories = get_the_terms( get_the_ID(), 'category' );
    $cats_post = array();
    foreach( $categories as $category ) {

         $cats_post[] = '<a href="'.get_term_link($category, 'category').'">'.$category->name.'</a>';
    }
    /**
     * Le implode permet de rassembler en string le tableau $cats_post
     * On prend chaque élément du tableau et on colle le tout ensemble avec le premier paramètre de la fonction
     */
        $cat_post = implode(' --/-- ', $cats_post);

    echo $cat_post;
    ?>
</div>


<div class="contenu-editable">
    <?php the_content() ?>
</div>





<?php
/**
 * Permet d'ajouter le footer.php
 * c'est comme un include
 */
get_footer(); ?>
