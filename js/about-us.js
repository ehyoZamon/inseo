window.onload=function(){
  const swiper = new Swiper('.team-swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: '.btn-prev',
      prevEl: '.btn-next',
    },
    autoplay: {
      delay: 3000, 
      disableOnInteraction: false, 
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      870: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });
}