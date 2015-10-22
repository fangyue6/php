<?php
	//按y轴翻转
	function trun_y($imgname) {
		list($width, $height, $type)= getimagesize($imgname);    //原图
	
		$types = array(1=>"gif", 2=>"jpeg", 3=>"png");

		//变量函数
		$createimage = "imagecreatefrom".$types[$type];
		$imgsrc =  $createimage($imgname);

		$new = imagecreatetruecolor($width, $height);	
		//循环每次一个像素
		for($x=0; $x<$width; $x++) {
			imagecopy($new, $imgsrc, $width-$x-1, 0, $x,0, 1, $height);	
		}
		


		//变量函数
		$save = "image".$types[$type];
		//保存
		$save($new, "new_".$imgname);
		imagedestroy($imgsrc);
		imagedestroy($new);
	
	}
	
	trun_y("cx.png");
	
