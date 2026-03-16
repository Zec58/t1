<!DOCTYPE html>
<html xml:lang="ru" lang="ru" prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Калькуляторы строительства — СТРОЯ</title>
    <meta name="description" content="Онлайн-калькуляторы для расчёта стоимости строительства дома, фундамента, кровли, утеплителя и других материалов. Компания СТРОЯ — Москва и Подмосковье.">
    <meta property="og:title" content="Калькуляторы строительства — СТРОЯ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://s-troya.com/kalkulyator.php">
    <link rel="icon" type="image/svg+xml" href="https://s-troya.com/favicon.svg">
    <link href="https://s-troya.com/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- Стили сайта -->
    <link href="https://s-troya.com/local/templates/stroya/css/fonts.min.css" type="text/css" rel="stylesheet">
    <link href="https://s-troya.com/local/templates/stroya/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="https://s-troya.com/local/templates/stroya/css/style_header.min.css" type="text/css" rel="stylesheet">
    <link href="https://s-troya.com/local/templates/stroya/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://s-troya.com/local/templates/stroya/css/style_2.css" type="text/css" rel="stylesheet">
    <link href="https://s-troya.com/local/templates/stroya/css/style_3.css" type="text/css" rel="stylesheet">
    <link href="https://s-troya.com/local/templates/stroya/css/custom.css" type="text/css" rel="stylesheet">
    <link href="https://s-troya.com/local/templates/stroya/css/style-footer.css" type="text/css" rel="stylesheet">

    <style>
        /* ===== Хаб калькуляторов ===== */
        .calc-hub {
            max-width: 1200px;
            margin: 40px auto 60px;
            padding: 0 20px;
        }

        .calc-hub__intro {
            text-align: center;
            margin-bottom: 40px;
        }

        .calc-hub__intro p {
            font-size: 16px;
            color: #555;
            max-width: 680px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Сетка блоков */
        .calc-hub__grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        @media (max-width: 1024px) {
            .calc-hub__grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .calc-hub__grid {
                grid-template-columns: 1fr;
            }
        }

        /* Карточка калькулятора */
        .calc-card {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 6px;
            padding: 28px 24px 24px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-decoration: none;
            color: inherit;
            transition: box-shadow 0.2s, transform 0.2s, border-color 0.2s;
            position: relative;
            overflow: hidden;
        }

        .calc-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: #E07F36;
            transition: width 0.2s;
        }

        .calc-card:hover {
            box-shadow: 0 6px 24px rgba(0,0,0,0.10);
            transform: translateY(-2px);
            border-color: #E07F36;
            text-decoration: none;
            color: inherit;
        }

        .calc-card:hover::before {
            width: 6px;
        }

        .calc-card__icon {
            width: 52px;
            height: 52px;
            background: #FFF4EC;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            flex-shrink: 0;
        }

        .calc-card__icon svg {
            width: 26px;
            height: 26px;
            fill: #E07F36;
        }

        .calc-card__title {
            font-size: 17px;
            font-weight: 700;
            color: #222;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .calc-card__desc {
            font-size: 14px;
            color: #777;
            line-height: 1.5;
            flex: 1;
            margin-bottom: 18px;
        }

        .calc-card__btn {
            display: inline-block;
            background: #E07F36;
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 3px;
            text-decoration: none;
            transition: background 0.2s;
            letter-spacing: 0.02em;
        }

        .calc-card:hover .calc-card__btn {
            background: #c96b22;
        }

        /* Акцентная карточка (главный калькулятор) */
        .calc-card--featured {
            grid-column: span 2;
            flex-direction: row;
            align-items: center;
            gap: 28px;
            background: linear-gradient(135deg, #fff 60%, #FFF4EC 100%);
        }

        @media (max-width: 600px) {
            .calc-card--featured {
                grid-column: span 1;
                flex-direction: column;
            }
        }

        .calc-card--featured .calc-card__icon {
            width: 72px;
            height: 72px;
            flex-shrink: 0;
        }

        .calc-card--featured .calc-card__icon svg {
            width: 36px;
            height: 36px;
        }

        .calc-card--featured .calc-card__title {
            font-size: 20px;
        }

        .calc-card--featured .calc-card__desc {
            font-size: 15px;
        }
    </style>
</head>
<body class="simple">

<!-- ==================== HEADER ==================== -->
<header>
    <div class="header_top">
        <div class="wrapper">
            <div class="logo_menu">
                <div class="logo_text">
                    <div class="logo new_logo">
                        <a href="https://s-troya.com/" class="a"></a>
                    </div>
                    <div class="text_info">
                        Строительство каркасных домов под ключ и домов из бруса под усадку с гарантией 10 лет Москва и Московская область
                    </div>
                </div>

                <div class="menu">
                    <a href="https://s-troya.com/ipoteka-na-stroitelstvo-zagorodnego-doma/" class="mortgage_link">Ипотека от ведущих банков от<span class="num">6%</span>годовых</a>
                    <ul>
                        <li data-depth="1">
                            <span class="a">Заказчику</span>
                            <ul class="second">
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/about-company/">О компании</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/garantiya/">Гарантия</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/steps/">Этапы работ</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/news/">Новости</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/faq/">Вопрос-ответ</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/articles/">Блог</a></li>
                            </ul>
                        </li>
                        <li data-depth="1">
                            <a href="https://s-troya.com/projects/">Проекты</a>
                        </li>
                        <li data-depth="1">
                            <span class="a">Услуги</span>
                            <ul class="second">
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/ipoteka-na-stroitelstvo-zagorodnego-doma/">Ипотека</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/proektirovanie/">Проектирование домов</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/fundament/">Возведение фундамента</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/otdelka/">Внутренняя и наружняя отделка</a></li>
                            </ul>
                        </li>
                        <li data-depth="1">
                            <span class="a">Цены</span>
                            <ul class="second">
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/tseny-na-stroitelstvo-domov/">Строительство домов</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/tseny-na-stroitelstvo-domov/karkasnyye/">Каркасные дома</a></li>
                                <li class="non_child" data-depth="2"><a href="https://s-troya.com/tseny-na-stroitelstvo-domov/iz-brusa/">Дома из бруса</a></li>
                            </ul>
                        </li>
                        <li class="non_child" data-depth="1"><a href="https://s-troya.com/video-otzyvy/">Видеоотзывы</a></li>
                        <li class="non_child" data-depth="1"><a href="https://s-troya.com/contacts/">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_right">
        <a href="https://s-troya.com/ipoteka-na-stroitelstvo-zagorodnego-doma/" class="mortgage_block">
            <div class="name">
                <div class="title">ИПОТЕКА</div>
                <div class="domen">от ведущих банков</div>
            </div>
            <div class="pers">
                <div class="above">От</div>
                <div class="num">6%</div>
                <div class="year">Годовых</div>
            </div>
        </a>
        <div class="flex_block">
            <div id="search" class="bx-searchtitle search">
                <form action="https://s-troya.com/search/">
                    <div class="bx-input-group">
                        <input type="text" name="q" value="" autocomplete="off" class="search_text" placeholder="Поиск по сайту... ">
                        <button class="search_submit" type="submit" name="s"></button>
                    </div>
                </form>
            </div>
            <div class="tel_number">
                <a href="tel:+74951625306">+7 (495) 532-01-75</a>
                <span>ежедневно с 9:00 до 21:00</span>
            </div>
            <div class="call_button">
                <span>Обратный звонок</span>
            </div>
            <div class="click_menu_icons">
                <span>МЕНЮ</span>
                <div class="menu_icons">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== PAGE HEADING ==================== -->
<div class="page_heading">
    <div class="wrapper">
        <div class="top_line"></div>
        <div class="heading_icon"></div>
        <h1 class="page_header" data-heading-tag="H1">Калькуляторы</h1>
    </div>
</div>

<!-- ==================== CONTENT ==================== -->
<main>
    <section class="calc-hub">
        <div class="calc-hub__intro">
            <p>Воспользуйтесь нашими онлайн-калькуляторами, чтобы быстро оценить стоимость строительства и материалов. Выберите нужный раздел:</p>
        </div>

        <div class="calc-hub__grid">

            <!-- Главный калькулятор -->
            <a href="https://s-troya.com/kalkulyator/dom/" class="calc-card calc-card--featured">
                <div class="calc-card__icon">
                    <!-- Дом -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                    </svg>
                </div>
                <div>
                    <div class="calc-card__title">Калькулятор стоимости дома</div>
                    <div class="calc-card__desc">Рассчитайте примерную стоимость строительства каркасного дома или дома из бруса. Укажите этажность, площадь и комплектацию.</div>
                    <span class="calc-card__btn">Рассчитать стоимость</span>
                </div>
            </a>

            <!-- Фундамент -->
            <a href="https://s-troya.com/kalkulyator/fundament/" class="calc-card">
                <div class="calc-card__icon">
                    <!-- Фундамент / слои -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 20h20v-2H2v2zm2-4h16v-2H4v2zm-2-4h20v-2H2v2zm4-4h12V6H6v2z"/>
                    </svg>
                </div>
                <div class="calc-card__title">Калькулятор фундамента</div>
                <div class="calc-card__desc">Расчёт объёма бетона, количества арматуры и стоимости ленточного или свайного фундамента.</div>
                <span class="calc-card__btn">Рассчитать</span>
            </a>

            <!-- Кровля -->
            <a href="https://s-troya.com/kalkulyator/krovlya/" class="calc-card">
                <div class="calc-card__icon">
                    <!-- Кровля / треугольник -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 12h3v9h6v-5h2v5h6v-9h3L12 2z"/>
                    </svg>
                </div>
                <div class="calc-card__title">Калькулятор кровли</div>
                <div class="calc-card__desc">Расчёт площади кровли, количества и стоимости кровельных материалов под ваш тип крыши.</div>
                <span class="calc-card__btn">Рассчитать</span>
            </a>

            <!-- Металлочерепица -->
            <a href="https://s-troya.com/tseny-na-stroitelstvo-domov/metallocherepitsa/" class="calc-card">
                <div class="calc-card__icon">
                    <!-- Сетка / листы -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z"/>
                    </svg>
                </div>
                <div class="calc-card__title">Металлочерепица</div>
                <div class="calc-card__desc">Расчёт количества листов металлочерепицы и стоимости покрытия для вашей кровли.</div>
                <span class="calc-card__btn">Рассчитать</span>
            </a>

            <!-- Мягкая кровля -->
            <a href="https://s-troya.com/tseny-na-stroitelstvo-domov/myagkaya-krovlya/" class="calc-card">
                <div class="calc-card__icon">
                    <!-- Волны / мягкость -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 12c1.5 0 1.5-1 3-1s1.5 1 3 1 1.5-1 3-1 1.5 1 3 1 1.5-1 3-1 1.5 1 3 1v2c-1.5 0-1.5-1-3-1s-1.5 1-3 1-1.5-1-3-1-1.5 1-3 1-1.5-1-3-1-1.5 1-3 1v-2zm0-5c1.5 0 1.5-1 3-1s1.5 1 3 1 1.5-1 3-1 1.5 1 3 1 1.5-1 3-1 1.5 1 3 1v2c-1.5 0-1.5-1-3-1s-1.5 1-3 1-1.5-1-3-1-1.5 1-3 1-1.5-1-3-1-1.5 1-3 1V7zm0 10c1.5 0 1.5-1 3-1s1.5 1 3 1 1.5-1 3-1 1.5 1 3 1 1.5-1 3-1 1.5 1 3 1v2c-1.5 0-1.5-1-3-1s-1.5 1-3 1-1.5-1-3-1-1.5 1-3 1-1.5-1-3-1-1.5 1-3 1v-2z"/>
                    </svg>
                </div>
                <div class="calc-card__title">Мягкая кровля</div>
                <div class="calc-card__desc">Расчёт материала для гибкой черепицы — количество упаковок, ендовый ковёр и конёк.</div>
                <span class="calc-card__btn">Рассчитать</span>
            </a>

            <!-- Утеплитель -->
            <a href="https://s-troya.com/tseny-na-stroitelstvo-domov/uteplitel/" class="calc-card">
                <div class="calc-card__icon">
                    <!-- Снежинка / тепло -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 11h-4.17l3.24-3.24-1.41-1.42L15 11h-2V9l4.66-4.66-1.42-1.41L13 6.17V2h-2v4.17L7.76 2.93 6.34 4.34 11 9v2H9L4.34 6.34 2.93 7.76 6.17 11H2v2h4.17l-3.24 3.24 1.41 1.42L9 13h2v2l-4.66 4.66 1.42 1.41L11 17.83V22h2v-4.17l3.24 3.24 1.42-1.41L13 15v-2h2l4.66 4.66 1.41-1.42L17.83 13H22v-2z"/>
                    </svg>
                </div>
                <div class="calc-card__title">Калькулятор утеплителя</div>
                <div class="calc-card__desc">Расчёт необходимого количества утеплителя для стен, кровли и пола по площади и толщине слоя.</div>
                <span class="calc-card__btn">Рассчитать</span>
            </a>

            <!-- Сайдинг -->
            <a href="https://s-troya.com/tseny-na-stroitelstvo-domov/sajding/" class="calc-card">
                <div class="calc-card__icon">
                    <!-- Горизонтальные полосы -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 5h20v3H2V5zm0 5h20v3H2v-3zm0 5h20v3H2v-3z"/>
                    </svg>
                </div>
                <div class="calc-card__title">Калькулятор сайдинга</div>
                <div class="calc-card__desc">Подсчёт количества панелей сайдинга для фасада с учётом проёмов окон и дверей.</div>
                <span class="calc-card__btn">Рассчитать</span>
            </a>

            <!-- Пиломатериалы -->
            <a href="https://s-troya.com/tseny-na-stroitelstvo-domov/pilomaterialy/" class="calc-card">
                <div class="calc-card__icon">
                    <!-- Брус / дерево -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 8C8 10 5.9 16.17 3.82 20H5.71c.24-.64.49-1.29.78-1.93C8.17 15.57 10.75 13.88 17 13v3l4-4-4-4v2z"/>
                    </svg>
                </div>
                <div class="calc-card__title">Калькулятор пиломатериалов</div>
                <div class="calc-card__desc">Расчёт объёма пиломатериалов (доска, брус, рейка) и их стоимости для строительных работ.</div>
                <span class="calc-card__btn">Рассчитать</span>
            </a>

            <!-- Отделка -->
            <a href="https://s-troya.com/tseny-na-stroitelstvo-domov/otdelka/" class="calc-card">
                <div class="calc-card__icon">
                    <!-- Кисть / отделка -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 14c-1.66 0-3 1.34-3 3 0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2 2.21 0 4-1.79 4-4 0-1.66-1.34-3-3-3zm13.71-9.37l-1.34-1.34c-.39-.39-1.02-.39-1.41 0L9 12.25 11.75 15l9.96-9.96c.39-.39.39-1.02 0-1.41z"/>
                    </svg>
                </div>
                <div class="calc-card__title">Калькулятор отделки</div>
                <div class="calc-card__desc">Расчёт стоимости внутренней и наружной отделки дома — полы, стены, потолки, фасад.</div>
                <span class="calc-card__btn">Рассчитать</span>
            </a>

            <!-- Ипотека -->
            <a href="https://s-troya.com/ipoteka-na-stroitelstvo-zagorodnego-doma/" class="calc-card">
                <div class="calc-card__icon">
                    <!-- Деньги / процент -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                    </svg>
                </div>
                <div class="calc-card__title">Калькулятор ипотеки</div>
                <div class="calc-card__desc">Рассчитайте ежемесячный платёж по ипотеке на строительство дома от 6% годовых.</div>
                <span class="calc-card__btn">Рассчитать</span>
            </a>

        </div>
    </section>
</main>

<!-- ==================== FOOTER ==================== -->
<footer class="new_footer">
    <div class="wrapper">
        <div class="flex_block flex flex-between">
            <div class="item_block white">
                <div class="name bold"><span class="dashed">Заказчику</span></div>
                <ul class="list bold flex flex-col">
                    <li class="item"><a href="https://s-troya.com/about-company/" class="link">О компании</a></li>
                    <li class="item"><a href="https://s-troya.com/garantiya/" class="link">Гарантия</a></li>
                    <li class="item"><a href="https://s-troya.com/delivery/" class="link">Доставка и оплата</a></li>
                    <li class="item"><a href="https://s-troya.com/steps/" class="link">Этапы работ</a></li>
                    <li class="item"><a href="https://s-troya.com/news/" class="link">Новости</a></li>
                    <li class="item"><a href="https://s-troya.com/faq/" class="link">Вопрос-ответ</a></li>
                    <li class="item"><a href="https://s-troya.com/articles/" class="link">Блог</a></li>
                </ul>
            </div>
            <div class="item_block white">
                <div class="name bold"><span class="dashed">Проекты</span></div>
                <ul class="list bold flex flex-col">
                    <li class="item"><a href="https://s-troya.com/projects/doma-iz-brusa/" class="link">Дома из бруса</a></li>
                    <li class="item"><a href="https://s-troya.com/projects/karkasnye-doma/" class="link">Каркасные дома</a></li>
                    <li class="item"><a href="https://s-troya.com/projects/karkasnye-doma/premium/" class="link">Каркасные дома Премиум</a></li>
                </ul>
            </div>
            <div class="item_block white">
                <div class="name bold"><span class="dashed">Услуги</span></div>
                <ul class="list bold flex flex-col">
                    <li class="item"><a href="https://s-troya.com/ipoteka-na-stroitelstvo-zagorodnego-doma/" class="link">Ипотека</a></li>
                    <li class="item"><a href="https://s-troya.com/proektirovanie/" class="link">Проектирование домов</a></li>
                    <li class="item"><a href="https://s-troya.com/fundament/" class="link">Возведение фундамента</a></li>
                    <li class="item"><a href="https://s-troya.com/otdelka/" class="link">Отделка</a></li>
                    <li class="item"><a href="https://s-troya.com/antiseptirovanie/" class="link">Антисептирование</a></li>
                </ul>
            </div>
            <div class="item_block white">
                <div class="name bold"><span class="dashed">Цены</span></div>
                <ul class="list bold flex flex-col">
                    <li class="item"><a href="https://s-troya.com/tseny-na-stroitelstvo-domov/" class="link">Строительство домов</a></li>
                    <li class="item"><a href="https://s-troya.com/tseny-na-stroitelstvo-domov/karkasnyye/" class="link">Каркасные дома</a></li>
                    <li class="item"><a href="https://s-troya.com/tseny-na-stroitelstvo-domov/iz-brusa/" class="link">Дома из бруса</a></li>
                    <li class="item"><a href="https://s-troya.com/tseny-na-stroitelstvo-domov/fundament/" class="link">Фундамент</a></li>
                    <li class="item"><a href="https://s-troya.com/tseny-na-stroitelstvo-domov/otdelka/" class="link">Отделка</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy white">
        <div class="wrapper flex flex-vcenter flex-between">
            <span>©2026. Строительная компания СТРОЯ</span>
            <a href="https://mksmedia.ru/" class="dev" rel="nofollow" target="_blank">Разработано в mksmedia.ru</a>
        </div>
    </div>
</footer>

<footer>
    <div class="wrapper">
        <div class="to_up"></div>
        <div class="flex_block">
            <div class="footer_left">
                <div class="block_footer">
                    <div class="logo">
                        <a href="https://s-troya.com/"></a>
                    </div>
                    <div class="soc_footer">
                        <ul>
                            <li><a class="icon_vk" rel="nofollow" target="_blank" href="https://vk.com/stroyadom"></a></li>
                            <li><a class="icon_ok" rel="nofollow" target="_blank" href="https://ok.ru/stroya"></a></li>
                            <li><a class="icon_in" rel="nofollow" target="_blank" href="https://www.instagram.com/doma_iz_derewa_/"></a></li>
                            <li><a class="icon_rt" rel="nofollow" target="_blank" href="https://rutube.ru/channel/48426357/videos/"></a></li>
                        </ul>
                    </div>
                    <a href="https://mksmedia.ru/" class="mks" rel="nofollow" target="_blank">Сайт разработан</a>
                </div>
            </div>
            <div class="footer_right">
                <div class="block_footer">
                    <div class="flex_block">
                        <div class="menu_footer">
                            <ul>
                                <li><a href="https://s-troya.com/about-company/">О компании</a></li>
                                <li><a href="https://s-troya.com/projects/">Проекты</a></li>
                                <li><a href="https://s-troya.com/tseny-na-stroitelstvo-domov/">Цены</a></li>
                                <li><a href="https://s-troya.com/shares/">Акции</a></li>
                                <li><a href="https://s-troya.com/news/">Новости</a></li>
                            </ul>
                        </div>
                        <div class="menu_footer">
                            <ul>
                                <li><a href="https://s-troya.com/articles/">Блог</a></li>
                                <li><a href="https://s-troya.com/photo/">Фото</a></li>
                                <li><a href="https://s-troya.com/video-otzyvy/">Видеоотзывы</a></li>
                                <li><a href="https://s-troya.com/contacts/">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="karkas_link">
                        <div class="title">Мы строим</div>
                        <a href="https://s-troya.com/projects/doma-iz-brusa/" class="item">Дома из бруса</a>
                        <a href="https://s-troya.com/projects/karkasnye-doma/" class="item">Дома каркасные</a>
                    </div>
                </div>
                <div class="block_footer footer_mob_address">
                    <div class="address_footer">
                        <div class="office_name">Москва</div>
                        <p>Спартаковская площадь, 14с3</p>
                        <a href="tel:+74951625306" class="phone">+7 (495) 532-01-75</a>
                    </div>
                    <div class="info_footer">
                        <span>ежедневно<br>с 9:00 до 21:00</span>
                        <a href="mailto:info@s-troya.com">info@s-troya.com</a>
                    </div>
                    <div class="search_footer">
                        <form action="https://s-troya.com/search/">
                            <div class="bx-input-group">
                                <input type="text" name="q" value="" autocomplete="off" class="search_text" placeholder="Поиск по сайту... ">
                                <button class="search_submit" type="submit" name="s"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Скрипты сайта -->
<script src="https://s-troya.com/local/templates/stroya/js/jquery-2.1.4.min.js"></script>
<script src="https://s-troya.com/local/templates/stroya/js/main.js"></script>

</body>
</html>
