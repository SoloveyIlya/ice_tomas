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
      <div class="mobile-menu-cart" onclick="toggleMobileMenu()">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#8C7BC3" stroke-width="1.5"></path> <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#8C7BC3" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        <span class="mobile-menu-cart-text">Корзина</span>
        <span class="cart-badge">0</span>
      </div>
    </div>
  </header>

  <!-- Placeholder для фиксированного хедера -->
  <div class="header-placeholder" id="headerPlaceholder"></div>

  <!-- Секция статьи -->
  <article class="container section-default py-xl">
    <!-- Хлебные крошки -->
    <nav class="blog-breadcrumbs mb-lg">
      <a href="/" class="text-sm blog-breadcrumb-link">Главная</a>
      <span class="text-sm"> / </span>
      <a href="{{ route('blog.index') }}" class="text-sm blog-breadcrumb-link">Блог</a>
      <span class="text-sm"> / </span>
      <span class="text-sm">{{ $article->title }}</span>
    </nav>

    <!-- Заголовок статьи -->
    <header class="blog-article-header">
      <h1 class="font-bold blog-article-title">{{ $article->title }}</h1>
      <div class="blog-article-meta">
        <span class="text-sm blog-article-date">
          {{ $article->published_at ? $article->published_at->format('d.m.Y') : $article->created_at->format('d.m.Y') }}
        </span>
        <span class="text-sm blog-article-views">
          👁 {{ $article->views }} просмотров
        </span>
      </div>
    </header>

    <!-- Изображение статьи -->
    @if($article->image)
      <div class="blog-article-image-container">
        <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="blog-article-image">
      </div>
    @endif

    <!-- Краткое описание -->
    @if($article->excerpt)
      <div class="blog-article-excerpt">
        <p class="text-lg">{{ $article->excerpt }}</p>
      </div>
    @endif

    <!-- Содержание статьи -->
    <div class="blog-article-content">
      {!! $article->content !!}
    </div>

    <!-- Кнопка назад -->
    <div class="blog-article-back mt-xl">
      <a href="{{ route('blog.index') }}" class="btn btn-outline">
        ← Вернуться к списку статей
      </a>
    </div>
  </article>

  <!-- Похожие статьи -->
  @if($relatedArticles->count() > 0)
    <section class="container section-default py-xl">
      <h2 class="font-bold text-2xl text-center mb-lg">Похожие статьи</h2>
      <div class="grid grid-3 gap-lg">
        @foreach($relatedArticles as $relatedArticle)
          <article class="card blog-card">
            @if($relatedArticle->image)
              <a href="{{ route('blog.show', $relatedArticle->slug) }}" class="blog-card-image-link">
                <img src="{{ $relatedArticle->image_url }}" alt="{{ $relatedArticle->title }}" class="blog-card-image">
              </a>
            @endif
            <div class="blog-card-content">
              <div class="blog-card-meta">
                <span class="text-sm blog-card-date">
                  {{ $relatedArticle->published_at ? $relatedArticle->published_at->format('d.m.Y') : $relatedArticle->created_at->format('d.m.Y') }}
                </span>
                <span class="text-sm blog-card-views">
                  👁 {{ $relatedArticle->views }}
                </span>
              </div>
              <h3 class="text-xl font-semibold blog-card-title">
                <a href="{{ route('blog.show', $relatedArticle->slug) }}">{{ $relatedArticle->title }}</a>
              </h3>
              @if($relatedArticle->excerpt)
                <p class="text-base blog-card-excerpt">{{ $relatedArticle->excerpt }}</p>
              @endif
              <a href="{{ route('blog.show', $relatedArticle->slug) }}" class="text-base blog-card-link">
                Читать далее →
              </a>
            </div>
          </article>
        @endforeach
      </div>
    </section>
  @endif

  <!-- Футер -->
  <footer class="footer-main">
    <div class="container">
      <div class="grid grid-3 gap-xl footer-content">
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
        <div>
          <div class="flex flex-column gap-md">
            <a href="/" class="text-base footer-nav-link">Каталог</a>
            <a href="/about" class="text-base footer-nav-link">О нас</a>
            <a href="/contacts" class="text-base footer-nav-link">Контакты</a>
            <a href="/blog" class="text-base footer-nav-link">Блог</a>
            <a href="#" class="text-base footer-nav-link">Доставка</a>
            <a href="#" class="text-base footer-nav-link">Корзина</a>
          </div>
        </div>
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

