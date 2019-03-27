<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/dest/catalog.css">
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
            <p>Главная / Мужчинам</p>
        </div>
        <main class="main">
            <h1 class="main__title">Мужчинам</h1>
            <p class="main__text">Все товары</p>
            <form method="GET" class="filter">
                <select class="filter__item" name="category">
                    <option>Категория</option>
                    <option value="outerwear">Верхняя одежда</option>
                    <option value="underwear">Нижняя одежда</option>
                    <option value="pants">Штаны</option>
                </select>
                <select class="filter__item" name="size">
                    <option>Размер</option>
                    <option value="l">L</option>
                    <option value="m">M</option>
                    <option value="s">S</option>
                </select>
                <select class="filter__item" name="cost">
                    <option>Стоимость</option>
                    <option value="1000">0 - 1000 руб.</option>
                    <option value="3000">1000 - 3000 руб.</option>
                    <option value="6000">3000 - 6000 руб.</option>
                    <option value="20000">6000 - 20000 руб.</option>
                </select>
            </form>
            <section class="section">
                <div class="catalog">
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                    <div class="card">
                        <div class="card__pic"></div>
                        <div class="card__title">Наименование товара</div>
                        <div class="card__cost">1000 руб.</div>
                    </div>
                </div>
            </section>
            <div class="pages">
                <div class="pages__item pages__item_active">1</div>
                <div class="pages__item">2</div>
                <div class="pages__item">3</div>
                <div class="pages__item">4</div>
            </div>
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
    <script src="/js/catalog.js"></script>
</body>
</html>