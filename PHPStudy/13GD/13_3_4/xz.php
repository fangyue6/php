<?php
//旋转
	function xz($imgname, $jd) {
		list($swidth, $sheight, $type)= getimagesize($imgname);    //原图
	
		$types = array(1=>"gif", 2=>"jpeg", 3=>"png");

		//变量函数
		$createimage = "imagecreatefrom".$types[$type];
		$imgsrc =  $createimage($imgname);
	
		//旋转
		$new = imagerotate($imgsrc, $jd, 0);


		//变量函数
		$save = "image".$types[$type];
		//保存
		$save($new, "new_".$imgname);
		imagedestroy($imgsrc);
		imagedestroy($new);
	
	}
	
	xz("php.gif", 90);
	
