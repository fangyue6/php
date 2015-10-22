<?php
/**
 *
is_dir( ) -- 判断给定文件名是否是一个目录
语法结构：bool is_dir（名称）
返回类型：文件名存在并且是一个目录则返回 true，否则返回 false。

is_executable( ) -- 判断给定文件名是否可执行
语法结构：bool is_executable（名称）
返回类型：如果文件存在且可执行则返回 true ，否则返回 false 。

is_file( ) -- 判断给定文件名是否为一个正常的文件
语法结构：bool is_file(名称)
返回类型：如果文件存在且为正常的文件则返回 true 。

is_link( ) -- 判断给定文件名是否为一个符号连接
语法结构：bool is_link(名称)
返回类型：如果文件存在并且是一个符号连接则返回 true。

is_readable( ) -- 判断给定文件名是否可读
语法结构：bool is_readable（文件名称）
返回类型：如果文件存在并且可读则返回 true 。

is_writable( ) -- 判断给定的文件名是否可写
语法结构：bool is_writable(文件名称)
返回类型：如果文件存在并且可写则返回 true 。

 */
error_reporting(E_ALL^E_NOTICE^E_WARNING);
echo filetype("./meizi");
echo '<br>';
echo filetype("./PHPStudy.txt");
echo '<br>';

/*
	if(filetype('./meize')=="dir") {
	
	}

 */


if(is_dir("./meizi")) {
    echo "meizi这是一个目录";
}else {
    echo "meizi这是一个文件";
}
