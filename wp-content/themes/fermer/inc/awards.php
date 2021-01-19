<section class="awards"
         style="background-image: url('<?php echo the_field('kartinka_dlya_fona_nashi_nagrady', 5); ?>')">
    <div class="awards__title section-title">
        <?php the_field('zagolovok_dlya_nashi_nagrady', 5); ?>
    </div>
    <div class="awards__container swiper-container">
        <ul class="awards__items swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'awards',
                'showposts' => "", //сколько показать статей
                'orderby' => "data", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>
                    <a href="<?php echo the_field('izobrazhenie_nagrady'); ?>" class="awards__item swiper-slide fresco">
                        <div class="awards__image">
                            <img src="<?php echo the_field('izobrazhenie_nagrady'); ?>"
                                 alt="<?php the_field('opisanie_nagrady_seo'); ?>">
                        </div>
                    </a>
                <?php }
            }
            wp_reset_query(); ?>
        </ul>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>