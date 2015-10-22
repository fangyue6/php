<?php
	function deldir($dirname) {
		if(!file_exists($dirname)) {
			die("文件夹不存在!");
		}
		//如果是文件，直接删除即可
		if(is_file($dirname)) {
			unlink($dirname);
		}

		$dir = opendir($dirname);

		while($filename = readdir($dir)) {
			if($filename !="." && $filename!="..") {
				$filename = $dirname."/".$filename;

				if(is_dir($filename) ) {
					deldir($filename);
				}else {
					unlink($filename);
				}
			}
		}

		

		closedir($dir);
		rmdir($dirname);
	}


	deldir("meizi");
