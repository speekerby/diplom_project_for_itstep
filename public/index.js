//JQUERY
import $ from 'jquery';


import './js/form.js';

//Swiper
// import 'swiper/dist/css/swiper.min.css';
// import 'swiper/dist/js/swiper.js';

//SCSS
import './scss/styles.scss'


$('.title').html('Logo');
$('.menu-toggle').click(function () {

    $('.site-nav').toggleClass('site-nav--open', 500);
    $(this).toggleClass('open');
})