<?php
/**
 * Created by PhpStorm.
 * User: fangyue
 * Date: 2015/10/14
 * Time: 16:59
 */

function t1(){
    rename("meizi", "mei");
}

function t2(){
	/**
     * $dirsrc  原目录
     * $dirto  目标目录
     *
     */
	function copydir($dirsrc, $dirto) {
        //如果原来的文件存在， 是不是一个目录
        if(file_exists($dirto)) {
            if(!is_dir($dirto)) {
                echo "目标不是一个目录， 不能copy进去<br>";
                exit;
            }
        }else{
            mkdir($dirto);
        }
        $dir = opendir($dirsrc);
        while($filename = readdir($dir)) {
            if($filename != "." && $filename !="..") {
                $srcfile = $dirsrc."/".$filename;  //原文件
                $tofile = $dirto."/".$filename;    //目标文件

                if(is_dir($srcfile)) {
                    copydir($srcfile, $tofile);  //递归处理所有子目录
                }else{
                    copy($srcfile, $tofile);
                }
            }
        }
    }
	copydir("mei", "d:/phpadmin");
}


