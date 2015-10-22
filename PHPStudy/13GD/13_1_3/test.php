<?php
	//1 创建资源（画布的大小）
	$img = imagecreatetruecolor(200, 200);	
	//设置画布的颜色
	$white =  imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
	$red =  imagecolorallocate($img, 255, 0, 0);
	$blue =  imagecolorallocate($img, 0, 0, 0XFF);
	$pink =  imagecolorallocate($img, 0XFF, 0, 0XFF);
	$green =  imagecolorallocate($img, 0, 0xFF, 0);
	
	
	imagefill($img, 0, 0, $white);
	//2.2. 制作各种颜色
	
	imageline($img, 0,0, 200,200, $blue);
	imageline($img, 200, 0, 0, 200, $red);


	//画矩形
	imagerectangle($img, 50, 50, 150, 150, $pink);
	//填充圆
	imagefilledrectangle($img, 75,75, 125,125, $blue);
	
	//画圆
	imageellipse($img, 50, 50, 100, 100, $red);
	imagefilledellipse($img, 150, 150, 100, 100, $red);


	//画弧形
	imagearc($img, 150, 50, 100, 100,  -90, 0, $blue);


	//画一个字符串
	imagestring($img, 5, 50, 150, "hello world", $blue);
    //垂直
	imagestringup($img, 5, 50, 150, "hello world", $blue);

	//3. 画出各种图形，和写(画出)字
	imagettftext($img, 30, 0, 10, 100, $green, "./simkai.ttf", "妹子漂亮吗?");
	imagettftext($img, 30, 0, 13, 150, $blue, "./FZSTK.TTF", "妹子漂亮吗?");

	//4保存，或输出给浏览, 写第二个参数就是保存
	header("Content-Type:images/gif");

	imagegif($img);

	//5. 释放资源
	imagedestroy($img);
