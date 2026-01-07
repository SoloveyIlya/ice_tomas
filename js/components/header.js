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
  
  if (!header || !promoSection) return;
  
  // Вычисляем высоту промо-секции
  const promoHeight = promoSection.offsetHeight;
  
  function handleScroll() {
    const scrollY = window.scrollY || window.pageYOffset;
    
    // Если прокрутили больше высоты промо-секции, делаем хедер фиксированным
    if (scrollY > promoHeight) {
      header.classList.add('header-fixed');
    } else {
      header.classList.remove('header-fixed');
    }
  }
  
  // Обработчик скролла с throttling для производительности
  let ticking = false;
  window.addEventListener('scroll', function() {
    if (!ticking) {
      window.requestAnimationFrame(function() {
        handleScroll();
        ticking = false;
      });
      ticking = true;
    }
  });
  
  // Проверяем начальное состояние
  handleScroll();
});
