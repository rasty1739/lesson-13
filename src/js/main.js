
$(document).ready(function () {
var button = $('#tell-me-button');
var modal = $('#modal');
var closeModal = $('#close-modal');
var closeFormWindow = $('#close-form-window');
var btnTop = $('#btn-top');
closeFormWindow.on('click', function () {
  $('.form-window').removeClass('form-window_active');
});

/* Закрытие модального окна */

  button.on('click', function () {
    modal.addClass('modal_active');
  });

  closeModal.on('click', function () {
    modal.removeClass('modal_active');
  });

/* Кнопка вверх */
  btnTop.on('click', function () {
    window.scrollTo(0, 0);
  });

/* Настройки слайдера */

  $('.slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('.arrows__left'),
    nextArrow: $('.arrows__right'),
    responsive: [
      {
        breakpoint: 1201,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 993,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });

  /* Маска для телефона */
  $('.phone-number').mask("8 (999) 999-99-99", { placeholder: "-" }, { autoclear: true });
/* Валидация форм */

  $('#brif-form').validate({
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15,
      },
      phone: {
        required: true,
        minlength: 10,
      },
      email: {
        required: true,
        email: true,
      },
    },
    errorClass: "invalid",
    errorElement: "div",
    messages: {
      username: {
        required: "Введите Ваше имя",
        minlength: "Имя не может быть менее 2 букв",
        maxlength: "Имя не может быть более 15 букв",
      },
      phone: {
        required: "Укажите номер телефона",
      },
      email: {
        required: "Введите адрес почты",
        email: "Укажите верный адрес почты",
      },
    },

    /* Отправка формы */


    submitHandler: function (form) {
      event.preventDefault();


      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $('#brif-form').serialize(),
        success: function (response) {
          console.log('Прибыли данные: ' + response);
          $('.php-form')[0].reset();
          $('.php-form')[1].reset();
          $('.php-form')[2].reset();
          $('.form-window').addClass('form-window_active');
          setTimeout(function () {
            $('.form-window').removeClass('form-window_active')
          }, 3000);
          setTimeout(function () {
            modal.removeClass('modal_active')
          }, 3000)
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error(jqXHR + " " + textStatus);
        }
      });
    },
  // Отправка формы

  });
  $('#modal-form').validate({
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15,
      },
      phone: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
    },
    errorClass: "invalid",
    errorElement: "div",
    messages: {
      username: {
        required: "Введите Ваше имя",
        minlength: "Имя не может быть менее 2 букв",
        maxlength: "Имя не может быть более 15 букв",
      },
      phone: {
        required: "Укажите номер телефона",
      },
      email: {
        required: "Введите адрес почты",
        email: "Укажите верный адрес почты",
      },
    },

    /* Отправка формы */


    submitHandler: function (form) {
      event.preventDefault();
      modal.removeClass('modal_active');


      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $('#modal-form').serialize(),
        success: function (response) {
          console.log('Прибыли данные: ' + response);
          $('.php-form')[0].reset();
          $('.php-form')[1].reset();
          $('.php-form')[2].reset();
          $('.form-window').addClass('form-window_active');
          setTimeout(function () {
            $('.form-window').removeClass('form-window_active')
          }, 3000);
          setTimeout(function () {
            modal.removeClass('modal_active')
          }, 3000)
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error(jqXHR + " " + textStatus);
        }
      });
    },
  // Отправка формы
  });
  $('#offer-form').validate({
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15,
      },
      phone: {
        required: true,
        minlength: 10,
      },
    },
    errorClass: "invalid",
    errorElement: "div",
    messages: {
      username: {
        required: "Введите Ваше имя",
        minlength: "Не менее 2 букв",
        maxlength: "Не белее 15 букв",
      },
      phone: {
        required: "Укажите номер телефона",
      },
    },

            /* Отправка формы */


  submitHandler: function (form) {            
    event.preventDefault();


  $.ajax({
    type: "POST",
    url: "mail.php",
    data: $('#offer-form').serialize(),
    success: function (response) {
      console.log('Прибыли данные: ' + response);
      $('.php-form')[0].reset();
      $('.php-form')[1].reset();
      $('.php-form')[2].reset();
      $('.form-window').addClass('form-window_active');
      setTimeout(function () {
        $('.form-window').removeClass('form-window_active')
      }, 3000);
      setTimeout(function () {
        modal.classList.remove('modal_active')
      }, 3000)
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.error(jqXHR + " " + textStatus);
    }
  });
  },
  // Отправка формы
});






/* Анимации */
  new WOW().init();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 1700) {
      $('.price__subtitle').addClass("my-animate");
    }
    else {
      $('.price__subtitle').removeClass("my-animate");
    }
  });

/* Яндекс карта */




  /* Загрузка карты */
var brif = $('.brif');
var brifTop = brif.offset().top;
$(window).bind('scroll', function(){
  var windowTop = $(this).scrollTop();
  if (windowTop > brifTop) {
    $('#map').html('<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae23fbab4a2ca152585c27d168ecdab009f7d1701ba3f813cb72a817df36d2e15&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false"></script>');
    $(window).unbind('scroll');
  };

});
});
