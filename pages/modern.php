<?php require_once __DIR__ .'/../blocks/header.php'?>
    <style>

        :root {
            --bg-main: #121212;
            --bg-secondary: #1E1E1E;
            --surface: #2A2A2A;
            --surface-hover: #343434;
            --surface-dark: #1a1a1a;
            --surface-blue: rgba(23, 97, 167, 0.15);
            --surface-blue-hover: rgba(23, 97, 167, 0.25);

            --text-main: #E0E0E0;
            --text-secondary: #A0A0A0;
            --text-muted: #a0a0a0;;

            --primary: #4F8AFF;
            --primary-dark: #3a7cff;
            --accent: #00C6A7;
            --accent-red: #FF4757;
            --blue-accent: #1761A7;

            --radius: 14px;
            --radius-lg: 20px;
            --radius-sm: 8px;
            --transition: .3s ease;

            --shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            --shadow-hover: 0 15px 40px rgba(0, 0, 0, 0.3);
            --shadow-card: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        body {
            background: var(--bg-main);
            color: var(--text-main);
            font-family: Inter, system-ui, sans-serif;
            line-height: 1.6;
        }

        a {
            color: var(--primary);
            text-decoration: none;
        }
        a:hover {
            color: var(--accent);
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }


        .main-content {
            padding: 30px 0;
        }

        .text-content {
            background: var(--surface);
            padding: 28px;
            border-radius: var(--radius);
            line-height: 1.7;
        }

        .text-content img {
            max-width: 100%;
            border-radius: var(--radius);
            margin-bottom: 24px;
        }

        .text-content h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .text-content .header {
            font-weight: 700;
            font-size: 18px;
            margin: 28px 0 10px;
        }

        .text-content ul li {
            color: var(--text-secondary);
            margin-bottom: 6px;
        }

        .text-content p {
            margin-bottom: 16px;
        }

        .text-content strong {
            font-weight: 700;
            color: #fff;
        }

        .text-content em {
            font-style: italic;
            color: var(--text-secondary);
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

        .page-hero {
            padding: 40px 0 30px;
            text-align: center;
        }

        .page-hero__title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 16px;
            color: #fff;
        }

        .page-hero__subtitle {
            font-size: 18px;
            color: var(--text-secondary);
            max-width: 800px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }

        .cta-banner {
            background: linear-gradient(135deg, var(--surface-blue) 0%, rgba(23, 97, 167, 0.08) 100%);
            border-radius: var(--radius);
            padding: 30px;
            margin: 40px 0 60px;
            border: 1px solid rgba(79, 138, 255, 0.1);
        }

        .cta-banner__content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .cta-banner__text {
            flex: 1;
        }

        .cta-banner__title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #fff;
        }

        .cta-banner__description {
            color: var(--text-secondary);
            font-size: 15px;
            margin-bottom: 15px;
        }

        .cta-banner__contact {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .contact-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--surface);
            padding: 10px 18px;
            border-radius: var(--radius-sm);
            text-decoration: none;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .contact-badge:hover {
            background: var(--surface-hover);
            transform: translateY(-2px);
            border-color: var(--primary);
        }

        .contact-badge__icon {
            color: var(--accent-red);
            font-size: 16px;
        }

        .contact-badge__text {
            font-weight: 500;
            color: #fff;
            white-space: nowrap;
        }

        .families-section {
            margin-bottom: 80px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .section-header__title {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
            color: #fff;
        }

        .section-header__action {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .view-all-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: var(--surface);
            color: var(--text-main);
            text-decoration: none;
            border-radius: var(--radius-sm);
            font-weight: 500;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .view-all-link:hover {
            background: var(--surface-hover);
            color: var(--primary);
            transform: translateY(-2px);
            border-color: var(--primary);
        }

        .view-all-link::after {
            content: '→';
            font-weight: bold;
            transition: transform var(--transition);
        }

        .view-all-link:hover::after {
            transform: translateX(4px);
        }

        .helicopter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        @media (max-width: 1100px) {
            .helicopter-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }

        .helicopter-card {
            background: var(--surface);
            border-radius: var(--radius);
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .helicopter-card:hover {
            transform: translateY(-8px);
            border-color: var(--blue-accent);
            box-shadow: var(--shadow-hover);
        }

        .helicopter-card__link {
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            height: 100%;
            flex-grow: 1;
        }


        .helicopter-card__image {
            height: 240px;
            background: var(--surface-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            position: relative;
            overflow: hidden;
        }

        .helicopter-card__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.4));
            transition: transform var(--transition);
        }

        .helicopter-card:hover .helicopter-card__image img {
            transform: scale(1.08);
        }

        .image-fill-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .helicopter-card__image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom,
            transparent 0%,
            rgba(0, 0, 0, 0.15) 100%);
            pointer-events: none;
            transition: opacity var(--transition);
        }

        .helicopter-card:hover .helicopter-card__image::after {
            opacity: 0.7;
        }

        .helicopter-card__content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .helicopter-card__title {
            font-size: 22px;
            font-weight: 700;
            margin: 0 0 15px 0;
            color: #fff;
            line-height: 1.3;
        }

        .helicopter-card__description {
            color: var(--text-secondary);
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .helicopter-card__features {
            display: flex;
            gap: 15px;
            margin-top: auto;
            flex-wrap: wrap;
        }

        .feature-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.05);
            padding: 6px 12px;
            border-radius: var(--radius-sm);
            font-size: 13px;
            color: var(--text-secondary);
            transition: var(--transition);
        }

        .helicopter-card:hover .feature-tag {
            background: rgba(79, 138, 255, 0.1);
            color: var(--primary);
        }

        .feature-tag__icon {
            font-size: 12px;
        }

        .info-panel {
            background: linear-gradient(135deg, var(--surface) 0%, var(--surface-dark) 100%);
            border-radius: var(--radius);
            padding: 40px;
            margin-top: 60px;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .info-panel__title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #fff;
        }

        .info-panel__content {
            font-size: 16px;
            line-height: 1.7;
            color: var(--text-secondary);
        }

        .info-panel__content strong {
            color: #fff;
            font-weight: 700;
        }

        @media (max-width: 992px) {
            .about-hero {
                grid-template-columns: repeat(2, 1fr);
            }

            .about-features {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 0 20px;
            }

            .page-hero {
                padding: 30px 0 20px;
            }

            .page-hero__title {
                font-size: 36px;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .section-header__action {
                width: 100%;
                justify-content: flex-start;
            }

            .cta-banner__content {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }

            .helicopter-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 25px;
            }
            .helicopter-card__image {
                height: 220px;
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

            .text-content {
                padding: 20px;
            }

            .text-content h1 {
                font-size: 24px;
            }

            .page-hero__title {
                font-size: 32px;
            }

            .page-hero__subtitle {
                font-size: 16px;
            }

            .helicopter-grid {
                grid-template-columns: 1fr;
                max-width: 400px;
                margin-left: auto;
                margin-right: auto;
            }

            .helicopter-card__image {
                height: 200px;
            }

            .cta-banner {
                padding: 25px 20px;
            }

            .info-panel {
                padding: 30px 25px;
            }

            .contact-badge {
                width: 100%;
                justify-content: center;
            }

            .section-header__title {
                font-size: 24px;
            }

            .helicopter-card__content {
                padding: 20px;
            }

            .helicopter-card__title {
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }

            .page-hero__title {
                font-size: 28px;
            }

            .info-panel {
                padding: 25px 20px;
            }

            .info-panel__title {
                font-size: 20px;
            }

            .helicopter-card__image {
                height: 180px;
                padding: 5px;
            }
        }


        @media (min-width: 1200px) {
            .helicopter-card__image {
                height: 260px;
            }
        }
    </style>


    <body>

    <div class="hsc-site-content">
        <div class="container">
            <div class="main-content">

                <section class="page-hero">
                    <h1 class="page-hero__title">Модернизация вертолетов</h1>
                    <p class="page-hero__subtitle">
                        Программа комплексной модернизации и повышения эксплуатационных характеристик вертолетной техники
                        от лидера российского авиаремонтного рынка
                    </p>
                </section>


                <div class="text-content">


                    <div class="cta-banner">
                        <div class="cta-banner__content">
                            <div class="cta-banner__text">
                                <h3 class="cta-banner__title">Нужна консультация по модернизации?</h3>
                                <p class="cta-banner__description">
                                    Наши инженеры-эксперты готовы ответить на все вопросы и подобрать оптимальное решение
                                    для вашей вертолетной техники
                                </p>
                            </div>
                            <div class="cta-banner__contact">
                                <a href="tel:+749566055607550" class="contact-badge">
                                    <span class="contact-badge__icon">📞</span>
                                    <span class="contact-badge__text">+7 (495) 660-55-60 (доб. 7550)</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="header">Выберите семейство вертолета</div>

                    <div class="helicopter-grid">
                        <div class="helicopter-card">
                            <a href="#" class="helicopter-card__link">
                                <div class="helicopter-card__image">
                                    <div class="image-fill-container">
                                        <img style="margin-top: 35px;" src="/styles/images/7-1.jpg" alt="Вертолет Ми-8/17">
                                    </div>
                                </div>
                                <div class="helicopter-card__content">
                                    <h3 class="helicopter-card__title">Ми-8 / Ми-17</h3>
                                    <p class="helicopter-card__description">
                                        Многоцелевой вертолет среднего класса. Более 12,000 единиц произведено по всему миру.
                                        Обширная программа модернизации систем навигации, авионики и силовой установки.
                                    </p>
                                    <div class="helicopter-card__features">
                                    <span class="feature-tag">
                                        <span class="feature-tag__icon">⚡</span>
                                        Модернизация
                                    </span>
                                        <span class="feature-tag">
                                        <span class="feature-tag__icon">🔧</span>
                                        Ремонт
                                    </span>
                                        <span class="feature-tag">
                                        <span class="feature-tag__icon">📈</span>
                                        Ресурс
                                    </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="helicopter-card">
                            <a href="#" class="helicopter-card__link">
                                <div class="helicopter-card__image">
                                    <div class="image-fill-container">
                                        <img style="margin-top: 35px;" src="/styles/images/ka-32s_1.jpg" alt="Вертолет Ка-32">
                                    </div>
                                </div>
                                <div class="helicopter-card__content">
                                    <h3 class="helicopter-card__title">Ка-32</h3>
                                    <p class="helicopter-card__description">
                                        Многоцелевой вертолет соосной схемы. Отличные характеристики для работы в сложных
                                        климатических условиях. Программа модернизации систем пожаротушения и грузоподъемности.
                                    </p>
                                    <div class="helicopter-card__features">
                                    <span class="feature-tag">
                                        <span class="feature-tag__icon">🚁</span>
                                        Соосная схема
                                    </span>
                                        <span class="feature-tag">
                                        <span class="feature-tag__icon">🔥</span>
                                        Пожаротушение
                                    </span>
                                        <span class="feature-tag">
                                        <span class="feature-tag__icon">📦</span>
                                        Грузовые
                                    </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="helicopter-card">
                            <a href="#" class="helicopter-card__link">
                                <div class="helicopter-card__image">
                                    <div class="image-fill-container">
                                        <img style="margin-top: 35px;" src="/styles/images/ansat.webp" alt="Вертолет Ансат">
                                    </div>
                                </div>
                                <div class="helicopter-card__content">
                                    <h3 class="helicopter-card__title">Ансат</h3>
                                    <p class="helicopter-card__description">
                                        Легкий многоцелевой вертолет российского производства. Современная авионика
                                        и отличные летные характеристики. Модернизация медицинских и VIP-комплектаций.
                                    </p>
                                    <div class="helicopter-card__features">
                                    <span class="feature-tag">
                                        <span class="feature-tag__icon">🏥</span>
                                        Медицинский
                                    </span>
                                        <span class="feature-tag">
                                        <span class="feature-tag__icon">⭐</span>
                                        VIP
                                    </span>
                                        <span class="feature-tag">
                                        <span class="feature-tag__icon">🔄</span>
                                        Обновление
                                    </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div style="text-align: center; margin: 40px 0 30px;">
                        <a href="#" class="view-all-link">
                            Посмотреть все семейства вертолетов
                        </a>
                    </div>
                    <div class="info-panel">
                        <h3 class="info-panel__title">О программе модернизации</h3>
                        <div class="info-panel__content">
                            <p>
                                <strong>«Вертолетная сервисная компания»</strong> ведет активную работу по формированию и расширению каталога модернизаций
                                вертолетной техники. Наши инженерные решения направлены на повышение безопасности, увеличение ресурса
                                и улучшение эксплуатационных характеристик воздушных судов.
                            </p>
                            <p style="margin-top: 15px;">
                                В рамках программы мы предлагаем как стандартные пакеты модернизации, так и индивидуальные решения,
                                разработанные с учетом специфики эксплуатации каждого вертолета. Следите за обновлениями каталога
                                и новыми техническими решениями.
                            </p>
                        </div>
                    </div>

                    <p style="margin-top: 30px; text-align: center; color: var(--text-secondary);">
                        <em>Мы создаем надежность, на которую можно опереться.</em>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const helicopterCards = document.querySelectorAll('.helicopter-card__link');

            helicopterCards.forEach(card => {
                card.addEventListener('click', function(e) {
                    console.log('Selected helicopter:', this.closest('.helicopter-card').querySelector('.helicopter-card__title').textContent);
                });
            });
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if(targetId !== '#') {
                        const targetElement = document.querySelector(targetId);
                        if(targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 80,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>

<?php require_once __DIR__ .'/../blocks/footer.php'?>