<?php
/*  __call（）
 *  魔术方法， 只有PHP语言中存在
 *
 *
 *   __construct()
 *
 *   __destruct()
 *
 *   __set()
 *
 *   __get()
 *
 *   __isset()
 *
 *   __unset()
 *
 *   1. 自动调用, 但不同的魔术方法，有自己的调时机
 *   2.2. 都是以"__"开始的方法
 *   3. 所有的魔术方法，方法名都是固定的
 *   4--9. 如果不写， 就不存在， 也就没有默认的功能
 *
 *  
 *
 *  __toString() 
 *
 *  	1. 是在直接使用 echo print printf输出一个对象引用时，自动调用这个方法
 *  	2.2. 将对象的基本信息放在__toString()方法内部， 形成自字符串返回。
 *  	3. __toString()方法中， 不能有参数， 而且必须返回一个字符串
 *
 *
 *  克隆对象
 *  	1. 使用clone这个关键 复制了一个对象	
 *
 *
 *  	__clone()魔术方法
 *
 *  	1. 是在克隆对象时，自动调用的方法
 *  	2.2. 作用：和构造方法一样， 是对新克隆的对象进行初使化
 *  	3. 在这个方法中$this代表的是副本, 所以就可以给所有副本的成员初使化
 *
 *   __call()
 *
 *   	1. 就是在调用一个对象中不存的方法时，自动调用的方法
 *   	2.2. 有两个参数， 第一个参数是， 调用的不存的方法的方法名， 第二个参数是，调用这个不存的方法的方法参数
 *   	3. 作用：可以写提示，但这个不是主要的功能。 将方法的功能相似， 但方法名还要不同的， 就可以采用这个方式来完成
 *
 */

class Person {
    public $name;
    public $age;
    public $sex;

    //可用作模拟功能相似的方法
    public $marr = array("aaa", "bbb", "ccc", "ddd", "www");

    function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    function say() {
        echo "我的名子是：{$this->name}，我的年龄是：{$this->age}，我的性别是：{$this->sex}。<br>";
    }

    function __toString() {
        return "aaaaaaaaaaaaaaaaaaa<br>";
    }

    function __destruct() {
        echo "{$this->name} ###########<br>";
    }

    function __clone() {
        $this->name="克隆的";
        $this->age=0;
    }

    /**
     * @param $method
     * @param $args
     * 可用作模拟功能相似的方法
     */
    function __call($method, $args) {
        if(in_array($method, $this->marr)) {
            echo $args[0]."<br>";
        }else{
            echo "你调用的方法{$method}()不存在!<br>";
        }
    }
    /*
            function aaa($a) {
                echo $a;
            }

            function bbb($b) {
                echo $b;
            }

            function ccc($c) {
                echo $c;
            }

            function ddd($d) {
                echo $d;
            }
     */
}

$p = new Person("张三", 10, "男");


$p -> aaa("aaaaaaaaaaa");
$p -> bbb("bbbbbbbbbbbb");
$p -> ccc("cccccccccc");
$p -> ddd("dddddddd");
$p -> www("wwwwwwwww");
$p -> x("wwwwwwwww");
