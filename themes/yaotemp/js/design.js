//#BTNクリックで#MENUを表示.disp {display: none;}
$(function () {
  $(".menuNavi").click(function () {
    $("#menuNavi__menu").toggleClass("icon-menu");
    $("#menuNavi__menu").toggleClass("icon-close");
    $(".mainNavi").toggleClass("menu-open");
  });

  // サイドバーのMENUボタンでも同じドロワーを開く
  $(".sidebar_menu_a").click(function (e) {
    e.preventDefault();
    $("#menuNavi__menu").toggleClass("icon-menu");
    $("#menuNavi__menu").toggleClass("icon-close");
    $(".mainNavi").toggleClass("menu-open");
  });
});

//Scroll Rules
$(function () {
  if (window.matchMedia("(max-width: 640px)").matches) {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 50;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  } else {
    $(`a[href^="#"]`).click(function () {
      var speed = 500;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top;
      var positionx = position - 100;
      $("html, body").animate({ scrollTop: positionx }, speed, "swing");
      return false;
    });
  }
});

//施工事例(サムネイル固定)
$(function () {
  $(".yao-slider").slick({
    arrows: false,
    fade: true,
    asNavFor: ".yao-thumbnail",
  });
  $(".yao-thumbnail").slick({
    slidesToShow: 3,
    asNavFor: ".yao-slider",
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3, // 画面幅750px以下でスライド3枚表示
        },
      },
    ],
  });
});

// トップページ Gallery
$(function () {
  if (!$.fn.slick || !$(".js-top-gallery-slider").length) {
    return;
  }
  $(".js-top-gallery-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    centerMode: true,
    centerPadding: "25%",
    arrows: true,
    prevArrow: $(".js-top-gallery-prev"),
    nextArrow: $(".js-top-gallery-next"),
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          centerPadding: "12%",
        },
      },
      {
        breakpoint: 560,
        settings: {
          centerPadding: "0%",
        },
      },
    ],
  });
});

// トップページ Event (560px以下でスライダー)
$(function () {
  if (!$.fn.slick || !$(".js-top-event-slider").length) {
    return;
  }
  var $eventSlider = $(".js-top-event-slider");

  function initEventSlider() {
    if (window.innerWidth <= 560) {
      if (!$eventSlider.hasClass("slick-initialized")) {
        $eventSlider.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          arrows: false,
          dots: true,
          speed: 500,
          cssEase: "ease",
          swipeToSlide: true,
        });
      }
    } else {
      if ($eventSlider.hasClass("slick-initialized")) {
        $eventSlider.slick("unslick");
      }
    }
  }

  initEventSlider();
  $(window).on("resize", initEventSlider);
});

// トップページ Voice
$(function () {
  if (!$.fn.slick || !$(".js-top-voice-slider").length) {
    return;
  }
  var $voiceSlider = $(".js-top-voice-slider");
  if ($voiceSlider.hasClass("slick-initialized")) {
    return;
  }
  $voiceSlider.slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    arrows: false,
    dots: true,
    speed: 500,
    cssEase: "ease",
    adaptiveHeight: true,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
        breakpoint: 560,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});

//クリックしたら開閉
$(function () {
  $(".click-title").on("click", function () {
    $(this).next().slideToggle(400);
    $(this).toggleClass("close", 400);
  });
});

// YouTubeモーダルここから
document.addEventListener("DOMContentLoaded", (event) => {
  // videoThumbのclass名がつく要素を全取得
  let imgTags = document.getElementsByClassName("videoThumb");
  // ループ
  for (let i = 0; i < imgTags.length; i++) {
    let videoId = imgTags[i].getAttribute("data-video-id");
    imgTags[i].src = `https://img.youtube.com/vi/${videoId}/0.jpg`;
    imgTags[i].addEventListener("click", function () {
      openModal(videoId);
    });
  }

  // モーダルの要素を作成
  let modal = document.createElement("div");
  modal.id = "modal";
  modal.style.display = "none";
  modal.style.position = "fixed";
  modal.style.zIndex = "3";
  modal.style.left = "0";
  modal.style.top = "0";
  modal.style.width = "100%";
  modal.style.height = "100%";
  modal.style.overflow = "auto";
  modal.style.backgroundColor = "rgba(0,0,0,0.4)";
  modal.addEventListener("click", function (event) {
    if (event.target === modal) {
      closeModal();
    }
  });
  // modalContentの要素を作成
  let modalContent = document.createElement("div");
  modalContent.className = "modalContent";
  // iframeのYouTube要素を作成
  let videoPlayer = document.createElement("iframe");
  videoPlayer.id = "videoPlayer";
  videoPlayer.width = "560";
  videoPlayer.height = "315";
  videoPlayer.frameBorder = "0";
  videoPlayer.allow =
    "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture";
  videoPlayer.allowFullscreen = true;
  // 閉じるボタンを作成
  let closeBtn = document.createElement("button");
  closeBtn.className = "closeBtn";
  closeBtn.addEventListener("click", closeModal);

  modalContent.appendChild(videoPlayer);
  modalContent.appendChild(closeBtn);
  modal.appendChild(modalContent);
  document.body.appendChild(modal);
});
// モーダルモーダル関数
function openModal(videoId) {
  let modal = document.getElementById("modal");
  let videoPlayer = document.getElementById("videoPlayer");

  videoPlayer.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
  modal.style.display = "block";
}
// モーダルを閉じる関数を作成
function closeModal() {
  let modalContent = document.querySelector(".modalContent");
  modalContent.style.animation = "fadeOut 0.7s";

  setTimeout(function () {
    let modal = document.getElementById("modal");
    let videoPlayer = document.getElementById("videoPlayer");

    videoPlayer.src = "";
    modal.style.display = "none";
    //Reset the animation so it plays on the next open
    modalContent.style.animation = "fadeIn 0.7s";
  }, 700);
}

// YouTubeモーダルここまで

// 画像拡大
$(function () {
  if ($.fn.modaal) {
    $(".gallery").modaal({
      type: "image",
    });
  }
});
