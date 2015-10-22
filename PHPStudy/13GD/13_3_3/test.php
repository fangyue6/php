<?php
//图片水印
	function watermark($imgname, $watername) {
		list($swidth, $sheight, $type)= getimagesize($imgname);    //原图
		list($wwidth, $wheight, $wtype)= getimagesize($watername);  //水印

		$types = array(1=>"gif", 2=>"jpeg", 3=>"png");

		//变量函数
		$createimage = "imagecreatefrom".$types[$type];
		$createimagew = "imagecreatefrom".$types[$wtype];
		//原图片
		$imgsrc = $createimage($imgname);   //原图

		$wimg = $createimagew($watername);  //水印

	

		$x = rand(3, $swidth-$wwidth);
		$y = rand(3, $sheight-$wheight);

		imagecopy($imgsrc, $wimg, $x, $y, 0, 0, $wwidth, $wheight);


		//变量函数
		$save = "image".$types[$type];
		$save($imgsrc, "new_".$imgname);
		imagedestroy($imgsrc);
		imagedestroy($wimg);
	}

	watermark("dx.jpg", "php.gif");
	watermark("cx.png", "php.gif");

	
