<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
    <title>ProTeplici.ru - <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

    <main>
    <header class="header">
            <div class="container header-container">
                <div class="header-top df aic jcsb">
                    <div class="header-left">
                        <a href="/">
                            <div class="header-logo">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo/main-logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="header-right df fdc">
                        <div class="header-tools df aic jcsb">
                            <div class="main-header__search">
                                <input type="search" placeholder="Поиск...">
                            </div>
                            <div class="header-button cb-button">
                                Заказать звонок
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom df jcsb">
                    <ul class="main-menu df aic">
                        <li><a href="/">Главная</a></li>
                        <li class="menu-catalog-link"><a href="/shop">Каталог</a></li>
                        <li><a href="/about">О нас</a></li>
                        <li><a href="/delivery">Доставка</a></li>
                        <li><a href="/payment">Оплата</a></li>
                        <li class="menu-sale-link"><a href="/sale">% Акции</a></li>
                        <li><a href="/reviews">Отзывы</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                    </ul>
                    <div class="header-links df aic">
                        <div class="header-phone">
                            <a href="tel:+73912845544">
                                <p class="header-tel"><span>+7 391</span>284 - 55 - 44</p>
                            </a>
                        </div>
                        <div class="header-cart">
                            <a href="/cart">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico/bag-tick.svg" alt="cart">
                                <p class="count">0</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
