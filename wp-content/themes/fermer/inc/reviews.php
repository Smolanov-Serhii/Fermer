<section class="reviews">
    <div class="reviews__title section-title">
        Отзывы о нашей продукции
    </div>
    <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
    <div class="reviews__lnk">
        <?php $page_id = 23 ?>
        <a href="<?php echo get_page_link( $page_id ); ?>">читать больше отзывов</a>
    </div>
</section>