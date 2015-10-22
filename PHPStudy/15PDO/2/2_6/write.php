<?php

/*
 *
 *Array ( [pic] => Array ( [name] => 46348.jpg [type] => image/jpeg [tmp_name] => C:\wamp\tmp\php45.tmp [error] => 0 [size] => 4052 ) ) 
 */
	include "init.inc.php";

	
	$stmt = $pdo -> prepare("insert into images(mimetype, data) values(?, ?)");
	
	$stmt->bindParam(1, $_FILES['pic']['type']);

	$fp = fopen($_FILES['pic']['tmp_name'], "rb");

	//直接使用文件资源就可以入库，而不用读出文件，再插入
	$stmt -> bindparam(2, $fp, PDO::PARAM_LOB);

	$stmt->execute();

	fclose($fp);
    header("Content-type: text/html; charset=utf-8");
    echo "上传成功......"
?>
<script>
    self.location='read.php';
</script>
