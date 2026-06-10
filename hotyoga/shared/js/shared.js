$(function() {
    // ハンバーガーメニューの開閉
    $('.hamburger').click(function() {
      $(this).toggleClass('open');
      $('.nav').toggleClass('open');
    });
  
    // メニューリンククリック時の処理
    $('a').click(function(event) {
      var href = $(this).attr('href');
      
      // hrefがページ内アンカー（#で始まる）かどうかをチェック
      if (href.startsWith('#')) {
        event.preventDefault();
        $('.hamburger, .nav').removeClass('open');
        
        var target = $(href);  // アンカーのターゲット要素を取得

        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - $('header').outerHeight()
          }, 1000);
        }
      } else {
        // ページ外リンクや通常のURLなら通常の遷移動作を許可
        $('.hamburger, .nav').removeClass('open');
      }
    });

    //カレンダー部分
    $(function(){
    // 利用不可期間
    var unusable_date_period = {
    start: new Date("2025/12/30"),
    end: new Date("2026/1/3"),
    };
    $("#date").datepicker({
        dateFormat: "yy年m月d日",
        minDate: new Date("2025/6/01"), // カレンダーを12月1日から表示
        maxDate: "+4m",
        beforeShowDay: function(date) {
        if (date >= unusable_date_period.start && date <= unusable_date_period.end) {
            // 利用不可期間内
            return [false, ''];
        }
        if (date.getDay() == 4) { // 木曜日
            return [false, ''];
        } else {
            return [true, ''];
        }
        }
    });
    });

    
    const mySwiper = new Swiper ('.swiper ', {

   //設定
   //ページネーション表示の設定
   pagination: { 
     el: '.swiper-pagination', //ページネーション要素のクラス名
     clickable: true, //クリック可能にするか
     type: 'fraction', //ページネーションの種類
   },
  
   //ナビゲーションボタン（矢印）表示の設定
   navigation: { 
     nextEl: '.swiper-button-next', //「次へボタン」要素のクラス名
     prevEl: '.swiper-button-prev', //「前へボタン」要素のクラス名
   },
  });

    new WOW().init();
  
  
  });
  