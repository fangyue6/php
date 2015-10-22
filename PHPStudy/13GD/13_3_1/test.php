<?php
	function cimgstr($imgname, $string) {
		list($width, $height, $type)= getimagesize($imgname);

		$types = array(1=>"gif", 2=>"jpeg", 3=>"png");

		//变量函数
		$createimage = "imagecreatefrom".$types[$type];

		$img = $createimage($imgname);
		
		$red =  imagecolorallocate($img, 0xFF, 0, 0);

		
		$x = ($width-imagefontwidth(5)*strlen($string))/2;
		$y = ($height-imagefontheight(5))/2;


		imagestring($img, 5, $x, $y, $string, $red);
		
		//变量函数
		$save = "image".$types[$type];
		$save($img, "new_".$imgname);
		imagedestroy($img);
	}


	cimgstr("dx.jpg", "meizi");
	cimgstr("map.gif", "meizi");
	cimgstr("cx.png", "meize");

	
