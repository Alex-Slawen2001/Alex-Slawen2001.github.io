<?php $page_css = ['product'];?>
<?php require_once __DIR__ .'/../../blocks/header.php'?>
    <style>
        :root {
            --bg-main: #121212;
            --bg-secondary: #1E1E1E;
            --surface: #2A2A2A;
            --surface-hover: #343434;
            --text-main: #E0E0E0;
            --text-secondary: #A0A0A0;
            --text-muted: #a0a0a0;
            --primary: #4F8AFF;
            --accent: #00C6A7;
            --radius: 12px;
            --transition: .2s ease;
        }

        body {
            background: var(--bg-main);
            color: var(--text-main);
            font-family: Inter, system-ui, sans-serif;
            margin: 0;
            line-height: 1.5;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 24px;
        }

        .breadcrumbs {
            font-size: 14px;
            color: var(--text-muted);
            padding: 20px 0;
            border-bottom: 1px solid #2a2a2a;
        }


        .product-layout {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 40px;
            margin-top: 30px;
            align-items: start;
        }


        .gallery {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .gallery-main {
            width: 100%;
            aspect-ratio: 4/3;
            background: #000;
            border-radius: var(--radius);
            overflow: hidden;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .gallery-main img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            max-width: 100%;
            max-height: 100%;
        }

        .gallery-thumbs {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding: 10px 5px;
            width: 100%;
        }

        .gallery-thumbs::-webkit-scrollbar {
            height: 4px;
        }

        .gallery-thumbs::-webkit-scrollbar-track {
            background: #2a2a2a;
            border-radius: 2px;
        }

        .gallery-thumbs::-webkit-scrollbar-thumb {
            background: #4F8AFF;
            border-radius: 2px;
        }

        .thumb {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            opacity: 0.7;
            flex-shrink: 0;
            border: 2px solid transparent;
            transition: var(--transition);
            background: #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .thumb:hover,
        .thumb.active {
            opacity: 1;
            border-color: var(--primary);
        }

        .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .product-info {
            padding-top: 0;
        }

        .product-info h1 {
            margin: 0 0 10px;
            font-size: 24px;
            line-height: 1.3;
        }

        .sku {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 15px;
            display: block;
        }

        .price {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
            margin: 20px 0;
            display: block;
        }

        .stock {
            color: var(--accent);
            font-weight: 500;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .stock::before {
            content: "●";
            font-size: 12px;
        }

        .actions {
            display: flex;
            gap: 12px;
            margin-bottom: 30px;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
            padding: 12px 24px;
            border-radius: var(--radius);
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            flex: 1;
        }

        .btn-primary:hover {
            opacity: 0.9;
        }

        .btn-outline {
            border: 1px solid var(--primary);
            background: transparent;
            padding: 12px 24px;
            border-radius: var(--radius);
            color: var(--primary);
            cursor: pointer;
            transition: var(--transition);
            flex: 1;
        }

        .btn-outline:hover {
            background: rgba(79, 138, 255, 0.1);
        }

        .attributes {
            background: var(--surface);
            padding: 20px;
            border-radius: var(--radius);
            margin-top: 20px;
        }

        .attr-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .attr-row:last-child {
            border-bottom: none;
        }

        .attr-row span:first-child {
            color: var(--text-secondary);
        }

        .attr-row span:last-child {
            font-weight: 500;
            text-align: right;
        }

        .tabs {
            margin-top: 40px;
            clear: both;
            grid-column: 1 / -1;
        }

        .tab-buttons {
            display: flex;
            gap: 20px;
            border-bottom: 1px solid #333;
            margin-bottom: 20px;
        }

        .tab-btn {
            padding: 12px 0;
            cursor: pointer;
            color: var(--text-secondary);
            position: relative;
            white-space: nowrap;
        }

        .tab-btn.active {
            color: white;
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--primary);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .compatibility-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 10px;
            margin-top: 20px;
        }

        .compatibility-item {
            background: var(--surface);
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            font-size: 14px;
        }

        .related-grid {
            margin-top: 60px;
            grid-column: 1 / -1;

        .related-grid h2 {
            margin-bottom: 24px;
            font-size: 22px;
        }

        .related-items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .related-card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 16px;
            transition: var(--transition);
        }

        .related-card:hover {
            background: var(--surface-hover);
        }

        .related-image {
            width: 100%;
            aspect-ratio: 4/3;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 12px;
            background: #111;
        }

        .related-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .related-title {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .related-card .price {
            font-size: 18px;
            margin: 10px 0 0 0;
        }


        @media (max-width: 992px) {
            .product-layout {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .gallery-main {
                aspect-ratio: 1/1;
            }

            .thumb {
                width: 70px;
                height: 70px;
            }

            .tabs,
            .related-grid {
                grid-column: 1;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 16px;
            }

            .actions {
                flex-direction: column;
            }

            .tab-buttons {
                overflow-x: auto;
                padding-bottom: 10px;
                gap: 15px;
            }

            .tab-btn {
                font-size: 14px;
            }

            .related-items {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .price {
                font-size: 24px;
            }

            .thumb {
                width: 60px;
                height: 60px;
            }

            .related-items {
                grid-template-columns: 1fr;
            }

            .breadcrumbs {
                font-size: 13px;
            }
        }
    </style>

    <body>

    <div class="container">

        <div class="breadcrumbs">
            Главная → Каталог → Трансмиссия → Редуктор главной передачи
        </div>

        <div class="product-layout">


            <div class="gallery">
                <div class="gallery-main">
                    <img src="/styles/images/reductor.jpg" alt="Редуктор главной передачи Mi-8" id="mainProductImage">
                </div>

                <div class="gallery-thumbs">
                    <div class="thumb active" data-image="/styles/images/product-main.jpg">
                        <img src="/styles/images/reductor.jpg" alt="Вид 1">
                    </div>
                    <div class="thumb" data-image="/styles/images/product-angle1.jpg">
                        <img src="/styles/images/reductor.jpg" alt="Вид 2">
                    </div>
                    <div class="thumb" data-image="/styles/images/product-angle2.jpg">
                        <img src="/styles/images/reductor.jpg" alt="Вид 3">
                    </div>
                    <div class="thumb" data-image="/styles/images/product-details.jpg">
                        <img src="/styles/images/reductor.jpg" alt="Детали">
                    </div>
                    <div class="thumb" data-image="/styles/images/product-package.jpg">
                        <img src="/styles/images/reductor.jpg" alt="Упаковка">
                    </div>
                </div>
            </div>


            <div class="product-info">
                <h1>Редуктор главной передачи Mi-8</h1>
                <div class="sku">SKU: HSC-MI8-RGX01</div>

                <div class="price">₽ 1 450 000</div>

                <div class="stock">В наличии</div>

                <div class="actions">
                    <button class="btn-primary">В корзину</button>
                    <button class="btn-outline">Запросить КП</button>
                </div>

                <div class="attributes">
                    <div class="attr-row"><span>Категория</span><span>Трансмиссия</span></div>
                    <div class="attr-row"><span>Модель</span><span>Mi-8</span></div>
                    <div class="attr-row"><span>Вес</span><span>124 кг</span></div>
                    <div class="attr-row"><span>Производитель</span><span>HSC</span></div>
                    <div class="attr-row"><span>Гарантия</span><span>12 месяцев</span></div>
                </div>
            </div>
        </div>


        <div class="tabs">
            <div class="tab-buttons">
                <div class="tab-btn active" onclick="openTab(0)">Описание</div>
                <div class="tab-btn" onclick="openTab(1)">Характеристики</div>
                <div class="tab-btn" onclick="openTab(2)">Совместимость</div>
                <div class="tab-btn" onclick="openTab(3)">Документы</div>
            </div>

            <div class="tab-content active">
                <p>Редуктор главной передачи для вертолётов серии Mi-8. Предназначен для передачи крутящего момента от двигателя к несущему винту. Изготовлен из авиационного алюминиевого сплава. Соответствует авиационным стандартам качества и безопасности.</p>
                <p>Используется в гражданской и военной авиации. Прошел все необходимые испытания и сертификацию. Обеспечивает плавную и надежную работу трансмиссии вертолета.</p>
            </div>

            <div class="tab-content">
                <ul>
                    <li><strong>Номинальный крутящий момент:</strong> 4500 Нм</li>
                    <li><strong>Материал корпуса:</strong> авиационный алюминий</li>
                    <li><strong>Рабочая температура:</strong> −45°С — +80°С</li>
                    <li><strong>Срок службы:</strong> 10 000 часов</li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="compatibility-list">
                    <div class="compatibility-item">Mi-8T</div>
                    <div class="compatibility-item">Mi-8MTV</div>
                    <div class="compatibility-item">Mi-17</div>
                    <div class="compatibility-item">Mi-171</div>
                </div>
            </div>

            <div class="tab-content">
                <ul>
                    <li>Паспорт изделия (PDF)</li>
                    <li>Сертификат соответствия</li>
                    <li>Инструкция по установке</li>
                </ul>
            </div>
        </div>

        <div class="related-grid">
            <h2>Похожие товары</h2>
            <div style="margin-bottom: 15px;" class="related-items">
                <div class="related-card">
                    <div class="related-image">
                        <img src="/styles/images/lopast_vinta.png" alt="Лопасть несущего винта">
                    </div>
                    <div class="related-title">Лопасть несущего винта Mi-8</div>
                    <div class="price">₽ 980 000</div>
                </div>
                <div class="related-card">
                    <div class="related-image">
                        <img src="/styles/images/gidro.png" alt="Гидронасос HP-240">
                    </div>
                    <div class="related-title">Гидронасос HP-240 для Mi-8/17</div>
                    <div class="price">₽ 210 000</div>
                </div>
                <div class="related-card">
                    <div class="related-image">
                        <img src="/styles/images/block_avioniki.webp" alt="Блок авионики NAV-X4">
                    </div>
                    <div class="related-title">Блок авионики NAV-X4</div>
                    <div class="price">₽ 320 000</div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function openTab(index) {
            document.querySelectorAll('.tab-btn').forEach((btn,i)=>{
                btn.classList.toggle('active', i === index)
            })
            document.querySelectorAll('.tab-content').forEach((tab,i)=>{
                tab.classList.toggle('active', i === index)
            })
        }

        document.addEventListener('DOMContentLoaded', function() {
            const mainImg = document.getElementById('mainProductImage');
            const thumbs = document.querySelectorAll('.thumb');

            thumbs.forEach(thumb => {
                thumb.addEventListener('click', function() {
                    // Убираем активный класс
                    thumbs.forEach(t => t.classList.remove('active'));
                    // Добавляем активный класс текущей
                    this.classList.add('active');
                    // Меняем основное изображение
                    const newImgSrc = this.getAttribute('data-image');
                    if (newImgSrc) {
                        mainImg.src = newImgSrc;
                    }
                });
            });
        });
    </script>

<?php require_once __DIR__ .'/../../blocks/footer.php'?>