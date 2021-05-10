<footer>
    <div class='footer'>
        <div class='footer-profile'>
            <p>About me</p>
            <?php if (dynamic_sidebar('main-sidbar')) : else : endif; ?>
        </div>
    </div>
    <div class='fixed-page'>
        <?php wp_nav_menu(array(
            'theme_location'  => 'footer',
        )); ?>
    </div>
    <p class='copyright'><small>©️２０２１ Akina</small></p>
</footer>