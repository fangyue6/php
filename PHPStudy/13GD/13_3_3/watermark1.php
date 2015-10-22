<?php
//文字水印
	function watermark($imgname, $string) {
		list($swidth, $sheight, $type)= getimagesize($imgname);

		$types = array(1=>"gif", 2=>"jpeg", 3=>"png");

		//变量函数
		$createimage = "imagecreatefrom".$types[$type];
		//原图片
		$imgsrc = $createimage($imgname);

		$white = imagecolorallocate($imgsrc, 200,200, 200);
		$green = imagecolorallocate($imgsrc, 0,200, 0);

		$x = rand(3, $swidth-strlen($string)*imagefontwidth(5));
		$y = rand(3, $sheight-imagefontheight(5)-2);

		imagestring($imgsrc, 5, $x, $y, $string, $white);
		imagestring($imgsrc, 5, $x+1, $y+1, $string, $green);
		
		//变量函数
		$save = "image".$types[$type];
		$save($imgsrc, "new_".$imgname);
		imagedestroy($imgsrc);
	//	imagedestroy($dimg);
	}

	watermark("dx.jpg", "meizi");
	watermark("cx.png", "meize");

	
