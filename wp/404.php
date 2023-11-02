<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена</title>
    <?php wp_head(); ?>
</head>
    <body>
        <div class="container">
            <div class="error">
                <div class="error__text">
                    <h1>Упс, ошибка&nbsp;404</h1>
                    <p>На этой странице ничего нет. Возможно, вы ввели неверный символ в браузерной строчке или эту страницу удалил автор.</p>
                    <a href="<?php echo home_url(); ?>">Вернуться на главную</a>
                </div>
                <div class="error__img"><img src="<?php echo BLOGFRONTENDBLOK_IMG_DIR ?>/404.png" alt=""></div>
            </div>
        </div>
    </body>
</html>