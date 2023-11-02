<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-журнал FrontendBlok</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="header">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo BLOGFRONTENDBLOK_IMG_DIR ?>/logo.svg" alt="Frontend Blok" class="logo">
                </a>
                <div class="header__items">
                    <button class="header__search header__btn" id="searchBtn">
                        <img src="<?php echo BLOGFRONTENDBLOK_IMG_DIR ?>/search.svg" alt="">
                    </button>
                    <button class="header__menu header__btn" id="burger">
                        <div class="burger-btn">
                            <span class="burger-btn__block">
                                <span class="burger-btn__inner"></span>
                            </span>
                        </div>
                    </button>
                </div>
                <div class="header__items _desc">
                    <div class="search-area">
                        <?php get_search_form(); ?>
                    </div>  
                    <div class="header__socials">
                        <a href="https://www.youtube.com/channel/UCn5wduCq2Mus0v85QZn9IaA?sub_confirmation=1" class="social _yt" target="_blank"></a>
                        <a href="https://t.me/tpverstak" class="social _tg" target="_blank"></a>
                        <a href="https://vk.com/tpverstak" class="social _vk" target="_blank"></a>
                    </div>
                    <a href="http://frontendblok.com" class="header__link" target="_blank">
                        <span>FrontendBlok</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill" d="M7 7H17V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path class="fill" d="M7 17L17 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>    
    </header>