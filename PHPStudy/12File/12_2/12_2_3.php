<?php
function t1(){
	$total = disk_total_space("C:");//计算总空间 字节
	$free = disk_free_space("C:");//计算可用空间 字节
	echo "C: 盘的总大小：".round($total/pow(2,30))."G<br>";
	echo "C: 盘的可用空间：".round($free/pow(2,30))."G<br>";
}
t1();

function t2(){
    $dirn = 0; //目录数
    $filen = 0; //文件数


//用来统计一个目录下的文件和目录的个数
    function getdirnum($file) {
        global $dirn;
        global $filen;

        $dir = opendir($file);

        while($filename = readdir($dir)) {
            if($filename!="." && $filename !="..") {
                $filename = $file."/".$filename;
                if(is_dir($filename)) {
                    $dirn++;
                    getdirnum($filename);  //递归，就可以查看所有子目录
                } else {
                    $filen++;
                }
            }
        }
        closedir($dir);
    }

    getdirnum("meizi");
    echo "目录数为:{$dirn}<br>";
    echo "文件数为:{$filen}<br>";
}
t2();

function t3(){
    //用来统计一个目录下大小
    function dirsize($file) {
        $size = 0;
        $dir = opendir($file);

        while($filename = readdir($dir)) {
            if($filename!="." && $filename !="..") {
                $filename = $file."/".$filename;

                if(is_dir($filename)) {
                    //使用递归
                    $size += dirsize($filename);
                } else {
                    $size += filesize($filename);
                }
            }
        }
        closedir($dir);
        return $size;
    }
    echo "phpmyadmin目录大小为：".(dirsize("phpmyadmin")/pow(1024,2))."MB<br>";
}