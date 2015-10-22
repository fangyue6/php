<?php
//创建一个空文件
//touch("./feng.txt");

//复制文件
//copy("feng.txt", "meize.txt");

//移动或重新命名一个文件
//rename("meize.txt", "meizi.txt");


//删除一个文件
//unlink("meizi.txt");

//	$fp = fopen("feng.txt", "w");

//	ftruncate($fp, 100);



//对文件内容的操作
//	file_get_contents("");


//file_put_contents("meizi.txt", "妹子今年18！");
//file_put_contents("meizi.txt", "小妹子今年19！");

//echo file_get_contents("meizi.txt");

//file_put_contents("baidu.txt", file_get_contents("http://www.baidu.com"));


//readfile("http://www.baidu.com");

/*$arr = file("PHPStudy.txt");
echo count($arr);
echo '<br>';
echo $arr[5];*/


/*
 *  fopen("位置URL", "r+");
 *
 *
 *
 */

//打开
$fp = fopen("tmp.txt", "rt");
//关闭
fclose($fp);
