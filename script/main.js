$(() => {
  // 以下新規記述
  const facilitySwiper = new Swiper(".main__facility__slider__swiper", {
    slidesPerView: 1.45,
    spaceBetween: 18,
    centeredSlides: true,
    loop: true,
    initialSlide: 1,
    speed: 600,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".main__facility__slider__swiper__button--next",
      prevEl: ".main__facility__slider__swiper__button--prev",
    },
  });
});

// フェードイン
jQuery(function ($) {
  const $fadeInElements = $(".fade_in");
  const $fadeElements = $(".fade");
  const $window = $(window);

  function fadeCheck() {
    const windowHeight = window.innerHeight; // ← 重要
    const scrollTop = $window.scrollTop();
    const documentHeight = $(document).height();

    const isBottom =
      scrollTop + windowHeight >= documentHeight - 10;

    /* ===== fade_in ===== */
    $fadeInElements.each(function () {
      const $this = $(this);
      const elementTop = $this.offset().top;
      const isFooter = $this.closest("footer").length > 0;

      if (isFooter || isBottom) {
        // footer or ページ最下部
        if (scrollTop + windowHeight >= elementTop) {
          $this.addClass("is_show");
        }
      } else {
        if (scrollTop + windowHeight > elementTop + 200) {
          $this.addClass("is_show");
        }
      }
    });

    /* ===== fade ===== */
    $fadeElements.each(function () {
      const $this = $(this);
      const elementTop = $this.offset().top;

      if (
        scrollTop + windowHeight > elementTop - 50 ||
        isBottom
      ) {
        $this.addClass("is_show");
      }
    });
  }

  /* ===== イベント ===== */
  $window.on("scroll", fadeCheck);
  
  // 通常ロード（実機対策で2段構え）
  $window.on("load", function () {
    setTimeout(fadeCheck, 100);
    setTimeout(fadeCheck, 300);
  });

  // iOS リロード / 戻る（最重要）
  $window.on("pageshow", function () {
    setTimeout(fadeCheck, 100);
    setTimeout(fadeCheck, 300);
  });

  // 念押し（初期実行）
  setTimeout(fadeCheck, 500);
});
