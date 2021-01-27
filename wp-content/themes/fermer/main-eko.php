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

<section class="rest-plus">
    <div class="rest-plus__title section-title">
        <?php the_field ('zagolovok_sekczii_preimushhestva_otdyha')?>
    </div>
    <?php $post_id = get_the_ID(); ?>
    <a  class="rest-plus__video fresco" href="<?php echo the_field('ssylka_dlya_otobrazheniya_video_preimushhestva_otdyha_na_ferme', $post_id); ?>"
        style="background-image: url(<?php echo the_field('kartinka-oblozhka_sekczii_preimushhestva_otdyha_na_ferme', $post_id); ?>)">
        <svg width="142" height="142" viewBox="0 0 142 142" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M71 0C31.8482 0 0 31.8513 0 71C0 110.149 31.8482 142 71 142C110.152 142 142 110.149 142 71C142 31.8513 110.152 0 71 0Z"
                  fill="#303C42" fill-opacity="0.2"/>
            <path d="M71 136.084C35.1128 136.084 5.91656 106.888 5.91656 71.0004C5.91656 35.1133 35.1128 5.91699 71 5.91699C106.887 5.91699 136.083 35.1133 136.083 71.0004C136.083 106.888 106.887 136.084 71 136.084Z"
                  fill="white" fill-opacity="0.74"/>
            <path d="M56.2084 100.583C55.7231 100.583 55.2319 100.461 54.7929 100.222C53.8394 99.7016 53.25 98.7076 53.25 97.6243V44.3743C53.25 43.291 53.8394 42.297 54.7929 41.7769C55.7289 41.2597 56.9018 41.2974 57.809 41.8868L99.2255 68.5118C100.069 69.0548 100.583 69.9939 100.583 70.9993C100.583 72.0046 100.069 72.9434 99.2255 73.4868L57.809 100.112C57.3236 100.427 56.7631 100.583 56.2084 100.583Z"
                  fill="#303C42" fill-opacity="0.2"/>
            <path d="M59.1666 49.7949V92.2052L92.1533 71.0001L59.1666 49.7949Z" fill="#78909C"/>
            <path opacity="0.1" d="M59.1666 71V92.2052L92.1533 71H59.1666Z" fill="black" fill-opacity="0.2"/>
            <path d="M100.486 70.252L100.405 70.3046C100.465 70.5387 100.583 70.7534 100.583 71.0005C100.583 72.0059 100.069 72.9447 99.2256 73.488L57.809 100.113C57.3236 100.428 56.7631 100.584 56.2084 100.584C55.7231 100.584 55.2319 100.462 54.7929 100.223L88.258 133.688C106.443 128.673 121.424 115.974 129.523 99.2898L100.486 70.252Z"
                  fill="url(#paint0_linear)" fill-opacity="0.2"/>
            <path d="M71 0C31.8482 0 0 31.8513 0 71C0 110.149 31.8482 142 71 142C110.152 142 142 110.149 142 71C142 31.8513 110.152 0 71 0Z"
                  fill="url(#paint1_linear)"/>
            <defs>
                <linearGradient id="paint0_linear" x1="73.7204" y1="81.3131" x2="113.143" y2="120.759"
                                gradientUnits="userSpaceOnUse">
                    <stop stop-opacity="0.1"/>
                    <stop offset="1" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="paint1_linear" x1="6.65447" y1="41.0042" x2="135.347" y2="101.007"
                                gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.2"/>
                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                </linearGradient>
            </defs>
        </svg>
    </a>
    </div>
</section>
<section class="eko-form" id="eko-form" style="background-image: url(<?php echo the_field('kartinka_dlya_fona_formy'); ?>)">
    <div class="eko-form__container eko-form-single">
            <?php $post_id = get_the_ID(); ?>
            <div class="eko-form__text">
                <h2 class="eko-form__text-title">
                    <?php the_field('zagolovok_dlya_formy'); ?>
                </h2>
                <h3 class="eko-form__text-subtitle">
                    <?php the_field('podzagolovok_dlya_formy'); ?>
                </h3>
            </div>
            <div class="eko-form-single__content">
                <div class="eko-form-single__title">
                    <?php the_field('zagolovok_dlya_okna_formy'); ?>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="93" title="Оставить заявку на главной"]'); ?>
            </div>
    </div>
</section>
<section class="eko-slider">
    <div class="eko-slider swiper-container">
        <ul class="eko-slider__items swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'ekoslider',
                'showposts' => "", //сколько показать статей
                'orderby' => "data", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>
                    <?php
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $post_id = get_the_ID();
                    $meta_values = get_post_meta($post_id, $key = 'ssylka_dlya_knopki_glavnogo_slajdera', true);
                    ?>
                    <li class="eko-slider__item swiper-slide">
                        <?php the_post_thumbnail('full');?>
                        <h3 class="eko-slider__item-title"><?php the_title();?></h3>
                    </li>
                <?php }
            }
            wp_reset_query(); ?>
        </ul>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<?php get_template_part('inc/reviews'); ?>  <!-- Блок отзывы -->

<?php get_template_part('inc/mailing'); ?>  <!-- Блок подписки -->


<?php


get_footer();
?>
