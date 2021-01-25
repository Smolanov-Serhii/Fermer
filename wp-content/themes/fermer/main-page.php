<?php
/**
 * Template Name: Главная
 *
 */


?>

<?php
get_header();
?>
<section class="main-page-content"
         style="background-image: url(<?php the_field('izobrazhenie_ddlya_shapki_straniczy', 5); ?>)">
    <h1 class="main-page-content__title"><?php the_field('zagolovok_dlya_glavnoj_straniczy', 5); ?></h1>
    <h2 class="main-page-content__subtitle"><?php the_field('podzagolovok_dlya_glavnoj_straniczy', 5); ?></h2>
</section>
<section class="family-farm">
    <h3 class="family-farm__title section-title"><?php the_field('zagolovok_sekczii', 5); ?></h3>
    <div class="family-farm__columns">
        <div class="family-farm__column">
            <?php the_field('opisanie_levogo_stolbcza', 5); ?>
        </div>
        <div class="family-farm__column">
            <?php the_field('pravyj_stolbecz_sekczii', 5); ?>
        </div>
    </div>
    <a class="family-farm__more"
       href="<?php the_field('ssylka_na_knopku_podrobnee', 5); ?>"><?php the_field('tekst_ssylki', 5); ?>
        <div class="arrow-right">
            <div></div>
        </div>
    </a>
</section>
<section class="products">
    <div class="products__title section-title">
        <?php the_field('zagolovok_sekczii_fermer', 5); ?>
    </div>
    <div class="products__list">
        <?php echo do_shortcode('[product_categories number="0" parent="0" columns="3"]'); ?>
    </div>
</section>
<section class="main-form">
    <div class="main-form__title section-title">
        <?php the_field('zagolovok_dlya_sekczii_ekoturizm_preimushhestvo_otdyha_na_ferme', 5); ?>
    </div>
    <div class="main-form__container main-form-single"
         style="background-image: url(<?php the_field('kartinka_dlya_fona_ekoturizm_preimushhestvo_otdyha_na_ferme', 5); ?>)">
        <div class="wrapper">
            <?php $post_id = get_the_ID(); ?>
            <a  class="main-form__video fresco" href="<?php echo the_field('ssylka_na_videoekoturizm_preimushhestvo_otdyha_na_ferme', 5); ?>"
                 style="background-image: url(<?php the_field('kartinka_dlya_fona_ekoturizm_preimushhestvo_otdyha_na_ferme', 5); ?>)">
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
            <div class="main-form-single__content">
                <div class="main-form-single__title">
                    <?php the_field('zagolovok_formy', 5); ?>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="93" title="Оставить заявку на главной"]'); ?>
            </div>
        </div>
    </div>

    <ul class="main-form__items">
        <?php
        $args = array(
            'post_type' => 'relax',
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
                <li class="main-form__item">
                    <a href="<?php echo the_permalink(); ?>" class="main-form__item-lnk">
                        <div class="main-form__item-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri() . '/images/empty.jpg' ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="main-form__item-content">
                            <div class="main-form__item-title">
                                <?php the_title(); ?>
                            </div>
                            <div class="main-form__item-desc">
                                <?php the_content(); ?>
                            </div>
                            <div class="lnk-desc">
                                <span><?php the_field('nadpis_na_ssylke_podrobnee'); ?></span>
                                <svg width="31" height="9" viewBox="0 0 31 9" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4.87854C0.723858 4.87854 0.5 4.65468 0.5 4.37854C0.5 4.1024 0.723858 3.87854 1 3.87854V4.87854ZM30 4.37854L30.2956 3.97525L30.8459 4.37854L30.2956 4.78183L30 4.37854ZM25.3594 8.39939C25.1367 8.56262 24.8238 8.51439 24.6605 8.29165C24.4973 8.06892 24.5455 7.75603 24.7683 7.5928L25.3594 8.39939ZM24.7683 1.16428C24.5455 1.00105 24.4973 0.688159 24.6605 0.465427C24.8238 0.242695 25.1367 0.194461 25.3594 0.357694L24.7683 1.16428ZM1 3.87854H30V4.87854H1V3.87854ZM30.2956 4.78183L25.3594 8.39939L24.7683 7.5928L29.7044 3.97525L30.2956 4.78183ZM29.7044 4.78183L24.7683 1.16428L25.3594 0.357694L30.2956 3.97525L29.7044 4.78183Z"
                                          fill="black"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
            <?php }
        }
        wp_reset_query(); ?>
    </ul>
</section>
<section class="apiary">
    <div class="apiary__title section-title">
        <?php the_field('zagolovok_nasha_paseka', 5); ?>
    </div>
    <div class="apiary__container">
        <div class="apiary__content">
            <div class="apiary__item-title">
                <?php the_field('zagolovok_bloka', 5); ?>
            </div>
            <div class="apiary__item-cont">
                <?php the_field('opisanie_bloka_nasha_paseka', 5); ?>
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
        <div class="apiary__image">
            <img src="<?php echo the_field('kartinka_dlya_zapisi_nasha_paseka', 5); ?>" alt="<?php the_field('zagolovok_bloka', 5); ?>">
        </div>
    </div>
</section>
<?php
$args = 'swiper';
get_template_part('inc/pets',null,$args);
?>  <!-- Блок питомцы -->

<?php get_template_part('inc/awards'); ?>  <!-- Блок награды -->

<?php get_template_part('inc/news'); ?>  <!-- Блок новостей -->

<?php get_template_part('inc/mailing'); ?>  <!-- Блок подписки -->


<?php


get_footer();
?>
