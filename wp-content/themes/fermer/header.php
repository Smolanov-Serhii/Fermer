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
                if (is_front_page() && is_home()) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                              rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                             rel="home"><?php bloginfo('name'); ?></a></p>
                <?php
                endif;
                $fermer_description = get_bloginfo('description', 'display');
                if ($fermer_description || is_customize_preview()) :
                    ?>
                    <p class="site-description"><?php echo $fermer_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        ?></p>
                <?php endif; ?>
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
                    <div class="icons-account-menu__korzina">
                        <?php
                        if (class_exists('WooCommerce' )){
                            global $woocommerce; ?>
                            <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="fix_cart_btn fz_an">
                                <span class="basket-btn__label">Корзина</span>
                                <span class="fix_cart_count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <a href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a>
                <div class="header__btn">
                    <span class="callback-js">Заказать звонок</span>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
