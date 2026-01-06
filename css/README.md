---

## Структура CSS файлов

### 1. `colors.css` - Цветовая палитра сайта
Содержит все цвета, используемые на сайте, и предопределённые стили для компонентов.

#### Подключение
```html
<link rel="stylesheet" href="css/colors.css">
```

#### Использование CSS переменных

**Фоновые цвета:**
```css
background-color: var(--bg-primary); /* #FAF8F5 */
```

**Текст:**
```css
color: var(--text-primary);   /* #6E6E6E - основной текст */
color: var(--text-heading);   /* #2E2E2E - заголовки */
```

**Кнопки (CTA):**
```html
<!-- Основная кнопка (красная) -->
<button class="btn-primary">Отправить</button>

<!-- Вторичная кнопка (бирюзовая) -->
<button class="btn-secondary">Отмена</button>
```

**Информационные блоки:**
```html
<div class="info-block">
  Информация для пользователя
</div>
```

**Акцентные элементы:**
```html
<span class="brand-accent">Выделенный текст</span>
```

**Промо-секция:**
```html
<section class="promo-section">
  Специальное предложение
</section>
```

#### Доступные переменные
```css
--bg-primary       /* #FAF8F5 */
--text-primary     /* #6E6E6E */
--text-heading     /* #2E2E2E */
--cta-primary      /* #E53935 */
--cta-secondary    /* #1BB3A9 */
--info-blocks      /* #8C7BC3 */
--brand-accent     /* #C9A24D */
--promo-bg         /* #E6B65C */
```

---

### 2. `layout.css` - Система отступов и контейнеров
Содержит адаптивные контейнеры, систему отступов и утилиты для верстки.

#### Подключение
```html
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/colors.css">
```

#### Контейнеры

**Основной контейнер** - адаптивный для всех устройств:
```html
<div class="container">
  <!-- Контент автоматически адаптируется под размер экрана -->
</div>
```

Ширины контейнера по брейкпоинтам:
- **Mobile (320px)**: 100% ширины экрана с отступом 8px
- **Tablet (768px)**: 720px
- **Desktop (1024px)**: 960px
- **Wide (1280px+)**: 1320px

#### Система отступов (Spacing)

**Масштаб отступов:**
```
xs: 4px
sm: 8px
md: 16px
lg: 24px
xl: 32px
2xl: 48px
3xl: 64px
```

**Использование:**
```html
<!-- Padding со всех сторон -->
<div class="p-md">Контент с отступом 16px</div>

<!-- Горизонтальный padding -->
<div class="px-lg">Отступ слева и справа 24px</div>

<!-- Вертикальный padding -->
<div class="py-md">Отступ сверху и снизу 16px</div>

<!-- Margin -->
<div class="m-lg">Внешний отступ 24px</div>
<div class="mx-auto">Центрировано горизонтально</div>
```

#### Grid система (сетка)

**Адаптивная сетка:**
```html
<div class="grid">
  <div>Элемент 1</div>
  <div>Элемент 2</div>
  <div>Элемент 3</div>
</div>
```

Количество колонок по брейкпоинтам:
- **Mobile**: 1 колонка
- **Tablet**: 2 колонки
- **Desktop**: 3 колонки

**3-колончная сетка:**
```html
<div class="grid grid-3">
  <!-- 3 колонки на всех экранах -->
</div>
```

**4-колончная сетка (только Desktop):**
```html
<div class="grid grid-4">
  <!-- Автоматически адаптируется -->
</div>
```

#### Flexbox утилиты

```html
<!-- Flex контейнер с выравниванием -->
<div class="flex">
  <span>Левый элемент</span>
  <span>Правый элемент</span>
</div>

<!-- Распределение элементов -->
<div class="flex-between">
  <span>Слева</span>
  <span>Справа</span>
</div>

<!-- Центрирование -->
<div class="flex-center">
  <span>Центрированный контент</span>
</div>

<!-- Вертикальная раскладка -->
<div class="flex-column gap-md">
  <div>Строка 1</div>
  <div>Строка 2</div>
</div>
```

#### Утилиты для видимости на разных устройствах

```html
<!-- Показывать только на мобильных -->
<div class="show-mobile">Мобильная версия</div>

<!-- Показывать только на планшетах -->
<div class="show-tablet">Планшетная версия</div>

<!-- Показывать только на десктопе -->
<div class="show-desktop">Десктопная версия</div>
```

#### Промежутки в Flex/Grid

```html
<div class="flex gap-md">
  <!-- Промежуток между элементами 16px -->
</div>

<div class="grid gap-lg">
  <!-- Промежуток между элементами 24px -->
</div>
```

---

### 3. `typography.css` - Типография и шрифты
Содержит импорт шрифта Montserrat, систему размеров текста и утилиты для типографии.

#### Подключение всех CSS файлов (Правильный порядок)
```html
<!-- 1. Reset - очистка стандартных стилей -->
<link rel="stylesheet" href="css/reset.css">

<!-- 2. Переменные и глобальные стили -->
<link rel="stylesheet" href="css/variables.css">
<link rel="stylesheet" href="css/colors.css">
<link rel="stylesheet" href="css/typography.css">
<link rel="stylesheet" href="css/layout.css">

<!-- 3. Компоненты и анимации -->
<link rel="stylesheet" href="css/components.css">
<link rel="stylesheet" href="css/animations.css">

<!-- 4. Утилиты (в последнюю очередь) -->
<link rel="stylesheet" href="css/utilities.css">
```

#### Шрифт Montserrat
Шрифт автоматически загружается из Google Fonts со всеми весами:
- 300 (Light)
- 400 (Regular)
- 500 (Medium)
- 600 (Semibold)
- 700 (Bold)
- 800 (Extrabold)
- 900 (Black)

#### Размеры текста

**Переменные размеров:**
```
xs:   12px
sm:   14px
base: 16px
lg:   18px
xl:   20px
2xl:  24px
3xl:  32px
4xl:  40px
5xl:  48px
```

**Использование:**
```html
<!-- Через классы -->
<p class="text-sm">Маленький текст</p>
<p class="text-base">Обычный текст</p>
<p class="text-lg">Большой текст</p>
<p class="text-xl">Очень большой текст</p>

<!-- Через переменные в CSS -->
<style>
  .custom {
    font-size: var(--font-size-2xl);
  }
</style>
```

#### Заголовки

```html
<h1>Заголовок H1</h1> <!-- 48px, Bold -->
<h2>Заголовок H2</h2> <!-- 40px, Bold -->
<h3>Заголовок H3</h3> <!-- 32px, Semibold -->
<h4>Заголовок H4</h4> <!-- 24px, Semibold -->
<h5>Заголовок H5</h5> <!-- 20px, Semibold -->
<h6>Заголовок H6</h6> <!-- 18px, Medium -->

<!-- Через классы -->
<p class="h2">Как заголовок H2, но это параграф</p>
```

#### Font Weight (вес шрифта)

```html
<p class="font-light">Лёгкий текст (300)</p>
<p class="font-regular">Обычный текст (400)</p>
<p class="font-medium">Средний текст (500)</p>
<p class="font-semibold">Полужирный (600)</p>
<p class="font-bold">Жирный (700)</p>
<p class="font-extrabold">Очень жирный (800)</p>
<p class="font-black">Чёрный (900)</p>
```

#### Выравнивание текста

```html
<p class="text-left">Выравнивание влево</p>
<p class="text-center">По центру</p>
<p class="text-right">Выравнивание вправо</p>
<p class="text-justify">Выравнивание по ширине текста</p>
```

#### Трансформация текста

```html
<p class="text-uppercase">это будет прописными буквами</p>
<p class="text-lowercase">ЭТО БУДЕТ СТРОЧНЫМИ</p>
<p class="text-capitalize">каждое слово с большой буквы</p>
```

#### Межстрочный интервал (Line Height)

```html
<p class="leading-tight">Плотный текст (1.2)</p>
<p class="leading-normal">Нормальный текст (1.5)</p>
<p class="leading-relaxed">Свободный текст (1.75)</p>
<p class="leading-loose">Очень свободный (2)</p>
```

#### Межбуквенный интервал (Letter Spacing)

```html
<p class="tracking-tight">Плотные буквы</p>
<p class="tracking-normal">Нормальное расстояние</p>
<p class="tracking-wide">Свободное расстояние</p>
<p class="tracking-wider">Очень свободное расстояние</p>
```

#### Обрезка текста

```html
<!-- Обрезка в одну строку с многоточием -->
<p class="truncate">Очень длинный текст будет обрезан...</p>

<!-- Ограничение в 2 строки -->
<p class="line-clamp-2">Текст будет ограничен двумя строками...</p>

<!-- Ограничение в 3 строки -->
<p class="line-clamp-3">Текст будет ограничен тремя строками...</p>
```

#### Специальные элементы

**Список:**
```html
<ul>
  <li>Элемент списка 1</li>
  <li>Элемент списка 2</li>
  <li>Элемент списка 3</li>
</ul>
```

**Цитата:**
```html
<blockquote>
  Цитата будет выделена жёлтой полоской слева
  и автоматически будет наклонена
</blockquote>
```

**Код:**
```html
<p>Используйте <code>const variable = value;</code> для кода</p>

<pre><code>
function myFunction() {
  console.log('Hello World');
}
</code></pre>
```

**Ссылки:**
```html
<a href="#">Ссылка будет красной и подчёркиваться при наведении</a>
```

#### Комбинирование классов

```html
<!-- Комбинируйте для гибкости -->
<p class="text-lg font-semibold text-uppercase tracking-wide">
  Большой полужирный текст в верхнем регистре с широким интервалом
</p>

<h2 class="text-3xl font-bold leading-tight text-center mb-md">
  Заголовок в центре с плотным межстрочным интервалом
</h2>
```

---

## Порядок подключения CSS файлов

Очень важно подключать файлы в правильном порядке для корректной работы каскада CSS:

1. **reset.css** - очищает стандартные стили браузера
2. **variables.css** - определяет все переменные (тени, радиусы, переходы)
3. **colors.css** - цветовая палитра
4. **typography.css** - типография и шрифты
5. **layout.css** - система сетки и отступов
6. **components.css** - готовые компоненты
7. **animations.css** - анимации
8. **utilities.css** - утилиты (должны быть в конце для приоритета)

---

### 4. `reset.css` - Reset & Normalize

Очищает стандартные стили браузера для консистентности на всех платформах.

**Что делает:**
- Обнуляет margins и paddings
- Нормализует стили форм
- Стилизует focus-состояния для доступности
- Нормализует стили таблиц, списков, ссылок
- Добавляет custom scrollbar для WebKit браузеров

**Использование:**
Автоматически применяется, не требует дополнительных классов.

---

### 5. `variables.css` - Global Design Variables

Содержит все основные переменные дизайна-системы.

**Радиусы углов:**
```css
--border-radius-xs: 2px
--border-radius-sm: 4px
--border-radius-md: 8px
--border-radius-lg: 12px
--border-radius-xl: 16px
--border-radius-full: 9999px
```

**Тени:**
```css
--shadow-xs, --shadow-sm, --shadow-md, --shadow-lg, --shadow-xl, --shadow-2xl
```

**Переходы:**
```css
--transition-fast: 0.15s ease
--transition-base: 0.3s ease
--transition-slow: 0.5s ease
```

**Z-Index слои:**
```css
--z-dropdown: 1000
--z-sticky: 1020
--z-fixed: 1030
--z-modal-backdrop: 1040
--z-modal: 1050
--z-popover: 1060
--z-tooltip: 1070
```

---

### 6. `components.css` - UI Components

Стили для готовых компонентов, которые можно использовать сразу.

#### Карточки (Cards)
```html
<div class="card">
  <div class="card-header">
    <h3>Заголовок</h3>
  </div>
  <img src="image.jpg" class="card-image">
  <div class="card-body">
    <p>Содержание карточки</p>
  </div>
  <div class="card-footer">
    Подвал карточки
  </div>
</div>
```

#### Бейджи (Badges)
```html
<span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-outline">Outline</span>
```

#### Формы
```html
<div class="form-group">
  <label class="form-label">Ваше имя</label>
  <input type="text" class="form-control" placeholder="Введите имя">
  <small class="form-text">Помощь текст</small>
</div>

<!-- С ошибкой -->
<input type="email" class="form-control is-invalid">
<small class="form-error">Неверный email</small>

<!-- С успехом -->
<input type="text" class="form-control is-valid">
<small class="form-success">Всё верно!</small>
```

#### Уведомления (Alerts)
```html
<div class="alert alert-info">Информационное сообщение</div>
<div class="alert alert-success">Успешно!</div>
<div class="alert alert-warning">Внимание!</div>
<div class="alert alert-danger">Ошибка!</div>
```

#### Таблицы
```html
<table class="table">
  <thead>
    <tr>
      <th>Заголовок 1</th>
      <th>Заголовок 2</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Данные 1</td>
      <td>Данные 2</td>
    </tr>
  </tbody>
</table>
```

#### Модальные окна
```html
<div class="modal show">
  <div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title">Заголовок</h2>
      <button class="modal-close">×</button>
    </div>
    <div class="modal-body">Содержание</div>
    <div class="modal-footer">
      <button class="btn-primary">Сохранить</button>
      <button class="btn-secondary">Отмена</button>
    </div>
  </div>
</div>
```

#### Хлебные крошки (Breadcrumb)
```html
<nav class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Главная</a></li>
  <li class="breadcrumb-item"><a href="#">Категория</a></li>
  <li class="breadcrumb-item active">Текущая страница</li>
</nav>
```

#### Пагинация
```html
<nav class="pagination">
  <li class="pagination-item">
    <a href="#" class="pagination-link disabled">Назад</a>
  </li>
  <li class="pagination-item">
    <a href="#" class="pagination-link active">1</a>
  </li>
  <li class="pagination-item">
    <a href="#" class="pagination-link">2</a>
  </li>
  <li class="pagination-item">
    <a href="#" class="pagination-link">Вперёд</a>
  </li>
</nav>
```

#### Дропдауны
```html
<div class="dropdown">
  <button class="btn-primary">Меню</button>
  <ul class="dropdown-menu">
    <li><a href="#" class="dropdown-item">Опция 1</a></li>
    <li><a href="#" class="dropdown-item">Опция 2</a></li>
    <li class="dropdown-divider"></li>
    <li><a href="#" class="dropdown-item">Опция 3</a></li>
  </ul>
</div>
```

#### Progress Bar
```html
<div class="progress">
  <div class="progress-bar" style="width: 70%">70%</div>
</div>
```

#### Tooltips
```html
<div class="tooltip">
  Наведите на меня
  <span class="tooltiptext">Текст подсказки</span>
</div>
```

---

### 7. `animations.css` - Animations & Transitions

Готовые анимации для микровзаимодействий.

#### Fade (исчезновение)
```html
<div class="fade-in">Появление с прозрачностью</div>
<div class="fade-out">Исчезновение</div>
```

#### Slide (скольжение)
```html
<div class="slide-up">Появление снизу</div>
<div class="slide-down">Появление сверху</div>
<div class="slide-left">Появление справа</div>
<div class="slide-right">Появление слева</div>
```

#### Scale (масштабирование)
```html
<div class="scale-in">Появление с масштабированием</div>
<div class="scale-out">Исчезновение с масштабированием</div>
```

#### Bounce (отскок)
```html
<div class="bounce">Прыгающий элемент</div>
<div class="bounce-in">Появление с отскоком</div>
```

#### Pulse (пульс)
```html
<div class="pulse">Пульсирующий элемент</div>
```

#### Spin (вращение)
```html
<div class="spin">Вращающийся спиннер</div>
<div class="spin-reverse">Вращение в обратном направлении</div>
```

#### Shake (встряска)
```html
<div class="shake">Встряхивающийся элемент</div>
```

#### Flip (переворот)
```html
<div class="flip-x">Переворот по оси X</div>
<div class="flip-y">Переворот по оси Y</div>
```

#### Glow (свечение)
```html
<button class="btn-primary glow">Кнопка со свечением</button>
```

#### Hover Effects (эффекты при наведении)
```html
<div class="hover-scale">Увеличение при наведении</div>
<div class="hover-lift">Поднятие с тенью</div>
<div class="hover-shadow">Усиление тени</div>
<div class="hover-color">Изменение цвета</div>
<div class="hover-opacity">Изменение прозрачности</div>
```

#### Smooth Transitions
```html
<div class="smooth-transition">Плавный переход 0.3s</div>
<div class="smooth-transition-fast">Быстрый переход 0.15s</div>
<div class="smooth-transition-slow">Медленный переход 0.5s</div>
```

#### Задержка анимации
```html
<div class="bounce delay-100">Задержка 0.1s</div>
<div class="bounce delay-300">Задержка 0.3s</div>
<div class="bounce delay-500">Задержка 0.5s</div>
```

---

### 8. `utilities.css` - Utility Classes

Вспомогательные классы для быстрой разработки без написания CSS.

#### Display
```html
<div class="block">Block элемент</div>
<div class="inline">Inline элемент</div>
<div class="inline-block">Inline-block</div>
<div class="flex">Flex контейнер</div>
<div class="grid">Grid контейнер</div>
<div class="hidden">Скрытый элемент</div>
```

#### Position
```html
<div class="relative">Relative позиция</div>
<div class="absolute">Absolute позиция</div>
<div class="fixed">Fixed позиция</div>
<div class="sticky">Sticky позиция</div>
```

#### Size
```html
<div class="w-full">100% ширина</div>
<div class="w-1/2">50% ширина</div>
<div class="w-1/3">33% ширина</div>
<div class="h-full">100% высота</div>
<div class="h-screen">100vh высота</div>
```

#### Overflow
```html
<div class="overflow-auto">Авто скролл</div>
<div class="overflow-hidden">Обрезка</div>
<div class="overflow-x-auto">Скролл по X</div>
<div class="overflow-y-auto">Скролл по Y</div>
```

#### Z-Index
```html
<div class="z-10">z-index: 10</div>
<div class="z-20">z-index: 20</div>
<div class="z-50">z-index: 50</div>
```

#### Opacity
```html
<div class="opacity-0">Невидимый</div>
<div class="opacity-50">50% прозрачность</div>
<div class="opacity-100">Полностью видимый</div>
```

#### Border Radius
```html
<div class="rounded-none">Без закругления</div>
<div class="rounded-sm">Маленькие углы</div>
<div class="rounded-md">Средние углы</div>
<div class="rounded-lg">Большие углы</div>
<div class="rounded-full">Полный круг</div>
```

#### Shadow
```html
<div class="shadow-sm">Маленькая тень</div>
<div class="shadow-md">Средняя тень</div>
<div class="shadow-lg">Большая тень</div>
<div class="shadow-xl">Очень большая тень</div>
```

#### Text Utilities
```html
<p class="text-left">Влево</p>
<p class="text-center">По центру</p>
<p class="text-right">Вправо</p>

<p class="italic">Курсив</p>
<p class="underline">Подчёркивание</p>
<p class="line-through">Зачёркивание</p>

<p class="truncate">Очень длинный текст обрезается...</p>
<p class="line-clamp-2">Текст ограничен двумя строками...</p>
```

#### Transform & Animation
```html
<div class="scale-105 transform">Масштабирование</div>
<div class="rotate-45">Поворот на 45 градусов</div>
```

#### Cursor
```html
<button class="cursor-pointer">Курсор указатель</button>
<div class="cursor-not-allowed">Запрещённый курсор</div>
```

#### Flex Utilities
```html
<div class="flex justify-center items-center">Центр</div>
<div class="flex justify-between">Пространство между</div>
<div class="flex flex-col gap-md">Вертикальный flex с промежутком</div>
```

#### Accessibility
```html
<!-- Скрыт визуально, но доступен для screen readers -->
<span class="sr-only">Только для читателей экрана</span>

<!-- Скрыто при печати -->
<button class="print-hidden">Не печатается</button>
```

---

## Примеры комбинирования файлов

```html
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сайт</title>
  
  <!-- Подключение CSS файлов (в правильном порядке) -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/colors.css">
  <link rel="stylesheet" href="css/typography.css">
  <link rel="stylesheet" href="css/layout.css">
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/animations.css">
  <link rel="stylesheet" href="css/utilities.css">
</head>
<body>
  <!-- Заголовок -->
  <header class="py-lg">
    <div class="container">
      <h1>Добро пожаловать</h1>
    </div>
  </header>

  <!-- Основной контент -->
  <main class="container py-xl">
    <!-- Сетка с карточками -->
    <div class="grid gap-lg">
      <div class="info-block p-lg">
        <h2>Блок 1</h2>
        <p>Содержание</p>
      </div>
      <div class="info-block p-lg">
        <h2>Блок 2</h2>
        <p>Содержание</p>
      </div>
      <div class="info-block p-lg">
        <h2>Блок 3</h2>
        <p>Содержание</p>
      </div>
    </div>

    <!-- Промо-секция -->
    <section class="promo-section mt-md">
      <h2>Специальное предложение</h2>
      <button class="btn-primary mt-md">Узнать больше</button>
    </section>

    <!-- CTA блок -->
    <div class="flex-center gap-md mt-xl">
      <button class="btn-primary">Основное действие</button>
      <button class="btn-secondary">Второе действие</button>
    </div>
  </main>

  <!-- Футер -->
  <footer class="py-lg">
    <div class="container">
      <p>© 2026 Компания</p>
    </div>
  </footer>
</body>
</html>
```

---

## Рекомендации по использованию

1. **Всегда используйте CSS переменные** вместо прямого написания цветов
2. **Следуйте системе отступов** для консистентности
3. **Используйте готовые классы** (btn-primary, info-block и т.д.) перед написанием своих
4. **Тестируйте на мобильных** - используйте класс `container` для адаптивности
5. **Комбинируйте утилиты** - `class="grid gap-lg py-md px-lg"`
6. **Используйте типографические классы** для текста - `class="text-lg font-semibold"`
7. **Используйте переменные шрифтов** - `var(--font-size-2xl)`, `var(--font-weight-bold)`

---

## Брейкпоинты (Media Queries)

```css
/* Мобильные устройства (320px+) */
@media (min-width: 320px) { }

/* Планшеты (768px+) */
@media (min-width: 768px) { }

/* Десктоп (1024px+) */
@media (min-width: 1024px) { }

/* Широкие экраны (1280px+) */
@media (min-width: 1280px) { }
```
