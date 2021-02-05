<?php
get_header();
$post_id = get_the_ID();
?>
    <div class="page-default-head">
        <div class="page-default-head__cont">
            <div class="page-default-head__title">
                <?php the_title(); ?>
            </div>
            <div class="page-default-head__subtitle">
                <?php the_content(); ?>
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
            <?php

                // Check rows exists.
                if( have_rows('kartinki_dl_yaslajdera') ):

                    // Loop through rows.
                    while( have_rows('kartinki_dl_yaslajdera') ) : the_row();

                        // Load sub field value.
                        $sub_value = get_sub_field('kartinka_dlya_slajdera');
                        // Do something...
                        echo '<div class="image">';
                        echo '<img src="' . $sub_value . '">';
                        echo '</div>';
                    // End loop.
                    endwhile;

                // No value.
                else :
                   the_post_thumbnail('full');
                endif;
            ?>
        </div>
    </div>
<?php
get_sidebar();
get_footer();
