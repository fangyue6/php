<?php
	//所有客户端访问时自动将所有这个网站的cookie都代过来(全局数组)$_COOKIE
error_reporting(E_ALL^E_NOTICE^E_WARNING);
header("Content-type: text/html; charset=utf-8");
if(!empty($_COOKIE)){
    print_r($_COOKIE);
    echo "<br>";
    if(!empty($_COOKIE['username'])){
        echo $_COOKIE['username']."<br>";
    }
    else{
        echo "没有 username cookie<br>";
    }

}else{
    echo "没有 cookie";
}

