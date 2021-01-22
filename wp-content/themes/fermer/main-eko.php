<?php
/**
 * Template Name: Экотуризм
 *
 */


?>

<?php
get_header();

$post_id = get_the_ID();
?>
<section class="main-page-content"
         style="background-image: url(<?php the_field('izobrazhenie_ddlya_shapki_straniczy', $post_id); ?>)">
    <h1 class="main-page-content__title"><?php the_field('zagolovok_dlya_glavnoj_straniczy', $post_id); ?></h1>
    <h2 class="main-page-content__subtitle"><?php the_field('podzagolovok_dlya_glavnoj_straniczy', $post_id); ?></h2>
</section>
<section class="family-farm">
    <h2 class="family-farm__title section-title"><?php the_field('zagolovok_sekczii', $post_id); ?></h2>
    <div class="family-farm__columns">
        <div class="family-farm__column">
            <?php the_field('opisanie_levogo_stolbcza', $post_id); ?>
        </div>
        <div class="family-farm__column">
            <?php the_field('pravyj_stolbecz_sekczii', $post_id); ?>
        </div>
    </div>
</section>
<section class="farm-map">
    <h2 class="farm-map__title section-title"><?php the_field('zaglovok_bloka_fermi', $post_id); ?></h2>
    <img class="farm-map__image" src="<?php echo the_field('izobrazhenie_dlya_sekczii', $post_id);?>">
</section>
<section class="services">
    <h2 class="farm-map__title section-title"><?php the_field('zagolovok_sekczii_uslugi', $post_id); ?></h2>
</section>

<?php
$args = 'static';
get_template_part('inc/pets',null,$args);
?>  <!-- Блок питомцы -->

<?php get_template_part('inc/awards'); ?>  <!-- Блок награды -->

<?php get_template_part('inc/news'); ?>  <!-- Блок новостей -->

<?php get_template_part('inc/mailing'); ?>  <!-- Блок подписки -->


<?php


get_footer();
?>
