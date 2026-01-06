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
