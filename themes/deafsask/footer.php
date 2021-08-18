<footer>
    <div class="footer-wrapper">
        <div class="informed">
            <p>STAY INFORMED</p>
        </div>
        <div class="section">
            <div class="contact">
                <?php echo do_shortcode('[wpforms id="133" title="false"]') ?>
            </div>
        </div>
        <div class="section">
            <div class="footer-menu">
                <h2>Menu</h2>
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-menu'
                )) ?>
            </div>
            <div class="social_media footer_social">
                <ul>
                    <li><a href="<?php echo esc_url(site_url('/')) ?>"><i class="fas fa-home"></i></a></li>
                    <li id="fa-search"><i class="fas fa-search"></i></li>
                    <li><i class="fas fa-envelope"></i></li>
                    <li><i class="fab fa-facebook-square"></i></li>
                    <li><a href="#top"><i class="fas fa-arrow-up"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="advert">
    <div class="dean">
        <a href="http://deanwiebe.ca/"><p> www.deanwiebe.ca &copy 2021</p></a>
    </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>