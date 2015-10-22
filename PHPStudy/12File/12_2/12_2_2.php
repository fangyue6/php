<?php
function t1(){
    foreach(glob("../12File/*") as $filename ) {
        echo $filename."<br>";
    }
}
//t1();

function t2(){
    $dirname="../12File/";
    //打开目录资源
    $dir = opendir($dirname);
    while($filename = readdir($dir)) {
        //不要操作.和..
        if($filename!="." && $filename!="..") {
            //一定要注意路径， 找对才可以
            $filename = $dirname.$filename;

            if(is_dir($filename)) {
                echo "目录:".$filename."<br>";
            } else {
                echo "文件:".$filename."<br>";
            }
        }

    }
    rewinddir($dir);
    echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@<br>";
    while($filename = readdir($dir)) {
        //不要操作.和..
        if($filename!="." && $filename!="..") {
            //一定要注意路径， 找对才可以
            $filename = $dirname.$filename;

            if(is_dir($filename)) {
                echo "目录:".$filename."<br>";
            } else {
                echo "文件:".$filename."<br>";
            }
        }

    }
    //关闭这个资源
    closedir($dir);
}
t2();