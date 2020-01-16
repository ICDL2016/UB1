$(document).ready(function () {

    $(".clients-slider").owlCarousel({
        nav: true,
        autoplay: true,
        loop: true,
        dots: false,
        navText: ["<div class='arrow arrow-left'><img src='./img/clients/arrow-left.png' alt='arrow'></div>", "<div class='arrow arrow-right'><img src='./img/clients/arrow-right.png' alt='arrow'></div>"],
        items: 5,
        responsive: {
            0: {
                items: 1,
            },
            440: {
                items: 2,
            },
            610: {
                items: 3,
            },
            780: {
                items: 4,
            },
            950: {
                items: 5,
            },
            1120: {
                items: 6,
            },
            1290: {
                items: 7,
            },
            1460: {
                items: 8,
            },
            1630: {
                items: 9,
            },
            1800: {
                items: 10,
            },
        }
    });

    //бургер-меню
    $('.burger-icon').on('click', function () {
       $(this).toggleClass('burger-white');
       $('.header-burger__menu').slideToggle();
    });

});
