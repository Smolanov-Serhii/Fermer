<section class="news">
    <div class="news__title section-title">
        <?php echo the_field('zagolovok_bloka_novosti', 5); ?>
    </div>
    <div class="news__list">
        <?php
        $pc = new WP_Query('cat=""&orderby=date&posts_per_page=3'); ?>
        <?php while ($pc->have_posts()) : $pc->the_post(); ?>
            <a class="news__item" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="news__item-img">
                    <?php echo the_post_thumbnail(array()); ?>
                </div>
                <div class="news__item-title">
                    <?php the_title(); ?>
                </div>
                <div class="news__item-excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <div class="news__more">
                    <span>подробнее</span>
                    <svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4.87854C0.723858 4.87854 0.5 4.65468 0.5 4.37854C0.5 4.1024 0.723858 3.87854 1 3.87854V4.87854ZM30 4.37854L30.2956 3.97525L30.8459 4.37854L30.2956 4.78183L30 4.37854ZM25.3594 8.39939C25.1367 8.56262 24.8238 8.51439 24.6605 8.29165C24.4973 8.06892 24.5455 7.75603 24.7683 7.5928L25.3594 8.39939ZM24.7683 1.16428C24.5455 1.00105 24.4973 0.688159 24.6605 0.465427C24.8238 0.242695 25.1367 0.194461 25.3594 0.357694L24.7683 1.16428ZM1 3.87854H30V4.87854H1V3.87854ZM30.2956 4.78183L25.3594 8.39939L24.7683 7.5928L29.7044 3.97525L30.2956 4.78183ZM29.7044 4.78183L24.7683 1.16428L25.3594 0.357694L30.2956 3.97525L29.7044 4.78183Z" fill="black"/>
                    </svg>
                </div>

            </a>
        <?php endwhile; ?>
    </div>
    <div class="news__lnk">
        <a href="<?php echo the_field('ssilka_na_straniczu_vseh_novostej', 5); ?>"><?php echo the_field('nadpis_na_knopke_vse_novosti', 5); ?></a>
    </div>
</section>