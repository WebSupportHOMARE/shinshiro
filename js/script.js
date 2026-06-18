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
