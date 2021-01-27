<?php
get_header();
$post_id = get_the_ID();
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
get_sidebar();
get_footer();
