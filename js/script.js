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

/* FV Floating Banner
	--------------------------------------------------------- */
const fvFloat = document.getElementById("fv-float");
const FV_SCROLL_THRESHOLD = 100; // px スクロールでバナー表示

if (fvFloat) {
  window.addEventListener(
    "scroll",
    () => {
      if (window.scrollY > FV_SCROLL_THRESHOLD) {
        fvFloat.classList.add("is-visible");
      } else {
        fvFloat.classList.remove("is-visible");
      }
    },
    { passive: true },
  );
}

/* MV Swiper
	--------------------------------------------------------- */
const swiper_mv = new Swiper(".mv-swiper", {
  loop: true,
  pagination: {
    el: ".mv-swiper-pagination",
    clickable: true,
  },
  slidesPerView: 1,
  speed: 1000,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});
/* header高さ取得
	--------------------------------------------------------- */
function setHeaderHeight() {
  const headerHeight = document.querySelector(".header-pc").offsetHeight;

  document.documentElement.style.setProperty(
    "--header-height",
    `${headerHeight}px`,
  );
}

window.addEventListener("load", setHeaderHeight);
window.addEventListener("resize", setHeaderHeight);

/* Machine Swiper
	--------------------------------------------------------- */
const swiper_machine = new Swiper(".machine__swiper", {
  loop: true,
  centeredSlides: true,
  slidesPerView: 1.2,
  spaceBetween: 16,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  breakpoints: {
    521: {
      centeredSlides: true,
      slidesPerView: 2,
      spaceBetween: 24,
    },
    961: {
      centeredSlides: false,
      slidesPerView: 3.2,
      spaceBetween: 32,
    },
  },
});

/* QA アコーディオン
	--------------------------------------------------------- */
document.querySelectorAll(".js-qa").forEach(function (btn) {
  btn.addEventListener("click", function () {
    this.closest(".qa__list__item").classList.toggle("is-open");
  });
});
