    <footer>
        <div class="container">
            <div class="footer">
                <section class="subscribe _footer">
                    <h2 class="subscribe__title">Подпишись на рассылку</h2>
                    <div class="subscribe__area">
                        <input type="email" placeholder="Ваш e-mail" class="subscribe__input">
                        <button type="submit" class="button">отправить</button>
                    </div>
                </section>
                <a href="https://blog.frontendblok.com/">
                    <img src="<?php echo BLOGFRONTENDBLOK_IMG_DIR ?>/logo.svg" alt="Frontend Blok" class="logo _footer"/>
                </a>
                <div class="footer__socials">
                    <a href="https://www.youtube.com/channel/UCn5wduCq2Mus0v85QZn9IaA?sub_confirmation=1" class="social _yt" target="_blank"></a>
                    <a href="https://vk.com/tpverstak" class="social _vk" target="_blank"></a>
                    <a href="https://t.me/tpverstak" class="social _tg" target="_blank"></a>
                    <a href="https://www.instagram.com/frontendblok/" class="social _ig" target="_blank"></a>
                </div>
                <div class="footer__menu">
                    <div class="footer__courses">
                        <h3 class="footer__title">Курсы</h3>
                        <div class="footer__list">
                            <a href="https://frontendblok.com/courses/html-css" class="footer__item">Базовый курс по&nbsp;верстке</a>
                            <a href="https://frontendblok.com/courses/advanced-html-css" class="footer__item">Продвинутый курс по&nbsp;верстке</a>
                            <a href="https://frontendblok.com/courses/javascript" class="footer__item">Курс JavaScript с нуля</a>
                            <a href="https://frontendblok.com/courses/qa" class="footer__item">Ручное тестирование</a>
                            <a href="https://frontendblok.com/courses/wordpress" class="footer__item">Интенсив Wordpress</a>
                            <a href="https://frontendblok.com/courses/work" class="footer__item">Трудоустройство и фриланс</a>
                        </div>
                    </div>
                    <div class="footer__marathons">
                        <h3 class="footer__title">Марафоны</h3>
                        <div class="footer__list">
                            <a href="https://frontendblok.com/marathons/flexbox-marathon" class="footer__item">Марафон Flexbox CSS</a>
                            <a href="https://frontendblok.com/marathons/grid-marathon" class="footer__item">Марафон Grid CSS</a>
                            <a href="https://frontendblok.com/marathons/svg-marathon" class="footer__item">Марафон SVG для&nbsp;Web</a>
                            <a href="https://frontendblok.com/marathons/email-marathon" class="footer__item">Марафон Email Вёрстка</a>
                            <a href="https://frontendblok.com/marathons/multipage-website" class="footer__item">Многостраничный сайт</a>
                        </div>
                    </div>
                </div>
                <div class="footer__rules">
                    <span class="footer__copyright">&reg; frontendblok 2019 - ∞,&nbsp;<br>Все права защищены</span>
                    <a href="https://frontendblok.com/pdf/Политика обработки персональных Frontend Blok.pdf" class="footer__rule">Политика конфиденциальности</a>
                    <a href="https://frontendblok.com/pdf/Публичная оферта Frontend Blok.pdf" class="footer__rule">Публичная оферта</a>
                </div>
                <div class="footer__dataset">
                    <span class="footer__data">ИНН 663005760277</span>
                    <span class="footer__data">ОГРНИП 319665800052422</span>
                </div>
            </div>
        </div>
    </footer>
    <div class="overlay _search" id="overlay">
        <div class="modal-search">
            <div class="search-area">
                <?php get_search_form(); ?>
                <button type="button" class="search-area__close"  id="searchClose"></button>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlayMenu">
        <div class="modal">
            <nav>
                <ul class="modal__nav">
                    <li>
                        <a href="category.html">Код</a>
                    </li>
                    <li>
                        <a href="category.html">Карьера</a>
                    </li>
                    <li>
                        <a href="category.html">Мотивация</a>
                    </li>
                    <li>
                        <a href="category.html">Технологии</a>
                    </li>
                    <li>
                        <a href="category.html">События</a>
                    </li>
                    <li>
                        <a href="http://frontendblok.com" class="header__link" target="_blank">FrontendBlok
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill" d="M7 7H17V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="fill" d="M7 17L17 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="header__socials">
                    <a href="https://www.youtube.com/channel/UCn5wduCq2Mus0v85QZn9IaA?sub_confirmation=1" class="social _yt" target="_blank"></a>
                    <a href="https://t.me/tpverstak" class="social _tg" target="_blank"></a>
                    <a href="https://vk.com/tpverstak" class="social _vk" target="_blank"></a>
                </div>
            </nav>
        </div>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>