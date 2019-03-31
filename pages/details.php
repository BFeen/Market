<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/dest/details.css">
    <title>Каталог магазина</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__item">
                <div class="logo logo_margin-right"></div>
                <nav class="navigation">
                    <a href="#" class="navigation__link">Женщинам</a>
                    <a href="#" class="navigation__link">Мужчинам</a>
                    <a href="#" class="navigation__link">Детям</a>
                    <a href="#" class="navigation__link">Новинки</a>
                    <a href="#" class="navigation__link">О нас</a>
                </nav>
            </div>
            <div class="header__item">
                <div class="login login_margin-right">
                    <div class="login__pic"></div>
                    <p class="inside-text">
                        Привет, Алексей (<span class="inside-text_orange">выйти</span>)
                    </p>
                </div>
                <div class="basket basket_margin-right">
                    <div class="basket__logo"></div>
                    <p class="inside-text">
                        Корзина (5)
                    </p>
                </div>
            </div>
        </header>
        <div class="path">
            <p>Главная</p>
        </div>
        <main class="main">
            <section class="section product">
                <?php

                    if( $db = mysqli_connect('localhost', 'root', '', '02112018_3project')) {
                        mysqli_set_charset($db, 'utf8');
                    } else {
                        echo 'Не удалось подключиться к базе данных';
                        die();
                    }
                
                    // include($_SERVER['DOCUMENT_ROOT'] . '/config/config.php'); НЕ РАБОТАЕТ (((
                    if ($_GET['productId'] != null) {
                        $sql = "SELECT * FROM products WHERE id = '{$_GET['productId']}'";
                        $result = mysqli_query($db, $sql);
                        $template = mysqli_fetch_assoc($result);
                    }
                ?>
                <div class="product__photo" style="background-image: url(<?=$template['photo']?>)"></div>
                <h2 class="product__title"><?=$template['name']?></h2>
                <p class="product__article">Артикул: <?=$template['sku']?></p>
                <p class="product__cost"><?=$template['price']?> руб.</p>
                <p class="product__text"><?=$template['description']?></p>
                <p class="">РАЗМЕР</p>
                <div class="size">
                    <div class="size__item">38</div>
                    <div class="size__item">39</div>
                    <div class="size__item">40</div>
                    <div class="size__item">41</div>
                    <div class="size__item">42</div>
                </div>
                <button class="product__btn">Добавить в корзину</button>
            </section>
        </main>
        <footer class="footer">
            <div class="footer__item">
                <h3 class="footer__title">Коллекции</h3>
                <a href="#" class="footer__text">Женщинам (1725)</a>
                <a href="#" class="footer__text">Мужчинам (635)</a>
                <a href="#" class="footer__text">Детям (2517)</a>
                <a href="#" class="footer__text">Новинки (76)</a>
            </div>
            <div class="footer__item">
                <h3 class="footer__title">Магазин</h3>
                <a href="#" class="footer__text">О нас</a>
                <a href="#" class="footer__text">Доставка</a>
                <a href="#" class="footer__text">Работа с нами</a>
                <a href="#" class="footer__text">Контакты</a>
            </div>
            <div class="footer__item">
                <h3 class="footer__title">Мы в социальных сетях</h3>
                <p class="footer__text">Сайт разработан в inordic.ru</p>
                <p class="footer__text">2018 &copy; Все права защищены</p>
                <div class="social">
                    <a href="#" class="social__icon social__icon_margin-right tw"></a>
                    <a href="#" class="social__icon social__icon_margin-right fb"></a>
                    <a href="#" class="social__icon social__icon_margin-right inst"></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>