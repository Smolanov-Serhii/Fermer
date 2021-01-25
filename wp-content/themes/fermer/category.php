

<?php
get_header();
?>

<section class="main-news">
    <div class="main-news__title section-title">
        <?php

        echo get_queried_object()->name;
        ?>
    </div>
    <div class="main-news__wrapper">
        <div class="main-news__sidebar">

            <ul class="main-news__nav">
                <?php
                $args = array(
                    'show_option_all'    => '',
                    'orderby'            => 'name',
                    'order'              => 'ASC',
                    'separator'          => '<br />',
                    'style'              => 'list',
                    'show_count'         => 0,
                    'hide_empty'         => 1,
                    'use_desc_for_title' => 1,
                    'child_of'           => 0,
                    'feed'               => '',
                    'feed_type'          => '',
                    'feed_image'         => '',
                    'exclude'            => '',
                    'exclude_tree'       => '',
                    'include'            => '',
                    'hierarchical'       => 1,
                    'title_li'           => __( 'Все записи:' ),
                    'show_option_none'   => __( '' ),
                    'number'             => null,
                    'echo'               => 1,
                    'depth'              => 0,
                    'current_category'   => 1,
                    'pad_counts'         => 0,
                    'taxonomy'           => 'category',
                    'walker'             => null
                );
                wp_list_categories( $args );

                ?>
            </ul>
        </div>
        <div class="main-news__content">
            <?php if ( have_posts() ) : ?>
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    ?>
                    <a href="<?php the_permalink();?>" class="main-news__item">
                        <div class="main-news__image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                        <div class="main-news__desc">
                            <div class="main-news__title">
                                <?php the_title(); ?>
                            </div>
                            <div class="main-news__excerpt">
                                <?php the_excerpt();?>
                            </div>
                        </div>
                    </a>
                    <?php

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div>
    </div>
</section>

<?php get_template_part('inc/mailing'); ?>  <!-- Блок подписки -->


<?php


get_footer();
?>
