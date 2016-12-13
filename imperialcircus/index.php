<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta name="description" itemprop="description" content="Imperial Circus | 弐式ノ贐">
<meta name="keywords" itemprop="keywords" content="Imperial Circus,Imperial Circus Dead Decadence,同人メタル">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta name="viewport" content="width=device-width, initial-scale=1 ,user-scalable=no">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="copyright" content="Copyright Netowl Corporation" />
<meta name="robots" content="INDEX,FOLLOW" />

<script src="/js/jquery-1.12.2.min.js"></script>
<script src="/js/index.js" defer></script>
<script src="//typesquare.com/accessor/script/typesquare.js?SOuJ0obls5E%3D" charset="utf-8" type="text/javascript" defer></script>

<title>Imperial Circus |  弐式ノ贐</title>

<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

<style type="text/css">
ul{
	list-style: none;
}

body{
	 color:rgba(16,0,49,0.9);
}
.wrapper{
	max-width: 100%;
    height: 2500px;
    font-family: 'Lora', Ryumin Medium KL,serif;
}
.header{
	float: left;
	height: 760px;
    width: 1000px;
    margin: auto;
    right: 0;
    left: 0;
    position: absolute;
}

.header>img{
	margin: auto;
	top: 50px;
    right: 0;
    left: 0;
    position: absolute;
    display: none;
}
.catch{
    font-size: 48px;
    width: 85%;
    margin: auto;
    top: 80px;
    right: 0;
    left: 150px;
    position: absolute;
}

.catch>div{
	margin-top: 25px;
	color: rgba(16,0,49,0.8);
}

.line1{
	display: none;
}
.line2{
	display: none;
}
.line3{
	display: none;
}
.catch>.hanamuke{
    float: right;
    font-size: 60px;
    display: none;
}
.info{
	width: 800px;
    margin: auto;
    top: 800px;
    right: 0;
    left: 0px;
    position: absolute;
    text-align: center;
    font-size:40px;
    display:none;

}
.name{
	font-size:30px;
	padding-left: 40px;
}

.title{
	font-size:40px;
	padding-left: 40px;
}

.skip{
	text-align: right;
	line-height: 10px;
	width:45px;
	padding-left: 900px;
    padding-top: 765px;
}
.skipButton{
width: 0px;
height: 0;
float: left;
border-top: 5px solid transparent;
border-bottom: 5px solid transparent;
border-left: 10px solid black;

}
.trackList{
	font-size:24px;	
}

.large{
	font-size: 34px;
}

.middle{
	font-size: 18px;
}
.small{
	    font-size: 14px;
}

.mediaTitle{
		font-size: 14px;
		text-align: left;
		padding-bottom: 5px;
    	padding-left: 10px;
    	margin-top: 15px;
}

.sellDate{
    text-align: left;
    padding-left: 55px;
    line-height: 45px;
}

.youtubeDummy{
	display: none;
}

@media screen and (max-width: 1024px){
	.wrapper{
		height:100%;
	}
	.header{
    width: 100%;
    height:initial;
    position: relative;
	}
	.header>img{
		position:relative;
		width:100%;
		top:0;
	}
	.skip{
        padding: 0;
        float: right;
        padding-right: 20px;
	}
	.catch{
		width:100%;
		font-size: 20px;
		left: 0;
		top: 40px;
		text-align: center;
	}
	.catch>.hanamuke{
    font-size: 24px;
    text-align: center;
    width: 100%;
    padding-left: 26%;
    float: initial;
	}

	.info{
		width:100%;
		top:initial;
		position:relative;
	}

	.trackList{
		padding:0;
	}

	.youtube{
		display: none;
	}

	.youtubeDummy{
		display: block;
	}
	.youtubeDummy>a>img{
		width: 100%;
	}
	.sellDate{
		font-size: 15px;
		padding-left:15px;
	}
	.name{
		padding:initial;
	}
	.title{
		padding:initial;
	}


</style>

</head>

<body>
<script type="text/javascript">
$(document).ready(function() {
	 setTimeout(function(){
		    $('.line1').fadeIn(1500,'linear');
		},1000);
		setTimeout(function(){
				$('.line2').fadeIn(1500,'linear');
		},3000);
		setTimeout(function(){
				$('.line3').fadeIn(1500,'linear');
		},6000);
		setTimeout(function(){
				$('.hanamuke').fadeIn(1500,'linear');
		},8500);
		setTimeout(function(){
				$('.catch').fadeOut(1500,'linear');
		},11500);
		setTimeout(function(){
				$('.header img').fadeIn(2000,'linear');
		},13500);

				setTimeout(function(){
		$('.skip').css("display","none");
		},11500);


		setTimeout(function(){
				$('.info').fadeIn(1000,'linear');
		},15500);


		$('.skip').click(function() {
			$('.line1').stop(true,true);
			$('.line2').stop(true,true);
			$('.line3').stop(true,true);

			$('.hanamuke').stop();
			$('.catch').stop();
			$('.header img').stop();
			$('.info').stop();

			$('.line1').css("display","none");
			$('.line2').css("display","none");
			$('.line3').css("display","none");

			$('.hanamuke').css("display","none");
			$('.catch').css("display","none");
			$('.header img').css("display","block");
			$('.info').css("display","block");
			$('.skip').css("display","none");

		});

	});
</script>
<?php include_once('../analyticstracking.php') ?>
<div class="wrapper">
	<div class="header">
		<img src="./img/imperial_circus_nishiki_cover.jpg">
		<div class="catch">
		<div class="line1">時を経て変わるモノ</div>
		<div class="line1">時を経てなお変わらないモノ</div>
		<div class="line2">幾度となく繰り返した<br>流転の抒情詩</div>
		<div class="line2">想いと言葉を歌に乗せ贈る</div>
		<div class="line3">その声は</div>
		<div class="hanamuke">――贐。</div>
		</div>
		<div class="skip"><div class="skipButton"></div>skip</div>
	</div>
	
	<div class="info">
	<div class="name">Imperial Circus</div>
	<div class="title">弐式ノ贐</div>
	<ul class="trackList">
		<li>贐</li>
		<li>モノクロ色ノ愛オシキ歌謡唄</li>
		<li>廻る季節</li>
		<li>十年後ノ青春パラノイア</li>
		<li>666番目ニ咲イタ、黒イ薔薇。</li>
		<li>L.G.C.-the Last Governed Connector-</li>
		<li>.</li>
		<li>.</li>
		<li>.</li>
		<li>.</li>
		<li>.</li>
		<li>.</li>
		<li>※</li>
		<hr>

<li class="middle">Imperial Circus are</li>

<li class="large">リブユウキ</li>

<li class="small">Voices,Guitars,illustrations and Design</li>

<li class="large">Hull</li>

<li class="small">Bass,Programing and Engineering</li>
<hr>
<li class="middle">頒布情報</li>
<li class="sellDate">2016/4/24	Ｍ3 2016春	シ-01b 「SILENT DIFFERENCE」委託</li>
<li class="sellDate">2016/5/1	COMIC1☆10	さ-36b ‏「L.G.C.」</li>
<li class="sellDate">2016/5/6	nonLinear Metal DynamiX 2016 - Extra Edition Vol.2</li>
<li></li>
<li>価格	800円(イベント頒布価格)</li>
<li></li>
<li>書店委託</li>
<li><a href="http://www.toranoana.jp/mailorder/article/04/0030/42/11/040030421171.html?newtweet=01">とらのあな</a></li>
<li><a href="https://www.melonbooks.co.jp/detail/detail.php?product_id=165085">メロンブックス</a></li>

		<hr>
		<li class="middle">Media</li>
		<li class="mediaTitle">soundcloud</li>
		<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/260169209&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
		<li class="mediaTitle">youtube</li>
		<li class ="youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/C6r6eO1dfqA" frameborder="0" allowfullscreen></iframe></li>
		<li class="youtubeDummy"><a href="https://m.youtube.com/watch?v=C6r6eO1dfqA"><img src="https://i.ytimg.com/vi_webp/C6r6eO1dfqA/hqdefault.webp"></a></li>
	</ul>
	</div>

</div>


<script src="../js/lightbox.min.js"></script>
</body>

</html>
