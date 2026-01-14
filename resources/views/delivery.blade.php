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
          <a href="/blog" class="text-base header-nav-link">Блог</a>
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
          <a href="/cart" class="flex items-center relative cursor-pointer">
            <svg class="header-cart-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#8C7BC3" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
            <span class="absolute flex items-center justify-center header-cart-badge">0</span>
          </a>
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
        <a href="/blog" onclick="toggleMobileMenu()">Блог</a>
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
      <a href="/cart" class="mobile-menu-cart" onclick="toggleMobileMenu()">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#8C7BC3" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        <span class="mobile-menu-cart-text">Корзина</span>
        <span class="cart-badge">0</span>
      </a>
    </div>
  </header>

  <!-- Placeholder для фиксированного хедера -->
  <div class="header-placeholder" id="headerPlaceholder"></div>

  <!-- Hero секция "Доставка" -->
  <section class="container section-default py-3xl">
    <div class="text-center section-header scroll-fade-in">
      <h1 class="font-bold section-title">Доставка и <span class="section-title-span">оплата</span></h1>
      <p class="text-lg section-subtitle mt-md">Удобные способы получения заказа и оплаты</p>
    </div>
  </section>

  <!-- Секция: Способы доставки -->
  <section class="container section-default">
    <div class="text-center section-header-spacing scroll-fade-in">
      <h2 class="font-bold section-title-full">Способы <span class="section-title-span">доставки</span></h2>
    </div>

    <div class="grid grid-2 gap-lg mt-2xl">
      <!-- Курьерская доставка -->
      <div class="feature-item scroll-slide-left scroll-delay-1">
        <div class="card delivery-method-card">
          <div class="flex items-start feature-icon-container mb-lg">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 3H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <circle cx="7" cy="19" r="2" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <circle cx="17" cy="19" r="2" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="feature-content">
            <h4 class="text-xl font-semibold feature-title mb-md">Курьерская доставка</h4>
            <p class="text-base feature-text mb-md">Доставка курьером по Минску и области. Удобно, быстро и надёжно.</p>
            <div class="delivery-details">
              <p class="text-base font-semibold mb-sm">Стоимость:</p>
              <p class="text-base mb-md">По Минску: <strong>15 BYN</strong></p>
              <p class="text-base mb-md">Минская область: <strong>25 BYN</strong></p>
              <p class="text-base font-semibold mb-sm mt-lg">Сроки:</p>
              <p class="text-base">1-2 рабочих дня</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Доставка почтой -->
      <div class="feature-item scroll-slide-right scroll-delay-2">
        <div class="card delivery-method-card">
          <div class="flex items-start feature-icon-container mb-lg">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <polyline points="22,6 12,13 2,6" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="feature-content">
            <h4 class="text-xl font-semibold feature-title mb-md">Доставка почтой</h4>
            <p class="text-base feature-text mb-md">Доставка по всей Беларуси через Белпочту. Отправка в день заказа.</p>
            <div class="delivery-details">
              <p class="text-base font-semibold mb-sm">Стоимость:</p>
              <p class="text-base mb-md">От <strong>10 BYN</strong> (зависит от веса и расстояния)</p>
              <p class="text-base font-semibold mb-sm mt-lg">Сроки:</p>
              <p class="text-base">2-5 рабочих дней</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Самовывоз -->
      <div class="feature-item scroll-slide-left scroll-delay-3">
        <div class="card delivery-method-card">
          <div class="flex items-start feature-icon-container mb-lg">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <circle cx="12" cy="10" r="3" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="feature-content">
            <h4 class="text-xl font-semibold feature-title mb-md">Самовывоз</h4>
            <p class="text-base feature-text mb-md">Заберите заказ самостоятельно из нашего магазина в Минске.</p>
            <div class="delivery-details">
              <p class="text-base font-semibold mb-sm">Стоимость:</p>
              <p class="text-base mb-md"><strong>Бесплатно</strong></p>
              <p class="text-base font-semibold mb-sm mt-lg">Адрес:</p>
              <p class="text-base mb-sm">г. Минск, ул. Производственная, 12</p>
              <p class="text-base font-semibold mb-sm mt-lg">Время работы:</p>
              <p class="text-base">Пн-Пт: 9:00 - 20:00</p>
              <p class="text-base">Сб-Вс: 10:00 - 18:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Секция: Способы оплаты -->
  <section class="container section-default">
    <div class="text-center section-header-spacing scroll-fade-in">
      <h2 class="font-bold section-title-full">Способы <span class="section-title-span">оплаты</span></h2>
    </div>

    <div class="grid grid-2 gap-lg mt-2xl">
      <!-- Оплата картой онлайн -->
      <div class="feature-item scroll-slide-left scroll-delay-1">
        <div class="card delivery-method-card">
          <div class="flex items-start feature-icon-container mb-lg">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="4" width="22" height="16" rx="2" ry="2" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <line x1="1" y1="10" x2="23" y2="10" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="feature-content">
            <h4 class="text-xl font-semibold feature-title mb-md">Оплата картой онлайн</h4>
            <p class="text-base feature-text">Безопасная оплата банковской картой Visa, MasterCard, МИР через защищённый платёжный шлюз.</p>
          </div>
        </div>
      </div>

      <!-- Оплата при получении -->
      <div class="feature-item scroll-slide-right scroll-delay-2">
        <div class="card delivery-method-card">
          <div class="flex items-start feature-icon-container mb-lg">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12 8V12" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12 16H12.01" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="feature-content">
            <h4 class="text-xl font-semibold feature-title mb-md">Оплата при получении</h4>
            <p class="text-base feature-text">Оплата наличными или картой курьеру при получении заказа. Доступно для курьерской доставки.</p>
          </div>
        </div>
      </div>

      <!-- Банковский перевод -->
      <div class="feature-item scroll-slide-left scroll-delay-3">
        <div class="card delivery-method-card">
          <div class="flex items-start feature-icon-container mb-lg">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="1" y="4" width="22" height="16" rx="2" ry="2" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <line x1="1" y1="10" x2="23" y2="10" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="feature-content">
            <h4 class="text-xl font-semibold feature-title mb-md">Банковский перевод</h4>
            <p class="text-base feature-text">Оплата через интернет-банкинг или банковский перевод. Реквизиты отправляются после оформления заказа.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Секция: Условия доставки -->
  <section class="container section-default">
    <div class="flex gap-xl section-content-wrap">
      <!-- Левая колонка: текст -->
      <div class="section-col-flex scroll-slide-left">
        <div class="flex flex-column gap-lg">
          <h2 class="text-3xl font-bold">Условия доставки</h2>
          <div class="flex flex-column gap-md">
            <div class="delivery-condition-item">
              <h4 class="text-lg font-semibold mb-sm">Оформление заказа</h4>
              <p class="text-base leading-relaxed">
                Заказ можно оформить на сайте круглосуточно. После оформления с вами свяжется менеджер для подтверждения заказа и уточнения деталей доставки.
              </p>
            </div>
            <div class="delivery-condition-item">
              <h4 class="text-lg font-semibold mb-sm">Отслеживание заказа</h4>
              <p class="text-base leading-relaxed">
                После отправки заказа вы получите трек-номер для отслеживания посылки. Вы сможете отслеживать статус доставки в личном кабинете или на сайте службы доставки.
              </p>
            </div>
            <div class="delivery-condition-item">
              <h4 class="text-lg font-semibold mb-sm">Получение заказа</h4>
              <p class="text-base leading-relaxed">
                При получении заказа обязательно проверьте целостность упаковки и соответствие товара заказу. В случае обнаружения дефектов или несоответствий свяжитесь с нами в течение 24 часов.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Правая колонка: изображение -->
      <div class="section-col-flex scroll-slide-right">
        <div class="card">
          <img src="{{ asset("media/advantages-3.jpg") }}" alt="Условия доставки" class="w-full rounded-lg">
        </div>
      </div>
    </div>
  </section>

  <!-- Секция: Возврат и обмен -->
  <section class="container section-default">
    <div class="flex gap-xl section-content-wrap">
      <!-- Левая колонка: изображение -->
      <div class="section-col-flex scroll-slide-left">
        <div class="card">
          <img src="{{ asset("media/advantages-4.jpg") }}" alt="Возврат и обмен" class="w-full rounded-lg">
        </div>
      </div>

      <!-- Правая колонка: текст -->
      <div class="section-col-flex scroll-slide-right">
        <div class="flex flex-column gap-lg">
          <h2 class="text-3xl font-bold">Возврат и обмен</h2>
          <div class="flex flex-column gap-md">
            <div class="delivery-condition-item">
              <h4 class="text-lg font-semibold mb-sm">Сроки возврата</h4>
              <p class="text-base leading-relaxed">
                Вы можете вернуть или обменять товар в течение 14 дней с момента покупки, если товар не был в употреблении, сохранены его товарный вид, потребительские свойства, пломбы, фабричные ярлыки.
              </p>
            </div>
            <div class="delivery-condition-item">
              <h4 class="text-lg font-semibold mb-sm">Условия возврата</h4>
              <p class="text-base leading-relaxed">
                Товар должен быть в оригинальной упаковке со всеми бирками и этикетками. Для возврата необходимо заполнить заявление и предоставить документ, подтверждающий покупку.
              </p>
            </div>
            <div class="delivery-condition-item">
              <h4 class="text-lg font-semibold mb-sm">Обмен размера</h4>
              <p class="text-base leading-relaxed">
                Если размер не подошёл, мы поможем обменять товар на нужный размер. Обмен возможен при наличии товара на складе. Стоимость доставки при обмене оплачивается покупателем.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Секция: FAQ -->
  <section class="container section-default">
    <div class="text-center section-header-spacing scroll-fade-in">
      <h2 class="font-bold section-title-full">Часто задаваемые <span class="section-title-span">вопросы</span></h2>
    </div>

    <div class="delivery-faq-container mt-2xl">
      <div class="card delivery-faq-card scroll-fade-in">
        <div class="delivery-faq-item">
          <h4 class="text-lg font-semibold delivery-faq-question">Как быстро обрабатывается заказ?</h4>
          <p class="text-base delivery-faq-answer">
            Заказы обрабатываются в течение 1 рабочего дня. Если заказ оформлен до 14:00, он может быть отправлен в тот же день.
          </p>
        </div>

        <div class="delivery-faq-item">
          <h4 class="text-lg font-semibold delivery-faq-question">Можно ли изменить адрес доставки после оформления заказа?</h4>
          <p class="text-base delivery-faq-answer">
            Да, вы можете изменить адрес доставки, связавшись с нашим менеджером до момента отправки заказа. После отправки изменение адреса возможно только через службу доставки.
          </p>
        </div>

        <div class="delivery-faq-item">
          <h4 class="text-lg font-semibold delivery-faq-question">Есть ли бесплатная доставка?</h4>
          <p class="text-base delivery-faq-answer">
            Бесплатная доставка доступна при заказе от 200 BYN по Минску. Для других регионов условия уточняйте у менеджера.
          </p>
        </div>

        <div class="delivery-faq-item">
          <h4 class="text-lg font-semibold delivery-faq-question">Что делать, если заказ не пришёл в срок?</h4>
          <p class="text-base delivery-faq-answer">
            Если заказ не пришёл в указанные сроки, свяжитесь с нами по телефону или email. Мы отследим посылку и выясним причину задержки.
          </p>
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
            <a href="/blog" class="text-base footer-nav-link">Блог</a>
            <a href="/delivery" class="text-base footer-nav-link">Доставка</a>
            <a href="/cart" class="text-base footer-nav-link">Корзина</a>
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

