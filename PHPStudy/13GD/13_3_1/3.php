<?php
	$img = imagecreatefrompng("./cx.png");

	list($width, $height, $type)= getimagesize("./cx.png");



	$color = imagecolorallocate($img, 0, 255, 0);

	imageline($img, 0,0, imagesx($img), imagesy($img), $color);

	imagepng($img, "ncx.png");

	imagedestroy($img);
