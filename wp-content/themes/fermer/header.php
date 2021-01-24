<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fermer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header id="header" class="header">
        <nav id="under-nav" class="under-nav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'additional-menu',
                    'menu_id' => 'additional-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
        <div class="header__row">
            <div class="header__branding">
                <?php
                the_custom_logo();
                $fermer_description = get_bloginfo('description', 'display');
                if ($fermer_description || is_customize_preview()) :
                    ?>
                    <p class="site-description"><?php echo $fermer_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        ?></p>
                <?php endif; ?>
                <form role="search" method="get" class="searchform" id="searchform" action="<?php echo home_url( '/' ) ?>" >
                    <input class="input-search" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск"/>
                    <label class="search-btn" for="searchsubmit">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 12.75C31.9181 13.2831 31.855 13.82 31.7512 14.3488C30.7981 19.2081 26.8738 23.0156 22.0119 23.8175C19.4344 24.2431 16.9769 23.875 14.6406 22.7138C14.4306 22.6094 14.3194 22.6406 14.1644 22.7969C11.4888 25.4813 8.80375 28.1569 6.12937 30.8425C5.54438 31.43 4.8725 31.8256 4.0475 31.9481C4.00938 31.9538 3.97375 31.9819 3.9375 32C3.66688 32 3.39562 32 3.125 32C3.0675 31.9794 3.01188 31.9494 2.9525 31.9394C1.51688 31.6875 0.418125 30.6487 0.091875 29.2319C0.064375 29.1119 0.030625 28.9937 0 28.875C0 28.6044 0 28.3331 0 28.0625C0.03125 27.9438 0.066875 27.8262 0.09375 27.7069C0.26625 26.9262 0.703125 26.3081 1.26 25.7531C3.87 23.1506 6.47125 20.5394 9.08687 17.9438C9.32937 17.7031 9.3775 17.5419 9.21937 17.2144C5.77312 10.0925 10.0256 1.68 17.8037 0.21125C18.2825 0.12125 18.7681 0.069375 19.25 0C19.75 0 20.25 0 20.75 0C21.1806 0.0625 21.6119 0.12 22.0419 0.188125C26.8 0.9475 30.8225 4.83125 31.7381 9.55875C31.8469 10.1188 31.9138 10.6862 32 11.25C32 11.75 32 12.25 32 12.75ZM20.0238 1.9925C14.5569 1.96437 10.0281 6.42 9.99312 11.8594C9.9575 17.4481 14.38 21.9787 19.8981 22.0075C25.46 22.0362 29.9806 17.6031 30.0075 12.0938C30.0344 6.50875 25.5994 2.02125 20.0238 1.9925ZM10.31 19.1825C10.2838 19.2063 10.2212 19.2594 10.1637 19.3169C7.59375 21.8856 5.02437 24.455 2.45625 27.0256C2.34625 27.1356 2.24188 27.2531 2.14438 27.3744C1.63063 28.0137 1.62188 28.89 2.11875 29.5431C2.8 30.4375 4.00563 30.4912 4.84688 29.6519C7.45625 27.0487 10.0606 24.4413 12.6663 21.8344C12.7288 21.7719 12.7819 21.6994 12.7994 21.6794C11.9575 20.835 11.1388 20.0138 10.31 19.1825Z" fill="black"/>
                            <path d="M18.7087 3.00827C18.8356 3.00827 18.8987 3.00577 18.9606 3.0089C19.2762 3.02327 19.4949 3.23077 19.4893 3.50827C19.4837 3.77577 19.2774 3.95577 18.9756 3.99452C18.4206 4.06577 17.8506 4.09452 17.3162 4.24515C14.8 4.95327 13.0531 7.2439 12.9931 9.8564C12.9837 10.2589 12.8068 10.4876 12.5024 10.4901C12.1881 10.4933 12.0031 10.2451 12.01 9.83077C12.0631 6.38452 14.7981 3.40015 18.2137 3.06077C18.4 3.04202 18.5862 3.0214 18.7087 3.00827Z" fill="black"/>
                        </svg>
                    </label>
                    <input class="input-btn" type="submit" id="searchsubmit" value="" />
                </form>
            </div><!-- .site-branding -->
            <div class="header__main-nav">
                <nav id="main-nav" class="main-nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_id' => 'main-menu',
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
            <div class="header__contacts">
                <div class="icons-account-menu">
                    <nav id="icons-menu" class="icons-account-list">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'icons-menu',
                                'menu_id' => 'icons-menu',
                            )
                        );
                        ?>
                    </nav><!-- #site-navigation -->
<!--                    <div class="icons-account-menu__korzina">-->
<!--                        --><?php
//                        if (class_exists('WooCommerce' )){
//                            global $woocommerce; ?>
<!--                            <a href="--><?php //echo $woocommerce->cart->get_cart_url() ?><!--" class="fix_cart_btn fz_an">-->
<!--                                <span class="basket-btn__label">Корзина</span>-->
<!--                                <span class="fix_cart_count">--><?php //echo sprintf($woocommerce->cart->cart_contents_count); ?><!--</span>-->
<!--                            </a>-->
<!--                            --><?php
//                        }
//                        ?>
<!--                    </div>-->
                </div>
                <a href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a>
                <div class="header__btn">
                    <span class="callback-js">Заказать звонок</span>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
