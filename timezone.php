<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	echo date('d/m/Y - H:i:s');

	//Chuyen thoi gian sang kieu int
	echo strtotime(date('Y-m-d H:i:s'));

	//Xu ly cong tru 
	mktime($hour, $minute, $second, $month, $day, $year);
	//vidu
	$dataint = mktime(0,0,0,11,(20+12),2016);
	echo date('d/m/Y - H:i:s');	 

	//Ví dụ: Xem ngày mai, tháng tới, năm tới sẽ có ngày tháng năm bao nhiêu.
	$tomorrow = mktime(0,0,0,date('m'),date('d') + 1, date('Y'));
	$lastmonth = mktime(0,0,0,date('m')-1,date('d'), date('Y'));
	$nextyear = mktime(0,0,0,date('m'),date('d'), date('Y')+1);


?>