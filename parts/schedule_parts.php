<?php

	include dirname(__FILE__) . '/schedule_list.php';
	//最新情報記述
	$schedule_str = '
	<div id = "contents">
	<div class="contents-name">SCHEDULE</div>
	<div id = "contentTitle"><div class = "schedule_line"><table class = "schedule"></div>';
/*	$schedule_str = '
	<div id = "contents">
	<div class="contents-name">SCHEDULE</div>
						<div id = "contentTitle">
							<div class = "schedule_line">
								<div class="flyer">
									<a href="img/schedule/'. $flyer_list[0] . '" data-lightbox="image-1" data-title="' . $schedule_list[0][title] . '">
									<img src="img/schedule/' . $flyer_list[0] . '">
									</a>
								</div>
							<table class = "schedule">';

	foreach($schedule_list[0] as $i=>$v){
		$schedule_str .= '<tr><td>' . $i . '</td><td>:</td><td>' . $v . '</td></tr>';
	};
*/
	$schedule_str .= '</table></div>';
	//最新項目を削除
/*	array_shift($schedule_list);
	array_shift($flyer_list);
*/

	//アーカイブ記述
	$schedule_str .= '
	<p>ARCHIVES</p>
						<hr>
							<div class ="archiveline_wrapper">';
									
	$cnt = 0;
	foreach($schedule_list as $s){
		$schedule_str .=	'
						<div class = "archive_line">
						<div class="flyer">';
		if ($flyer_list[$cnt] != ""){
			$schedule_str .= '<a href="img/schedule/'. $flyer_list[$cnt] . '" data-lightbox="image-1" data-title="' . $schedule_list[$cnt][title] . '">
							  <img src="img/schedule/' . $flyer_list[$cnt] . '">
							  </a>';
		}else{
			$schedule_str .= "noimage";
		}
		
		$schedule_str .= '				
						
						</div>
						<table class = "schedule">';
		foreach($s as $item=>$val){
			$schedule_str .= '<tr><td>' . $item . '</td><td>:</td><td>' . $val . '</td></tr>';
		};
		++$cnt;
		$schedule_str .= '</table></div></br></br></br></br></br>';
	};

	$schedule_str .='
								</div>
							</div>
						</div>';

	echo $schedule_str;