<?php
	function cut($imgname, $x, $y, $width, $height) {
		list($swidth, $sheight, $type)= getimagesize($imgname);

		$types = array(1=>"gif", 2=>"jpeg", 3=>"png");

		//变量函数
		$createimage = "imagecreatefrom".$types[$type];
		//原图片
		$imgsrc = $createimage($imgname);
		//目标资源
		$dimg = imagecreatetruecolor($width, $height);

		

		imagecopyresampled($dimg, $imgsrc, 0, 0, $x, $y, $width, $height, $width, $height);

		
		//变量函数
		$save = "image".$types[$type];
		$save($dimg, "new_".$imgname);
		imagedestroy($imgsrc);
		imagedestroy($dimg);
	}


	cut("dx.jpg",50,50, 200, 200);
	cut("map.gif",50,50, 200, 200);
	cut("cx.png",50,50, 200, 200);
