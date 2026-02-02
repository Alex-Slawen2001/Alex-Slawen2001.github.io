<?php require_once __DIR__ .'/../blocks/header.php'?>
<style>
    :root {
        --bg-main: #121212;
        --bg-secondary: #1E1E1E;
        --surface: #2A2A2A;
        --surface-hover: #343434;

        --text-main: #E0E0E0;
        --text-secondary: #A0A0A0;
        --text-muted: #a0a0a0;;

        --primary: #4F8AFF;
        --accent: #00C6A7;

        --radius: 14px;
        --transition: .2s ease;
    }

    body {
        background: var(--bg-main);
        color: var(--text-main);
        font-family: Inter, system-ui, sans-serif;
    }

    a { color: var(--primary); }
    a:hover { color: var(--accent); }

    .main-content {
        padding: 30px 0;
    }

    .text-news {
        background: var(--surface);
        padding: 28px;
        border-radius: var(--radius);
        line-height: 1.7;
    }

    .text-news img {
        max-width: 100%;
        border-radius: var(--radius);
        margin-bottom: 24px;
    }

    .text-news h1 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .text-news .header {
        font-weight: 700;
        font-size: 18px;
        margin: 28px 0 10px;
    }

    .text-news ul li {
        color: var(--text-secondary);
        margin-bottom: 6px;
    }

    .about-hero {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 32px;
    }

    .about-hero__item {
        position: relative;
        background: linear-gradient(
                160deg,
                var(--surface),
                var(--bg-secondary)
        );
        border-radius: var(--radius);
        padding: 26px 22px;
        text-align: center;
        border: 1px solid rgba(255,255,255,.08);
        transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        overflow: hidden;
    }
    .about-hero__item::before {
        content: "";
        position: absolute;
        left: 0;
        top: 12%;
        width: 3px;
        height: 76%;
        background: linear-gradient(
                to bottom,
                transparent,
                var(--primary),
                transparent
        );
        opacity: .6;
    }

    .about-hero__item:hover {
        transform: translateY(-4px);
        border-color: rgba(79,138,255,.5);
        box-shadow: 0 12px 30px rgba(0,0,0,.35);
    }

    .about-hero__item span {
        display: block;
        font-size: 30px;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 8px;
        letter-spacing: .02em;
        text-shadow: 0 0 14px rgba(79,138,255,.25);
    }

    .about-hero__item p {
        font-size: 14px;
        color: var(--text-secondary);
        line-height: 1.4;
    }

    .about-features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 30px 0;
    }

    .about-feature {
        background: var(--surface);
        border-radius: var(--radius);
        padding: 22px;
        border: 1px solid rgba(255,255,255,.08);
        transition: var(--transition);
    }

    .about-feature:hover {
        background: var(--surface-hover);
        transform: translateY(-3px);
    }

    .about-feature h3 {
        font-size: 16px;
        margin-bottom: 8px;
        color: #fff;
    }

    .about-feature p {
        font-size: 14px;
        color: var(--text-secondary);
    }

    .news-block__item {
        background: var(--surface);
        padding: 18px;
        border-radius: var(--radius);
        margin-bottom: 16px;
    }

    /* ===== ADAPTIVE ===== */
    @media (max-width: 992px) {
        .about-hero {
            grid-template-columns: repeat(2, 1fr);
        }

        .about-features {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .about-hero {
            grid-template-columns: 1fr;
        }
        .about-hero__item {
            padding: 22px 18px;
        }

        .about-hero__item span {
            font-size: 26px;
        }

        .text-news {
            padding: 20px;
        }

        .text-news h1 {
            font-size: 24px;
        }
    }
</style>


<body>

<div class="hsc-site-content">
    <div class="container">
        <div class="main-content">
            <div class="row">
                <div class="col-xs-12 col-lg-8">

                    <div class="text-news">

                        <!-- HERO -->
                        <div class="about-hero">
                            <div class="about-hero__item">
                                <span>20+</span>
                                <p>лет опыта</p>
                            </div>
                            <div class="about-hero__item">
                                <span>250+</span>
                                <p>корпоративных клиентов</p>
                            </div>
                            <div class="about-hero__item">
                                <span>8</span>
                                <p>авиаремонтных заводов</p>
                            </div>
                            <div class="about-hero__item">
                                <span>24/7</span>
                                <p>поддержка</p>
                            </div>
                        </div>

                        <h1>Вертолетная сервисная компания (ВСК)</h1>

                        <div class="header">Эксперты в авиационном сервисе полного цикла</div>

                        <p>
                            АО «Вертолетная сервисная компания» — <strong>лидер российского рынка</strong>
                            в области технического обслуживания, ремонта и модернизации вертолетной техники.
                        </p>

                        <div class="header">Почему выбирают ВСК</div>

                        <ul>
                            <li>20+ лет практического опыта</li>
                            <li>Собственная сеть сервисных центров</li>
                            <li>Прямые контракты с производителями</li>
                        </ul>

                        <!-- FEATURES -->
                        <div class="about-features">
                            <div class="about-feature">
                                <h3>Полный цикл ТОиР</h3>
                                <p>От диагностики до модернизации и продления ресурса</p>
                            </div>
                            <div class="about-feature">
                                <h3>Инженерная экспертиза</h3>
                                <p>Собственные КБ и сертифицированные специалисты</p>
                            </div>
                            <div class="about-feature">
                                <h3>Экономия затрат</h3>
                                <p>Снижение расходов на обслуживание до 30%</p>
                            </div>
                        </div>

                        <div class="header">История развития</div>

                        <ul>
                            <li><strong>2015</strong> — запуск каталога модернизаций</li>
                            <li><strong>2018</strong> — интеграция 8 АРЗ</li>
                            <li><strong>2024</strong> — переход под НАСК</li>
                        </ul>

                        <p>
                            <strong>Контакты:</strong><br>
                            <a href="tel:+74956605560">+7 (495) 660-55-60</a> |
                            <a href="mailto:hsc@hsc-copter.com">hsc@hsc-copter.com</a>
                        </p>

                        <p><em>Мы создаем надежность, на которую можно опереться.</em></p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ .'/../blocks/footer.php'?>
