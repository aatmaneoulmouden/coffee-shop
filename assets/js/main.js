$(document).ready(function () {
    // Menu toggler
    $('#menu-toggler').click(function () {
        const menu = $('#menu');
        if (menu.hasClass('hidden')) {
            menu.removeClass('hidden').addClass('block');
            $(this).html(`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-7 h-7">
            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
            </svg>`)
        } else {
            menu.removeClass('block').addClass('hidden');
            $(this).html(`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-h-7 h-7">
            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
            </svg>`)
        }
    });
});

// Offers Swiper
var swiper = new Swiper(".offersSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".offerswiper-button-next",
        prevEl: ".offerswiper-button-prev",
    },
    pagination: false,
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1270: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});