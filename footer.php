<footer class="site-footer">
            <div class="container">
                <div class="copyright">
                <p>Copy &copy; <?php echo date("Y"); ?> Theme Dev. All rights reserved.</p>
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
        </footer>
    </div>
</body>
</html>