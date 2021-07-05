AOS.init();

// SCROLL TO TOP
$(function () {
  $(document).on("scroll", function () {
    if ($(window).scrollTop() > 100) {
      $(".scroll-top-wrapper").addClass("show");
    } else {
      $(".scroll-top-wrapper").removeClass("show");
    }
  });
});

$(function () {
  $(document).on("scroll", function () {
    if ($(window).scrollTop() > 100) {
      $(".scroll-top-wrapper").addClass("show");
    } else {
      $(".scroll-top-wrapper").removeClass("show");
    }
  });

  $(".scroll-top-wrapper").on("click", scrollToTop);
});

function scrollToTop() {
  verticalOffset = typeof verticalOffset != "undefined" ? verticalOffset : 0;
  element = $("body");
  offset = element.offset();
  offsetTop = offset.top;
  $("html, body").animate({ scrollTop: offsetTop }, 500, "linear");
}

// SLIDE SHOW

$("#slideshow > div:gt(0)").hide();

setInterval(function () {
  $("#slideshow > div:first")
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo("#slideshow");
}, 3000);
