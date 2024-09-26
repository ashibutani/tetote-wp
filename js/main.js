//////////////////////////////////////////////////
/////////  ヘッダー追従  ///////
//////////////////////////////////////////////////
window.addEventListener('scroll', function () {
  const header = document.querySelector('.header-wrapper');
  const headerHeight = header.offsetHeight; // ヘッダーの高さを取得
  const scrollY = window.scrollY;

  if (scrollY >= 96) {
    header.classList.add('header-wrapper--sticky');
  } else {
    header.classList.remove('header-wrapper--sticky');
  }
});



//////////////////////////////////////////////////
///////  ハンバーガー  /////////
//////////////////////////////////////////////////
// ドキュメント読み込み完了時に実行する処理
$(function () {
  // ハンバーガーアイコンがクリックされたとき、toggleHamburgerMenu関数を実行する
  $('#js-hamburger').click(toggleHamburgerMenu);

  // メニュー内の各リンクがクリックされたとき、toggleHamburgerMenu関数を実行する
  // これにより、メニューリンクをクリックしたときにハンバーガーメニューが閉じられる
  $('#js-global-menu a').click(toggleHamburgerMenu);

  // ハンバーガーメニューを開閉する関数
  function toggleHamburgerMenu() {
    // body要素に'is-drawerActive'クラスを追加/削除する
    // このクラスの有無でハンバーガーメニューの開閉状態をCSSでスタイル指定する場合が多い
    $('body').toggleClass('is-drawerActive');

    // ハンバーガーアイコンのaria-expanded属性の値をチェック
    if ($('#js-hamburger').attr('aria-expanded') == 'false') {
      // メニューが閉じている場合、開く処理を実行
      $('#js-hamburger').attr('aria-expanded', true);
      $('#js-global-menu').css('visibility', 'visible');
      $('#js-global-menu').attr('aria-hidden', 'false');
      $('body').css('overflow', 'hidden');


    } else {
      // メニューが開いている場合、閉じる処理を実行
      $('#js-hamburger').attr('aria-expanded', false);
      $('#js-global-menu').css('visibility', 'hidden');
      $('#js-global-menu').attr('aria-hidden', 'true');
      $('body').css('overflow', 'scroll');

    }
  }
});

// ここからスムーススクロールの処理（LPの場合など）
$(function () {
  // href属性が"#"で始まるaタグがクリックされたときの処理
  $('a[href^="#"]').click(function () {
    // クリックされたaタグのhref属性の値を取得
    var href = $(this).attr("href");
    // 対象の要素を特定（hrefが"#"または空文字の場合はhtml要素をターゲットとする）
    var target = $(href == "#" || href == "" ? 'html' : href);
    // ターゲットの位置（トップからの距離）を取得
    var position = target.offset().top;
    // スムーズスクロールの速度を定義
    var speed = 500;

    // スムーズスクロールのアニメーション
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");

    // aタグのデフォルトの動作（ページ遷移など）をキャンセル
    return false;
  });
});




//////////////////////////////////////////////////
/////slick セカンドビュースライダー////////
//////////////////////////////////////////////////
$('.sv-slider').slick({
  autoplay: true,
  infinite: true,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: '31.25%',
  speed: 500,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        centerPadding: '25%'
      },
    },
    {
      breakpoint: 550,
      settings: {
        centerPadding: '11.73%'
      }
    }
  ]
});

//////////////////////////////////////////////////
///// slick メンバースライダー////////
//////////////////////////////////////////////////
$(document).ready(function () {
  $('.member-slider').slick({
    autoplay: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    variableWidth: true,
    appendArrows: $('.arrow_box'),
    prevArrow: '<div class="slide-arrow prev-arrow"><img src="' + path + '/images/arrow-2.png" alt="prev"></div>',
    nextArrow: '<div class="slide-arrow next-arrow"><img src="' + path + '/images/arrow-2.png" alt="next"></div>',
    speed: 500,
    responsive: [
      {
        breakpoint: 960,
        settings: {
          arrows: false,
        }
      },
      {
        breakpoint: 550,
        settings: {
          arrows: false,
        }
      }
    ]
  });

  //   $('.member-slider').one('init', function (event, slick) {
  //     updateSlideStyles();
  //   });

  //   $('.member-slider').on('afterChange', function (event, slick, currentSlide) {
  //     updateSlideStyles();
  //   });

  //   function updateSlideStyles() {
  //     $('.slide-item-box').removeClass('uppered');
  //     var visibleSlides = $('.member-slider .slick-slide[aria-hidden="false"]');
  //     visibleSlides.each(function (index) {
  //       if (index === 0 || index === 2) {
  //         $(this).addClass('uppered');
  //       }
  //     });
  //   }

});


//////////////////////////////////////////////////
////   FAQ アコーディオン   ////
//////////////////////////////////////////////////
$(function () {
  $('.jsAccordionTitle').on('click', function () {
    //nextは次の要素を取得する、今回はクリック要素の次の要素にis-showクラスをつけている
    $(this).next().toggleClass('is-open');
    //クリックした要素自体にもclass付与
    $(this).toggleClass('is-active');
  });
});


//////////////////////////////////////////////////
//// カスタム投稿（スタッフ管理）スクロールに連動で目次をアクティブにする
//////////////////////////////////////////////////
$(".ez-toc-page-1").eq(0).addClass("active");

$(window).on("scroll", function () {
  var scroll = $(window).scrollTop(); // スクロール量

  $(".wp-block-heading").each(function (i) {
    var elPos = $(this).offset().top, // 現在の要素のY座標
      nextElPos = $(document).height(); // 次の要素のY座標

    // 最後の要素でない場合、次の要素の位置を取得
    if (i < $(".wp-block-heading").length - 1) {
      nextElPos = $(this).next().offset().top;
    }

    if (scroll >= elPos - 200 && scroll < nextElPos - 200) {
      // スクロール位置が現在の要素に対応しているとき
      $(".ez-toc-page-1").removeClass("active"); // 全てのリンクからactiveを削除
      $(".ez-toc-page-1").eq(i).addClass("active"); // 現在の要素に対応するリンクにactiveを追加
    }
  });
});



//////////////////////////////////////////////////
/////// エントリーフォーム送信ボタン無効有効制御 /////// 
//////////////////////////////////////////////////

document.addEventListener("DOMContentLoaded", function () {
  const requiredFields = [
    "input[name='myname']",
    "input[name='myname_kana']",
    "input[name='email']",
    "input[name='phone']",
    "input[name='birthday']",
    "select[name='birth-month']",
    "select[name='birth-date']",
    "input[name='position']",
    "textarea[name='pr']",
    "input[type='checkbox']"
  ];

  const submitButton = document.querySelector(".submit-btn");

  // 初期状態で送信ボタンを無効化
  if (submitButton) {
    submitButton.setAttribute('disabled', true);
  }

  // フィールドの変更を監視する
  requiredFields.forEach(function (selector) {
    const field = document.querySelector(selector);
    if (field) {
      field.addEventListener("input", checkFormValidity);
      field.addEventListener("change", checkFormValidity);
    }
  });

  function checkFormValidity() {
    let isValid = true;

    // 各必須フィールドをチェック
    requiredFields.forEach(function (selector) {
      const field = document.querySelector(selector);
      if (!field) return;

      // チェックボックスの場合
      if (field.type === "checkbox") {
        if (!field.checked) {
          isValid = false;
        }
      }
      // セレクトボックスの場合
      else if (field.tagName.toLowerCase() === 'select') {
        if (field.value === "") {
          isValid = false;
        }
      }
      // テキストフィールド、テキストエリアの場合
      else {
        if (field.value.trim() === "") {
          isValid = false;
        }
      }
    });

    // ボタンの有効化/無効化の制御
    if (submitButton) {
      if (isValid) {
        submitButton.removeAttribute('disabled'); // 全てのフィールドが有効なら無効化解除
      } else {
        submitButton.setAttribute('disabled', true); // いずれかが無効なら無効化
      }
    }
  }
  checkFormValidity();
});

