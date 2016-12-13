$(document).ready(function() {
    $('#header').fadeIn(0100);
    $('#logo').fadeIn(0100);
 });

 	$(function(){
  			// #で始まるアンカーをクリックした場合に処理
  		 	$('a[href^=#]').click(function() {
  	    	// スクロールの速度
  	    	var speed = 400; // ミリ秒
  	    	// アンカーの値取得
 	     	var href= $(this).attr("href");
 	     	// 移動先を取得
 	     	var target = $(href == "#" || href == "" ? 'html' : href);
 	     	// 移動先を数値で取得
  	    	var position = target.offset().top;
 	     	// スムーススクロール
  	    	$('body,html').animate({scrollTop:position}, speed, 'swing');
      		return false;
   		});

 		$('.SPmenu').click(function(){
			$(this).toggleClass('SPmenu-open');
      $(this).toggleClass('SPmenu-close');
		});

		$('.spMenuList').click(function(){
      $('.SPmenu').toggleClass('SPmenu-open');
      $('.SPmenu').toggleClass('SPmenu-close');
		});

		 $('#main').click(function(){
      if ($('.SPmenu').hasClass('SPmenu-open')){
  		 	$('.SPmenu').toggleClass('SPmenu-close');
        $('.SPmenu').toggleClass('SPmenu-open');
      }
     });
	});


function openArchive(obj) {

  var status = obj.className;
  if (status == "archiveHidden"){
    $("."+status).text(">>click to close archive");
    $(".archiveHidden").addClass('archiveShow').removeClass('archiveHidden');
    if($(".archiveline_init").length){
      $(".archiveline_init").addClass('archiveline_show').removeClass('archiveline_init');
    }else{
     $(".archiveline_hidden").addClass('archiveline_show').removeClass('archiveline_hidden');
    }
  }else{
    $("."+status).text(">>click to display archive");
    $(".archiveShow").addClass('archiveHidden').removeClass('archiveShow');
    $(".archiveline_show").addClass('archiveline_hidden').removeClass('archiveline_show');
  };
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
