$(function() {
    

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