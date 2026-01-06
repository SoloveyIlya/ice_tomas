// ===== SLIDER COMPONENT =====

document.addEventListener('DOMContentLoaded', function() {
  const sliderContainer = document.querySelector('.hero-slider-container-inner');
  
  if (!sliderContainer) {
    return;
  }
  
  const images = sliderContainer.querySelectorAll('.hero-slider-image');
  const prevButton = document.querySelector('.slider-arrow-left');
  const nextButton = document.querySelector('.slider-arrow-right');
  const dots = document.querySelectorAll('.pagination-dot');
  
  if (images.length === 0) {
    return;
  }
  
  let currentSlide = 0;
  const totalSlides = images.length;
  let autoSlideInterval;

  // Инициализация: настраиваем позиционирование всех изображений
  images.forEach((img, i) => {
    img.style.position = 'absolute';
    img.style.top = '0';
    img.style.left = '0';
    img.style.width = '100%';
    img.style.height = '100%';
    img.style.transition = 'opacity 0.5s ease-in-out';
    
    if (i === 0) {
      img.style.opacity = '1';
      img.style.zIndex = '1';
    } else {
      img.style.opacity = '0';
      img.style.zIndex = '0';
    }
  });

  // Функция для показа конкретного слайда
  function showSlide(index) {
    // Обработка циклического переключения
    if (index < 0) {
      currentSlide = totalSlides - 1;
    } else if (index >= totalSlides) {
      currentSlide = 0;
    } else {
      currentSlide = index;
    }

    // Обновляем видимость изображений
    images.forEach((img, i) => {
      if (i === currentSlide) {
        img.style.opacity = '1';
        img.style.zIndex = '1';
      } else {
        img.style.opacity = '0';
        img.style.zIndex = '0';
      }
    });

    // Обновляем индикаторы и перезапускаем анимацию
    dots.forEach((dot, i) => {
      if (i === currentSlide) {
        // Убираем класс active, чтобы сбросить анимацию
        dot.classList.remove('active');
        // Принудительно перерисовываем элемент
        void dot.offsetWidth;
        // Добавляем класс active обратно для запуска новой анимации
        dot.classList.add('active');
      } else {
        dot.classList.remove('active');
      }
    });
  }

  // Переход к следующему слайду
  function nextSlide() {
    showSlide(currentSlide + 1);
  }

  // Переход к предыдущему слайду
  function prevSlide() {
    showSlide(currentSlide - 1);
  }

  // Обработчики для кнопок навигации
  if (nextButton) {
    nextButton.addEventListener('click', (e) => {
      e.preventDefault();
      nextSlide();
      resetAutoSlide();
    });
  }

  if (prevButton) {
    prevButton.addEventListener('click', (e) => {
      e.preventDefault();
      prevSlide();
      resetAutoSlide();
    });
  }

  // Обработчики для индикаторов
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      showSlide(index);
      resetAutoSlide();
    });
  });

  // Автоматическое переключение слайдов
  function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
      nextSlide();
    }, 5000); // Переключение каждые 5 секунд
  }

  function stopAutoSlide() {
    if (autoSlideInterval) {
      clearInterval(autoSlideInterval);
      autoSlideInterval = null;
    }
  }

  function resetAutoSlide() {
    stopAutoSlide();
    startAutoSlide();
  }

  // Останавливаем автопереключение при наведении на слайдер
  if (sliderContainer) {
    sliderContainer.addEventListener('mouseenter', stopAutoSlide);
    sliderContainer.addEventListener('mouseleave', startAutoSlide);
  }

  // Поддержка свайпов для мобильных устройств
  let touchStartX = 0;
  let touchEndX = 0;

  function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;

    if (Math.abs(diff) > swipeThreshold) {
      if (diff > 0) {
        nextSlide();
      } else {
        prevSlide();
      }
      resetAutoSlide();
    }
  }

  if (sliderContainer) {
    sliderContainer.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    sliderContainer.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, { passive: true });
  }

  // Инициализация: показываем первый слайд
  showSlide(0);
  
  // Запускаем автопереключение
  startAutoSlide();
});

