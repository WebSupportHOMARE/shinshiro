/* ハンバーガメニュー
	--------------------------------------------------------- */
$(function () {
  $(document).ready(function () {
    $(".spmenu").on("click", function () {
      $(this).toggleClass("active");
      $("#spnav").toggleClass("active");
    });

    $("#spnav a").on("click", function () {
      $("#spnav").toggleClass("active");
      $(".spmenu").toggleClass("active");
    });
  });
});

/* 高さを揃える
	--------------------------------------------------------- */
$(function () {
  $(".cmn-swiper .cmn-txt01").matchHeight();
});

/* CAMPAIGN Swiper
	--------------------------------------------------------- */
const swiper_campaign = new Swiper(".campaign-swiper", {
  loop: true,
  pagination: {
    el: ".campaign-swiper-pagination",
    clickable: true
  },
  slidesPerView: 1,
  spaceBetween: 40,
  speed: 1000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  }
});

/* MV Swiper
	--------------------------------------------------------- */
const swiper_mv = new Swiper(".mv-swiper", {
  loop: true,
  pagination: {
    el: ".mv-swiper-pagination",
    clickable: true
  },
  slidesPerView: 1,
  speed: 1000,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  }
});

/* STUDIO AREA Swiper
	--------------------------------------------------------- */
const swiper_stduio = new Swiper(".stduio-swiper", {
  loop: true,
  navigation: {
    nextEl: ".stduio-swiper-button-next",
    prevEl: ".stduio-swiper-button-prev"
  },
  slidesPerView: 1,
  speed: 1000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  breakpoints: {
    769: {
      slidesPerView: 2
    }
  }
});

/* YOGA PROGRAM Swiper
	--------------------------------------------------------- */
const swiper_yoga = new Swiper(".yoga-swiper", {
  loop: true,
  navigation: {
    nextEl: ".yoga-swiper-button-next",
    prevEl: ".yoga-swiper-button-prev"
  },
  slidesPerView: 1,
  speed: 1000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  breakpoints: {
    769: {
      slidesPerView: 2
    }
  }
});

/* EXERCISE PROGRAM Swiper
	--------------------------------------------------------- */
const swiper_exercise = new Swiper(".exercise-swiper", {
  loop: true,
  navigation: {
    nextEl: ".exercise-swiper-button-next",
    prevEl: ".exercise-swiper-button-prev"
  },
  slidesPerView: 1,
  speed: 1000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  breakpoints: {
    769: {
      slidesPerView: 2
    }
  }
});

/* GYM AREA Swiper
	--------------------------------------------------------- */
const swiper_gym = new Swiper(".gym-swiper", {
  loop: true,
  navigation: {
    nextEl: ".gym-swiper-button-next",
    prevEl: ".gym-swiper-button-prev"
  },
  slidesPerView: 1,
  speed: 1000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  breakpoints: {
    769: {
      slidesPerView: 2
    }
  }
});

/* GUIDANCE Swiper
	--------------------------------------------------------- */
const swiper_guidance = new Swiper(".guidance-swiper", {
  loop: true,
  navigation: {
    nextEl: ".guidance-swiper-button-next",
    prevEl: ".guidance-swiper-button-prev"
  },
  slidesPerView: "auto",
  centeredSlides: true,
  spaceBetween: 10,
  speed: 1000,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  breakpoints: {
    769: {
      slidesPerView: 3,
      spaceBetween: 20
    }
  }
});

/* OPTION Swiper
	--------------------------------------------------------- */
document.addEventListener("DOMContentLoaded", function () {
  var swiper;
  // 有効化時のオプションを記述
  function initializeSwiper() {
    swiper = new Swiper(".option-swiper", {
      loop: true,
      navigation: {
        nextEl: ".option-swiper-button-next",
        prevEl: ".option-swiper-button-prev"
      },
      slidesPerView: 1,
      speed: 1000
    });
  }
  // 無効化する用の記述
  function destroySwiper() {
    if (swiper) {
      swiper.destroy();
      swiper = undefined;
    }
  }
  // if分を用いて横幅に応じて関数を実行
  function handleResize() {
    var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (w > 768) {
      if (!swiper) {
        initializeSwiper();
      }
    } else {
      destroySwiper();
    }
  }
  // 初回実行
  handleResize();
  window.addEventListener("resize", handleResize);
});

/* Q&A アコーディオン
	--------------------------------------------------------- */
$(function () {
  $(".aco-open-btn").click(function () {
    $(this).toggleClass("active");
    $(this).next(".aco-content").slideToggle();
  });
});

/* MV WEB入会バナー
	--------------------------------------------------------- */
document.addEventListener("DOMContentLoaded", () => {
  const closeBtn = document.getElementById("popup-close");
  const mvBnr = document.querySelector(".float-bnr"); // .float-bnr を取得

  // 閉じるボタンを押下した時の処理
  closeBtn.addEventListener("click", () => {
    if (mvBnr) {
      mvBnr.style.display = "none";
    }
  });
});
