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

// CONTACT
function validateForm() {
  let name = document.getElementById("name").value;
  if (name == "") {
    document.querySelector(".status").innerHTML = "Name cannot be empty";
    return false;
  }
  let email = document.getElementById("email").value;
  if (email == "") {
    document.querySelector(".status").innerHTML = "Email cannot be empty";
    return false;
  } else {
    let re =
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(email)) {
      document.querySelector(".status").innerHTML = "Email format invalid";
      return false;
    }
  }
  let subject = document.getElementById("subject").value;
  if (subject == "") {
    document.querySelector(".status").innerHTML = "Subject cannot be empty";
    return false;
  }
  let message = document.getElementById("message").value;
  if (message == "") {
    document.querySelector(".status").innerHTML = "Message cannot be empty";
    return false;
  }
  document.querySelector(".status").innerHTML = "Sending...";
}

// document.getElementById("status").innerHTML = "Sending...";
// formData = {
//   name: $("input[name=name]").val(),
//   email: $("input[name=email]").val(),
//   subject: $("input[name=subject]").val(),
//   message: $("textarea[name=message]").val(),
// };

// $.ajax({
//   url: "mail.php",
//   type: "POST",
//   data: formData,
//   success: function (data, textStatus, jqXHR) {
//     $("#status").text(data.message);
//     if (data.code)
//       //If mail was sent successfully, reset the form.
//       $("#contact-form")
//         .closest("form")
//         .find("input[type=text], textarea")
//         .val("");
//   },
//   error: function (jqXHR, textStatus, errorThrown) {
//     $("#status").text(jqXHR);
//   },
// });
