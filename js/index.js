// Инициализация слайдера
document.addEventListener('DOMContentLoaded', function() {
  const swiper = new Swiper('.cases-swiper', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    navigation: {
      nextEl: '.btn-prev',
      prevEl: '.btn-next',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      768: {
        slidesPerView: 'auto',
        spaceBetween: 20
      }
    }
  });
});