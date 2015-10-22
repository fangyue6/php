<?php
	$arr = array("name"=>"zhangsan", "age"=>10, "sex"=>"男");

	//串行化
	$str = json_encode($arr);
   echo $str."<br>";

	//返串行化, 第二个参数true返串行化为数组
	$parr= json_decode($str, true);

	//var_dump($parr);


	echo $parr['name'];;
?>

