<?php
    /*
        Template Name: Business Page
    */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon.png?v=2b09qvQG6Y">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/favicon-32x32.png?v=2b09qvQG6Y">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/favicon-16x16.png?v=2b09qvQG6Y">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/site.webmanifest?v=2b09qvQG6Y">
    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/safari-pinned-tab.svg?v=2b09qvQG6Y" color="#5bbad5">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico?v=2b09qvQG6Y">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="<?php echo $meta_description; ?>" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css?v=4" />

    <title>Для Бизнеса — Jast Charger</title>

    <?php
        wp_head();
    ?>
</head>

<body>
    <!-- Header -->
    <header class="hero hero--business">
        <button class="menu-button">
            <div class="menu-button__middle"></div>
        </button>

        <div class="hero__top">
            <div class="logo">
                <div class="logo__image">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/img/logo.svg" alt="" />
                </div>
                <div class="logo__text">Jast&nbsp;Charger</div>
            </div>

            <div class="hero__nav">
                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>">Франшиза</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link main-nav__link--current" href="<?php echo esc_url(home_url('/')); ?>business">Для Бизнеса</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>advert">Реклама</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>about">О Нас</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>faq">FAQ</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>news">Новости</a>
                        </li>
                        <li class="main-nav__item">
                            <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>contacts">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="hero__dummy"></div>

        <h1 class="main-title">Чистая энергия <br><strong>вашего бизнеса</strong></h1>

        <div class="hero__cta">
            <a class="cta-button contact-button" href="#">Подробнее</a>
        </div>
    </header>

    <!-- About Stats -->
    <section class="about-stats">
        <div class="about-stats__content">
            <header class="about-stats__header">
                <h2 class="section-title"><strong>Как часто Вы заряжаете</strong> телефон?</h2>
                <p>А сколько раз Вы оказывались в ситуации, когда необходимо срочно зарядить гаджет «здесь и сейчас»?
                    Знакомо? Потому что актуально, ине только для Вас, но и для сотен людей вокруг, в том числе и для
                    Ваших клиентов.</p>
                <p>Сотни успешных компаний по всему миру уже «заряжают» своих клиентов. Десятки тысяч посетителей
                    различных заведений уже получают энергию для своих смартфонов и планшетов. Теперь настал Ваш черёд
                    присоединиться к JAST CHARGER.</p>
            </header>
            <div class="about-stats__stats">
                <article class="stat">
                    <p class="stat__value">193&nbsp;270</p>
                    <p class="stat__desc">гаджетов мы зарядили</p>
                </article>
                <article class="stat">
                    <p class="stat__value">386&nbsp;000&nbsp;000</p>
                    <p class="stat__desc">mAh передали наши устройства гаджетам</p>
                </article>
                <article class="stat">
                    <p class="stat__value">311&nbsp;309</p>
                    <p class="stat__desc">человек видели как работает JAST&nbsp;CHARGER</p>
                </article>
            </div>
        </div>
        <div class="about-stats__cta"><a class="ghost-button contact-button" href="#">Получить презентацию</a></div>
    </section>

    <!-- You Want To -->
    <section class="u-want">
        <header class="u-want__header">
            <h2 class="section-title section-title--inv"><strong>Заведения, которые начали сотрудничать с&nbsp;нами уже
                    успели:</strong></h2>
        </header>
        <div class="u-want__content">
            <article class="wish">
                <div class="wish__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/money.svg" alt="Больше денег" /></div>
                <h3 class="wish__title">Увеличить средний чек</h3>
            </article>
            <article class="wish">
                <div class="wish__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/advantage.svg" alt="Стать лучше" /></div>
                <h3 class="wish__title">Получить дополнительное конкурентное преимущество</h3>
            </article>
            <article class="wish">
                <div class="wish__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/loyality.svg" alt="Повысить лояльность" /></div>
                <h3 class="wish__title">Повысить лояльность клиентов</h3>
            </article>
        </div>
    </section>

    <!-- Advantages -->
    <section class="advantages">
        <header class="advantages__header">
            <h2 class="section-title"><strong>Почему клиенты выбирают</strong> JAST&nbsp;CHARGER&nbsp;?</h2>
        </header>
        <div class="advantages__content">
            <ol class="advantages__list">
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Ваша выгода</h3>
                        <p class="advantage__text">JAST CHARGER гарантирует повышение лояльности Ваших клиентов. Вы
                            можете включить услугу использования устройств JAST&nbsp;CHARGER в Ваш прайс-лист.</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Ваше преимущество</h3>
                        <p class="advantage__text">JAST CHARGER выгодно отличает Вас от конкурентов. Вы не просто
                            предоставляете услуги, Вы еще и «заряжаете» посетителей энергией.</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Проверенный опыт</h3>
                        <p class="advantage__text">Тысячи крупных предприятий уже используют charging: McDonalds,
                            Toyota, Marriott, Gap... Этот список можно продолжать бесконечно.</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Простота</h3>
                        <p class="advantage__text">JAST CHARGER очень прост в использовании. Вашему персоналу не
                            требуется проводить никакого обучения и инструктажа для использования устройств.</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Дизайн</h3>
                        <p class="advantage__text">Дизайн устройства впишется в любой интерьер. Свободный корпус
                            устройства позволяет размещать Вашу рекламу.</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Универсальность</h3>
                        <p class="advantage__text">JAST CHARGER дружелюбен. Наши зарядные устройства подходят для всех
                            современных гаджетов.</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Сохранность</h3>
                        <p class="advantage__text">Уникальный способ зарядки устройств делает его бесполезным с точки
                            зрения воровства.</p>
                    </article>
                </li>
                <li class="advantages__list-item">
                    <article class="advantage">
                        <h3 class="advantage__title">Техническая поддержка</h3>
                        <p class="advantage__text">JAST CHARGER очень прост в использовании. Наш специалист планово или
                            при необходимости абсолютно бесплатно приедет к Вам для проверки устройств.</p>
                    </article>
                </li>
            </ol>
        </div>
    </section>

    <!-- Partnership - maybe change class name -->
    <section class="profits">
        <header class="profits__header">
            <h2 class="section-title section-title--inv"><strong>Варианты</strong> сотрудничества</h2>
        </header>
        <div class="profits__content">
            <article class="profit">
                <div class="profit__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/rent.svg" alt="Аренда" /></div>
                <div class="profit__content">
                    <h3 class="profit__title">Аренда</h3>
                    <p class="profit__text">Предоставим зарядную станцию в аренду Вашему заведению;<br> Брендируем
                        зарядные устройства в Вашем фирменном стиле;<br> Изготовим и разместим Ваши рекламные/акционные
                        материалы на наших устройствах.</p>
                </div>
            </article>
            <article class="profit">
                <div class="profit__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/charging.svg" alt="Партнёрство" /></div>
                <div class="profit__content">
                    <h3 class="profit__title">Партнёрство</h3>
                    <p class="profit__text">Предоставим зарядную станцию за процент от реализации услуги «Заряди своё
                        устройство»<br> Брендируем зарядные устройства в Вашем фирменном стиле / Разместим рекламные
                        материалы сторонних компаний для дополнительной монетизации</p>
                </div>
            </article>
            <article class="profit">
                <div class="profit__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/sale.svg" alt="Продажа" /></div>
                <div class="profit__content">
                    <h3 class="profit__title">Продажа</h3>
                    <p class="profit__text">Предоставляем Вам в конечное пользование зарядную станцию</p>
                </div>
            </article>
        </div>
    </section>

    <!-- Devices -->
    <section class="devices">
        <header class="devices__header">
            <h2 class="section-title"><strong>Линейка</strong> устройств</h2>
        </header>

        <div class="devices__content">
            <?php
                $args = array(
                    'category_name' => 'device'
                );

                query_posts($args);

                if (have_posts()) {
                    while (have_posts()) {
                        the_post();

                        // vars
                        $device_name    = get_field('device-name');
                        $device_thumb   = get_field('device-thumb');
            ?>

                <article class="device-item">
                    <div class="device-item__image">
                        <img src="<?php echo $device_thumb; ?>" alt="Устройство <?php echo $device_name; ?>" />
                    </div>
                    <header class="device-item__header">
                        <h3 class="device-item__title"><?php echo $device_name; ?></h3>
                        <a class="device-item__more" href="<?php the_permalink(); ?>">Подробнее</a>
                    </header>
                </article>

            <?php
                    }
                }
            ?>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq">
        <header class="faq__header">
            <h2 class="section-title">Почему нужно организовывать сервис зарядки телефонов в&nbsp;своем заведении?</h2>
            <p class="faq__subtitle">70% процентов современного населения страдает смартфономанией. Это заболевание
                21&nbsp;века, ставшее пандемией, и&nbsp;выражается в&nbsp;тотальной зависимости людей от своих
                гаджетов. именно поэтому компания Jast Charger предлагает не только повысить лояльность клиентов за
                счет этого «недуга», но и&nbsp;увеличить прибыль.</p>
        </header>
        <div class="faq__content">
            <article class="question">
                <h3 class="question__definition">Какие устройства могут заряжать станции Jast&nbsp;Charger?</h3>
                <p class="question__answer">Устройство подходит для зарядки практически любых телефонов, смартфонов, а
                    также планшетов, оснащено разъемами для 99% предлагаемых на рынке моделей: Apple, Samsung, Nokia,
                    Sony, HTC, Fly, Philips, Vertu, LG и многих других.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Как будут работать станции в моём заведении?</h3>
                <p class="question__answer">Для того чтобы исполнить просьбу клиента, вашим официантам достаточно
                    просто захватить с собой портативное зарядное устройство Jast Charger и элегантно преподнести его.
                    Без надобности распутывать клубок из десятка разных зарядок, рискуя сломать провод. Без
                    необходимости следить за смартфоном клиента на кухне. Без переходников, валяющихся в ящике.
                    Официанты будут обслуживать гостей так же быстро, как и прежде, ни на что не отвлекаясь.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Что получит организация от этой услуги в своём заведении?</h3>
                <p class="question__answer">Как только клиентам понадобится зарядить свой гаджет, а они будут не дома,
                    они вспомнят о месте где это можно сделать. Вспомнят о том, с каким комфортом они в прошлый раз
                    подзарядили свой телефон. А затем зайдут и зарядят его снова, попутно заказав латте или
                    бизнес-ланч. Заведение получает лояльность клиентов: его рекомендуют, как отличное заведение, в
                    котором всегда можно зарядить любую модель смартфона на 10 столиках одновременно. К тому же, теперь
                    есть новая уникальная рекламная площадка на устройствах и станции, где можно разместить рекламу
                    одного из заведений или партнеров.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Какие дополнительные затраты я понесу?</h3>
                <p class="question__answer">Никаких! На устройство действует гарантия 6 месяцев.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Есть ли защита от воровства?</h3>
                <p class="question__answer">Конечно, мы предусмотрели этот момент. Наше устройство нельзя зарядить ни
                    от одного из существующих зарядных устройств, т.к. разъемы устройства работают только с
                    оригинальной зарядной станцией. К тому же, зарядное устройство затруднительно незаметно украсть. А
                    также, почти всем заведения заносят услугу зарядки телефона в R-keeper, в компьютерное меню, чтобы
                    зарядка отражалась в чеке наравне с другими позициями. Таким образом, официанты всегда в курсе за
                    каким столиком сидят гости с зарядкой.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Зачем нужны зарядки, если есть разетки / power banks (аккумуляторы)?</h3>
                <p class="question__answer">Разумеется, в каждом заведении есть розетки, которыми клиенты могут
                    воспользоваться. Тем не менее, клиенты редко носят зарядки с собой, а еще реже розетки
                    располагаются у каждого столика, что, несомненно, вызывает массу неудобств для современного
                    человека. Power banks (портативные аккумуляторы) не являются хорошим решением для заведения по
                    следующим причинам: их могут украсть (устройства Jast Charger обладают защитой от воровства);
                    неудобство при перезарядке (потребуется много розеток и проводов, а также дополнительные временные
                    затраты персонала); отсутствие гарантии и сервисного обслуживания; отсутствие дополнительной
                    уникальной рекламной площадки (размещается на наших устройствах и станциях). К тому же,
                    аккумулятору также необходимо восполнять заряд, что вынуждает персонал постоянно контролировать
                    этот процесс, подключая устройства к розеткам, в связи с чем возникает дополнительная нагрузка и
                    возникают сложности в оказании данной услуги. Наши устройства – отличное решение данной проблемы.
                    Портативные зарядные устройства Jast Charger заряжают 99% современных смартфонов и планшетов. Также
                    клиент имеет полную свободу действий со своим смартфоном, ведь теперь он не привязан проводами к
                    розетке.</p>
            </article>
            <article class="question">
                <h3 class="question__definition">Насколько востребована данная услуга?</h3>
                <p class="question__answer">Еще каких-то 8 лет назад, наличие Wi-Fi интернета в кафе и ресторанах
                    являлось атрибутом успешного, идущего в ногу со временем заведения, соответствующего изменчивым
                    запросам своих клиентов. Такие заведения сразу оказались на хорошем счету у своих посетителей.
                    Сегодня в 9 общественных местах из 10 имеется доступ к Wi-Fi и его наличие обязательно, так же как
                    и заряженный смартфон для пользования интернет сетью. Зарядные станции Jast Charger – это
                    обеспечение энергетических потребностей каждого клиента в комплексе с уникальной рекламной
                    площадкой и удобством использования. До тех пор, пока будут существовать смартфоны, электронные
                    планшеты и другие устройства, требующие своевременной подзарядки, решение от Jast Charger будет
                    оставаться актуальным и востребованным.</p>
            </article>
        </div>
    </section>

    <!-- Footer -->
    <?php
        get_footer();
    ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/business.js"></script>

    <?php
        wp_footer();
    ?>
</body>

</html>