<?php
/**
 * Template Name: Отзывы
 *
 */

get_header();
?>

    <main id="recall" class="recall">
        <div class="recall__title section-title">
            <?php the_title();?>
        </div>
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
