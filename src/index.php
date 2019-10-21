<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ремонт квартир в Калуге</title>
  <link rel="shortcut icon" type="image/jpg" href="img/favicon.jpg"/>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar" id="top">
    <div class="container">
      <div class="navbar-block">
        <div class="navbar__logo wow">
          <img src="img/logo.png" alt="Логотип">
        </div>
        <!-- /.navbar__logo -->
        <div class="navbar__info">
          <div class="navbar__contacts">
            <span class="navbar__address">Калуга, Москва, МО</span>
            <a href="tel:+7(495)42-251-31" class="phone navbar__phone wow" data-wow-delay="1.5s">+7 (495) 42-251-31</a>
          </div>
          <button class="button navbar__button" id="tell-me-button">Перезвоните&nbsp;мне</button>
          <!-- /.navbar__contacts -->
        </div>
        <!-- /.navbar__info -->
      </div>
      <!-- /.navbar-block -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->
  
  
  <!-- Содержимое сайта -->
  <main>

<!-- Верхняя секия -->
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">
            <h1 class="hero-text__title">
              Внутренняя отделка помещений "под&nbsp;ключ"
            </h1>
            <span class="hero-text__subtitle">
              с гарантией качества, прописанной в договоре
            </span>
            <ul class="hero-list">
              <li class="hero-list__item wow" data-wow-delay="0.2s">
                <div class="hero-list__image"><img src="img/hero/clock.png" alt=""></div>
                <span class="hero-list__text">
                  Точно соблюдаем сроки
                </span>
              </li>
              <li class="hero-list__item wow" data-wow-delay="0.6s">
                <div class="hero-list__image"><img src="img/hero/calculator.png" alt=""></div>
                <span class="hero-list__text">
                  <span class="new-string">Рассчитаем смету на работы</span> и материалы в день обращения
                </span>
              </li>
              <li class="hero-list__item wow" data-wow-delay="1s">
                <div class="hero-list__image"><img src="img/hero/paint-board.png" alt=""></div>
                <span class="hero-list__text">
                  <span class="new-string">Предложим более 100 вариантов</span> исполнения дизайна Вашего жилья
                </span>
              </li>
            </ul>

          </div>
          <div class="hero-image"><img src="img/hero/hero-main-01.jpg" alt=""></div>
        </div>
      </div>
    </section>

    <!-- Секция с предложением -->
    <section class="offer section">
      <div class="container">
        <div class="offer-block">
          <h2 class="section-title offer__title">
            Мы бесплатно разработаем дизайн-проект Вашего жилья и&nbsp;реализуем его!
          </h2>
          <!-- /.section-title -->
          <span class="section-subtitle offer__subtitle">
            Оставьте заявку на разработку бесплатного дизайн-проекта!
          </span>
          <!-- /.section-subtitle -->
          <form action="mail.php" method="POST" class="form offer__form  php-form" id="offer-form">
            <input type="text" name="username" class="input offer__input" placeholder="Ваше имя">
            <input type="tel" name="phone" class="input offer__input phone-number" placeholder="Ваш телефон">
            <button type="submit" class="button offer__button flip wow" data-wow-delay="1s"><span>Получить бесплатный</span> дизайн-проект</button>
          </form>
          <div class="offer__contacts">
            <div class="offer__message">Наш менеджер перезвонит Вам <span>в течение 60 секунд</span></div>
            <div class="offer__tel">
              <span class="offer__text">или перезвоните нам сами</span>
              <a href="tel:+7(495)42-251-31" class="phone offer__phone">+7 (495) 42-251-31</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.offer -->

    <!-- Секция портфолио -->
    <section class="section portfolio">
      <div class="container">
        <h2 class="section-title portfolio__title">
          Работая с 2007 года, <span>мы сделали более 500 ремонтов в квартирах и домах</span>
        </h2>

        <div class="slider">
          <div data-wow-delay="0.3s" class="slider__item wow jello"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt=""></div>
          <div data-wow-delay="0.6s" class="slider__item wow jello"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt=""></div>
          <div data-wow-delay="0.9s" class="slider__item wow jello"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt=""></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt=""></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt=""></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt=""></div>
        </div>
        <div class="arrows portfolio__arrows">
          <div data-wow-delay="1s" data-wow-iteration="2" class="arrows__left wow slideOutLeft">
            <img src="img/portfolio/left-arrow.png" alt="#">
          </div>
          <div data-wow-delay="1s" data-wow-iteration="2" class="arrows__right wow slideOutRight">
            <img src="img/portfolio/right-arrow.png" alt="#">
          </div>
        </div>


      </div>
      <!-- /.container -->
    </section>

    <!-- Секция с ценами -->
    <section class="section price">
      <div class="container">
        <h2 class="section-title price__title">
          <span>У нас очень гибкая система скидок</span> на комплексные работы!
        </h2>
        <span class="section-subtitle price__subtitle">Прайс на наши услуги</span>

        <div class="cards">
          <div class="card price__card">
            <div data-wow-delay="0.2s" class="card__image wow zoomIn"><img src="img/price/bathroom.jpg" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт ванных комнат и с/у</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card">
            <div data-wow-delay="0.4s" class="card__image wow zoomIn"><img src="img/price/living.jpg" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт комнат и квартир</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card">
            <div data-wow-delay="0.6s" class="card__image wow zoomIn"><img src="img/price/office.jpg" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Отделка офисных помещений</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card">
            <div data-wow-delay="0.8s" class="card__image wow zoomIn"><img src="img/price/buildings.jpg" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт в новостройках</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card">
            <div data-wow-delay="1s" class="card__image wow zoomIn"><img src="img/price/kitchen.jpg" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт кухонь</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card">
            <div data-wow-delay="1.2s" class="card__image wow zoomIn"><img src="img/price/houses.jpg" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт дач и коттеджей</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.cards -->

      </div>
    </section>


    <!-- Шаги -->
    <section class="section steps">
      <div class="container">
        <h2 class="section-title steps__title">
          Наши специалисты готовы выехать на замер
          в&nbsp;любое удобное для Вас время
        </h2>
        <span class="section-subtitle steps__subtitle">5 шагов до ремонта</span>

        <div class="steps-block">
          <div class="steps__item">
            <div class="steps__img"><img src="img/steps/step-1.png" alt="step-1"></div>
            <div class="steps__text">
              Вы звоните нам или&nbsp;оставляете заявку
            </div>
          </div>
          <div class="steps__item">
            <div class="steps__img"><img src="img/steps/step-2.png" alt="step-2"></div>
            <div class="steps__text">
              Согласуем удобное для&nbsp;Вас время выезда специалиста на замер
            </div>
          </div>
          <div class="steps__item">
            <div class="steps__img"><img src="img/steps/step-3.png" alt="step-3"></div>
            <div class="steps__text">
              Рассчитываем смету согласовываем <br> с Вами
            </div>
          </div>
          <div class="steps__item">
            <div class="steps__img"><img src="img/steps/step-4.png" alt="step-4"></div>
            <div class="steps__text">
              Подписываем договор закупаем материал по&nbsp;оптовым ценам
            </div>
          </div>
          <div class="steps__item">
            <div class="steps__img"><img src="img/steps/step-5.png" alt="step-5"></div>
            <div class="steps__text">
              Выполняем ремонт в&nbsp;указанные сроки
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="steps__footer">
      <h2 class="steps__footer-title">
        Ремонт обойдется Вам дешевле, так как
        <span>мы используем качественные материалы по оптовым ценам</span>
      </h2>
    </div>
    



    <!-- Секция преимуществ -->
    <section class="section advantage">
      <div class="container">
        <h2 class="section-title advantage__title">
          Наши преимущества
        </h2>
        <div class="advantage-block">
          <div class="advantage__card">
            <p class="advantage__text">
              Поможем закупить все материалы
              по&nbsp;оптовым ценам у проверенных поставщиков
            </p>
            <div class="advantage__image">
              <img src="img/advantage/advant-1.png" alt="">
            </div>
          </div>
          <div class="advantage__card">
            <p class="advantage__text">
              Мы дадим Вам <span class="bold">максимальные скидки</span>
              у&nbsp;наших партнеров для закупки материалов оптом
            </p>
            <div class="advantage__image">
              <img src="img/advantage/advant-2.png" alt="">
            </div>
          </div>
          <div class="advantage__card">
            <p class="advantage__text">
              Все, что не сможете найти в городе -
              поможем заказать <span class="bold">у проверенных
              поставщиков</span>
            </p>
            <div class="advantage__image">
              <img src="img/advantage/advant-3.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Секция с документами -->
    <section class="section docs">
      <div class="container">
        <h2 class="section-title docs__title">
          Все наши гарантийные обязательства
          подробно и прозрачно описаны в договоре
        </h2>
        <div class="docs-block">
          <div class="docs__item">
            <div class="docs__img"><img src="img/docs/doc-1.png" alt="doc-1"></div>
            <div class="docs__text">
              Гарантия на качество выполняемых работ
            </div>
          </div>
          <div class="docs__item">
            <div class="docs__img"><img src="img/docs/doc-2.png" alt="doc-2"></div>
            <div class="docs__text">
              Гарантия на фиксированные цены Виды работ и цены на них прописаны в договоре
            </div>
          </div>
          <div class="docs__item">
            <div class="docs__img"><img src="img/docs/doc-3.png" alt="doc-3"></div>
            <div class="docs__text">
              Гарантия на точное соблюдение сроков и ответственность за их&nbsp;невыполнение
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Секция с ответами на вопросы -->
    <section class="section brif">
      <div class="container">
        <div class="brif-block">
          <div class="interview brif__interview">
            <h3 class="interview__title">Мы можем озвучить Вам примерную стоимость
            работы и материалов по телефону</h3>
            <span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
            <ul class="interview-list">
              <li class="interview-list__item">
                <span class="interview-list__counter">1.</span>
                <span class="interview-list__text">Какова площадь помещения?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">2.</span>
                <span class="interview-list__text">У Вас новостройка или вторичное жилье?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">3.</span>
                <span class="interview-list__text">Где находится помещение, в&nbsp;котором будет производиться&nbsp;ремонт?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">4.</span>
                <span class="interview-list__text">Назначение помещения?</span>
              </li>
            </ul>
          </div>
          <div class="form brif__form">
            <h3 class="form__title">Оставьте заявку на бесплатный расчет ремонта по телефону</h3>
            <span class="form__subtitle">Для этого заполните форму ниже</span>
            <form action="mail.php" method="POST" id="brif-form" class="php-form">
              <div class="input-group">
                <input type="text" autocomplete="off" name="username" class="input brif__input" placeholder="Ваше имя">
              </div>
              <div class="input-group">
                <input type="tel" autocomplete="off" name="phone" class="input brif__input phone-number" placeholder="Ваш телефон">
              </div>
              <div class="input-group">
                <input type="email" autocomplete="off" name="email" class="input brif__input" placeholder="Ваша почта">
              </div>
              <button type="submit" class="button brif__button">Рассчитать стоимость</button>
              <span class="form__description">Мы перезвоним Вам в течение 60 секунд</span>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer class="footer">
    <div id="map" class="map">
      
    </div>
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title">
            Приезжайте к нам в гости! Проконсультируем Вас по&nbsp;всем вопросам ремонта
          </h3>
          <ul class="contacts-list">
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/footer/map.png" alt="">
              </span>
              <span class="contacts-list__text">
                г. Москва <br>
                <span class="bold">ул. Ленинга, д. 10, корпус 2, оф. 308</span>
              </span>
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/footer/clock.png" alt="">
              </span>
              <span class="contacts-list__text">
                Режим работы: <br>
                <span class="bold">с 9:00 до 18:00</span>

              </span>
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/footer/phone.png" alt="">
              </span>
              <span class="contacts-list__text">
                Телефон: <br>
                <a href="tel:+7(49)422-51-31" class="contacts-list__phone">+ 7 (495) 42-251-31</a>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<!-- Модальное окно -->
  <div class="modal" id="modal">
    <div class="modal-block">
      <div class="modal__container">
        <button class="modal-block__close" id="close-modal">&times;</button>
        <h2 class="section-title modal__title">
          <span>Узнайте точную стоимость</span> ремонта по телефону!
        </h2>
        <!-- /.section-title -->
        <span class="section-subtitle modal__subtitle">
          Заполните поля ниже - мы&nbsp;свяжемся с Вами
        </span>
        <!-- /.section-subtitle -->
        <form action="mail.php" method="POST" class="form modal__form php-form" id="modal-form">
          <div class="input-group">
            <input type="text" autocomplete="off" name="username" class="input modal__input" placeholder="Ваше имя">
          </div>
          <div class="input-group">
            <input type="tel" autocomplete="off" name="phone" class="input modal__input phone-number" placeholder="Ваш телефон">
          </div>
          <div class="input-group">
            <input type="email" autocomplete="off" name="email" class="input modal__input" placeholder="Ваша почта">
          </div>
          <button class="button modal__button">Узнать стоимость</button>
          <span class="form-message">Форма успешно отправлена</span>
        </form>
        <div class="modal__contacts">
          <div class="modal__tel">
            <span class="modal__text">Или Вы можете перезвонить нам сами по&nbsp;телефону:</span>
            <a href="tel:+7(495)42-251-31" class="phone modal__phone">+7 (8182) 42-51-31</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Моальное окно формы -->
<div class="form-window">
    <div class="form-window-block">
      <div class="form-window__container">
        <h2 class="section-title modal__title">
          Спасибо за заявку
        </h2>
        <!-- /.section-title -->
        <span class="section-subtitle modal__subtitle">скоро мы вам перезвоним</span>
        <button class="form-window-block__close" id="close-form-window">&times;</button>
      </div>
    </div>
</div>
<!-- Кнопка вверх -->
  <div id="btn-top">
      <img src="img/chevron-up.svg" alt="#">
  </div>

  
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/main.min.js"></script>
  
  


</body>
</html>