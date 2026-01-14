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

  <!-- Hero секция "Контакты" -->
  <section class="container section-default py-3xl">
    <div class="text-center section-header scroll-fade-in">
      <h1 class="font-bold section-title">Наши <span class="section-title-span">контакты</span></h1>
      <p class="text-lg section-subtitle mt-md">Мы всегда на связи и готовы помочь вам с выбором</p>
    </div>
  </section>

  <!-- Секция: Карта слева и контакты справа -->
  <section class="section-contact">
    <div class="container">
      <div class="flex gap-xl contact-top-section">
        <!-- Левая колонка: Google Maps -->
        <div class="contact-map-wrapper scroll-slide-left">
          <div class="card contact-map-card">
            <iframe 
              src="https://maps.google.com/maps?q=%D0%B3.+%D0%9C%D0%B8%D0%BD%D1%81%D0%BA,+%D1%83%D0%BB.+%D0%9F%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F,+12,+%D0%91%D0%B5%D0%BB%D0%B0%D1%80%D1%83%D1%81%D1%8C&t=&z=17&ie=UTF8&iwloc=&output=embed"
              width="100%" 
              height="500" 
              style="border:0; border-radius: var(--border-radius-lg);" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              class="contact-google-map"
              title="ICE TOMAS - г. Минск, ул. Производственная, 12">
            </iframe>
          </div>
        </div>

        <!-- Правая колонка: Свяжитесь с нами -->
        <div class="contact-info-container scroll-slide-right">
          <div class="card contact-info-card">
            <h2 class="text-2xl font-bold contact-info-title">СВЯЖИТЕСЬ С НАМИ</h2>
            <p class="text-base contact-info-subtitle">Мы ответим на все ваши вопросы и поможем с выбором</p>

            <!-- Контактные данные -->
            <div class="contact-info-list">
              <!-- Адрес -->
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="12" cy="10" r="3" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="contact-info-content">
                  <h4 class="text-base font-semibold contact-info-label">Адрес</h4>
                  <p class="text-base contact-info-text">г. Минск, ул. Производственная, 12</p>
                  <p class="text-base contact-info-text">Беларусь, 220000</p>
                </div>
              </div>

              <!-- Телефон -->
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7292C21.7209 20.9842 21.5573 21.2127 21.3528 21.3992C21.1482 21.5857 20.9074 21.7261 20.6448 21.8112C20.3822 21.8963 20.1038 21.9241 19.83 21.892C16.7428 21.5356 13.787 20.5301 11.19 18.96C8.77382 17.5547 6.72533 15.5062 5.32 13.09C3.74995 10.4923 2.74449 7.53587 2.388 4.448C2.35593 4.17421 2.38372 3.89579 2.46882 3.63319C2.55392 3.37059 2.69433 3.12981 2.88082 2.92525C3.06731 2.72069 3.29584 2.55712 3.55084 2.44554C3.80584 2.33396 4.08157 2.27697 4.36 2.278H7.36C7.56991 2.27796 7.77626 2.33687 7.95591 2.44852C8.13556 2.56017 8.28218 2.72045 8.38 2.912L10.09 6.202C10.1776 6.37589 10.2226 6.56751 10.2214 6.76164C10.2202 6.95577 10.1728 7.14689 10.083 7.319L8.5 10C9.85697 12.1781 11.8219 14.143 14 15.5L16.68 13.913C16.8521 13.8232 17.0432 13.7758 17.2374 13.7746C17.4315 13.7734 17.6231 13.8184 17.797 13.906L21.09 15.618C21.2815 15.7168 21.4427 15.8644 21.5543 16.045C21.6659 16.2256 21.7238 16.4329 21.722 16.643L21.722 16.643H21.722Z" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="contact-info-content">
                  <h4 class="text-base font-semibold contact-info-label">Телефон</h4>
                  <a href="tel:+375291234567" class="text-base contact-info-link">+375 (29) 123-45-67</a>
                  <a href="tel:+375291234567" class="text-base contact-info-link">+375 (29) 123-45-68</a>
                </div>
              </div>

              <!-- Email -->
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <polyline points="22,6 12,13 2,6" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="contact-info-content">
                  <h4 class="text-base font-semibold contact-info-label">Email</h4>
                  <a href="mailto:info@icetomas.ru" class="text-base contact-info-link">info@icetomas.ru</a>
                  <a href="mailto:support@icetomas.ru" class="text-base contact-info-link">support@icetomas.ru</a>
                </div>
              </div>

              <!-- Время работы -->
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <polyline points="12,6 12,12 16,14" stroke="var(--info-blocks)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="contact-info-content">
                  <h4 class="text-base font-semibold contact-info-label">Время работы</h4>
                  <p class="text-base contact-info-text">Пн-Пт: 9:00 - 20:00</p>
                  <p class="text-base contact-info-text">Сб-Вс: 10:00 - 18:00</p>
                </div>
              </div>
            </div>

            <!-- Социальные сети -->
            <div class="contact-info-social">
              <h4 class="text-base font-semibold contact-info-label">Мы в социальных сетях</h4>
              <div class="flex gap-md items-center contact-info-social-links">
                <a href="#" class="flex items-center justify-center contact-social-link">
                  <img src="{{ asset("media/svgicon/instagram.svg") }}" alt="Instagram" width="32" height="32">
                </a>
                <a href="#" class="flex items-center justify-center contact-social-link">
                  <img src="{{ asset("media/svgicon/whatsapp.svg") }}" alt="WhatsApp" width="24" height="24">
                </a>
                <a href="#" class="flex items-center justify-center contact-social-link">
                  <img src="{{ asset("media/svgicon/tgwhite.svg") }}" alt="Telegram" width="28" height="28" style="filter: brightness(0) invert(1);">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Секция: Форма обратной связи по центру -->
  <section class="container section-default">
    <div class="contact-form-section">
      <div class="contact-form-center-container scroll-fade-in">
        <div class="card contact-form-card">
          <h2 class="text-2xl font-bold contact-form-title text-center">ФОРМА ОБРАТНОЙ СВЯЗИ</h2>
          <p class="text-base contact-form-subtitle text-center">Заполните форму, и мы свяжемся с вами в ближайшее время</p>
          
          <form class="contact-form">
            <!-- Поле Имя -->
            <div class="form-group">
              <label class="form-label">Имя*</label>
              <input type="text" class="form-control contact-form-input" placeholder="Ваше имя" required>
            </div>

            <!-- Поле Телефон -->
            <div class="form-group">
              <label class="form-label">Телефон*</label>
              <input type="tel" class="form-control contact-form-input" placeholder="+375 (29) 123-45-67" required>
            </div>

            <!-- Поле Email -->
            <div class="form-group">
              <label class="form-label">Email</label>
              <input type="email" class="form-control contact-form-input" placeholder="your@email.com">
            </div>

            <!-- Поле Сообщение -->
            <div class="form-group">
              <label class="form-label">Сообщение*</label>
              <textarea class="form-control contact-form-textarea" rows="5" placeholder="Ваше сообщение" required></textarea>
            </div>

            <!-- Кнопка отправки -->
            <button type="submit" class="btn btn-primary btn-full contact-submit-button">ОТПРАВИТЬ СООБЩЕНИЕ</button>

            <!-- Согласие на обработку данных -->
            <p class="text-sm contact-form-privacy">
              Нажимая кнопку "Отправить сообщение", вы соглашаетесь с 
              <a href="#" class="contact-form-privacy-link">политикой конфиденциальности</a>
            </p>
          </form>
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

