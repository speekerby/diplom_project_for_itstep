//JQUERY
import $ from 'jquery';


// import './js/form.js';

//Swiper
// import 'swiper/dist/css/swiper.min.css';
// import 'swiper/dist/js/swiper.js';

//SCSS
import './scss/styles.scss'

//Меню
$('.title').html('Logo');
$('.menu-toggle').click(function () {

    $('.site-nav').toggleClass('site-nav--open', 500);
    $(this).toggleClass('open');
})

//Счетчик
$('.count').each(function () {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now))
        }
    });
});