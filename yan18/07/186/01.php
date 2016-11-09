
<?php 

//cookie记录访问次数

//如果这个页面是第一次访问，没有cookie信息
	if (!isset($_COOKIE['num'])) {
		setcookie('num',1);
		echo "这是你的第1 次访问";
	} else {
		setcookie('num',$_COOKIE['num'] + 1);
		echo "这是你的第" .$_COOKIE['num']."次访问";
	}



 ?>