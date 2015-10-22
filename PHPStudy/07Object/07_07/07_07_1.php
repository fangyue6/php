<?php
/* 
 *
 */

class Person {
    public $name;
    protected $age;
    protected $sex;

    function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;

    }

    public function say() {
        echo "我的名子是：{$this->name}，我的年龄是：{$this->age}，我的性别是：{$this->sex}。<br>";
    }




    function eat() {
        echo "11111111111111<br>";
    }

    function run() {

    }
}


class Student extends Person{
    var $school;

    function __construct($name, $age, $sex, $school) {
        parent::__construct($name, $age, $sex);

        $this->school = $school;
    }

    function study() {

    }

    function say() {
        parent::say();
        echo "我所在的学校：{$this->school}<br>";
    }

}



$p = new Person("高洛峰", 30, "男");


$s = new Student("妹子", 20, "女", "兄弟连");


if($s instanceof Person) {
    echo "这个\$s是Person类的对象";
} else {
    echo "对象不属于这个类";
}

/*
 *
 *  在PHP中final不定义常量, 所以就不会使用，也不能使用final来修饰成员属性
 *
 *
 *  1. final可以修饰类  --- 这个类不能去扩展， 不能有子类 (不让别人去扩展， 这个类是最终的类时)
 *
 *  2.2. final可以修饰方法
 *
 */



$s = new Student("妹子", 20, "女", "兄弟连");

$s -> say();
final class Hello{
    function say(){
        echo "Hello <br>";
    }
}

$s = new Student("妹子", 20, "女", "兄弟连");

$s -> say();

$t=new hello();
$t->say();