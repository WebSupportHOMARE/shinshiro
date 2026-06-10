$(function() {

  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    const target = $($(this).attr('href'));

    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000); // 500はスクロール時間（ms）
    }
  });

  const swiper = new Swiper('.swiper', {
    slidesPerView: 1.3, // 中央に1枚、左右にチラ見え
    spaceBetween: 20,   // スライド間の余白
    centeredSlides: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      type: 'fraction', //ページネーションの種類
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });



    new WOW().init();
  
  
  });
  