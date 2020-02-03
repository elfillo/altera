<footer class="footer">
    <div class="container">
        <div class="box box_menu">
            <a href="/" class="logo">
                <img src="<?php echo get_template_directory_uri()?>/img/logo/logo_white.png" alt="png">
            </a>
            <ul>
                <li><a href="#">главная</a></li>
                <li><a href="#">о компании</a></li>
                <li><a href="#">реквизиты</a></li>
                <li><a href="#">вакансии</a></li>
                <li><a href="#">отзывы</a></li>
                <li><a href="#">бренды</a></li>
                <li><a href="#">блог</a></li>
                <li><a href="#">услуги</a></li>
                <li><a href="#">акции</a></li>
                <li><a href="#">портфолио</a></li>
                <li><a href="#">дизайн-проекты</a></li>
                <li><a href="#">обслуживание объектов</a></li>
            </ul>
        </div>
        <div class="box box_contact">
            <p>
                <span>Адрес:</span>
                Иркутск,<br/>
                ул. Пушкина, 1, корп. 1, оф. 303
            </p>
            <p>
                <span>Телефон:</span>
                8-800-800-80-80<br/><br/>
            </p>
            <p>
                <span>Почта:</span>
                altera@mail.ru
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