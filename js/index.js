
$(window).load(function() {
  $('body').fadeIn("normal");
});


$(document).ready(function() {
    $('#header').fadeIn(0100);
    $('#logo').fadeIn(0100);
});

 $(function(){


		 $('#contents').click(function(){
      if ($('#menubutton').hasClass('open')){
  		 	$('#menuList').removeClass('open');
        $('#sidemenu').animate({'margin-left':'-10px'},400,'swing');
      }
     });
    $(function(){
      $('#menubutton').click(function () {
        if(this.className == 'open'){
          $('#sidemenu').animate({'margin-left':'-210px'},400,'swing');
          $('#menubutton').removeClass('open');
        }else{
          $('#sidemenu').animate({'margin-left':'-10px'},400,'swing');
          $('#menubutton').addClass('open');
        }
      });
    });
	});

function clickstart(obj){
  $(obj).css("opacity","0.8");
}

function clickend(obj){
  $(obj).css("opacity","1");
}

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

