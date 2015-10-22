<?php
	//1 创建资源（画布的大小）
	$img = imagecreatetruecolor(200, 200);	
	//设置画布的颜色
	$white =  imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
	$red =  imagecolorallocate($img, 255, 0, 0);
	$blue =  imagecolorallocate($img, 0, 0, 0XFF);
	
	//区域填充
	imagefill($img, 0, 0, $white);
	//2.2. 制作各种颜色
	
	imageline($img, 0,0, 200,200, $blue);
	imageline($img, 200, 0, 0, 200, $red);

	//3. 画出各种图形，和写(画出)字


	//4保存，或输出给浏览, 写第二个参数就是保存
	imagepng($img,"./meizi.png");//保存成png格式的图片
	imagegif($img,"./meizi.png");//保存成gif格式的图片

	imagegif($img);//保存成gif格式的图片
	header("Content-Type:images/gif");//输出给浏览器

	//5. 释放资源
	imagedestroy($img);
