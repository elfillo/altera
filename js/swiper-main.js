var swiper = new Swiper('.service_list-swiper', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true
});

var swiper1 = new Swiper('.service_advertising--swiper', {
    pagination: {
        el: '.swiper-pagination',
    },
    autoplay: {
        delay: 3000,
    },
    loop: true
});