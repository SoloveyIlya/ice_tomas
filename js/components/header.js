// ===== HEADER COMPONENT =====

function toggleMobileMenu() {
  const menu = document.getElementById('mobileMenu');
  menu.classList.toggle('active');
  document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
}

// Закрыть меню при клике вне его
document.addEventListener('click', function(event) {
  const menu = document.getElementById('mobileMenu');
  const toggle = document.querySelector('.mobile-menu-toggle');
  
  if (menu && toggle && menu.classList.contains('active')) {
    if (!menu.contains(event.target) && !toggle.contains(event.target)) {
      menu.classList.remove('active');
      document.body.style.overflow = '';
    }
  }
});

// Фиксированный хедер при скролле
document.addEventListener('DOMContentLoaded', function() {
  const header = document.querySelector('.header-main');
  const promoSection = document.querySelector('.promo-section');
  const placeholder = document.getElementById('headerPlaceholder');
  
  if (!header || !promoSection || !placeholder) return;
  
  // Функция для получения высоты хедера в фиксированном состоянии
  function getFixedHeaderHeight() {
    // Временно добавляем класс для измерения
    const wasFixed = header.classList.contains('header-fixed');
    if (!wasFixed) {
      header.classList.add('header-fixed');
      // Принудительно применяем стили
      void header.offsetHeight;
    }
    const height = header.offsetHeight;
    if (!wasFixed) {
      header.classList.remove('header-fixed');
    }
    return height;
  }
  
  // Получаем высоту фиксированного хедера заранее
  let fixedHeaderHeight = getFixedHeaderHeight();
  
  // Функция для установки фиксированного состояния хедера
  function setHeaderFixed() {
    if (header.classList.contains('header-fixed')) return;
    
    // Убираем transition для мгновенного изменения
    placeholder.style.transition = 'none';
    
    // Сначала устанавливаем высоту placeholder СИНХРОННО
    placeholder.style.height = fixedHeaderHeight + 'px';
    // Принудительно применяем изменение высоты placeholder (reflow)
    void placeholder.offsetHeight;
    
    // Затем делаем хедер фиксированным
    header.classList.add('header-fixed');
    // Принудительно применяем изменение хедера (reflow)
    void header.offsetHeight;
    
    // После применения стилей обновляем высоту placeholder на актуальную
    const actualHeight = header.offsetHeight;
    if (Math.abs(actualHeight - fixedHeaderHeight) > 1) {
      placeholder.style.height = actualHeight + 'px';
      fixedHeaderHeight = actualHeight;
    }
  }
  
  // Функция для снятия фиксированного состояния хедера
  function unsetHeaderFixed() {
    if (!header.classList.contains('header-fixed')) return;
    
    // Убираем transition для мгновенного изменения
    placeholder.style.transition = 'none';
    
    // Сначала убираем фиксированное состояние
    header.classList.remove('header-fixed');
    // Принудительно применяем изменение (reflow)
    void header.offsetHeight;
    
    // Затем убираем высоту placeholder
    placeholder.style.height = '0';
  }
  
  // Используем Intersection Observer для отслеживания промо-баннера
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (!entry.isIntersecting) {
        // Промо-баннер вышел из видимости - фиксируем хедер
        setHeaderFixed();
      } else {
        // Промо-баннер в видимости - убираем фиксацию
        unsetHeaderFixed();
      }
    });
  }, {
    threshold: 0,
    rootMargin: '0px'
  });
  
  // Наблюдаем за промо-секцией
  observer.observe(promoSection);
  
  // Функция для обновления высоты placeholder при изменении размера окна
  function updatePlaceholderHeight() {
    if (header.classList.contains('header-fixed')) {
      const currentHeight = header.offsetHeight;
      placeholder.style.height = currentHeight + 'px';
      fixedHeaderHeight = currentHeight; // Обновляем кэш
    }
    // Пересчитываем высоту фиксированного хедера
    fixedHeaderHeight = getFixedHeaderHeight();
  }
  
  // Обновляем высоту при изменении размера окна
  window.addEventListener('resize', function() {
    updatePlaceholderHeight();
  });
  
  // Проверяем начальное состояние
  const scrollY = window.scrollY || window.pageYOffset;
  const promoHeight = promoSection.offsetHeight;
  if (scrollY > promoHeight) {
    setHeaderFixed();
  }
});
