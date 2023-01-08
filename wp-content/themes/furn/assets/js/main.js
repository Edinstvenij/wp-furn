// script BURGER
$(document).ready(function () {
    $('.menu-toggle').click(function (event) {
        $('.popup-order').removeClass('active');
        $('body').removeClass('lock');

        $('.menu , .menu__button').toggleClass('active');
        $('body').addClass('lock');
    });

    $('.header__nav-overlay').click(function (event) {
        $('.popup-order').removeClass('active');
        $('body').removeClass('lock');
    });
    $('#buttonInMenu').click(function (event) {
        $('.popup-order').removeClass('active');
        $('body').removeClass('lock');
    });
});
// END BURGER


// script Sliders
new Swiper('.slider', {
    simulateTouch: false,
    touchRatio: 0,
    speed: 1000,
    autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
    },
    watchOverflow: true,
    // loop:true, бесконечная прокрутка
});

new Swiper('.product-preview__slider', {
    //Слайдер отключаеться если всего 1 слайд(Фото)
    watchOverflow: true,
    //стрелки
    navigation: {
        nextEl: '.product-preview__slider-button-next',
        prevEl: '.product-preview__slider-button-prev'
    },
    keyboard: {
        enable: true,
    }
});
// END Slider

// script filter product
const filterItem = document.querySelectorAll('.grid__item');

document.querySelector('.catalog__ul').addEventListener('click', event => {
    if (event.target.tagName !== 'LI') return false;
    let filterClass = event.target.dataset['filter'];

    let catalogItems = document.querySelectorAll('.catalog__li');
    catalogItems.forEach(elem => {
        elem.classList.remove('active');
    });
    event.target.classList.add('active');


    filterItem.forEach(elem => {
        elem.classList.remove('hide');
        if (!elem.classList.contains(filterClass) && filterClass !== 'all') {
            elem.classList.add('hide');
        }
    });
});
// END filter product

//  script Products item backgraund

$(document).ready(function () {
    // all bg(0.5)
    $('.grid__item').mouseenter(function (event) {
        $('.grid__item').css('opacity', '0.5');
    });
    $('.grid__item').mouseout(function (event) {
        $('.grid__item').css('opacity', '1');
    });

    //item bg(1)
    $('.grid__item').mouseenter(function (event) {
        $(event.target.parentNode.parentNode.parentNode.parentNode).css('opacity', '1');
    });
});
//  END Products item backgraund

//  script POPUP-order
$(document).ready(function () {

    $('.product-preview__slider-product-order-button').click(function (event) {
        $('.popup-order').toggleClass('active');
        $('body').toggleClass('lock');
        $('.header__nav-overlay').toggleClass('active');
    });
    $('.header__nav-overlay').click(function (event) {
        $('.popup-order').removeClass('active');
        $('body').removeClass('lock');
        $('.header__nav-overlay').removeClass('active');

    });
});
//  END POPUP-order

// script POPUP-order (CHECK PRICE) SMS
$('.popup-order__form').on('submit', function (event) {

    event.stopPropagation();
    event.preventDefault();

    let form = this,
        submit = $('.submit', form),
        data = new FormData(),
        files = $('input[type=file]')


    $('.submit', form).val('Отправка...');
    $('input, textarea', form).attr('disabled', '');

    data.append('Form name', $('[name="form-name"]', form).val());
    data.append('Page', $('[name="page"]', form).val());
    data.append('User name', $('[name="name"]', form).val());
    data.append('User email', $('[name="email"]', form).val());
    data.append('User tel', $('[name="tel"]', form).val());
    data.append('User country', $('[name="country"]', form).val());
    data.append('User address', $('[name="address"]', form).val());
    data.append('User massege', $('[name="massege"]', form).val());


    files.each(function (key, file) {
        let cont = file.files;
        if (cont) {
            $.each(cont, function (key, value) {
                data.append(key, value);
            });
        }
    });

    $.ajax({
        url: 'telegram.php',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,
        xhr: function () {
            let myXhr = $.ajaxSettings.xhr();

            if (myXhr.upload) {
                myXhr.upload.addEventListener('progress', function (e) {
                    if (e.lengthComputable) {
                        let percentage = (e.loaded / e.total) * 100;
                        percentage = percentage.toFixed(0);
                        $('.submit', form)
                            .html(percentage + '%');
                    }
                }, false);
            }

            return myXhr;
        },
        error: function (jqXHR, textStatus) {
            // Тут выводим ошибку
            $('.popup-order__form-btn').text('ERROR').css('background', 'red')
        },
        complete: function () {
            // Тут можем что-то делать ПОСЛЕ успешной отправки формы
            form.reset()
            $('.popup-order__form-btn').text('Thank you!').css('background', '#b7ff00');

            function deleteClass() {
                $('.popup-order').removeClass('active');
                $('body').removeClass('lock');
            };

            setTimeout(deleteClass, 1500);
        }
    });

    return false;
});
// END POPUP-order SMS


// CONTACT form
// // script Telegram SMS
// $('.form').on('submit', function (event) {

//   event.stopPropagation();
//   event.preventDefault();

//   let form = this,
//     submit = $('.submit', form),
//     data = new FormData(),
//     files = $('input[type=file]')


//   $('.submit', form).val('Отправка...');
//   $('input, textarea', form).attr('disabled', '');

//   data.append('Form name', $('[name="form-name"]', form).val());
//   data.append('User name', $('[name="name"]', form).val());
//   data.append('User email', $('[name="email"]', form).val());


//   files.each(function (key, file) {
//     let cont = file.files;
//     if (cont) {
//       $.each(cont, function (key, value) {
//         data.append(key, value);
//       });
//     }
//   });

//   $.ajax({
//     url: 'telegram.php',
//     type: 'POST',
//     data: data,
//     cache: false,
//     dataType: 'json',
//     processData: false,
//     contentType: false,
//     xhr: function () {
//       let myXhr = $.ajaxSettings.xhr();

//       if (myXhr.upload) {
//         myXhr.upload.addEventListener('progress', function (e) {
//           if (e.lengthComputable) {
//             let percentage = (e.loaded / e.total) * 100;
//             percentage = percentage.toFixed(0);
//             $('.submit', form)
//               .html(percentage + '%');
//           }
//         }, false);
//       }

//       return myXhr;
//     },
//     error: function (jqXHR, textStatus) {
//       // Тут выводим ошибку
//       $('#tg-form-btn').text('ERROR').css('background', 'red')
//     },
//     complete: function () {
//       // Тут можем что-то делать ПОСЛЕ успешной отправки формы
//       form.reset()
//       $('#tg-form-btn').text('Thank you!').css('background', '#b7ff00')
//     }
//   });

//   return false;
// });
// // END Telegram SMS
