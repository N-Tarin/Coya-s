jQuery(function($){
  $(function() {

    //下からフェードイン
    $(window).on('load scroll',function (){
      $('.animation-bottom').each(function(){
        //ターゲットの位置を取得
        var target = $(this).offset().top;
        //スクロール量を取得
        var scroll = $(window).scrollTop();
        //ウィンドウの高さを取得
        var height = $(window).height();
        //ターゲットまでスクロールするとフェードインする
        if (scroll > target - height){
          //クラスを付与
          $(this).addClass('active-bottom');
        }
      });
    });
    

    // カテゴリーアコーディオンPC
    $('.js__category__nav__items').hide();

    $('.js__category__button').click(function() {
      $('.js__category__nav__items').slideToggle();
      return false;
    })
      
    // アコーディオンSP
    // ヘッダーメニュー
    $('.js__header__sp__nav__items').hide();
    $('.js__category__sp__nav__items').hide();

    $('.js__header__sp__button').click(function() {
      $('.js__header__sp__nav__items').slideToggle();
      return false;
    })
    
    // カテゴリーメニュー
    $('.js__category__sp__button').click(function() {
      $('.js__category__sp__nav__items').slideToggle();
      return false;
    });
      

      
    // MVの中央を取得
    checkWidth = function(){
      // ブラウザの横幅を取得
      var browserWidth = $(window).width();
      // ボックスの横幅を取得
      var boxW = $(".mv__logo").width();
      // 左端から離す距離pxを計算
      var plusPxW = ((browserWidth - boxW)/2);
      // CSSで追加
      $('.mv__logo').css({'left': plusPxW + "px"});
    };

    checkHeight = function(){
      var browserHeight = $(window).height();
      // ボックスの縦幅を取得
      var boxH = $(".mv__logo").height();
      // 上端から離す距離pxを計算
      var plusPxH = ((browserHeight - boxH)/2);
      // CSSで追加
      $('.mv__logo').css({'top': plusPxH + "px"});
    };

    // リアルタイムで縦・横幅を取得
    $(function(){
      checkWidth();
      $(window).resize(checkWidth);
    });

    $(function(){
      checkHeight();
      $(window).resize(checkHeight);
    });
  });
});