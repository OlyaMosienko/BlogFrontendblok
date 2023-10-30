<?php get_header() ?>

<main class="main">
    <div class="container">
        <div class="scroll-menu _post">
            <?php get_sidebar(); ?>
            <div class="page post">
                <div class="post__sticky">
                    <div class="post__scroll">
                        <div class="article">
                            <article class="main-article">
                                <h1 class="title"><?php the_title(); ?></h1>
                                <p class="student">Эту статью написал студент FrontendBlok</p>
                                <nav class="article-nav">
                                    <h3 class="article-nav__title">В этой статье:</h3>
                                    <ul class="article-nav__list">
                                        <li>
                                            <a href="">EM</a>
                                            <ul>
                                                <li><a href="">Классика: тестовая пирамида</a></li>
                                                <li><a href="">Классика: тестовая пирамида</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Документация</a></li>
                                        <li><a href="">Смотреть видео</a></li>
                                    </ul>
                                </nav>
                                <div class="article__about">
                                    <div class="post__categories">
                                        <a href="category.html" class="article__category _code">Код</a>
                                        <a href="category.html" class="article__category _motivation">Мотивация</a>
                                        <a href="category.html" class="article__category _tech">Технологии</a>
                                    </div>
                                    <div class="article__info">
                                        <div class="author">
                                            <a href="#"><?php echo get_avatar($author->ID, 50); ?></a>
                                            <div class="author__info">
                                                <h4 class="author__name"><a href="#"><?php the_author_meta('display_name', $post->post_author); ?></a></h4>
                                                <span class="author__date"><?php echo get_the_date('j F Y'); ?></span>
                                            </div>
                                        </div>
                                        <div class="article__footer">
                                            <span class="article__comment">10</span>
                                            <span class="article__views">850</span>
                                            <span class="article__time">~25 мин</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-article__thumb">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </div>
                                <div class="post__body">
                                    <p>Всем привет, меня зовут Анна Блок и в этой статье мы продолжим говорить про единицы измерения CSS. <a href="">Предыдущая статья</a> была связана с тем, что я описывала все значения, которые можно использовать относительно такого свойства, как font-size, но при этом я не сделала совершенно никаких выводов для того, что бы вам стало ясно какую единицу измерения использовать и в какой ситуации. Исправлю это недоразумение.</p>
                                    <p>Выводы сформулирую в конце этой статьи. В начале поговорим о том, как использовать эти единицы измерения для других свойств, которые связаны с шириной и высотой: width, height, padding, margin, border-radius. Конечно же, все эти аспекты нужно рассматривать с точки зрения теории-практики, поэтому поехали.</p>
                                    <div class="article__advice advice">
                                        <div class="advice__text">
                                            <h2 class="advice__title">Рекомендация от нас</h2>
                                            <p>Если ты только учишься, то рекомендуем пройти Бесплатный Марафон <a href="">«Основы веб-разработки»</a>. Идеально подойдет даже тем, кто впервые слышит слово «веб-разработка».</p>
                                        </div>
                                        <div class="advice__img"><img src="/img/recommend.png" alt=""></div>
                                    </div>
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        </div>
                        <div class="socials">
                            <h2 class="socials__title">Интернет-журнал от&nbsp;FrontendBlok для фронтендеров и&nbsp;не&nbsp;только</h2>
                            <div class="socials__list">
                                <a href="https://www.youtube.com/channel/UCn5wduCq2Mus0v85QZn9IaA?sub_confirmation=1" class="socials__yt" target="_blank">Youtube
                                    <svg width="30" height="22" viewBox="0 0 30 22" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill"  fill-rule="evenodd" clip-rule="evenodd" d="M26.7379 1.22282C28.0229 1.56879 29.0361 2.58196 29.3821 3.86696C30.0246 6.21457 29.9999 11.1075 29.9999 11.1075C29.9999 11.1075 29.9999 15.9756 29.3821 18.3232C29.0361 19.6082 28.0229 20.6214 26.7379 20.9674C24.3903 21.5852 14.9999 21.5852 14.9999 21.5852C14.9999 21.5852 5.63424 21.5852 3.26193 20.9427C1.97693 20.5967 0.963752 19.5835 0.61779 18.2985C0 15.9756 0 11.0827 0 11.0827C0 11.0827 0 6.21457 0.61779 3.86696C0.963752 2.58196 2.00164 1.54407 3.26193 1.19811C5.60953 0.580322 14.9999 0.580322 14.9999 0.580322C14.9999 0.580322 24.3903 0.580322 26.7379 1.22282ZM19.8187 11.0827L12.0098 15.5803V6.58524L19.8187 11.0827Z"/>
                                    </svg>
                                </a>
                                <a href="https://vk.com/tpverstak" class="socials__vk" target="_blank">Вконтакте
                                    <svg width="32" height="20" viewBox="0 0 32 20" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill" id="Vkontakte (VK)" fill-rule="evenodd" clip-rule="evenodd" d="M31.2658 1.86737C31.4884 1.12569 31.2658 0.580566 30.2071 0.580566H26.7062C25.816 0.580566 25.4059 1.05143 25.1834 1.5708C25.1834 1.5708 23.403 5.91006 20.8809 8.72872C20.0649 9.54466 19.6941 9.80397 19.249 9.80397C19.0264 9.80397 18.7044 9.54466 18.7044 8.80299V1.86737C18.7044 0.97716 18.4461 0.580566 17.7041 0.580566H12.2028C11.6467 0.580566 11.3121 0.993663 11.3121 1.38525C11.3121 2.2292 12.5729 2.42375 12.703 4.7973V9.95275C12.703 11.083 12.4989 11.2881 12.0538 11.2881C10.867 11.2881 7.98036 6.92905 6.26796 1.94163C5.93238 0.972158 5.59581 0.580566 4.7011 0.580566H1.20028C0.200047 0.580566 0 1.05143 0 1.5708C0 2.49801 1.18703 7.09709 5.52629 13.1795C8.41947 17.333 12.4949 19.585 16.2038 19.585C18.4293 19.585 18.7044 19.0849 18.7044 18.2234V15.084C18.7044 14.0837 18.9152 13.8842 19.6196 13.8842C20.1392 13.8842 21.0292 14.1437 23.1064 16.1465C25.4799 18.5198 25.871 19.585 27.2064 19.585H30.7072C31.7074 19.585 32.2075 19.0849 31.919 18.0979C31.6034 17.1142 30.4701 15.6873 28.9663 13.9954C28.1503 13.031 26.9263 11.9925 26.5557 11.4734C26.0363 10.8057 26.1846 10.5091 26.5557 9.916C26.5557 9.916 30.8207 3.90759 31.2658 1.86762V1.86737Z"/>
                                        </svg>
                                </a>
                                <a href="https://t.me/tpverstak" class="socials__tg" target="_blank">Telegram
                                    <svg width="28" height="25" viewBox="0 0 28 25" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill" id="Telegram" fill-rule="evenodd" clip-rule="evenodd" d="M21.255 23.9671C22.9325 24.701 23.5616 23.1633 23.5616 23.1633L28 0.866361C27.9651 -0.636408 25.9381 0.272243 25.9381 0.272243L1.08994 10.0228C1.08994 10.0228 -0.0982929 10.4421 0.00655147 11.1761C0.111396 11.91 1.055 12.2595 1.055 12.2595L7.31071 14.3563C7.31071 14.3563 9.19791 20.5422 9.58234 21.7304C9.93182 22.8837 10.2464 22.9186 10.2464 22.9186C10.5958 23.0584 10.9104 22.8138 10.9104 22.8138L14.9643 19.1442L21.255 23.9671ZM22.3384 4.81546C22.3384 4.81546 23.2121 4.29124 23.1772 4.81546C23.1772 4.81546 23.317 4.88535 22.8626 5.37463C22.4433 5.79401 12.5529 14.6708 11.2249 15.8591C11.1201 15.929 11.0502 16.0338 11.0502 16.1736L10.6657 19.4587C10.5958 19.8082 10.1415 19.8432 10.0367 19.5286L8.39411 14.1466C8.32421 13.9369 8.39411 13.6923 8.6038 13.5525L22.3384 4.81546Z"/>
                                        </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="post__nav">
                        <nav class="article-nav">
                            <h3 class="article-nav__title">В этой статье:</h3>
                            <ul class="article-nav__list">
                                <li>
                                    <a href="">EM</a>
                                    <ul>
                                        <li><a href="">Классика: тестовая пирамида</a></li>
                                        <li><a href="">Классика: тестовая пирамида</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Документация</a></li>
                                <li><a href="">Смотреть видео</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="post__footer">
                    <div class="post__recommend">
                        <div class="recommend-swiper__head">
                            <h2>Похожие статьи</h2>
                            <div class="recommend-swiper__nav">
                                <div class="swiper-button-prev recommend-swiper__prev"></div>
                                <div class="swiper-button-next recommend-swiper__next"></div>
                            </div>
                        </div>
                        <div class="swiper recommend-swiper">
                            <div class="swiper-wrapper">
                            <?php
                                $query_args = array(
                                    'post_per_page' => '2',
                                    'paged' => get_query_var('paged') ?: 1,
                                    'post__not_in' => array($post->ID)
                                );
                            ?>
                            <?php wp_reset_query(); $query = new WP_Query($query_args); ?>
                                <?php if($query->have_posts()) {
                                    while($query->have_posts()) {
                                        $query->the_post();
                                ?>
                                <div class="swiper-slide article__item recommend-swiper__item">
                                    <div class="article__thumb">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'large' ); ?>
                                        </a>
                                    </div>
                                    <div class="article__about">
                                        <a href="category.html" class="article__category">Код</a>
                                        <h3 class="article__title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="article__info">
                                            <div class="author">
                                                <a href="#"><img src="img/author.png" alt="" class="author__img"></a>
                                                <div class="author__info">
                                                    <h4 class="author__name"><a href="#"><?php the_author_meta('display_name'); ?></a></h4>
                                                    <span class="author__date"><?php echo get_the_date('j F Y'); ?></span>
                                                </div>
                                            </div>
                                            <div class="article__footer">
                                                <span class="article__views">850</span>
                                                <span class="article__time">~25 мин</span>
                                                <a href="<?php the_permalink(); ?>" class="article__link">Читать далее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <form class="comments-form">
                        <div class="comments-form__areas">
                            <textarea class="comments-form__textarea" placeholder="Введите комментарий*"></textarea>
                            <div class="comments-form__inputs">
                                <input type="text" class="comments-form__input" placeholder="Введите имя*">
                                <input type="email" class="comments-form__input" placeholder="Введите e-mail*">
                            </div>
                        </div>
                        <div class="button">
                            <a href="#" class="btn">Отправить</a>
                        </div>
                    </form>
                    <div class="comments">
                        <h2 class="comments__title">Комментарии</h2>
                        <div class="comments__item">
                            <div class="author">
                                <a href="#"><img src="img/author.png" alt="" class="author__img"></a>
                                <div class="author__info">
                                    <h4 class="author__name"><a href="#">Анна Блок</a></h4>
                                    <span class="author__date">28 июля 2023</span>
                                </div>
                            </div>
                            <p>В начале описания каждой же программы проставлена цена и условия работы демо-версии. Нажмите Ctrl + F  и напишите «бесплатно». Это слово на странице вы найдете только в своем комментарии.</p>
                            <div class="comments__functions _close-comments">
                                <div class="replay"><a href="">Ответить</a></div>
                                <div class="close-btn"><a href="">Свернуть</a></div>
                            </div>
                        </div>
                        <div class="comments__item answer">
                            <div class="author">
                                <a href="#"><img src="img/author.png" alt="" class="author__img"></a>
                                <div class="author__info">
                                    <h4 class="author__name"><a href="#">Анна Блок</a></h4>
                                    <span class="author__date">28 июля 2023</span>
                                </div>
                            </div>
                            <p>Большое спасибо за ответ, всё стало понятно</p>
                            <div class="comments__functions">
                                <div class="replay"><a href="">Ответить</a></div>
                            </div>
                        </div>
                        <div class="comments__item ">
                            <div class="author">
                                <a href="#"><img src="img/author.png" alt="" class="author__img"></a>
                                <div class="author__info">
                                    <h4 class="author__name"><a href="#">Анна Блок</a></h4>
                                    <span class="author__date">28 июля 2023</span>
                                </div>
                            </div>
                            <p>В начале описания каждой же программы проставлена цена и условия работы демо-версии. Нажмите Ctrl + F  и напишите «бесплатно». Это слово на странице вы найдете только в своем комментарии.</p>
                            <div class="comments__functions _open-comments">
                                <div class="replay"><a href="">Ответить</a></div>
                                <div class="open-btn"><a href="">Просмотреть все комментарии</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>