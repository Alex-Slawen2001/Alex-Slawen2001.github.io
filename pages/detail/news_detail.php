<?php require_once __DIR__ .'/../../blocks/header.php'?>
    <body>

    <div class="container">

        <div class="breadcrumbs">
            <a href="/pages/news.php">Новости</a> → Детальная новость
        </div>

        <div class="page-grid">

            <article style='margin-bottom: 15px;' class="article-card" itemscope itemtype="https://schema.org/NewsArticle">

                <h1 class="article-title" itemprop="headline">
                    Подписание соглашения между АО «Вертолетная сервисная компания» и АО «Корпорация развития Дальнего Востока и Арктики»
                </h1>

                <div class="article-meta" itemprop="datePublished">
                    05 сентября 2025 года · Владивосток
                </div>

                <div class="article-image article-image--compact">
                    <img src="/styles/images/forum1.jpg" itemprop="image" alt="">
                </div>

                <div class="article-content" itemprop="articleBody">
                    <p>
                        На X Восточном экономическом форуме было подписано соглашение с Корпорацией по развитию Дальнего Востока и Арктики и акционерным обществом «Вертолетная сервисная компания» о запуске крупного проекта по формированию в городе Хабаровске многопрофильного вертолетного кластера.
                    </p>

                    <p>
                        Данный объект станет центром технического обслуживания, ремонта и модернизации отечественной вертолетной техники. Для создания современной инфраструктуры планируется инвестировать сумму в размере 3,3 миллиардов рублей.
                    </p>

                    <p>
                        Реализуемый проект получит статус резидента территории опережающего развития Хабаровска. Его реализация укрепит лидирующую позицию Хабаровского края среди регионов Дальнего Востока в сфере высоких технологий.
                    </p>
                </div>

                <div class="gallery">
                    <img src="/styles/images/forum2.jpg" alt="">
                    <img src="/styles/images/forum3.jpg" alt="">
                    <img src="/styles/images/forum4.jpg" alt="">
                </div>

                <a href="/pages/news.php" class="back-link">← Вернуться ко всем новостям</a>

            </article>

            <aside class="sidebar">

                <div class="sidebar-block">
                    <div class="sidebar-title">Другие новости</div>

                    <div class="sidebar-news-item">
                        <div class="sidebar-date">15.05.2025</div>
                        <a href="#" class="sidebar-link">ВСК — лидер в обслуживании вертолетной техники</a>
                    </div>

                    <div class="sidebar-news-item">
                        <div class="sidebar-date">27.11.2024</div>
                        <a href="#" class="sidebar-link">О статусе АО «ВСК»</a>
                    </div>

                    <div class="sidebar-news-item">
                        <div class="sidebar-date">05.08.2021</div>
                        <a href="#" class="sidebar-link">Развитие сервисного обслуживания</a>
                    </div>

                    <a href="/pages/news.php" class="back-link">Все новости →</a>
                </div>

            </aside>

        </div>
    </div>

<style>

    .page-grid {
        display: grid;
        grid-template-columns: 3fr 1.3fr;
        gap: 36px;
        margin-top: 30px;
    }

    .article-card {
        background: var(--surface);
        border-radius: var(--radius);
        padding: 28px;
    }

    .article-title {
        font-size: 30px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 14px;
    }

    .article-meta {
        font-size: 14px;
        color: var(--text-muted);
        margin-bottom: 22px;
    }

    .article-image {
        border-radius: 14px;
        overflow: hidden;
        margin-bottom: 22px;
    }

    .article-image img {
        width: 100%;
        display: block;
    }

    .article-content p {
        font-size: 16px;
        color: var(--text-secondary);
        line-height: 1.7;
        margin-bottom: 18px;
    }


    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 14px;
        margin: 26px 0;
    }

    .gallery img {
        width: 100%;
        border-radius: 10px;
        cursor: pointer;
        transition: transform .25s ease;
    }

    .gallery img:hover {
        transform: scale(1.03);
    }


    .back-link {
        display: inline-block;
        margin-top: 18px;
        font-weight: 600;
        color: var(--primary);
    }


    .sidebar-block {
        background: var(--surface);
        border-radius: var(--radius);
        padding: 22px;
    }

    .sidebar-title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .sidebar-news-item {
        margin-bottom: 16px;
    }

    .sidebar-date {
        font-size: 13px;
        color: var(--text-muted);
        margin-bottom: 4px;
    }

    .sidebar-link {
        font-size: 14px;
        font-weight: 600;
        color: var(--text-main);
        transition: var(--transition);
    }

    .sidebar-link:hover {
        color: var(--primary);
    }
    .article-image--compact {
        max-width: 820px;
        margin: 0 auto 26px;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,.45);
    }

    .article-image--compact img {
        width: 100%;
        height: 420px;
        object-fit: cover;
        display: block;
    }

    @media (max-width: 992px) {
        .article-image--compact img {
            height: 340px;
        }
    }

    @media (max-width: 576px) {
        .article-image--compact {
            max-width: 100%;
        }

        .article-image--compact img {
            height: 240px;
        }
    }


    @media (max-width: 992px) {
        .page-grid {
            grid-template-columns: 1fr;
        }

        .sidebar {
            order: 2;
        }

        .article-card {
            order: 1;
        }
    }

    @media (max-width: 576px) {
        .article-title {
            font-size: 22px;
        }

        .article-content p {
            font-size: 15px;
        }

        .article-card {
            padding: 20px;
        }
    }

</style>

<?php require_once __DIR__ .'/../../blocks/footer.php'?>