<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фирменный магазин Apple - iStore</title>
    <link rel="icon" type="image/jpeg" href="static/_image/istore_favicon.jpeg">
    <meta name="description" content="Фирменный магазин">
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/style.css@v=1628940413,8448784.css">
    <link href="static/css/aos.css" rel="stylesheet">

</head>
<body>
<div class="preloader" style="background: white;">
    <div class="preloader__row">
        <div class="preloader__item">
            <img src="static/_image/apple01.svg">
        </div>
        <div class="loaderqw">
        </div>
    </div>
</div>

<div class="main-wrapper">
    <div class="overlay-wrapper"></div>

    <nav class="nav-wrapper position-fixed w-100 need-fixed">
        <div class="overlay-wrapper"></div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark need-full-height  w-100 first-nav">
            <div class="container">
                <div class="mobile-menu-container d-lg-none d-flex align-items-center">
                    <button class="navbar-toggler border-0 p-0 nav-icon-opener" type="button" data-toggle="collapse"
                            data-target="#navbar-main"
                            aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                </div>
                <a class="navbar-brand d-lg-none d-block sf-sem mx-auto" href="index.html"><img
                        src="static/_image/logo_white.png" alt="" style="width:55px;"></a>
                <li class="dropdown align-items-center d-lg-none d-flex">
                    <button class="nav-link sf-reg p-0 bg-none border-0 o-none mr-3" id="mobileSearch">
                        <img src="static/img/white-search.svg" alt="">
                    </button>
                    <button class="nav-link sf-reg p-0 bg-none border-0 o-none" id="mobileBasket">
                        <img src="static/img/mobile-union.svg" alt="">
                        <div class="shop-round">0</div>
                    </button>
                </li>
                <div class="collapse navbar-collapse px-0" id="navbar-main">
                    <ul class="navbar-nav custom-nav justify-content-between mr-auto mobile-link-content">

                        <li class="nav-item active">
                            <a class="nav-link sf-reg pl-0" href="index.html" data-aos="fade-zoom-in"
                               data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">Главная</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link sf-reg" href="about-us.html" data-aos="fade-zoom-in"
                               data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">О нас</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link sf-reg" href="catalog/index.html" data-aos="fade-zoom-in"
                               data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">Продукция</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link sf-reg" href="warranty.html" data-aos="fade-zoom-in"
                               data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">Гарантия</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link sf-reg" href="loan.html" data-aos="fade-zoom-in"
                               data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">Оформление в
                                кредит</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link sf-reg" href="articles.html" data-aos="fade-zoom-in"
                               data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">Новости</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link sf-reg" href="contacts.html" data-aos="fade-zoom-in"
                               data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">Контакты</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link sf-reg" href="catalog/accessory.html" data-aos="fade-zoom-in"
                               data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">Аксессуары</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link sf-reg" href="service.html" data-aos="fade-zoom-in"
                               data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">Сервис</a>
                        </li>

                        <li class="nav-item d-lg-none d-block ">
                            <a class="nav-link sf-reg" href="catalog/tradeIn.html">Trade In</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="mobileBasket" style="display: none">
                <div class="basket-inner col-10 mx-auto  d-none ">
                    <p class="sf-bold text-center">Корзина</p>
                    <p class="sf-light bb-grey text-center">Товаров: <span
                            class="product-counter">0</span></p>
                    <div class="basket-place">

                    </div>

                    <a href="https://istore.kg/checkout"
                       class="btn btn-primary w-100 mt-4  waves-effect waves-light mr-0">
                        ОФОРМИТЬ ЗАКАЗ
                    </a>
                </div>

                <div class="d-flex d-none  empty-basket flex-column align-items-center justify-content-center my-3">
                    <img src="static/img/empty-basket.svg" alt="">
                    <p class="sf-medium empty-text">
                        Корзина пуста
                    </p>
                </div>
                <div class="col-10 mx-auto mb-4">
                    <div class="basket-link d-flex">
                        <img src="static/img/b-union.svg" alt="">
                        <a class="sf-reg link" href="basket.html">Корзина</a>
                    </div>
                </div>
            </div>
            <div class="mobileSearch bg-white p-2 d-lg-none" style="display: none">
                <input class="main-search form-control sf-reg o-none" type="search"
                       placeholder="Поиск по всем категориям" aria-label="Search">
                <div class="search-result m-2">
                    <div class="search-result bg-white mb-2 d-none"
                         style="right: 0; top: 160%;width:100%; z-index:12;">
                        <p class="sf-light mb-2">Найдено по заросу</p>
                        <div class="content w-100 overflow-auto" style="max-height:500px;">

                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-flex d-none w-100 second-nav"
             style="padding: 0% 2.3%;">
            <div class="container px-3">
                <a class="navbar-brand sf-sem" href="index.html" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                   data-aos-delay="10" data-aos-offset="0"><img src="static/_image/istore_logo.png" alt=""
                                                                style="width:70px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav col justify-content-between" style="min-width: 574px;">
                        <li class="nav-item">
                            <p class="nav-link sf-reg" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                               data-aos-delay="10" data-aos-offset="0">
                                Фирменный магазин <br> Apple в Бишкеке</p>
                        </li>
                        <li class="nav-item">
                            <p class="nav-link sf-reg" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                               data-aos-delay="10" data-aos-offset="0">
                                пр. Манаса, 40 (пер. ул. Киевская) <br> <span
                                    class="text-dark"> Пн - Вс  10:00 - 20:00</span>
                            </p>
                        </li>
                        <li class="nav-item dropdown align-items-center d-flex">
                            <p class="nav-link sf-sem text-dark" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                               data-aos-delay="10" data-aos-offset="0">
                                +996 (555) 802 000 <br> +996 (505) 802 000</p>
                        </li>
                    </ul>
                    <div class="search-wrap ml-3">
                        <input class="main-search form-control mr-sm-2 sf-reg o-none" type="search"
                               placeholder="Поиск по всем категориям" aria-label="Search">
                        <a href="index.html" class="goToSearch d-none"></a>
                        <div class="position-relative">
                            <div class="position-absolute search-result bg-white mt-2 d-none"
                                 id="search-result" style="right: 0; top: 160%;width:100%; z-index:12;">

                                <div class="search-result bg-white mt-2 d-none"
                                     id="search-result-with-text" style="right: 0; top: 160%;width:100%; z-index:12;">
                                    <p class="sf-light mb-2">Найдено по заросу</p>
                                    <div class="content w-100 overflow-auto" style="max-height:500px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ml-2  h-100 position-relative" style="transition: 1s;">
                        <div class="dropdown align-items-center d-flex">
                            <a class="sf-reg d-flex align-items-center h-100 w-100" href="basket.html">
                                <img src="static/img/union.svg" alt="">
                                <div class="shop-round">0</div>
                            </a>
                            <div class="dropdown-menu basket-menu" aria-labelledby="nav-phone">

                                <div class="basket-inner  d-none ">

                                    <p class="sf-bold text-center">Корзина</p>
                                    <p class="sf-light bb-grey text-center">Товаров: <span
                                            class="product-counter">0</span></p>
                                    <div class="basket-place">

                                    </div>
                                    <a href="https://istore.kg/checkout"
                                       class="btn btn-primary w-100 mt-4  waves-effect waves-light mr-0">
                                        ОФОРМИТЬ ЗАКАЗ
                                    </a>
                                </div>
                                <div class="d-flex d-none  flex-column align-items-center justify-content-center my-3 empty-basket">
                                    <div class="d-flex flex-column align-items-center justify-content-center my-3 empty-basket">
                                        <img src="static/img/empty-basket.svg" alt="">
                                        <p class="sf-medium empty-text">
                                            Корзина пуста
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-grey d-lg-flex d-none w-100 third-nav">
            <div class="collapse navbar-collapse container">
                <ul class="w-100 px-0 navbar-nav justify-content-between">
                    <li class="nav-item d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column pl-0" href="catalog/iphone.html"><img
                                src="static/img/iphone.svg" alt="" class="ho-ic">
                            iPhone</a>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-end text-center" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column" href="catalog/macBook.html"><img
                                src="static/img/macbook.svg" alt="">
                            Mac</a>
                    </li>
                    <li class="nav-item  d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column" style="text-align: center;"
                           href="catalog/iPad.html"><img src="static/img/ipad.svg" alt="">
                            iPad</a>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column" style="text-align: center;"
                           href="catalog/iMac.html"><img src="static/img/iMac.svg" alt="">
                            iMac</a>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column" href="catalog/apple-watch.html"><img
                                src="static/img/watch.svg" alt="">
                            Watch</a>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column" href="catalog/airpods.html"><img
                                src="static/img/airpods.svg" alt="">
                            AirPods</a>
                    </li>

                    <li class="nav-item d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column" href="catalog/gadgets.html"><img
                                src="static/img/apple_tv.svg" alt="">
                            Гаджеты</a>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column" href="catalog/accessory.html"><img
                                src="static/img/accessory.svg" alt="">
                            Аксессуары</a>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column" href="service.html"><img
                                src="static/img/repair.svg" alt="">
                            Сервис</a>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column" href="compare.html"><img
                                src="static/img/comparison.svg" alt="">
                            Сравнение</a>
                    </li>
                    <li class="nav-item d-flex flex-column justify-content-end" data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back" data-aos-delay="10" data-aos-offset="0">
                        <a class="nav-link sf-reg d-flex flex-column pr-0"
                           href="catalog/tradeIn.html"><img src="static/img/trad-icc.svg" alt="">
                            Trade In</a>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>

	<h1>worksa</h1>
