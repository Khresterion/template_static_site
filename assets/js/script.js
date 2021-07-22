AOS.init();
let rellax = new Rellax(".rellax");

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


// CARD ZOOM
const card = document.querySelector(".card");
const imageZoom = document.querySelector('.image-zoom')
const blocFocusTop = document.querySelector(".bloc-focus-top");
const blocFocusBottom = document.querySelector(".bloc-focus-bottom");
const blocContent = document.querySelector(".bloc-content-show");
const title = document.querySelector(".bloc-content-show h2");
const downloadLogo = document.querySelector(".bloc-content-show img");
const separation = document.querySelector(".card hr");
const allTxt = document.querySelectorAll(".card p");

const TLANIM = gsap.timeline({ paused: true });

TLANIM
  .fromTo(imageZoom, {scale: 1}, {scale: 2, y: -50, x:200, duration: 0.4,  ease:ExpoScaleEase.config(1, 2,"power2.inOut")})
  .to(blocFocusTop, { top: -30, left: -30, duration: 0.1 }, 0.5)
  .to(blocFocusBottom, { bottom: -30, right: -30, duration: 0.1 }, "-=0.1")
  .to(blocContent, { bottom: 200, duration: 0.2 }, '-=0.1')
  .from(title, { opacity: 0, duration: 0.2 }, '-=0.1')
  .from(downloadLogo, {scale: 0, duration: 0.2})
  .from(separation, { width: 0, duration: 0.2 }, '-=0.2')
  .from(allTxt, { opacity: 0, duration: 0.3, stagger: 0.2 });

card.addEventListener("mouseenter", () => {
  TLANIM.play();
});

card.addEventListener("mouseleave", () => {
     TLANIM.reverse();
});


gsap.to(".section1__txt--title", {
  duration: 0.2,
  opacity: 1,
  x: 0,
  stagger: 0.2,
  autoAlpha: 1,
  // ease: "power4.out",
  scrollTrigger: {
    trigger: ".section1__img",
    markers: false,
    start: "top 1%",
    end: "bottom 80%",
    toggleActions: "play complete reverse reset",
    scrub: 3,
  },
});

gsap.to(".section1__txt a", {
  duration: 0.5,
  opacity: 1,
  y: 0,
  delay: 0.2,
  stagger: 0.2,
  autoAlpha: 1,
  // ease: "power4.out",
  scrollTrigger: {
    trigger: ".section1__img",
    markers: false,
    start: "top 1%",
    end: "bottom 80%",
    toggleActions: "play complete reverse reset",
    scrub: 5,
  },
});

gsap.to(".section1__img", {
  duration: 1,
  opacity: 1,
  x: 0,
  delay: 0.1,
  stagger: 0.2,
  // autoAlpha: 1,
  ease: "power4.out",
  scrollTrigger: {
    trigger: ".section1__img",
    markers: false,
    start: "top 1%",
    end: "bottom 80%",
    toggleActions: "play pause reverse reset",
    scrub: 5,
  },
});

ScrollTrigger.create({
  trigger: "#section1",
  pin: true,
  markers: false
});

const logo = document.querySelector('.hero img');
const h3 = document.querySelector('.hero h3');

// gsap.to(logo, {y: 0, delay: 1, opacity: 1, duration: 5});
// gsap.to(h3, {y: 0, delay: 2, opacity: 1, duration: 2});

const TLHEADER = gsap.timeline();

TLHEADER
.from(logo, {y: 100, opacity: 0, duration: 1.25, delay: 0.5})
.from(h3, {y: 100, opacity: 0})



gsap.to(".section2__card", {
  // duration: 1,
  opacity: 1,
  delay: 2,
  y: 0,
  stagger: 0.2,
  autoAlpha: 1,
  rotation: "0rad", 
  skewX: "0deg",
  ease: "bounce",
  scale: 1,
  scrollTrigger: {
    trigger: ".card-img-top",
    markers: false,
    start: "top 60%",
    end: "bottom 40%",
    toggleActions: "restart complete reverse reset",
    scrub: 5
  },
});