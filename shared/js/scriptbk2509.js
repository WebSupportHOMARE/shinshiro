	/* img/sourceタグに自動で幅と高さを入力 ※ページ内全てに実行
	--------------------------------------------------------- */
	document.addEventListener("DOMContentLoaded", function() {
	// ページが読み込まれた時に実行されるコード

	// <source>要素と <img>要素を全て取得
	var sourceElements = document.querySelectorAll('source');
	var imgElements = document.querySelectorAll('img');

	// 画像の幅と高さを取得して設定する関数
	function setImageSize(element, src) {
		var image = new Image();
		image.src = src; // 画像のパスを設定
		image.onload = function() {
			var width = this.width; // 画像の幅を取得
			var height = this.height; // 画像の高さを取得

			// width と height 属性を設定する
			element.setAttribute('width', width);
			element.setAttribute('height', height);
		};
	}

	// 各<source>要素に対して処理を行う
	sourceElements.forEach(function(sourceElement) {
		// srcset属性の値を取得し、最初の画像パスを取り出す
		var srcsetValue = sourceElement.getAttribute('srcset');
		if (srcsetValue) {
			var src = srcsetValue.split(' ')[0].trim(); // srcset の最初の値（画像パス）を取得
			setImageSize(sourceElement, src); // 幅と高さを設定
		}
	});

	// 各<img>要素に対して処理を行う
	imgElements.forEach(function(imgElement) {
		var src = imgElement.getAttribute('src'); // img の src 属性を取得
		if (src) {
			setImageSize(imgElement, src); // 幅と高さを設定
		}
	});
	});



	/* 空欄のaltにimageを自動入力 ※ページ内全てに実行
	--------------------------------------------------------- */
	// DOMが読み込まれた後に実行される部分
	document.addEventListener('DOMContentLoaded', function() {
	// すべてのimgタグを取得する
	var images = document.querySelectorAll('img');

	// 各imgタグに対して処理を行う
	images.forEach(function(img) {
		// もしalt属性が空であれば、「image」というalt属性を設定する
		if (!img.alt) {
			img.alt = "image";
		}
	});
	});


	/* ハンバーガメニュー
	--------------------------------------------------------- */
	$(function(){
		$(document).ready(function () {
			$('.spmenu').on('click', function () {
			$(this).toggleClass('active');
			$('#spnav').toggleClass('active');
			})

			$('#spnav a').on('click', function () {
			$('#spnav').toggleClass('active');
			$('.spmenu').toggleClass('active');
			})
	});
	});

	/* 高さを揃える
	--------------------------------------------------------- */
	$(function() {
			$('.cmn-swiper .cmn-txt01').matchHeight();
	});


	/* CAMPAIGN Swiper
	--------------------------------------------------------- */
	const swiper_campaign = new Swiper('.campaign-swiper', {
		loop: true,
		pagination: {
			el: '.campaign-swiper-pagination',
			clickable: true,
		},
		slidesPerView: 1,
		spaceBetween: 40,
		speed: 1000,
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
	});


	/* YOGA PROGRAM Swiper
	--------------------------------------------------------- */
	const swiper_yoga = new Swiper('.yoga-swiper', {
		loop: true,
		navigation: {
			nextEl: '.yoga-swiper-button-next',
			prevEl: '.yoga-swiper-button-prev',
		},
		slidesPerView: 1,
		speed: 1000,
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
		breakpoints: {
		769: {
				slidesPerView: 2,
			}
		}
	});


	/* EXERCISE PROGRAM Swiper
	--------------------------------------------------------- */
	const swiper_exercise = new Swiper('.exercise-swiper', {
		loop: true,
		navigation: {
			nextEl: '.exercise-swiper-button-next',
			prevEl: '.exercise-swiper-button-prev',
		},
		slidesPerView: 1,
		speed: 1000,
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
		breakpoints: {
		769: {
				slidesPerView: 2,
			}
		}
	});


	/* GYM AREA Swiper
	--------------------------------------------------------- */
	const swiper_gym = new Swiper('.gym-swiper', {
		loop: true,
		navigation: {
			nextEl: '.gym-swiper-button-next',
			prevEl: '.gym-swiper-button-prev',
		},
		slidesPerView: 1,
		speed: 1000,
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
		breakpoints: {
		769: {
				slidesPerView: 2,
			}
		}
	});


	/* GUIDANCE Swiper
	--------------------------------------------------------- */
	const swiper_guidance = new Swiper('.guidance-swiper', {
		loop: true,
		navigation: {
			nextEl: '.guidance-swiper-button-next',
			prevEl: '.guidance-swiper-button-prev',
		},
		slidesPerView: "auto",
		centeredSlides: true,
		spaceBetween: 10,
		speed: 1000,
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
		breakpoints: {
		769: {
				slidesPerView: 3,
				spaceBetween: 20,
			}
		}
	});


	/* OPTION Swiper
	--------------------------------------------------------- */
	document.addEventListener('DOMContentLoaded', function() {
		var swiper;
		// 有効化時のオプションを記述
		function initializeSwiper() {
				swiper = new Swiper('.option-swiper', {
					loop: true,
					navigation: {
						nextEl: '.option-swiper-button-next',
						prevEl: '.option-swiper-button-prev',
					},
					slidesPerView: 1,
					speed: 1000,
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
		window.addEventListener('resize', handleResize);
	});


	/* Q&A アコーディオン
	--------------------------------------------------------- */
	$(function(){
		$('.aco-open-btn').click(function(){
			$(this).toggleClass('active');
			$(this).next('.aco-content').slideToggle();
		});
	});


	/* MV WEB入会バナー
	--------------------------------------------------------- */
	document.addEventListener('DOMContentLoaded', () => {
		const closeBtn = document.getElementById('popup-close');
		const mvBnr = document.querySelector('.float-bnr'); // .float-bnr を取得

		// 閉じるボタンを押下した時の処理
		closeBtn.addEventListener('click', () => {
			if (mvBnr) {
				mvBnr.style.display = 'none';
			}
		});
	});
