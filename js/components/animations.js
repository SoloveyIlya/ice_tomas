// ===== SCROLL ANIMATIONS COMPONENT =====

document.addEventListener('DOMContentLoaded', function() {
  // Intersection Observer для анимаций при скролле
  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -100px 0px', // Анимация начинается когда элемент на 100px от низа viewport
    threshold: 0.1
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animated');
        // Опционально: отключаем наблюдение после анимации для производительности
        // observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Находим все элементы с классами анимаций
  const animatedElements = document.querySelectorAll(
    '.scroll-fade-in, .scroll-slide-left, .scroll-slide-right, .scroll-scale'
  );

  // Начинаем наблюдение за элементами
  animatedElements.forEach(element => {
    observer.observe(element);
  });

  // Анимация для карточек при наведении
  const cards = document.querySelectorAll('.card, .temperature-card, .review-card');
  cards.forEach(card => {
    card.classList.add('card-hover-animate');
  });

  // Анимация для кнопок
  const buttons = document.querySelectorAll('.btn');
  buttons.forEach(button => {
    button.classList.add('btn-animate');
  });

  // Анимация для изображений - добавляем класс напрямую к контейнерам
  const gridPhotos = document.querySelector('.grid-photos');
  if (gridPhotos) {
    gridPhotos.classList.add('img-zoom');
  }
  
  const contactPhotoCard = document.querySelector('.contact-photo-card');
  if (contactPhotoCard) {
    contactPhotoCard.classList.add('img-zoom');
  }

  // Хедер всегда виден при скролле (логика скрытия удалена)
  const header = document.querySelector('.header-main');
  
  if (header) {
    // Убеждаемся, что хедер всегда виден
    header.style.transform = 'translateY(0)';
  }

  // Анимация для иконок при наведении
  const icons = document.querySelectorAll('.feature-icon-container svg, .feature-icon-container img');
  icons.forEach(icon => {
    icon.style.transition = 'transform 0.3s ease';
    icon.parentElement.addEventListener('mouseenter', () => {
      icon.style.transform = 'scale(1.1) rotate(5deg)';
    });
    icon.parentElement.addEventListener('mouseleave', () => {
      icon.style.transform = 'scale(1) rotate(0deg)';
    });
  });

  // Анимация для социальных ссылок
  const socialLinks = document.querySelectorAll('.social-link-icon, .footer-social-link');
  socialLinks.forEach(link => {
    link.style.transition = 'transform 0.3s ease';
    link.addEventListener('mouseenter', () => {
      link.style.transform = 'scale(1.2) rotate(5deg)';
    });
    link.addEventListener('mouseleave', () => {
      link.style.transform = 'scale(1) rotate(0deg)';
    });
  });
});

