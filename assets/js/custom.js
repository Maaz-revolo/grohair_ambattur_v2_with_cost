$(window).on("load", function () {
  $(".bannner-img-all").removeClass("d-none"), 
  $(".treatment-all").removeClass("d-none"), 
  $(".testimonial-slider").removeClass("d-none"), 
  $(".certificate-doctor-all").removeClass("d-none"), 
  $(".doctor-all").removeClass("d-none"), 
  $(".video-container").removeClass("d-none"), 
  $(".our-tratments-cal").removeClass("d-none"),

  $(".bannner-img-all").slick({
      dots: !0,
      arrows: !1,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: !0,
      draggable: !0,
      autoplaySpeed: 2e3,
      speed: 1e3,
      autoplay: !0,
      swipeToSlide: !0,
      pauseOnHover: !0,
      cssEase: "linear",
      fade: !0,
      swipe: !0,
      centerMode: !0,
      infinite: !0,
      centerPadding: "0px"
  }), 
  $(".treatment-all").slick({
      dots: !0,
      arrows: !1,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: !0,
      draggable: !0,
      autoplaySpeed: 4e3,
      speed: 3e3,
      autoplay: !0,
      swipeToSlide: !0,
      pauseOnHover: !0
  }), 
  $(".testimonial-slider").slick({
      dots: !1,
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: !0,
      draggable: !0,
      speed: 1e3,
      autoplaySpeed: 4e3,
      autoplay: !0,
      swipeToSlide: !0,
      pauseOnHover: !0,
      arrows: !1,
      dots: !0,
      responsive: [{
          breakpoint: 991,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1
          }
      }, {
          breakpoint: 767,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1
          }
      }, {
          breakpoint: 567,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: !0,
              arrows: !1
          }
      }]
  }), 
  $(".certificate-doctor-all").slick({
      dots: !0,
      arrows: !1,
      slidesToShow: 4,
      slidesToScroll: 1,
      infinite: !0,
      draggable: !0,
      speed: 2e3,
      autoplaySpeed: 2e3,
      autoplay: !0,
      swipeToSlide: !0,
      pauseOnHover: !0,
      // variableWidth: !0,
      responsive: [{
          breakpoint: 1200,
          settings: {
              slidesToShow: 3,
              slidesToScroll: 1
          }
      }, {
          breakpoint: 991,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1
          }
      }, {
          breakpoint: 767,
          settings: {
              arrows: !1,
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: !0
          }
      }, {
          breakpoint: 567,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: !0,
              arrows: !1
          }
      }]
  }),
  $(".doctor-all").slick({
      dots: !0,
      arrows: !1,
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: !0,
      draggable: !0,
      speed: 2e3,
      autoplaySpeed: 2e3,
      autoplay: !0,
      swipeToSlide: !0,
      pauseOnHover: !0,
      // variableWidth: !0,
      responsive: [{
          breakpoint: 1200,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1
          }
      }, {
          breakpoint: 991,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1
          }
      }, {
          breakpoint: 767,
          settings: {
              arrows: !1,
              slidesToShow: 2,
              slidesToScroll: 1,
              dots: !0
          }
      }, {
          breakpoint: 567,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              dots: !0,
              arrows: !1
          }
      }]
  }),
  $(".our-tratments-cal").slick({
    dots: !0,
    arrows: !1,
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: !0,
    draggable: !0,
    speed: 2e3,
    autoplaySpeed: 2e3,
    autoplay: !0,
    swipeToSlide: !0,
    pauseOnHover: !0,
    // variableWidth: !0,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 991,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 767,
        settings: {
            arrows: !1,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: !0
        }
    }, {
        breakpoint: 567,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: !0,
            arrows: !1
        }
    }]
})
});



// var mybutton = document.getElementById("myBtn");
// function scrollFunction() {
//   document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ? mybutton.style.display = "flex" : mybutton.style.display = "none"
// }

// function topFunction() {
//   document.body.scrollTop = 0, document.documentElement.scrollTop = 0
// }
// window.onscroll = function () {
//   scrollFunction()
// };
const header = document.querySelector(".header_area"),
  toggleClass = "is-sticky";

function showPopup() {
  1 !== localStorage.getItem("YesBtn") && setTimeout(() => {
      $("#exampleModal").modal("show"), $("#popup-yes").on("click", function () {
          localStorage.setItem("YesBtn", 1), $("#exampleModal").modal("hide")
      })
  }, 1000)
}
window.addEventListener("scroll", () => {
  let e = window.pageYOffset;
  e > 150 ? header.classList.add(toggleClass) : header.classList.remove(toggleClass)
}), $(document).ready(function () {
  showPopup()
});

// var timeLimitInMinutes = 5,
//   timeLimitInSeconds = 60 * timeLimitInMinutes,
//   timerElement = document.getElementById("timer");

// function startTimer() {
//   var e = Math.floor(--timeLimitInSeconds / 60),
//       o = timeLimitInSeconds % 60;
//   if (timeLimitInSeconds < 0) {
//       timerElement.textContent = "00:00", clearInterval(timerInterval);
//       return
//   }
//   e < 10 && (e = "0" + e), o < 10 && (o = "0" + o), timerElement.textContent = e + ":" + o
// }

// var timerInterval = setInterval(startTimer, 1e3);
// document.addEventListener('DOMContentLoaded', function () {
//   const video = document.getElementById('topVideo');
//   const playPauseBtn = document.getElementById('playPauseBtn');
//   video.autoplay = true;
//   video.muted = false;
//   video.addEventListener('play', function () {
//       playPauseBtn.textContent = 'Pause';
//   });
//   video.addEventListener('pause', function () {
//       playPauseBtn.textContent = 'Play';
//   });
//   playPauseBtn.addEventListener('click', function () {
//       if (video.paused) {
//           video.play();
//       } else {
//           video.pause();
//       }
//   });
//   if (!video.paused) {
//       playPauseBtn.textContent = 'Pause';
//   }
// });


// function showIt() {
//     document.getElementById("hid").style.display="table";
//   }
//   setTimeout("showIt()", 60000); // after 3 seconds