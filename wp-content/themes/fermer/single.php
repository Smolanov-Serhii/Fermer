<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fermer
 */

get_header();
if( is_category() || is_product()){
   ?>
    <section id="single-product-page" class="single-product-page">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', get_post_type('single') );


            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </section><!-- #main -->

   <?php
} else {
    ?>
    <div class="page-default-head">
        <div class="page-default-head__cont">
            <div class="page-default-head__title">
                <?php the_title();?>
            </div>
            <div class="page-default-head__subtitle">
                <?php the_content();?>
            </div>
            <div class="apiary__links">
                <div class="apiary__link js-exursion">
                    <a href="<?php echo the_field('zakazat_ekskursiyu_ssylka', 5); ?>">заказать экскурсию</a>
                </div>
                <div class="apiary__link">
                    <a href="<?php echo the_field('perejti_v_katalog_ssylka', 5); ?>">перейти в каталог</a>
                </div>
            </div>
        </div>
        <div class="page-default-head__image">
            <?php the_post_thumbnail('full');?>
        </div>
    </div>
    <?php
}
?>


<?php
get_footer();
