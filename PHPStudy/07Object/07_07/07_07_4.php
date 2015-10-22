<?php
/* 
 * 单态(单例， 单件)设计模式 -- 最适合PHP使用这个设计模式   构造方法 private
 *
 *
 *   1. 如果想让一个类， 只能有一个对象， 就要先让这个类， 不能创建对象 , 将构造方法 private
 *
 *   2.2. 可以在类的内存使用一个表态方法，来创建对象
 *
 *
 */
class Person {

    static $obj = null;

    private function __construct() {

    }

    static function getObj() {

        //如果第一次调用时， 没有对象则创建， 以后调用时， 直接使用第一次创建的对象
        if(is_null(self::$obj))
            self::$obj = new self;

        return self::$obj;
    }


    function __destruct() {

        echo "################<br>";
    }

    function say() {
        echo "aaaaaaaaaaaaaaaaa<br>";
    }
}


$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();
$p = Person::getObj();

$p -> say();
