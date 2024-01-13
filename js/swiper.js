var slider = new  Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    breakpoints: {  
    '480': {
    slidesPerView: 2,
    spaceBetween: 40,},
    '640': {
    slidesPerView: 3,
    spaceBetween: 50, },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 2000,
    }
})