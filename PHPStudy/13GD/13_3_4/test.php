<?php
	//按x轴翻转
	function trun_x($imgname) {
		list($width, $height, $type)= getimagesize($imgname);    //原图
	
		$types = array(1=>"gif", 2=>"jpeg", 3=>"png");

		//变量函数
		$createimage = "imagecreatefrom".$types[$type];
		$imgsrc =  $createimage($imgname);

		$new = imagecreatetruecolor($width, $height);	
		//循环每次一个像素
		for($y=0; $y<$height; $y++) {
			imagecopy($new, $imgsrc, 0, $height-$y-1, 0,$y, $width, 1);	
		}
		


		//变量函数
		$save = "image".$types[$type];
		//保存
		$save($new, "new_".$imgname);
		imagedestroy($imgsrc);
		imagedestroy($new);
	
	}
	
	trun_x("cx.png");
	
