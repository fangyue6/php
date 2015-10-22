<?php
/**
 * @param $file
 * @return null
 * 检测编码格式
 */
function detect_encoding($file) {
    $list = array('GBK', 'UTF-8', 'UTF-16LE', 'UTF-16BE', 'ISO-8859-1');
    $str = file_get_contents($file);
    foreach ($list as $item) {
        $tmp = mb_convert_encoding($str, $item, $item);
        if (md5($tmp) == md5($str)) {
            return $item;
        }
    }
    return null;
}
	$file="./cache/newindex_{$_GET['page']}.html";


	$cachetime = 10;

	if(!file_exists($file) || filemtime($file) + $cachetime < time()) {
		ob_start();

	header("Content-Type:text/html;charset=utf-8");
	include "init.inc.php";
	include "page.class.php";


	$smarty -> assign("arr", array("os", "Linux", "webserver", "Apache", "db","MySQL", "language","PHP"));


	$pdo = new  PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");

	$page = new Page(40, 5);


	$sql = "select id, name, age, sex, email from users {$page->limit}";

	echo $sql;

	$stmt = $pdo->prepare($sql);

	$stmt -> execute();
	
	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//print_r($users);

	$smarty -> assign("users", $users);

	$smarty -> assign("fpage", $page->fpage());

	$smarty -> display("9_1.tpl");

	

	$content = ob_get_contents();
   //$content = iconv('gbk','UTF-8', $content);
	file_put_contents($file, $content);
	ob_flush();

		echo "我不是缓存文件<br>";

	}else{
       // echo detect_encoding($file);
		include $file;
	}


