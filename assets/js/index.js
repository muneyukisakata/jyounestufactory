function fadeUpAnime(){

    // ふわっ
    $('.fadeUpTrigger').each(function(){
      
      let elemPos = $(this).offset().top-50;
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();
      
      if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeUp');
      }
    });
}
function fadeLeftAnime(){
  
    $('.fadeLeftTrigger').each(function(){
      
      let elemPos = $(this).offset().top-50;
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();
      
      if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeLeft');
      }else{
        
      }
    });
}
function loadAnime(){
  
  $('.loadAnime').each(function(){
    
    let elemPos = $(this).offset().top-50;
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();
    
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeLeft');
    }else{
      
    }
  });
}
function fadeRightAnime(){
    $('.fadeRightTrigger').each(function(){
      
      let elemPos = $(this).offset().top-50;
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();
      
      if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeRight');
      }else{
        
      }
    });
}

function lineAnime(){
  $('.lineAnimeTrigger').each(function(){
    
    let elemPos = $(this).offset().top-50;
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();
    
    if (scroll >= elemPos - windowHeight){
      $(this).addClass('lineAnime');
    }else{
    }
  });
}
  

// const swiper = new Swiper(".swiper", {
//   // ページネーションが必要なら追加
//   pagination: {
//     el: ".swiper-pagination"
//   },
//   // ナビボタンが必要なら追加
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev"
//   }
// });
  
  // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
        fadeUpAnime();
        fadeLeftAnime();
        fadeRightAnime(); 
        lineAnime();       /* アニメーション用の関数を呼ぶ*/
    });// ここまで画面をスクロールをしたら動かしたい場合の記述
  
  // 画面が読み込まれたらすぐに動かしたい場合の記述
    $(window).on('load', function(){
      loadAnime(); /* アニメーション用の関数を呼ぶ*/
    });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

    
  