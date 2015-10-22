<?php
	include "init.inc.php";

	
	$stmt = $pdo->prepare("select mimetype, data from images where id=?");

	$stmt -> execute(array(1));

	list($mimetype, $data) = $stmt->fetch(PDO::FETCH_NUM);

	header("Content-Type: {$mimetype}");

	echo $data;
