
    document.addEventListener('DOMContentLoaded', function() {
    console.log('=== ЗАПУСК ФИЛЬТРА КАТАЛОГА ===');

    setTimeout(initializeCatalogFilter, 300);
});

    function initializeCatalogFilter() {
    console.log('🔄 Инициализация фильтра...');

    const productCards = document.querySelectorAll('.product-card');
    console.log('📦 Найдено товаров:', productCards.length);

    if (productCards.length === 0) {
    console.error('❌ Не найдены товары!');
    return;
}


    const filterModel = document.querySelector('.filters select:nth-of-type(1)');
    const filterCategory = document.querySelector('.filters select:nth-of-type(2)');
    const filterSku = document.querySelector('.filters input[type="text"]');
    const filterPrice = document.querySelector('.filters input[type="number"]');
    const sortSelect = document.querySelector('.sort select');
    const foundCount = document.querySelector('.catalog-toolbar strong');

    console.log('🔍 Значения в селекте категорий:');
    if (filterCategory) {
    const options = filterCategory.querySelectorAll('option');
    options.forEach((opt, i) => {
    console.log(`  ${i}: "${opt.textContent}" (value: "${opt.value}")`);
});
}


    const products = [];

    productCards.forEach((card, index) => {

    const titleElem = card.querySelector('.product-title');
    const title = titleElem ? titleElem.textContent.trim() : `Товар ${index + 1}`;


    const skuElem = card.querySelector('.product-sku');
    let sku = '';
    if (skuElem) {
    sku = skuElem.textContent.replace('SKU:', '').replace('SKU: ', '').trim();
}
    const attrsElem = card.querySelector('.product-attrs');
    let model = '';
    let category = '';

    if (attrsElem) {
    const attrsText = attrsElem.textContent;

    const lines = attrsText.split('\n');
    lines.forEach(line => {
    const trimmedLine = line.trim();

    if (trimmedLine.includes('Модель:')) {
    model = trimmedLine.replace('Модель:', '').trim();
}

    if (trimmedLine.includes('Категория:')) {
    category = trimmedLine.replace('Категория:', '').trim();
} else if (trimmedLine === 'Трансмиссия' ||
    trimmedLine === 'Лопасти' ||
    trimmedLine === 'Авионика' ||
    trimmedLine === 'Гидравлика') {
    category = trimmedLine;
}
});
}

    if (!category && attrsElem) {
    const attrsText = attrsElem.textContent;
    if (attrsText.includes('Трансмиссия')) category = 'Трансмиссия';
    else if (attrsText.includes('Лопасти')) category = 'Лопасти';
    else if (attrsText.includes('Авионика')) category = 'Авиаоника';
    else if (attrsText.includes('Авиаоника')) category = 'Авиаоника';
    else if (attrsText.includes('Гидравлика')) category = 'Гидравлика';

    if (filterCategory) {
    const options = Array.from(filterCategory.options).map(opt => opt.textContent);
    console.log('Доступные категории в селекте:', options);

    options.forEach(opt => {
    if (opt !== 'Все категории' && attrsText.includes(opt)) {
    category = opt;
}
});
}
}


    const priceElem = card.querySelector('.product-price');
    let price = 0;
    if (priceElem) {
    const priceText = priceElem.textContent;
    const cleanPrice = priceText.replace(/[^\d\s]/g, '');
    price = parseInt(cleanPrice.replace(/\s/g, '')) || 0;
}

    products.push({
    element: card,
    title: title,
    sku: sku,
    model: model,
    category: category,
    price: price,
    originalIndex: index
});

    console.log(`📝 Товар ${index + 1}: ${title}`);
    console.log(`  Модель: "${model}"`);
    console.log(`  Категория: "${category}" (извлечено из текста)`);
    console.log(`  Цена: ${price}`);
    console.log(`  SKU: ${sku}`);
});

    function updateCatalog() {
    console.log('\n🎯 ОБНОВЛЕНИЕ КАТАЛОГА');

    const selectedModel = filterModel ? filterModel.value : '';
    const selectedCategory = filterCategory ? filterCategory.value : '';
    const skuSearch = filterSku ? filterSku.value.trim().toLowerCase() : '';
    const maxPrice = filterPrice && filterPrice.value ? parseInt(filterPrice.value) : 0;
    const sortBy = sortSelect ? sortSelect.value : 'По умолчанию';

    console.log('🔧 Параметры фильтрации:');
    console.log('  Модель:', selectedModel);
    console.log('  Категория:', selectedCategory, '(значение из селекта)');
    console.log('  SKU поиск:', skuSearch);
    console.log('  Макс цена:', maxPrice);
    console.log('  Сортировка:', sortBy);

    let visibleProducts = [];

    products.forEach(product => {
    let show = true;

    if (selectedModel && selectedModel !== 'Все модели') {
    if (product.model !== selectedModel) {
    show = false;
}
}

    if (show && selectedCategory && selectedCategory !== 'Все категории') {
    console.log(`  Проверка категории для "${product.title}":`);
    console.log(`    Категория товара: "${product.category}"`);
    console.log(`    Выбранная категория: "${selectedCategory}"`);
    console.log(`    Совпадение: ${product.category === selectedCategory}`);

    let categoryMatches = false;

    if (product.category === selectedCategory) {
    categoryMatches = true;
}
    else if (product.category && selectedCategory &&
    product.category.includes(selectedCategory)) {
    categoryMatches = true;
}
    else if (selectedCategory && product.category &&
    selectedCategory.includes(product.category)) {
    categoryMatches = true;
}
    else if (selectedCategory === 'Авиаоника' && product.category === 'Авионика') {
    categoryMatches = true;
}
    else if (selectedCategory === 'Авионика' && product.category === 'Авиаоника') {
    categoryMatches = true;
}

    if (!categoryMatches) {
    console.log(`    ❌ Товар "${product.title}" не проходит фильтр категории`);
    show = false;
} else {
    console.log(`    ✅ Категория совпадает`);
}
}

    if (show && skuSearch) {
    if (!product.sku.toLowerCase().includes(skuSearch)) {
    show = false;
}
}

    if (show && maxPrice > 0) {
    if (product.price > maxPrice) {
    show = false;
}
}

    if (show) {
    visibleProducts.push(product);
    product.element.style.display = 'flex';
    console.log(`    ✅ Товар "${product.title}" ПРОШЕЛ все фильтры`);
} else {
    product.element.style.display = 'none';
}
});

    console.log(`👁️  Результат: ${visibleProducts.length} видимых`);

    if (sortBy === 'Цена ↑') {
    visibleProducts.sort((a, b) => a.price - b.price);
} else if (sortBy === 'Цена ↓') {
    visibleProducts.sort((a, b) => b.price - a.price);
} else if (sortBy === 'По популярности') {
    visibleProducts.sort((a, b) => a.title.localeCompare(b.title));
} else if (sortBy === 'По умолчанию') {
    visibleProducts.sort((a, b) => a.originalIndex - b.originalIndex);
}

    const catalogGrid = document.querySelector('.catalog-grid');
    if (catalogGrid) {
    visibleProducts.forEach(product => {
    catalogGrid.appendChild(product.element);
});

    products.filter(p => !visibleProducts.includes(p)).forEach(product => {
    catalogGrid.appendChild(product.element);
});
}

    if (foundCount) {
    foundCount.textContent = visibleProducts.length;
}

    console.log('✅ Каталог обновлен!');
}

    if (filterModel) filterModel.addEventListener('change', updateCatalog);
    if (filterCategory) filterCategory.addEventListener('change', updateCatalog);
    if (filterSku) {
    filterSku.addEventListener('input', function() {
    clearTimeout(this.timeout);
    this.timeout = setTimeout(updateCatalog, 300);
});
}
    if (filterPrice) {
    filterPrice.addEventListener('input', function() {
    clearTimeout(this.timeout);
    this.timeout = setTimeout(updateCatalog, 300);
});
}
    if (sortSelect) sortSelect.addEventListener('change', updateCatalog);

    if (foundCount) {
    foundCount.textContent = products.length;
}

    updateCatalog();

    console.log('🚀 ФИЛЬТР АКТИВИРОВАН!');
    console.log('======================\n');

    console.log('🧪 ТЕСТ КАТЕГОРИЙ:');
    console.log('1. Выберите "Трансмиссия" → должен остаться "Редуктор главной передачи"');
    console.log('2. Выберите "Лопасти" → должен остаться "Лопасть несущего винта"');
    console.log('3. Выберите "Авиаоника" → должен остаться "Блок авионики NAV-X4"');
    console.log('4. Выберите "Гидравлика" → должен остаться "Гидронасос HP-240"');
}
