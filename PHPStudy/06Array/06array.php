<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: fangyue
 * Date: 2015/10/7
 * Time: 17:47
 */
function  t1(){
    $arr['one'] = 1;
    $arr['two'] = 2;
    $arr['three'] = 3;
    print_r($arr);
}
//t1();
function t2(){
    $arr[0] = 1;
    $arr[1] = 2;
    $arr[2.7] = 3;
    $arr[true]=5;
    $arr[false]=6;
    $arr[null]=7;

    $arr{'one'} = 1;
    $arr['two'] = 2;
    $arr['three'] = 3;
    print_r($arr);
}
//t2();
function t3(){
    $arr[]=10;    //0
    $arr[]=10;   //1
    $arr[]=10;    //2.2
    $arr[8]=10;   //8
    $arr[]=10;    //9
    $arr[9]=11;   //9
    $arr[]=10;    //10
    $arr[4]=44;   //4--9;

    $arr[] = 55;  //

    $arr['one']=66;

    $arr[] = 99;

    $arr[-100]=-100;
    $arr[] = 'aa';

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
//t3();
function t4(){
    $arr=array();
    for($i=0; $i<100; $i++) {
        $arr[] = $i*$i;
    }
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
//t4();

function t5(){
    function demo() {
        return array("one", "two", "three");
    }
    $arr = demo();
    echo $arr[0];
    echo '<br>';
    //echo demo()[1];//新版本支持
}
//t5();

//-----------删除数组中的元素--start-------
function t6(){
    $arr = array("one", "two", "three", "four");//新版本  $arr = ["one", "two", "three", "four"];
    unset($arr[2]);//删除，不会重新所应
    $arr = array_values($arr);//会重新索引
    print_r($arr);
}
//t6();
function t7(){
    function xdw($m, $n) {//猴子选大王
        $arr = array();
        $a = "a";
        for($i=0; $i<$m; $i++) {
            $arr[] = $a++;
        }
        print_r($arr);
        $i=0;
        while(count($arr) > 1) {
            if($i%$n == 0) {//这里有问题   这里一开始就把第0个踢出去了
                unset($arr[$i]);
            } else {
                $arr[] = $arr[$i];
                unset($arr[$i]);
            }
            $i++;
        }
        return $arr;
    }
    print_r(xdw(80, 7));
}
//t7();
//-----------删除数组中的元素--end-------

//-----------二维数组--start-----------------
function t8(){
    $group = array(
        array("name"=>"zs", "age"=>20, "sex"=>"男", "email"=>"aaa@bbb.com"),
        array("name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"),
        "three"=>array("name"=>"ww", "age"=>22, "sex"=>"男", "email"=>"cccc@bbb.com")
    );
	var_dump(  $group[1]  );
    /*	$arr = $group[1];
        echo $arr['email'];
     */
    echo $group[1]['email']."<br>";
    echo $group['three']['name'];
}
//t8();
//-----------二维数组--end-----------------

//-----------多维数组--start-----------------
function t9(){//5.4版本才能用[]
    $class = [
        "group1" => [
            ["name"=>"zs", "age"=>20, "sex"=>"男", "email"=>"aaa@bbb.com"],
            ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
            ["name"=>"ww", "age"=>22, "sex"=>"男", "email"=>"cccc@bbb.com"]
        ],
        [
            ["name"=>"zs", "age"=>20, "sex"=>"男", "email"=>"aaa@bbb.com"],
            ["name"=>"ls", "age"=>99, "sex"=>"女", "email"=>"bbb@bbb.com"],
            ["name"=>"ww", "age"=>22, "sex"=>"男", "email"=>"cccc@bbb.com"]
        ],
        [
            ["name"=>"zs", "age"=>20, "sex"=>"男", "email"=>"aaa@bbb.com"],
            ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
            ["name"=>"ww", "age"=>22, "sex"=>"男", "email"=>"cccc@bbb.com"]
        ]
    ];
    echo $class[0][1]['age'];
    echo '<pre>';
    print_r($class);
    echo '</pre>';
}
//t9();
//-----------多维数组--end-------------------

//-----------数组遍历--start-------------------
function t10(){
    //for循环遍历
    $arr = array("aa", "bb", "cc", "dd", "ee", "ff", "ggg", "hh");
    $nums = count($arr);
    for($i=0; $i < $nums; $i++) {
        echo $arr[$i].'<br>';
    }
}
//t10();
function t11(){
    //foreach遍历
    $arr = array("one"=>"aa", "bb", "three"=>"cc", "dd", 9=>"ee", "ff", "four"=>"ggg", "hh", "xxx", "yyy", "zz");
    $i=0;
    foreach($arr as $kk => $vv) {
        echo "{$kk} =============> {$vv} ,".$i++."<br>";
    }
}
//t11();
function t12(){
    $group = [
        "name"=>"第三组",
        "price"=>888,
        ["name"=>"zs", "age"=>20, "sex"=>"男", "email"=>"aaa@bbb.com"],
        ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
        ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
        ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
        ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
        ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
        ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
        ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
        ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
        ["name"=>"ls", "age"=>21, "sex"=>"女", "email"=>"bbb@bbb.com"],
        ["name"=>"ww", "age"=>22, "sex"=>"男", "email"=>"cccc@bbb.com"]
    ];
    echo '<table border="1" width="800" align="center">';
    echo '<caption><h1>数组转为表格<h1></caption>';
    foreach($group as $k=>$row) {
        echo '<tr>';
        if(is_array($row)) {
            foreach($row as $col) {
                echo '<td>'.$col.'</td>';
            }
        } else {
            echo '<td colspan="4--9">'.$k.':'.$row.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
//t12();
//-----------数组遍历--end---------------------

//-----------list--start-----------------------
function t13(){
	list($a, , $c) = array("妹子", "峰哥", "第三者");
	echo $a."<br>";
//	echo $b."<br>";
	echo $c."<br>";

	$str="峰哥_好帅";
    list($name,$pro) = explode("_", $str);//分割
    echo $name.'<br>';
    echo $pro.'<br>';
}
//t13();
//-----------list--end-------------------------

//-----------each list--start-------------------------
function t14(){
    /**
     * each()只是一个函数，参数就是一个数组作为参数，返回值，也是一个数组
     * 1、返回值是一个数组，数组固定有4个参数，而且下标也是固定的（1(值)  value(值)）（0(下标) key（下标））
        2.2.each（）只处理当前的元素将当前的元素转为数组信息，处理完毕后，指针向下一个元素
     */
    $arr=["xxx","yyy","zzz","zzzzsss"];

   /* while($tmp=each($arr)){
       // print_r($tmp);
        echo "{$tmp['key']} -> {$tmp['value']}<br>";
        //echo "<br>";
    }*/
    while(list($key,$val)=each($arr)){
        echo "{$key} -> {$val} <br>";
    }
    /*$one=each($arr);
    print_r($one);
    echo "<br>";

    $one=each($arr);
    print_r($one);
    echo "<br>";

    $one=each($arr);
    var_dump($one);
    echo "<br>";*/
   // echo $one['key'].'->'.$one['value']."<br>";
    //echo $one[0].'->'.$one[1]."<br>";

}
//t14();
//-----------each list--end-------------------------

//-----------指针控制--start-------------------------
function t15(){
    /*控制指定的位置
 *   next();
 *   prev();
 *   reset();
 *   end();
 *   each(); --- next()
 *   key() 获取当前下标
 *   current() 获取当前的值
 */
    $arr = array("one"=>"妹子", "two"=>"峰哥", "three"=>"观众", "four"=>"小四", "5"=>"five");
    next($arr);
    next($arr);
    next($arr);
    end($arr);
    prev($arr);
    reset($arr);
    echo "当前的位置(默认在第一个): ".key($arr)."=>".current($arr)."<br>";
}
//t15();
//-----------指针控制--end-------------------------

//-----------超全局数组--start-------------------------
function t16(){
    /*超全局数组(变量), 在PHP的脚本中， 已经声明完的变量， 你可以直接就去使用即可! 变量的名子已经规定好的了
 $_SERVER   服务器变量：
 $_ENV      环境变量：
 $_GET      HTTP GET变量：
 $_POST     HHTP POST变量：
 $_REQUEST  request变量：
 $_FILES    HTTP文件上传变量：
 $_COOKIE   HTTP Cookies:
 $_SESSION  Session变量：
 $_GLOBALS  Global变量：

 *    超   全局   数组
 *    1. 数组(关联数组), 就和你自己声明的数组是一样的操作方式
 *    2.2. 全局
 *    3. 每个预定义的数组都有自独特的能力
 */
    echo count($_SERVER)."<br>";
    foreach($_SERVER as $key => $value) {
        echo "{$key}  =>  {$value} <br>";
    }
}
//t16();

function t17(){
    $_GET=array("妹子", "峰哥");
    function demo() {
        //	global $arr;
        echo $_GET[0]."和".$_GET[1] . "<br>";
        $_GET['username']="admin";
    }
    demo();
    print_r($_GET);
}
//t17();
//-----------超全局数组--end---------------------------

//--------服务器变量$_SERVER和环境变量$_ENV--start---------------------------
function t18(){
    function getip() {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if(!empty($_SERVER['REMOTE_ADDR'])) {
            return $_SERVER['REMOTE_ADDR'];
        }else{
            return '未知IP';
        }
    }
    echo "your ip is ".getip();
    echo '<br>';
    echo $_SERVER['HTTP_USER_AGENT'];
    echo '<br>';
    echo count($_SERVER);
    echo "<br>";
    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';
}
//t18();
//--------服务器变量$_SERVER和环境变量$_ENV--end---------------------------

//-----------超全局数组1--start---------------------------
    /*print_r($_GET);
    echo '<br>';
    print_r($_POST);
    echo '<br>';
    print_r($_REQUEST);//只要是请求，不管是GET还是POST都可以
    $arr = !empty($_POST) ? $_POST : $_GET;*/
//-----------超全局数组1--end---------------------------

//-----------超全局数组2--start---------------------------
   /* setcookie("name","hello",time()*3600,'/');
    print_r($_COOKIE);

    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";*/

   /* session_start();
    $_SESSION['name']="hello";
    print_r($_SESSION);*/

//-----------超全局数组2--end---------------------------

//-----------数组函数的分类  和键值搜索相关的函数--start---------------------------
function t19(){
    $lamp = array("os"=>"Linux", "webserver"=>"Apache", "ws"=>"Apache", "num"=>10, "aa"=>"10","db1"=>"MySQL","db"=>"MySQL", "language"=>"PHP");
    print_r($lamp);
    echo '<br>';
        list($os, $webserver, $db, $language) =  array_values($lamp);//返回数组所有的值
        echo $os."<br>";
        echo $webserver."<br>";
        echo $db."<br>";
        echo $language."<br>";
    print_r( array_keys($lamp) );	 //全部返回所有键名
    //echo array_keys($lamp)[0]
    echo "<br>";
    print_r( array_keys($lamp, 10, true) );
    echo "<br>";
   //-------------
    if( in_array("MySQL", $lamp) ) {
        echo "MySQL 在数组中";
    }else{
        echo "MySQL 不在数组中";
    }
    echo "<br>";
    echo array_search("MySQL",$lamp)."<br>";

    if( array_key_exists("hello", $lamp) ) {
        echo "hello键 在数组中";
    }else{
        echo "hello键 不在数组中";
    }
    echo "<br>";

    //键值兑换
    $arr=array_flip($lamp);
    print_r($arr);
    echo "<br>";
    //数组反转
    $arr=array_reverse($lamp);
    print_r($arr);
    echo "<br>";
}
//t19();
//-----------数组函数的分类  和键值搜索相关的函数--end-----------------------------

//-----------统计数组元素的个数与唯一性的函数--start-----------------------------
function t20(){
    $lamp = array("os"=>"Linux", "webserver"=>"Apache","db"=>"MySQL", "language"=>"PHP");
    print_r($lamp);
    echo '<br>';
    echo count($lamp)."<br>";
    $str = "";
    var_dump(count($str));   //strlen();
    echo "<br>-------------<br>";

    $web = array(
        "lamp"=>array("os"=>"Linux", "webserver"=>"Apache","db"=>"MySQL", "language"=>"PHP"),
        "JavaEE" => array("os"=>"Unix", "webserver"=>"Tomcat","db"=>"Oracle", "language"=>"JSP")

    );
    echo count($web,1);//第二个参数可以统计子数组，一共有多少个
    echo "<br>-------------<br>";

    $lamp = array("db"=>"MySQL","Linux","os"=>"Linux","Linux", "webserver"=>"Apache","MySQL", "language"=>"PHP");
    print_r(array_unique($lamp));//第一次出现的留下
}
//t20();
//-----------统计数组元素的个数与唯一性的函数--end-----------------------------

//-----------回调函数处理数组的函数array_filter()  过滤--start-----------------------------
function t21(){
    $arr = array(1,2,3,-4,false,5,6,7,8,9,"",-1-2-3,4,null,-5-6-7-8, 0);
   echo "<pre>";
    var_dump($arr);

    echo '<br>---<br>';

    var_dump(array_filter($arr));//过滤
    echo '<br>---<br>';

    function myfun($value) {
        if($value >= 0)
            return true;
        else
            return false;
    }

    var_dump(array_filter($arr, "myfun"));
    echo '<br>---<br>';

    //array_values重新索引
    //5.4以后匿名函数
    var_dump( array_values( array_filter($arr, function($value){
        return !($value%2==0);
    }) ));
    echo "</pre>";
}
//t21();
//-----------回调函数处理数组的函数array_filter()  过滤--end-----------------------------

//-----------回调函数处理数组的函数array_walk()  对数组中的每个成员应用用户函数--start-----------------------
function t22(){
    $arr = array(1,2,3,4,5);
    function myfun(&$value) {//引用参数
        $value = $value*$value;
    }
    print_r($arr);
    echo '<br>';
    array_walk($arr, "myfun");
    print_r($arr);
    echo '<br>';
}
//t22();
function t23(){
    $arr = array("one"=>1,"two"=>2,"three"=>3,"four"=>4,"five"=>5);
    function myfun1($value, $key) {
        echo "{$key} ============ > {$value} <br>";
    }
    print_r($arr);
    echo '<br>';
    array_walk($arr, "myfun1");
    array_walk($arr, function(&$value, $key){
        $value="{$key} ----------> {$value}<br>";
    });
    print_r($arr);
    echo '<br>';
}
//t23();
function t24(){
    $arr = array("one"=>1,"two"=>2,"three"=>3,"four"=>4,"five"=>5);
    print_r($arr);
    echo '<br>';
    array_walk($arr, function($value, $key, $str){
        echo "{$key} {$str} {$value}<br>";
    }, "###############");//"###############"这是第三个参数$str的值
    print_r($arr);
    echo '<br>';
}
//t24();
//-----------回调函数处理数组的函数array_walk()  对数组中的每个成员应用用户函数--end-----------------------------

//-----------回调函数处理数组的函数array_map() 将回调函数作用到给定数组的单元上--start-----------------------------
function t25(){
    $arr = array(1,2,3,4,5);
    $brr = array("one", "two", "three");
    print_r($arr);
    echo '<br>';
    function myfun($v, $bv) {
        echo "$v ---- $bv <br>";
        return 1;
    }
    $rarr = array_map("myfun", $arr, $brr);//得到新数组
    print_r($rarr);
    echo '<br>';
}
//t25();
function t26(){
    $arr = array(1,2,3,4,5);
    $brr = array("one", "two", "three");
    $crr= array("aa", "bb", "cc", "dd");
    print_r($arr);
    echo '<br>';
    $rarr = array_map(null, $arr, $brr, $crr);
    echo '<pre>';
    print_r($rarr);
    echo '</pre>';
}
//t26();
//-----------回调函数处理数组的函数array_map() 将回调函数作用到给定数组的单元上--end-----------------------------

//-----------冒泡(起泡)排序算法--start-----------------------------
function t27(){
    $arr = array(0,1,22,3,44,5,6,7,88,9);
    //从大到小
    function mysort(&$arr) {
        $len = count($arr);
        for($i=0; $i<$len-1; $i++) {
            for($j = 0; $j < $len-$i-1; $j++) {
                if($arr[$j] > $arr[$j+1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
        }
    }
    mysort($arr);
    print_r($arr);
}
//t27();
//-----------冒泡(起泡)排序算法--end-----------------------------

//-----------快速排序法--start-----------------------------
function t28(){
    $arr = array(1,20, 18, 33, 17, 44, 15, 22, 13, 25, 34, 11, 18, 66);
    function qsort($arr) {
        if(!is_array($arr) || empty($arr))
            return array();
        //获取数组的长度
        $len = count($arr);
        //如果数组中只有一个元素, 直接返回这个数组
        if($len <= 1)
            return $arr;
        $key[0] = $arr[0];
        $left = array();
        $right = array();
        for($i = 1; $i<$len; $i++) {
            if($arr[$i] <= $key[0]) {
                $left[]=$arr[$i];
            }else{
                $right[] = $arr[$i];
            }
        }
        $left=qsort($left);
        $right=qsort($right);
        return array_merge($left, $key, $right);
    }
    print_r($arr);
    echo '<br>';
    print_r(qsort($arr));
}
//t28();
//-----------快速排序法--end-----------------------------

//-----------数组的排序函数--start-----------------------------
/**
sort -- 对数组排序(升序)
rsort -- 对数组逆向排序（降序）
ksort -- 对数组按照键名排序
krsort -- 对数组按照键名逆向排序
asort -- 对数组进行排序并保持索引关系（关联数组排序）
arsort --  对数组进行逆向排序并保持索引关系
natsort --  用“自然排序”算法对数组排序
natcasesort --  用“自然排序”算法对数组进行不区分大小写字母的排序
usort --  使用用户自定义的比较函数对数组中的值进行排序
uasort --  使用用户自定义的比较函数对数组中的值进行排序并保持索引关联
uksort --  使用用户自定义的比较函数对数组中的键名进行排序
array_multisort -- 对多个数组或多维数组进行排序
 */
function t29(){
    $arr = array("one", "two", 100=>"three", "four", "five");
    print_r($arr);
    echo '<br>';

    rsort($arr);//降排序
    print_r($arr);
    echo '<br>';

    ksort($arr);//按键值排序 升序
    print_r($arr);
    echo '<br>';

    krsort($arr);//按键值降序
    print_r($arr);
    echo '<br>';
}
//t29();
function t30(){
    $arr = array("FILE12dddd.TXT", "file.txt", "a"=>"file2ddddddddddd.txt", "fi.txt", "file11.txt");
    print_r($arr);
    echo '<br>';
    uasort($arr, function($a, $b){
        $alen = strlen($a);
        $blen = strlen($b);

        if($alen > $blen){
            return -1;
        }else if($alen < $blen) {
            return 1;
        }else{
            return 0;
        }
    });
    print_r($arr);
}
//t30();
//-----------数组的排序函数--end-----------------------------

//-----------多维数组的排序函数--start-----------------------------
function t31(){
    $a = array("a", 10, "b", 10);
    $b = array(1,   4,   3,  2);
    array_multisort($a,SORT_DESC, $b, SORT_DESC);//前面影响后面
    print_r($a);  // a b 10 20
    echo '<br>';
    print_r($b);  //1  3  4--9  2.2
}
//t31();
function t32(){
    $data = array(
        array("id"=>1, "name"=>"aa", "age"=>10),
        array("id"=>2, "name"=>"ww", "age"=>30),
        array("id"=>3, "name"=>"cc", "age"=>30),
        array("id"=>4, "name"=>"dd", "age"=>"40")
    );
    $ages = array();
    $names = array();
    foreach($data as $value) {
        $ages[] = $value['age'];
        $names[] = $value['name'];
    }
    array_multisort($ages,SORT_DESC , $names, SORT_DESC ,$data);//前面影响后面
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
//t32();
//-----------多维数组的排序函数--end-----------------------------

//-----------拆分、合并、分解与结合数组函数1--start-----------------------------
function t33(){
    $arr = array("a", "b", "c", "d", "e");
    //第二个参数是从哪里取
    //第三个是取多少个
    //第四个可选
    $narr = array_slice($arr, -3, 2, true);//拆分
    print_r($narr);
    echo "<br>";
    //
    array_splice($arr, -3, 2, array("hello","world"));//去掉一部分
    print_r( $arr );
    echo "<br>";
    //
    $a = array("os", "webserver", "db", "language", "html");
    $b = array("linux", "apache", "mysql", "php",'html5');
    $narr = array_combine($a, $b);//一个数组作为下标，一个数组作为值
    print_r( $narr );
}
//t33();
function t34(){
    //下标相同的会覆盖, 是前面覆盖后面的
    $a = array("a", "b", "c");
    $b = array(5=>10, 11, 12);
    $c = $a + $b;//两个数组合并了
    var_dump($c);
    echo "<br>";

    //合并
    $a = array("a", "one"=>"b", "c");
    $b = array(10, "one"=>11, 12);
    $c = array_merge($a , $b);//合并
    var_dump($c);
    echo "<br>";

    //交集
    $a = array(10, 11, 12, 13, 14);
    $b = array(5, 6, 12, 15, 14);
    print_r(array_intersect($a, $b));//交集   Array ( [2.2] => 12 [4--9] => 14 )
    echo "<br>";

    //获取前面相同的部分
    $a = array(5, 6, 10, 11, 12, 13, 14);
    $b = array(5, 6, 12, 15, 14);
    $min = (count($a) > count($b)) ? count($b) : count($a);
    $narr = array();
    for($i=0; $i < $min; $i++) {
        if($a[$i]==$b[$i]) {
            $narr[] = $a[$i];
        }else{
            break;
        }
    }
    print_r($narr);
    echo "<br>";

    print_r(array_diff($a,$b));//获取不同的
}
//t34();
//-----------拆分、合并、分解与结合数组函数--end-----------------------------

//-----------数组与数据结构的函数--start-----------------------------
function t35(){
    $zhan = array();
    array_push($zhan, "1");//往数组压入栈
    array_push($zhan, "2.2");
    array_push($zhan, "3", 4, 5,6);
    echo array_pop($zhan)."<br>";//出栈
    echo array_pop($zhan)."<br>";
    echo array_pop($zhan)."<br>";
    print_r($zhan);

    //队列 先进先出
    $dl = array();
    array_unshift($dl, 1);//进队列
    array_unshift($dl, 2);
    array_unshift($dl, 3);
    array_unshift($dl, 4);
    array_unshift($dl, 5);
    array_unshift($dl, 6);
    print_r($dl);//Array ( [0] => 1 [1] => 2.2 [2.2] => 3 ) Array ( [0] => 6 [1] => 5 [2.2] => 4--9 [3] => 3 [4--9] => 2.2 [5] => 1 )
    echo "<br>";
    echo array_shift($dl)."<br>";//从尾部出队   6
    print_r($dl);//Array ( [0] => 5 [1] => 4--9 [2.2] => 3 [3] => 2.2 [4--9] => 1 )
}
//t35();
//-----------数组与数据结构的函数--end-------------------------------

//-----------其他有用的数组处理函数--start-------------------------------
/**
array_rand --  从数组中随机取出一个或多个单元
shuffle -- 将数组打乱
Array_sum()
Range()
Array_fill()
 */
function t36(){
    $arr = range(0, 10, 3);//0到10三个数
    print_r($arr);
    echo "<br>";

    $arr = array_fill(0, 10, "hello php");//用"hello php"填充数组0~9
    print_r($arr);
    echo "<br>";

    $srcArray=array('a','b','c','d');
    $randValue=array_rand($srcArray);//随机出下标
    //print_r($randValue);
    print_r($srcArray[$randValue]);
}
//t36();
//-----------其他有用的数组处理函数--end-------------------------------

?>



