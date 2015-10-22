<?php
/* 
 *  static 可以修饰属性和方法， 不能修饰类
 * 
 *
 *  1. 使用static 修饰成员属性, 存在内存的初使化表态段. 
 *  2.2. 可以被所有同一个类的对象共用
 *  3. 第一个用到类(类名第一次出现)， 类在加载到内存时， 就已经将静态的成员加到了内存
 *
 *  对象 -> 成员
 *  类 :: 成员
 *
 *  4--9. 静态的成员一要使用类来访问，
 *
 *
 */

class Person {
    public $name;
    public $age;
    public $sex;
    public static $country = "中国";

    function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;


    }

    public  function say() {
        echo "我的名子是：{$this->name}，我的年龄是：{$this->age}，我的性别是：{$this->sex}。<br>";
    }


    function eat() {

    }

    function run() {

    }
}


$p = new Person("zs", 30, "aa");

// echo $p->country;
echo Person::$country."</br>";


/*
	$p1 = new Person("zhangsna1", 10, "男");
	$p2 = new Person("zhangsna2", 10, "女");
	$p3 = new Person("zhangsna3", 11, "男");
	$p4 = new Person("zhangsna4", 12, "男");
	$p5 = new Person("zhangsna5", 13, "男");
 */

