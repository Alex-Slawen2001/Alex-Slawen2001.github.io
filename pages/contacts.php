<?php require_once __DIR__ .'/../blocks/header.php'?>
    <style>
        :root {
            --bg-main: #121212;
            --bg-secondary: #1E1E1E;
            --surface: #2A2A2A;
            --surface-hover: #343434;
            --surface-dark: #1a1a1a;

            --text-main: #E0E0E0;
            --text-secondary: #A0A0A0;
            --text-muted: #a0a0a0;;

            --primary: #4F8AFF;
            --primary-light: rgba(79, 138, 255, 0.15);
            --primary-dark: #3a7cff;
            --accent: #00C6A7;

            --radius: 14px;
            --radius-sm: 8px;
            --transition: .3s ease;

            --shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            --shadow-hover: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        body {
            background: var(--bg-main);
            color: var(--text-main);
            font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            font-size: 16px;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .main-content {
            padding: 40px 0 80px;
            min-height: calc(100vh - 400px);
        }

        .page-header {
            margin-bottom: 40px;
            text-align: center;
        }

        .page-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 12px;
            background: #fff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .page-subtitle {
            color: var(--text-secondary);
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-section {
            margin-bottom: 60px;
        }

        .section-header {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--surface);
            position: relative;
        }

        .section-header::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 80px;
            height: 2px;
            background: linear-gradient(to right, var(--primary), var(--accent));
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        @media (max-width: 1100px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }

        .contact-card {
            background: var(--surface);
            border-radius: var(--radius);
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary-light);
            box-shadow: var(--shadow-hover);
        }

        .contact-card__map {
            height: 280px;
            background: var(--surface-dark);
            overflow: hidden;
            position: relative;
        }

        .contact-card__map iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(20%) contrast(110%);
        }

        .contact-card__content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .contact-card__title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #fff;
        }

        .contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 18px;
            padding-bottom: 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .contact-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            border-radius: var(--radius-sm);
            background: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
            flex-shrink: 0;
            color: var(--primary);
            font-size: 18px;
        }

        .contact-details {
            flex-grow: 1;
        }

        .contact-label {
            display: block;
            font-size: 14px;
            color: var(--text-secondary);
            margin-bottom: 4px;
        }

        .contact-value {
            display: block;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5;
            color: #fff;
        }

        .contact-value a {
            color: inherit;
            text-decoration: none;
            transition: var(--transition);
            position: relative;
        }

        .contact-value a:hover {
            color: var(--primary);
        }

        .contact-value a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--primary);
            transition: width var(--transition);
        }

        .contact-value a:hover::after {
            width: 100%;
        }
        .departments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .departments-grid {
                grid-template-columns: 1fr;
            }
        }

        .department-card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: var(--transition);
            height: 100%;
        }

        .department-card:hover {
            transform: translateY(-3px);
            border-color: var(--primary-light);
            box-shadow: var(--shadow);
        }

        .department-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .department-title {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
            color: #fff;
            flex-grow: 1;
        }

        .department-hours {
            background: var(--primary-light);
            color: var(--primary);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            white-space: nowrap;
            margin-left: 15px;
        }

        .department-contacts {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .department-contact {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            padding: 12px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: var(--radius-sm);
            transition: var(--transition);
        }

        .department-contact:hover {
            background: rgba(255, 255, 255, 0.06);
        }

        .department-contact:last-child {
            margin-bottom: 0;
        }

        .department-icon {
            margin-right: 12px;
            color: var(--primary);
            font-size: 16px;
            width: 20px;
            text-align: center;
        }

        .department-info {
            flex-grow: 1;
        }

        .department-label {
            display: block;
            font-size: 13px;
            color: var(--text-secondary);
            margin-bottom: 2px;
        }

        .department-value {
            display: block;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
        }

        .department-value a {
            color: inherit;
            text-decoration: none;
            transition: var(--transition);
        }

        .department-value a:hover {
            color: var(--primary);
        }

        .cta-section {
            background: linear-gradient(135deg, var(--surface-dark) 0%, var(--bg-secondary) 100%);
            border-radius: var(--radius);
            padding: 50px;
            text-align: center;
            margin-top: 60px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, var(--primary-light) 0%, transparent 70%);
            opacity: 0.2;
            pointer-events: none;
        }

        .cta-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 16px;
            color: #fff;
        }

        .cta-subtitle {
            font-size: 18px;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: 16px;
            text-decoration: none;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            gap: 10px;
        }

        .cta-button--primary {
            background: var(--primary);
            color: white;
        }

        .cta-button--primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(79, 138, 255, 0.25);
        }

        .cta-button--secondary {
            background: transparent;
            color: var(--primary);
            border: 1px solid var(--primary);
        }

        .cta-button--secondary:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 16px;
            }

            .main-content {
                padding: 30px 0 60px;
            }

            .page-title {
                font-size: 28px;
            }

            .page-subtitle {
                font-size: 16px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .contact-card__map {
                height: 220px;
            }

            .contact-card__content {
                padding: 20px;
            }

            .cta-section {
                padding: 30px 20px;
            }

            .cta-title {
                font-size: 24px;
            }

            .cta-subtitle {
                font-size: 16px;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .cta-button {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 24px;
            }

            .section-header {
                font-size: 20px;
            }

            .department-card {
                padding: 20px;
            }

            .contact-item {
                flex-direction: column;
            }

            .contact-icon {
                margin-right: 0;
                margin-bottom: 12px;
            }

            .departments-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }


        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }
            /*color: var(--accent);*/
        }
    </style>


    <body>

    <div class="hsc-site-content">
        <div class="container">
            <div class="main-content">

                <header class="page-header">
                    <h1 class="page-title">Контакты</h1>
                    <p class="page-subtitle">Свяжитесь с нами любым удобным способом. Наша команда готова помочь вам с вопросами по обслуживанию, поставкам и сотрудничеству.</p>
                </header>


                <section class="contact-section">
                    <h2 class="section-header">Расположение офиса и склада</h2>

                    <div class="contact-grid">

                        <div class="contact-card">
                            <div class="contact-card__map">
                                <iframe
                                    src="https://yandex.ru/map-widget/v1/?lang=RU&scroll=false&source=constructor-api&um=constructor%3Auzx9uuWKeyU3U6c_7RXXancKD4tmA1dE"
                                    frameborder="0"
                                    allowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="contact-card__content">
                                <h3 class="contact-card__title">Головной офис в Москве</h3>
                                <ul class="contact-list">
                                    <li class="contact-item">
                                        <div class="contact-icon">📍</div>
                                        <div class="contact-details">
                                            <span class="contact-label">Адрес</span>
                                            <span class="contact-value">117447, Россия, Москва,<br>Большая Черемушкинская улица, 13 стр. 1</span>
                                        </div>
                                    </li>
                                    <li class="contact-item">
                                        <div class="contact-icon">📞</div>
                                        <div class="contact-details">
                                            <span class="contact-label">Телефон</span>
                                            <span class="contact-value">
                                            <a href="tel:+74956605560">+7 (495) 660-55-60</a>
                                        </span>
                                        </div>
                                    </li>
                                    <li class="contact-item">
                                        <div class="contact-icon">📠</div>
                                        <div class="contact-details">
                                            <span class="contact-label">Факс</span>
                                            <span class="contact-value">
                                            <a href="tel:+74956605559">+7 (495) 660-55-59</a>
                                        </span>
                                        </div>
                                    </li>
                                    <li class="contact-item">
                                        <div class="contact-icon">✉️</div>
                                        <div class="contact-details">
                                            <span class="contact-label">Эл. почта</span>
                                            <span class="contact-value">
                                            <a href="mailto:hsc@hsc-copter.com">hsc@hsc-copter.com</a>
                                        </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-card__map">
                                <iframe
                                    src="https://yandex.ru/map-widget/v1/?lang=ru_RU&scroll=false&source=constructor-api&um=constructor%3AaaJxxjt8ImURBBEs8Doi2-x8mrc6kRV6"
                                    frameborder="0"
                                    allowfullscreen="true">
                                </iframe>
                            </div>
                            <div class="contact-card__content">
                                <h3 class="contact-card__title">Центральный склад АТИ</h3>
                                <ul class="contact-list">
                                    <li class="contact-item">
                                        <div class="contact-icon">📍</div>
                                        <div class="contact-details">
                                            <span class="contact-label">Адрес</span>
                                            <span class="contact-value">
                                            141407, Московская Область, г. Химки,<br>
                                            Квартал Клязьма, владение 3Г, строение 1<br>
                                            <small style="color: var(--text-muted);">Координаты: 55.965266, 37.453926</small>
                                        </span>
                                        </div>
                                    </li>
                                    <li class="contact-item">
                                        <div class="contact-icon">📞</div>
                                        <div class="contact-details">
                                            <span class="contact-label">Телефон</span>
                                            <span class="contact-value">
                                            <a href="tel:+74956605560">+7 (495) 660-55-60 (доб. 7892)</a>
                                        </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact-section">
                    <h2 class="section-header">Отделы и подразделения</h2>

                    <div class="departments-grid">
                        <div class="department-card">
                            <div class="department-header">
                                <h3 class="department-title">Центр реализации АТИ (АО «ВР-Сервис»)</h3>
                                <span class="department-hours">9:00–18:00</span>
                            </div>
                            <ul class="department-contacts">
                                <li class="department-contact">
                                    <div class="department-icon">📞</div>
                                    <div class="department-info">
                                        <span class="department-label">Тел/Факс</span>
                                        <span class="department-value">
                                        <a href="tel:+74952687008">+7 (495) 268-70-08</a>
                                    </span>
                                    </div>
                                </li>
                                <li class="department-contact">
                                    <div class="department-icon">✉️</div>
                                    <div class="department-info">
                                        <span class="department-label">Эл. почта</span>
                                        <span class="department-value">
                                        <a href="mailto:info@h-service.ru">info@h-service.ru</a>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="department-card">
                            <div class="department-header">
                                <h3 class="department-title">Департамент управления персоналом</h3>
                                <span class="department-hours">9:00–18:00</span>
                            </div>
                            <ul class="department-contacts">
                                <li class="department-contact">
                                    <div class="department-icon">📞</div>
                                    <div class="department-info">
                                        <span class="department-label">Телефон</span>
                                        <span class="department-value">
                                        <a href="tel:+749566055607750">+7 (495) 660-55-60 (доб. 7750)</a>
                                    </span>
                                    </div>
                                </li>
                                <li class="department-contact">
                                    <div class="department-icon">✉️</div>
                                    <div class="department-info">
                                        <span class="department-label">Эл. почта</span>
                                        <span class="department-value">
                                        <a href="mailto:hr@hsc-copter.com">hr@hsc-copter.com</a>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="department-card">
                            <div class="department-header">
                                <h3 class="department-title">Коммерческий отдел</h3>
                                <span class="department-hours">9:00–18:00</span>
                            </div>
                            <ul class="department-contacts">
                                <li class="department-contact">
                                    <div class="department-icon">📞</div>
                                    <div class="department-info">
                                        <span class="department-label">Телефон</span>
                                        <span class="department-value">
                                        <a href="tel:+749566055607744">+7 (495) 660-55-60 (доб. 7744)</a>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="department-card">
                            <div class="department-header">
                                <h3 class="department-title">Департамент по финансам</h3>
                                <span class="department-hours">9:00–18:00</span>
                            </div>
                            <ul class="department-contacts">
                                <li class="department-contact">
                                    <div class="department-icon">📞</div>
                                    <div class="department-info">
                                        <span class="department-label">Телефон</span>
                                        <span class="department-value">
                                        <a href="tel:+74956605560">+7 (495) 660-55-60</a>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="department-card">
                            <div class="department-header">
                                <h3 class="department-title">Отдел документационного обеспечения</h3>
                                <span class="department-hours">9:00–18:00</span>
                            </div>
                            <ul class="department-contacts">
                                <li class="department-contact">
                                    <div class="department-icon">📞</div>
                                    <div class="department-info">
                                        <span class="department-label">Телефон</span>
                                        <span class="department-value">
                                        <a href="tel:+74956605560">+7 (495) 660-55-60 (доб. 7752, 7577, 7568)</a>
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="cta-section">
                    <h2 class="cta-title">Нужна консультация?</h2>
                    <p class="cta-subtitle">Наши специалисты готовы ответить на все ваши вопросы. Свяжитесь с нами удобным для вас способом.</p>

                    <div class="cta-buttons">
                        <a href="tel:+74956605560" class="cta-button cta-button--primary">
                            📞 Позвонить сейчас
                        </a>
                        <a href="mailto:hsc@hsc-copter.com" class="cta-button cta-button--secondary">
                            ✉️ Написать email
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>

<?php require_once __DIR__ .'/../blocks/footer.php'?>