<?php
/*  __toString()
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
 */

class Person {
    public $name;
    public $age;
    public $sex;

    function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    function say() {

    }

    function __toString() {
        return "aaaaaaaaaaaaaaaaaaa<br>";
    }
}

$p = new Person("张三", 10, "男");

echo $p;

print new Person("aaa", 10, "bb");




