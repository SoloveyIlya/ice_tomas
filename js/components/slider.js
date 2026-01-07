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

// ===== MODELS SLIDER COMPONENT =====

document.addEventListener('DOMContentLoaded', function() {
  const modelsSliderContainer = document.querySelector('.models-slider-container');
  
  if (!modelsSliderContainer) {
    return;
  }
  
  const sliderTrack = modelsSliderContainer.querySelector('.models-slider-track');
  const slides = modelsSliderContainer.querySelectorAll('.models-slide');
  const prevButton = modelsSliderContainer.querySelector('.models-slider-arrow-left');
  const nextButton = modelsSliderContainer.querySelector('.models-slider-arrow-right');
  const paginationText = document.querySelector('.models-pagination');
  
  if (!sliderTrack || slides.length === 0) {
    return;
  }
  
  let currentIndex = 0;
  const totalSlides = slides.length;
  const slidesPerView = getSlidesPerView();
  
  // Определяем количество видимых слайдов в зависимости от размера экрана
  function getSlidesPerView() {
    const width = window.innerWidth;
    if (width <= 480) return 1;
    if (width <= 768) return 2;
    if (width <= 1200) return 3;
    return 4;
  }
  
  // Обновляем количество видимых слайдов при изменении размера окна
  let slidesPerViewCurrent = getSlidesPerView();
  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      const newSlidesPerView = getSlidesPerView();
      if (newSlidesPerView !== slidesPerViewCurrent) {
        slidesPerViewCurrent = newSlidesPerView;
        // Пересчитываем максимальный индекс
        const maxIndex = Math.max(0, totalSlides - slidesPerViewCurrent);
        if (currentIndex > maxIndex) {
          currentIndex = maxIndex;
        }
        // Также убеждаемся, что индекс кратен количеству видимых слайдов
        currentIndex = Math.floor(currentIndex / slidesPerViewCurrent) * slidesPerViewCurrent;
        updateSlider();
      }
    }, 100);
  });
  
  // Функция для обновления позиции слайдера
  function updateSlider() {
    if (slides.length === 0) return;
    
    const slideWidth = slides[0].offsetWidth;
    const gap = parseFloat(getComputedStyle(sliderTrack).gap) || 0;
    const translateX = -currentIndex * (slideWidth + gap);
    sliderTrack.style.transform = `translateX(${translateX}px)`;
    
    // Обновляем текст пагинации
    if (paginationText) {
      const maxIndex = Math.max(0, totalSlides - slidesPerViewCurrent);
      const totalPages = Math.ceil(totalSlides / slidesPerViewCurrent);
      
      // Рассчитываем текущую страницу
      let currentPage;
      if (currentIndex >= maxIndex) {
        // Если мы на последней позиции, показываем последнюю страницу
        currentPage = totalPages;
      } else {
        // Иначе рассчитываем страницу на основе индекса
        currentPage = Math.floor(currentIndex / slidesPerViewCurrent) + 1;
      }
      
      paginationText.textContent = `${currentPage} из ${totalPages}`;
    }
    
    // Обновляем состояние кнопок
    if (prevButton) {
      prevButton.disabled = currentIndex === 0;
      prevButton.style.opacity = currentIndex === 0 ? '0.5' : '1';
      prevButton.style.cursor = currentIndex === 0 ? 'not-allowed' : 'pointer';
    }
    
    if (nextButton) {
      const maxIndex = Math.max(0, totalSlides - slidesPerViewCurrent);
      nextButton.disabled = currentIndex >= maxIndex;
      nextButton.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
      nextButton.style.cursor = currentIndex >= maxIndex ? 'not-allowed' : 'pointer';
    }
  }
  
  // Переход к следующей странице
  function nextSlide() {
    // Переходим на следующую страницу (по количеству видимых слайдов)
    const nextIndex = currentIndex + slidesPerViewCurrent;
    const maxIndex = Math.max(0, totalSlides - slidesPerViewCurrent);
    
    if (nextIndex <= maxIndex) {
      currentIndex = nextIndex;
    } else if (currentIndex < totalSlides - 1) {
      // Если осталось меньше слайдов, чем видимых, показываем последние
      currentIndex = Math.max(0, totalSlides - slidesPerViewCurrent);
    }
    updateSlider();
  }
  
  // Переход к предыдущей странице
  function prevSlide() {
    // Переходим на предыдущую страницу (по количеству видимых слайдов)
    const prevIndex = currentIndex - slidesPerViewCurrent;
    if (prevIndex >= 0) {
      currentIndex = prevIndex;
    } else {
      currentIndex = 0;
    }
    updateSlider();
  }
  
  // Обработчики для кнопок навигации
  if (nextButton) {
    nextButton.addEventListener('click', (e) => {
      e.preventDefault();
      nextSlide();
    });
  }
  
  if (prevButton) {
    prevButton.addEventListener('click', (e) => {
      e.preventDefault();
      prevSlide();
    });
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
    }
  }
  
  if (modelsSliderContainer) {
    modelsSliderContainer.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    
    modelsSliderContainer.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, { passive: true });
  }
  
  // Инициализация
  updateSlider();
});

