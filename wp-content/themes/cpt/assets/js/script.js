
$('.menu__icon').click(function (e) {
    e.preventDefault();
    $('.menu__body').toggleClass('menu__active');
    if ($('.menu__body').has('menu__active')) {
        document.querySelector('.menu__icon').classList.toggle('disactive__icon');
        document.querySelector('.menu__title-close').classList.toggle('active__icon');

    }
});
$('.menu__title-close').click(function (e) {
    if ($('.menu__icon').has('disactivate__icon')) {
        document.querySelector('.menu__title-close').classList.remove('active__icon');
        document.querySelector('.menu__icon').classList.remove('disactive__icon');
    }
    e.preventDefault();
    $('.menu__body').removeClass('menu__active');
});
