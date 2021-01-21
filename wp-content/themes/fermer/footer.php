<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fermer
 */

?>

<footer id="footer" class="footer" style="background-image: url(<?php the_field('fon_dlya_podvala_na_vse_straniczy', 5); ?>)">
    <div class="footer__container">
        <div class="footer__left">
            <?php the_custom_logo(); ?>
            <div class="footer__socials socials">
                <div class="socials__title">
                    Мы в соцсетях
                </div>
                <div class="socials__wrapper">
                    <a href="<?php echo get_theme_mod('facebook'); ?>">
                        <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 23H12V15.0938H9V11.5H12V8.625C12 6.24258 14.014 4.3125 16.5 4.3125H19.5V7.90625H18C17.172 7.90625 16.5 7.8315 16.5 8.625V11.5H20.25L18.75 15.0938H16.5V23H21C22.654 23 24 21.7101 24 20.125V2.875C24 1.28896 22.654 0 21 0H3C1.345 0 0 1.28896 0 2.875V20.125C0 21.7101 1.345 23 3 23Z" fill="black" fill-opacity="0.4"/>
                        </svg>
                    </a>
                    <a href="<?php echo get_theme_mod('vk'); ?>">
                        <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M19.915 12.4845C19.527 12.0149 19.638 11.806 19.915 11.3863C19.92 11.3815 23.123 7.13989 23.453 5.70143L23.455 5.70047C23.619 5.17627 23.455 4.79102 22.662 4.79102H20.038C19.37 4.79102 19.062 5.12164 18.897 5.49156C18.897 5.49156 17.561 8.55631 15.671 10.5429C15.061 11.117 14.779 11.301 14.446 11.301C14.282 11.301 14.027 11.117 14.027 10.5928V5.70047C14.027 5.07181 13.84 4.79102 13.287 4.79102H9.161C8.742 4.79102 8.493 5.08427 8.493 5.35739C8.493 5.95347 9.438 6.09052 9.536 7.7676V11.4064C9.536 12.2037 9.385 12.3503 9.05 12.3503C8.158 12.3503 5.993 9.27314 4.71 5.75127C4.451 5.06797 4.198 4.79197 3.525 4.79197H0.899998C0.150998 4.79197 -1.90735e-06 5.1226 -1.90735e-06 5.49252C-1.90735e-06 6.1461 0.891998 9.39581 4.148 13.6891C6.318 16.6197 9.374 18.2077 12.154 18.2077C13.825 18.2077 14.029 17.855 14.029 17.2484C14.029 14.4481 13.878 14.1836 14.715 14.1836C15.103 14.1836 15.771 14.3676 17.331 15.7812C19.114 17.4573 19.407 18.2077 20.405 18.2077H23.029C23.777 18.2077 24.156 17.855 23.938 17.1593C23.439 15.6959 20.067 12.6858 19.915 12.4845Z" fill="black" fill-opacity="0.4"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="23" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="<?php echo get_theme_mod('instagram'); ?>">
                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5038 5.59468C8.24264 5.59468 5.60243 8.23777 5.60243 11.4961C5.60243 14.7573 8.24551 17.3975 11.5038 17.3975C14.7651 17.3975 17.4053 14.7544 17.4053 11.4961C17.4053 8.23489 14.7622 5.59468 11.5038 5.59468ZM11.5038 15.3266C9.38689 15.3266 7.67339 13.6121 7.67339 11.4961C7.67339 9.3801 9.38785 7.66564 11.5038 7.66564C13.6198 7.66564 15.3343 9.3801 15.3343 11.4961C15.3353 13.6121 13.6208 15.3266 11.5038 15.3266Z" fill="black" fill-opacity="0.4"/>
                            <path d="M16.2413 0.0741987C14.1253 -0.0245097 8.88419 -0.019718 6.76628 0.0741987C4.90519 0.161407 3.26357 0.610865 1.94011 1.93432C-0.271723 4.14616 0.0109854 7.12658 0.0109854 11.4975C0.0109854 15.971 -0.238181 18.8825 1.94011 21.0607C4.16057 23.2802 7.18411 22.9899 11.5033 22.9899C15.9347 22.9899 17.4642 22.9927 19.031 22.3861C21.1614 21.5591 22.7695 19.6549 22.9267 16.2346C23.0263 14.1176 23.0206 8.87745 22.9267 6.75953C22.7369 2.72207 20.5701 0.273532 16.2413 0.0741987ZM19.5907 19.5974C18.1407 21.0473 16.1292 20.918 11.4755 20.918C6.68386 20.918 4.7624 20.9889 3.36036 19.583C1.74557 17.9759 2.03786 15.3951 2.03786 11.4822C2.03786 6.18741 1.49449 2.3742 6.80844 2.10203C8.02936 2.05891 8.38874 2.04453 11.4621 2.04453L11.5052 2.07328C16.6122 2.07328 20.619 1.53853 20.8595 6.85153C20.9142 8.06382 20.9266 8.42799 20.9266 11.4966C20.9257 16.2327 21.0157 18.1656 19.5907 19.5974Z" fill="black" fill-opacity="0.4"/>
                            <path d="M17.6391 6.74104C18.4007 6.74104 19.0181 6.12362 19.0181 5.362C19.0181 4.60037 18.4007 3.98295 17.6391 3.98295C16.8775 3.98295 16.26 4.60037 16.26 5.362C16.26 6.12362 16.8775 6.74104 17.6391 6.74104Z" fill="black" fill-opacity="0.4"/>
                        </svg>

                    </a>
                </div>
            </div>
        </div>
        <nav id="footer-menu" class="footer__menu">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu_id' => 'footer-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
        <div class="footer__right">
            <div class="footer__contacts-title">
                Контакты
            </div>
            <div class="header__contacts">
                <a href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a>
                <div class="header__btn">
                    <span class="callback-js">Заказать звонок</span>
                </div>
                <div class="footer__btn">
                    <a href="">перейти в каталог</a>
                    <a href="">заказать экскурсию</a>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
<?php
if (class_exists('WooCommerce' )){
    global $woocommerce; ?>
    <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="fix_cart_btn fz_an">
<!--        <span class="basket-btn__label">Корзина</span>-->
        <span class="fix_cart_count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
    </a>
    <?php
}
?>

<?php wp_footer(); ?>

</body>
</html>
