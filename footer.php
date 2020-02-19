<footer class="footer">
    <div class="container">
        <div class="box box_menu">
            <a href="/" class="logo">
                <img src="<?php echo get_template_directory_uri()?>/img/logo/logo_white.png" alt="png">
            </a>
	        <?php wp_nav_menu(array('theme_location'=>'Footer') );?>
        </div>
        <div class="box box_contact">
            <p>
                <span>Адрес:</span>
                Иркутск,<br/>
                ул. Партизанская, 63, МЦ «Эталон», 4 этаж.
            </p>
            <p>
                <span>Телефон:</span>
                <a href="tel:+73952504202">+7(3952)504-202</a> <br/>
                <a href="tel:+79148995787">+7914-8-995-787</a> <br/>
                <br/><br/>
            </p>
            <p>
                <span>Почта:</span>
                <a href="mailto:sale@irk-altera.ru">sale@irk-altera.ru</a>
            </p>
        </div>
        <div class="box">
            <div id="map"></div>
        </div>

    </div>
</footer>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/map.js"></script>
<?php wp_footer(); ?>
</body>

</html>