<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/animate.css">
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
          <button class="button navbar__button" id="tell-me-button">Перезвоните&nbspмне</button>
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
    <section class="">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">
            <h1 class="hero-text__title">
              Спасибо за обращение
            </h1>
            <span class="hero-text__subtitle">
              Вам перезвонят в течение 10 минут
            </span>

            <div class="thanks-img shake wow" data-wow-delay="1s">
              <img src="img/telephone.png">
            </div>

          </div>
          <div class="hero-image"><img src="img/hero/hero-main-01.jpg" alt=""></div>
        </div>
      </div>
    </section>



  </main>

  <footer class="footer">
    <div class="map" id="map">
      <script type="text/javascript" charset="utf-8" async
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae23fbab4a2ca152585c27d168ecdab009f7d1701ba3f813cb72a817df36d2e15&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title">
            Приезжайте к нам в гости! Проконсультируем Вас по&nbspвсем вопросам ремонта
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


<!-- Кнопка вверх -->
  <div id="btn-top">
      <img src="img/chevron-up.svg" alt="">
  </div>

  <!-- <script src="js/main.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/modal.js"></script>
  <script src="js/btn-top.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/slick-slider.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/validate.js"></script>

</body>
</html>