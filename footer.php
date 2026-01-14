<footer class="site-footer">
            <div class="container">
                <div class="copyright">
                <p><?php echo get_theme_mod('set_copyright','Copyright © 2026 Your Company. All rights reserved.'); ?></p>
                </div>
                <nav class="footer-menu">
                    <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'themeDav-footer-menu',
                        'depth' => 1
                    ) )
                     ?>
                </nav>
            </div>
            <?php wp_footer(); ?>
        </footer>
    </div>
</body>
</html>