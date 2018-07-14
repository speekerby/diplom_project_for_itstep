//JQUERY
import $ from 'jquery';

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
//Форма обратной связи
$(document).ready(function () {
    $('form').submit(function (event) {
        let json;
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                json = jQuery.parseJSON(result);
                if (json.url) {
                    window.location.href = '/' + json.url;
                } else {
                    alert(json.status + '  ' + json.message);
                }
            },
        });
    });
});