<?php
header("Content-type: text/html; charset=utf-8");
	$img = imagecreatefrompng("./cx.png");


	$color = imagecolorallocate($img, 0, 255, 0);

	imageline($img, 0,0, 200, 200, $color);

	imagepng($img, "ncx.png");

    echo "划线成功   图像宽度=".imagesx($img)."   图像高度=".imagesy($img);
	imagedestroy($img);



function Imageinfo($img){
    echo "图像宽度=".imagesx($img)."   图像高度=".imagesy($img)."<br>";
}