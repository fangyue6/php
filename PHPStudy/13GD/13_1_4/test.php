<?php
	//获取系统时间
	date_default_timezone_set("PRC");

	$h = date("H");//时
	$i = date("i");//分
	$s = date("s");//秒

	//1 创建资源（画布的大小）
	$img = imagecreatetruecolor(200, 250);	
	//设置画布的颜色
	$white =  imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
	$red =  imagecolorallocate($img, 255, 0, 0);
	$blue =  imagecolorallocate($img, 0, 0, 0XFF);
	$pink =  imagecolorallocate($img, 0XFF, 0, 0XFF);
	$green =  imagecolorallocate($img, 0, 0xFF, 0);
	
	
	imagefill($img, 0, 0, $white);
	//2.2. 制作各种颜色
    //绘制表盘
    if($s%4==0) {
        imageellipse($img, 100, 100, 190, 190,$pink);
    }else if($s%3==0){
        imageellipse($img, 100, 100, 190, 190, $red);
    }else if($s%2==0){
        imageellipse($img, 100, 100, 190, 190, $blue);
    }else {
        imageellipse($img, 100, 100, 190, 190,  $green);
    }
	//imageellipse($img, 100, 100, 190, 190, $blue);
	imagefilledellipse($img, 100, 100, 4, 4, $blue);//填充圆  表盘圆心

    //绘制 12 03 06 09 数字
    if($s%4==0) {
        imagestring($img, 3, 95, 8, "12", $red);
        imagestring($img, 3, 185, 95, "3", $blue);
        imagestring($img, 3, 95, 180, "6", $green);
        imagestring($img, 3, 11, 95, "9", $pink);
    }else if($s%3==0){
        imagestring($img, 3, 95, 8, "12", $pink);
        imagestring($img, 3, 185, 95, "3", $red);
        imagestring($img, 3, 95, 180, "6", $blue);
        imagestring($img, 3, 11, 95, "9", $green);
    }else if($s%2==0){
        imagestring($img, 3, 95, 8, "12", $green);
        imagestring($img, 3, 185, 95, "3", $pink);
        imagestring($img, 3, 95, 180, "6", $red);
        imagestring($img, 3, 11, 95, "9", $blue);
    }else {
        imagestring($img, 3, 95, 8, "12", $blue);
        imagestring($img, 3, 185, 95, "3", $green);
        imagestring($img, 3, 95, 180, "6", $pink);
        imagestring($img, 3, 11, 95, "9", $red);
    }

	//秒针
	$len = 80;


	 $a = $len*sin(pi()/30*$s);
	 $b = $len*cos(pi()/30*$s);
	$x = 100 + $a;
	$y = 100 - $b;

    //绘制指针
    if($s%4==0) {
        imageline($img, 100, 100, $x, $y, $red);
    }else if($s%3==0){
        imageline($img, 100, 100, $x, $y, $blue);
    }else if($s%2==0){
        imageline($img, 100, 100, $x, $y, $green);
    }else {
        imageline($img, 100, 100, $x, $y, $pink);
    }

	//数字的时间
	imagestring($img, 5, 20, 230, "NOW: {$h}:{$i}:{$s}", $red);

	//4保存，或输出给浏览, 写第二个参数就是保存
	header("Content-Type:images/gif");
	imagegif($img);

	//5. 释放资源
	imagedestroy($img);
