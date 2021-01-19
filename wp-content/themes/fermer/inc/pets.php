<?php
    $outclass = $args;
?>
<section class="pets">
    <div class="pets__container <?php echo $outclass.'-container'; ?>">
        <div class="pets__title section-title">
            <?php echo the_field('tipomczy_nashej_fermy', 5); ?>
        </div>
        <ul class="pets__items <?php echo $outclass.'-wrapper'; ?>">
            <?php
            $args = array(
                'post_type' => 'pets',
                'showposts' => "", //сколько показать статей
                'orderby' => "data", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>
                    <li class="pets__item <?php echo $outclass.'-slide'; ?>">
                        <div class="pets__image">
                            <img src="<?php echo the_field('kartinka_pitomcza'); ?>" alt="<?php the_field('kratkoe_opisanie_dlya_gruppy'); ?>">
                        </div>
                        <div class="pets__header">
                            <?php the_field('nazvanie_pitotmcza'); ?>
                        </div>
                        <div class="pets__excerpt">
                            <?php the_field('kratkoe_opisanie_dlya_gruppy'); ?>
                        </div>
                    </li>
                <?php }
            }
            wp_reset_query(); ?>
        </ul>
        <?php
        if($outclass == 'swiper'){
            echo '<div class="swiper-button-prev"></div>';
            echo '<div class="swiper-button-next"></div>';
        }
        ?>
    </div>
    <div class="pets__link">
        <a href="<?php echo the_field('ssylka_na_knopke_perejti_v_katalog', 5); ?>"><?php the_field('nadpis_na_knopke_perejti_v_katalog', 5); ?></a>
    </div>
</section>