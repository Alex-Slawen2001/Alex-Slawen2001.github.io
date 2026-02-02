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
            transition: color var(--transition);
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
            padding: 40px 0 80px;
        }

        .doc-hero {
            text-align: center;
            padding: 60px 0 40px;
        }

        .doc-hero__title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #fff;
            background: #fff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .doc-hero__subtitle {
            font-size: 18px;
            color: var(--text-secondary);
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.7;
        }

        .features-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .feature-card {
            background: linear-gradient(
                    145deg,
                    var(--surface) 0%,
                    var(--surface-dark) 100%
            );
            border-radius: var(--radius);
            padding: 35px 30px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all var(--transition);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(
                    to bottom,
                    transparent,
                    var(--primary),
                    transparent
            );
            opacity: 0.6;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
            box-shadow: var(--shadow-hover);
        }

        .feature-card__title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .feature-card__title i {
            color: var(--primary);
            font-size: 24px;
        }

        .feature-card__content {
            color: var(--text-secondary);
            line-height: 1.7;
        }

        .feature-card__content p {
            margin-bottom: 15px;
        }

        .feature-card__content strong {
            color: #fff;
            font-weight: 600;
        }

        .auth-section {
            background: linear-gradient(135deg, var(--surface-blue) 0%, rgba(23, 97, 167, 0.08) 100%);
            border-radius: var(--radius);
            padding: 50px;
            margin: 60px 0;
            border: 1px solid rgba(79, 138, 255, 0.1);
        }

        .auth-section__title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #fff;
            text-align: center;
        }

        .auth-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .auth-card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: var(--transition);
        }

        .auth-card:hover {
            background: var(--surface-hover);
            transform: translateY(-3px);
            border-color: var(--primary);
        }

        .auth-card__title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #fff;
        }

        .auth-card__content {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .auth-card__content p {
            margin-bottom: 15px;
        }

        .auth-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .auth-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 20px;
            background: rgba(79, 138, 255, 0.1);
            color: var(--primary);
            text-decoration: none;
            border-radius: var(--radius-sm);
            font-weight: 500;
            transition: all var(--transition);
            border: 1px solid rgba(79, 138, 255, 0.2);
        }

        .auth-link:hover {
            background: rgba(79, 138, 255, 0.2);
            color: #fff;
            transform: translateX(5px);
            border-color: var(--primary);
        }

        .auth-link i {
            font-size: 18px;
        }

        .contact-section {
            margin: 40px 0;
        }

        .contact-card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 35px;
            margin-top: 20px;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .contact-card__title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #fff;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: var(--radius-sm);
            transition: var(--transition);
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .contact-item__icon {
            width: 40px;
            height: 40px;
            background: rgba(79, 138, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 18px;
        }

        .contact-item__content {
            flex: 1;
        }

        .contact-item__title {
            font-weight: 600;
            color: #fff;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .contact-item__value {
            color: var(--text-secondary);
            font-size: 14px;
        }

        .contact-item__value a {
            color: var(--text-secondary);
            transition: color var(--transition);
        }

        .contact-item__value a:hover {
            color: var(--primary);
        }

        /* ===== BROWSERS & MANUAL SECTION ===== */
        .resources-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .resource-card {
            background: linear-gradient(
                    145deg,
                    var(--surface) 0%,
                    var(--surface-dark) 100%
            );
            border-radius: var(--radius);
            padding: 35px 30px;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .resource-card__title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #fff;
        }

        .resource-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .resource-link {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 18px 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: var(--radius-sm);
            text-decoration: none;
            color: var(--text-main);
            transition: all var(--transition);
            position: relative;
            overflow: hidden;
        }

        .resource-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background: var(--primary);
            opacity: 0;
            transition: opacity var(--transition);
        }

        .resource-link:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(5px);
            color: #fff;
        }

        .resource-link:hover::before {
            opacity: 1;
        }

        .resource-link__icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: var(--transition);
        }

        .resource-link:hover .resource-link__icon {
            background: var(--primary);
            color: #fff;
        }

        .resource-link__text {
            flex: 1;
            font-weight: 500;
        }

        .resource-link__badge {
            padding: 4px 12px;
            background: rgba(79, 138, 255, 0.1);
            color: var(--primary);
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .resource-link.yandex .resource-link__icon {
            background: rgba(255, 204, 0, 0.1);
            color: #FFCC00;
        }
        .resource-link.chrome .resource-link__icon {
            background: rgba(66, 133, 244, 0.1);
            color: #4285F4;
        }
        .resource-link.firefox .resource-link__icon {
            background: rgba(230, 81, 0, 0.1);
            color: #E65100;
        }
        .resource-link.pdf .resource-link__icon {
            background: rgba(244, 67, 54, 0.1);
            color: #F44336;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 18px 35px;
            background: linear-gradient(90deg, var(--primary), var(--primary-dark));
            color: white;
            text-decoration: none;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: 16px;
            transition: all var(--transition);
            border: none;
            cursor: pointer;
            margin-top: 20px;
            box-shadow: 0 8px 25px rgba(79, 138, 255, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(79, 138, 255, 0.4);
            color: white;
        }

        .cta-button i {
            font-size: 18px;
        }

        @media (max-width: 992px) {
            .container {
                padding: 0 20px;
            }

            .doc-hero {
                padding: 40px 0 30px;
            }

            .doc-hero__title {
                font-size: 36px;
            }

            .features-section {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .auth-section {
                padding: 40px 30px;
            }

            .auth-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .resources-section {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .contact-card {
                padding: 30px 25px;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                padding: 30px 0 60px;
            }

            .doc-hero__title {
                font-size: 32px;
            }

            .doc-hero__subtitle {
                font-size: 16px;
                margin-bottom: 30px;
            }

            .feature-card,
            .auth-card,
            .resource-card {
                padding: 30px 25px;
            }

            .auth-section {
                padding: 30px 25px;
                margin: 40px 0;
            }

            .contact-item {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
        }

        @media (max-width: 576px) {
            .doc-hero__title {
                font-size: 28px;
            }

            .feature-card__title,
            .auth-card__title,
            .resource-card__title {
                font-size: 20px;
            }

            .auth-link {
                padding: 12px 18px;
            }

            .resource-link {
                padding: 15px;
            }

            .cta-button {
                width: 100%;
                justify-content: center;
                padding: 16px 24px;
            }

            .contact-card {
                padding: 25px 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }

            .main-content {
                padding: 20px 0 40px;
            }

            .doc-hero {
                padding: 30px 0 20px;
            }

            .auth-section {
                padding: 25px 20px;
            }
        }
    </style>

    <body>

    <div class="hsc-site-content">
        <div class="container">
            <div class="main-content">

                <section class="doc-hero">
                    <h1 class="doc-hero__title">Документация</h1>
                    <p class="doc-hero__subtitle">
                        Полный доступ к электронной документации вертолетной техники в режиме 24/7.<br>
                        Автоматические уведомления о новых документах и изменениях.
                    </p>
                </section>

                <div class="features-section">
                    <div class="feature-card">
                        <h3 class="feature-card__title">
                            Что мы предлагаем
                        </h3>
                        <div class="feature-card__content">
                            <p>Доступ и использование электронной документации на сайте АО "ВСК" в режиме 24/7, не требующие установки дополнительного программного обеспечения.</p>
                            <p>Автоматическое уведомление пользователей о выпуске новых документов и изменениях действующих.</p>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h3 class="feature-card__title">
                            Наши преимущества
                        </h3>
                        <div class="feature-card__content">
                            <p>Документы размещаются и актуализируются на сайте держателями их подлинников.</p>
                            <p>Использование электронных эксплуатационных документов в качестве контрольного экземпляра ЭД разрешено ФАВТ (Росавиация).</p>
                            <a href="https://www.hsc-copter.com/news/item-14956439" target="_blank" class="cta-button">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>

                <section class="auth-section">
                    <h2 class="auth-section__title">Доступ к документации</h2>

                    <div class="auth-grid">
                        <div class="auth-card">
                            <h3 class="auth-card__title">Авторизация в системе</h3>
                            <div class="auth-card__content">
                                <p>Для входа в систему электронной документации используйте ваши учетные данные.</p>
                                <div class="auth-links">
                                    <a href="https://passport.hsc-copter.com/login" target="_blank" class="auth-link">
                                        <i>🔑</i> Вход в систему
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="auth-card">
                            <h3 class="auth-card__title">Регистрация нового пользователя</h3>
                            <div class="auth-card__content">
                                <p>Если вы впервые на нашем портале, пройдите процедуру регистрации.</p>
                                <div class="auth-links">
                                    <a href="https://passport.hsc-copter.com/registration" target="_blank" class="auth-link">
                                        <i>📝</i> Регистрация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contact-section">
                    <div class="contact-card">
                        <h3 class="contact-card__title">Контактная информация</h3>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-item__icon">
                                    <i>📞</i>
                                </div>
                                <div class="contact-item__content">
                                    <div class="contact-item__title">Телефон</div>
                                    <div class="contact-item__value">
                                        <a href="tel:+749566055607550">+7 (495) 660-55-60 (доб. 7550)</a>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-item__icon">
                                    <i>✉️</i>
                                </div>
                                <div class="contact-item__content">
                                    <div class="contact-item__title">Электронная почта</div>
                                    <div class="contact-item__value">
                                        <a href="mailto:сс@hsc-copter.com">сс@hsc-copter.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="resources-section">
                    <div class="resource-card">
                        <h3 class="resource-card__title">Рекомендуемые браузеры</h3>
                        <p style="color: var(--text-secondary); margin-bottom: 20px;">Для корректной работы с документацией рекомендуем использовать:</p>
                        <div class="resource-links">
                            <a href="https://browser.yandex.ru/" target="_blank" rel="nofollow" class="resource-link yandex">
                                <div class="resource-link__icon">Я</div>
                                <div class="resource-link__text">Yandex Browser</div>
                                <div class="resource-link__badge">Рекомендован</div>
                            </a>
                            <a href="https://www.google.com/intl/ru_ru/chrome/" target="_blank" rel="nofollow" class="resource-link chrome">
                                <div class="resource-link__icon">C</div>
                                <div class="resource-link__text">Google Chrome</div>
                            </a>
                            <a href="https://www.mozilla.org/ru/firefox/new/" target="_blank" rel="nofollow" class="resource-link firefox">
                                <div class="resource-link__icon">F</div>
                                <div class="resource-link__text">Mozilla Firefox</div>
                            </a>
                        </div>
                    </div>

                    <div class="resource-card">
                        <h3 class="resource-card__title">Инструкции и руководства</h3>
                        <div class="resource-links">
                            <a href="/manual/public/register" target="_blank" class="resource-link pdf">
                                <div class="resource-link__icon">
                                    <i>📕</i>
                                </div>
                                <div class="resource-link__text">Инструкция по регистрации</div>
                                <div class="resource-link__badge">PDF</div>
                            </a>
                        </div>
                        <p style="color: var(--text-secondary); margin-top: 20px; font-size: 14px;">
                            <i>💡</i> Скачайте инструкцию для подробного ознакомления с процессом регистрации и работы с документацией.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for anchor links
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


            document.querySelectorAll('a[target="_blank"]').forEach(link => {
                link.addEventListener('click', function(e) {
                    console.log('External link clicked:', this.href);

                });
            });

            const cards = document.querySelectorAll('.feature-card, .auth-card, .resource-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.zIndex = '10';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.zIndex = '1';
                });
            });
        });
    </script>

<?php require_once __DIR__ .'/../blocks/footer.php'?>