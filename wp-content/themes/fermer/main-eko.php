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
<section class="family-farm eko-page">
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
    <img class="farm-map__image" src="<?php echo the_field('izobrazhenie_dlya_sekczii', $post_id); ?>">
</section>
<section class="services">
    <h2 class="services__title section-title"><?php the_field('zagolovok_sekczii_uslugi', $post_id); ?></h2>
    <ul class="services__wrapper">
        <?php
        $args = array(
            'post_type' => 'services',
            'showposts' => "9", //сколько показать статей
            'orderby' => "menu_order", //сортировка по дате
            'caller_get_posts' => 1);
        $my_query = new wp_query($args);
        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
                $my_query->the_post();
                ?>
                <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id, 'services-thumb', true);
                $post_id = get_the_ID();
                ?>
                <li class="services__item">
                    <a href="<?php echo the_permalink(); ?>" class="services__item-lnk">
                        <div class="services__item-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('services-thumb'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri() . '/images/empty.jpg' ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="services__item-title">
                            <?php the_title(); ?>
                        </div>
                    </a>
                </li>
            <?php }
        }
        wp_reset_query(); ?>
    </ul>
</section>

<?php
$args = 'static';
get_template_part('inc/pets', null, $args);
?>  <!-- Блок питомцы -->

<?php get_template_part('inc/reviews'); ?>  <!-- Блок отзывы -->

<?php get_template_part('inc/mailing'); ?>  <!-- Блок подписки -->


<?php


get_footer();
?>
