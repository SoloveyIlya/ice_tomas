@extends("layouts.app")

@section("content")
  <!-- Верхний промо-баннер -->
  <div class="promo-section text-center">
    <p class="text-base font-medium">ПО ПРОМОКОДУ "ТЕПЛОДЕТЯМ" СКИДКА 10%</p>
  </div>

  <!-- Основной хедер -->
  <header class="header-main">
    <div class="container">
      <div class="flex flex-between items-center">
        <!-- Левая часть - Навигация (десктоп) -->
        <nav class="desktop-nav flex gap-lg header-nav">
          <a href="/" class="text-base header-nav-link">Каталог</a>
          <a href="/about" class="text-base header-nav-link">О нас</a>
          <a href="/contacts" class="text-base header-nav-link">Контакты</a>
          <a href="#" class="text-base header-nav-link">Блог</a>
        </nav>

        <!-- Логотип мобильный (слева) -->
        <div class="flex-center logo-mobile">
          <div class="logo-container">
            <img src="{{ asset("media/logo.png") }}" alt="ICE TOMAS">
          </div>
        </div>

        <!-- Центр - Логотип (десктоп) -->
        <div class="flex-center">
          <div class="logo-container logo-container-desktop">
            <a href="/">
              <img src="{{ asset("media/logo.png") }}" alt="ICE TOMAS">
            </a>
          </div>
        </div>

        <!-- Правая часть - Поиск и корзина (десктоп) -->
        <div class="flex items-center gap-md desktop-search-cart">
          <div class="flex items-center relative">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="header-search-icon">
              <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="var(--text-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <input 
              type="text" 
              class="form-control header-search-input" 
              placeholder="Комбинезон, куртка, -30°, 104"
            >
          </div>
          <div class="flex items-center relative cursor-pointer">
            <svg class="header-cart-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#8C7BC3" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
            <span class="absolute flex items-center justify-center header-cart-badge">0</span>
          </div>
        </div>

        <!-- Бургер меню (мобильный) -->
        <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>

    <!-- Мобильное меню -->
    <div class="mobile-menu" id="mobileMenu">
      <div class="mobile-menu-header">
        <h2 class="mobile-menu-title">Меню</h2>
        <button class="mobile-menu-close" onclick="toggleMobileMenu()">×</button>
      </div>
      
      <nav>
        <a href="/" onclick="toggleMobileMenu()">Каталог</a>
        <a href="/about" onclick="toggleMobileMenu()">О нас</a>
        <a href="/contacts" onclick="toggleMobileMenu()">Контакты</a>
        <a href="#" onclick="toggleMobileMenu()">Блог</a>
      </nav>

      <!-- Поиск в мобильном меню -->
      <div class="mobile-menu-search relative">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="var(--text-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <input 
          type="text" 
          placeholder="Комбинезон, куртка, -30°, 104"
        >
      </div>

      <!-- Корзина в мобильном меню -->
      <div class="mobile-menu-cart" onclick="toggleMobileMenu()">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#8C7BC3" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        <span class="mobile-menu-cart-text">Корзина</span>
        <span class="cart-badge">0</span>
      </div>
    </div>
  </header>

  <!-- Placeholder для фиксированного хедера -->
  <div class="header-placeholder" id="headerPlaceholder"></div>

  <!-- Hero секция "О нас" -->
  <section class="container section-default py-3xl">
    <div class="text-center section-header scroll-fade-in">
      <h1 class="font-bold section-title">О <span class="section-title-span">ICE TOMAS</span></h1>
      <p class="text-lg section-subtitle mt-md">Зимняя одежда для детей, в которой продумана каждая мелочь</p>
    </div>
  </section>

  <!-- Секция "Наша история" -->
  <section class="container section-default">
    <div class="flex gap-xl section-content-wrap">
      <!-- Левая колонка: изображение -->
      <div class="section-col-flex scroll-slide-left">
        <div class="card">
          <img src="{{ asset("media/advantages-1.jpg") }}" alt="Наша история" class="w-full rounded-lg">
        </div>
      </div>

      <!-- Правая колонка: текст -->
      <div class="section-col-flex scroll-slide-right">
        <div class="flex flex-column gap-lg">
          <h2 class="text-3xl font-bold">Наша история</h2>
          <div class="flex flex-column gap-md">
            <p class="text-base leading-relaxed">
              ICE TOMAS — это бренд зимней детской одежды, созданный родителями для родителей. Мы знаем, как важно, чтобы ребёнок был в тепле и комфорте во время зимних прогулок, и при этом мог свободно двигаться и играть.
            </p>
            <p class="text-base leading-relaxed">
              Начав с небольшой мастерской, мы выросли в компанию, которая производит качественную зимнюю одежду для детей всех возрастов. Каждая модель разрабатывается с учётом особенностей детского организма и требований к зимней одежде.
            </p>
            <p class="text-base leading-relaxed">
              Мы используем только проверенные материалы и технологии, тестируем каждую модель в реальных условиях и постоянно улучшаем наши изделия на основе отзывов родителей.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Секция "Почему выбирают нас" -->
  <section class="container section-default">
    <div class="text-center section-header-spacing scroll-fade-in">
      <h2 class="font-bold section-title-full">Почему выбирают <span class="section-title-span">ICE TOMAS</span></h2>
      <p class="text-base section-subtitle">Преимущества, которые делают нас особенными</p>
    </div>

    <div class="grid grid-2 gap-lg mt-2xl">
      <!-- Преимущество 1 -->
      <div class="feature-item scroll-slide-left scroll-delay-1">
        <div class="flex items-start feature-icon-container">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L4 6V12C4 17.5 12 22 12 22C12 22 20 17.5 20 12V6L12 2Z" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 12L11 14L15 10" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="feature-content">
          <h4 class="text-xl font-semibold feature-title">Проверенное качество</h4>
          <p class="text-base feature-text">Все наши изделия проходят многоступенчатый контроль качества. Мы используем только сертифицированные материалы и проверенные технологии производства.</p>
        </div>
      </div>

      <!-- Преимущество 2 -->
      <div class="feature-item scroll-slide-right scroll-delay-2">
        <div class="flex items-start feature-icon-container">
          <img src="{{ asset("media/svgicon/thermometer.svg") }}" alt="Температурный расчёт" width="40" height="40">
        </div>
        <div class="feature-content">
          <h4 class="text-xl font-semibold feature-title">Точный температурный расчёт</h4>
          <p class="text-base feature-text">Каждая модель рассчитана под конкретный температурный диапазон. Мы не обещаем универсальность — мы гарантируем точность.</p>
        </div>
      </div>

      <!-- Преимущество 3 -->
      <div class="feature-item scroll-slide-left scroll-delay-3">
        <div class="flex items-start feature-icon-container">
          <img src="{{ asset("media/svgicon/movement.svg") }}" alt="Свобода движения" width="40" height="40">
        </div>
        <div class="feature-content">
          <h4 class="text-xl font-semibold feature-title">Свобода движения</h4>
          <p class="text-base feature-text">Наша одежда не сковывает движения. Дети могут бегать, прыгать, играть и чувствовать себя комфортно даже в сильные морозы.</p>
        </div>
      </div>

      <!-- Преимущество 4 -->
      <div class="feature-item scroll-slide-right scroll-delay-4">
        <div class="flex items-start feature-icon-container">
          <img src="{{ asset("media/svgicon/ruler.svg") }}" alt="Понятные размеры" width="40" height="40">
        </div>
        <div class="feature-content">
          <h4 class="text-xl font-semibold feature-title">Понятная система размеров</h4>
          <p class="text-base feature-text">Мы помогаем подобрать правильный размер. Наша таблица размеров учитывает рост, возраст и необходимость носки с поддевой.</p>
        </div>
      </div>

      <!-- Преимущество 5 -->
      <div class="feature-item scroll-slide-left scroll-delay-5">
        <div class="flex items-start feature-icon-container">
          <img src="{{ asset("media/svgicon/switch.svg") }}" alt="Обмен и возврат" width="40" height="40">
        </div>
        <div class="feature-content">
          <h4 class="text-xl font-semibold feature-title">Удобный обмен и возврат</h4>
          <p class="text-base feature-text">Если размер не подошёл, мы поможем обменять товар в течение 14 дней. Простой и понятный процесс без лишних сложностей.</p>
        </div>
      </div>

      <!-- Преимущество 6 -->
      <div class="feature-item scroll-slide-right scroll-delay-6">
        <div class="flex items-start feature-icon-container">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="var(--info-blocks)" opacity="0.2"/>
            <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="feature-content">
          <h4 class="text-xl font-semibold feature-title">Забота о безопасности</h4>
          <p class="text-base feature-text">Светоотражающие элементы размещены там, где они действительно нужны для безопасности ребёнка в тёмное время суток.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Секция "Наша миссия" -->
  <section class="container section-default">
    <div class="flex gap-xl section-content-wrap">
      <!-- Левая колонка: текст -->
      <div class="section-col-flex scroll-slide-left">
        <div class="flex flex-column gap-lg">
          <h2 class="text-3xl font-bold">Наша миссия</h2>
          <div class="flex flex-column gap-md">
            <p class="text-base leading-relaxed">
              Мы верим, что каждый ребёнок заслуживает качественной зимней одежды, которая не только защищает от холода, но и позволяет свободно двигаться и наслаждаться зимними играми.
            </p>
            <p class="text-base leading-relaxed">
              Наша миссия — создавать такую одежду, которая даёт родителям уверенность в том, что их дети будут в тепле и безопасности, а детям — свободу для активных игр и открытий.
            </p>
            <p class="text-base leading-relaxed">
              Мы стремимся к тому, чтобы зимние прогулки приносили только радость, а не беспокойство о том, достаточно ли тепло одет ребёнок.
            </p>
          </div>
        </div>
      </div>

      <!-- Правая колонка: изображение -->
      <div class="section-col-flex scroll-slide-right">
        <div class="card">
          <img src="{{ asset("media/advantages-2.jpg") }}" alt="Наша миссия" class="w-full rounded-lg">
        </div>
      </div>
    </div>
  </section>

  <!-- Футер -->
  <footer class="footer-main">
    <div class="container">
      <!-- Основной контент футера: три колонки -->
      <div class="grid grid-3 gap-xl footer-content">
        <!-- Левая колонка: Бренд и соцсети -->
        <div>
          <h3 class="text-2xl font-bold footer-brand-title">ICE TOMAS</h3>
          <p class="text-base footer-brand-text">Зимняя одежда, в которой продумана каждая мелочь</p>
          <div class="flex gap-md items-center">
            <a href="#" class="flex items-center justify-center footer-social-link">
              <img src="{{ asset("media/svgicon/instagram.svg") }}" alt="Instagram" width="48" height="48">
            </a>
            <a href="#" class="flex items-center justify-center footer-social-link">
              <img src="{{ asset("media/svgicon/whatsapp.svg") }}" alt="WhatsApp" width="24" height="24">
            </a>
            <a href="#" class="flex items-center justify-center footer-social-link">
              <img src="{{ asset("media/svgicon/tgwhite.svg") }}" alt="Telegram" width="28" height="28" style="filter: brightness(0) invert(1);">
            </a>
          </div>
        </div>

        <!-- Средняя колонка: Навигация -->
        <div>
          <div class="flex flex-column gap-md">
            <a href="/" class="text-base footer-nav-link">Каталог</a>
            <a href="/about" class="text-base footer-nav-link">О нас</a>
            <a href="/contacts" class="text-base footer-nav-link">Контакты</a>
            <a href="#" class="text-base footer-nav-link">Блог</a>
            <a href="#" class="text-base footer-nav-link">Доставка</a>
            <a href="#" class="text-base footer-nav-link">Корзина</a>
          </div>
        </div>

        <!-- Правая колонка: Контакты -->
        <div class="footer-contact-group">
          <div class="footer-contact-item">
            <h4 class="text-base font-semibold footer-contact-title">АДРЕС</h4>
            <p class="text-base footer-contact-text">г. Минск, ул. Производственная, 12</p>
            <p class="text-base footer-contact-text">Беларусь, 220000</p>
          </div>
          <div class="footer-contact-item">
            <h4 class="text-base font-semibold footer-contact-title">НОМЕР</h4>
            <p class="text-base footer-contact-text">+375 (29) 123-45-67</p>
          </div>
          <div class="footer-contact-item">
            <h4 class="text-base font-semibold footer-contact-title">ПОЧТА</h4>
            <p class="text-base footer-contact-text">info@icetomas.ru</p>
          </div>
        </div>
      </div>

      <!-- Нижняя часть: копирайт и политики -->
      <div class="footer-bottom">
        <div class="flex flex-between items-center footer-bottom-content">
          <p class="text-sm footer-copyright">© Все права защищены ООО "АЙС ТОМАС"</p>
          <div class="flex gap-md items-center">
            <a href="#" class="text-sm footer-bottom-link">Политика конфиденциальности</a>
            <a href="#" class="text-sm footer-bottom-link">Условия использования</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection

