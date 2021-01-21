<?php
/**
 * Template Name: Продукция
 *
 */
?>

<?php
get_header();
$post_id = get_the_ID();
?>
<section class="main-page-content products-page"
         style="background-image: url(<?php the_field('izobrazhenie_ddlya_shapki_straniczy', $post_id); ?>)">
    <h1 class="main-page-content__title"><?php the_field('zagolovok_dlya_glavnoj_straniczy', $post_id); ?></h1>
    <h2 class="main-page-content__subtitle"><?php the_field('podzagolovok_dlya_glavnoj_straniczy', $post_id); ?></h2>
</section>
<section class="products">
    <div class="products__title section-title">
        <?php the_field('zagolovok_sekczii_fermer', 5); ?>
    </div>
    <div class="products__list">
        <?php echo do_shortcode('[product_categories number="0" parent="0" columns="3"]'); ?>
    </div>
</section>

<?php get_template_part('inc/awards'); ?>  <!-- Блок награды -->

<?php get_template_part('inc/reviews'); ?>  <!-- Блок отзывов -->

<?php get_template_part('inc/news'); ?>  <!-- Блок новостей -->

<?php get_template_part('inc/mailing'); ?>  <!-- Блок подписки -->


<?php


get_footer();
?>
