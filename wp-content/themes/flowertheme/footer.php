<!-- Footer
============================================= -->
<footer class="footer common-container">

    <div class="footer-container">
        <!-- Copyrights
        ============================================= -->
        <div class="footer-copyright">
            <?php echo get_theme_mod('yFooterCopyrightText'); ?>
            <?php
            if (get_theme_mod('yFooterTosPage')) {
                ?><a href="<?php the_permalink(get_theme_mod('yFooterTosPage')); ?>">Terms Of Use</a><?php
            }
            ?>

            <?php
            if (get_theme_mod('yFooterPrivacyPage')) {
                ?><a href="<?php the_permalink(get_theme_mod('yFooterPrivacyPage')); ?>">Privacy
                    Policy</a><?php
            }
            ?>
        </div>
        <!-- #copyrights end -->

        <div class="footer-item footer-primary-menu">
            <div class="primary-menu-navigation">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'fallback_cb' => false,
                        'depth' => 1
                    ]);
                }
                ?>
            </div>
        </div>
        <div class="footer-item social-media">
            <ul>
                <?php
                if (get_theme_mod('yInstagramHandle')) {
                    ?>
                    <li>
                        <a href="https://instagram.com/<?php echo get_theme_mod('yInstagramHandle'); ?>"><span
                                    class="dashicons dashicons-instagram"></span></a>
                    </li>
                    <?php
                }
                ?>

                <?php
                if (get_theme_mod('yFacebookHandle')) {
                    ?>
                    <li><a href="https://facebook.com/<?php echo get_theme_mod('yFacebookHandle'); ?>"><span
                                    class="dashicons dashicons-facebook-alt"></span></a>
                    </li>
                    <?php
                }
                ?>

            </ul>
        </div>
    </div>

</footer><!-- #footer end -->

<?php wp_footer(); ?>