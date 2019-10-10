new WOW().init();

$(window).scroll(function () {
  if ($(this).scrollTop() > 1700) {
    $('.price__subtitle').addClass("my-animate");
  }
  else {
    $('.price__subtitle').removeClass("my-animate");
  }
});