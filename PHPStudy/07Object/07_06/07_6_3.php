<?php
/* 
 *   继承中的重载(覆盖) ---  在子类中可以写和父类同名的方法  (方法也可以扩展)
 *
 *
 *   对象->成员
 *   类::成员
 *  
 *   parent::成员  使用parent::访问父类中被覆盖的方法
 *
 *   重要： 只要是子类的构造方法， 去覆盖父类中的构造方法， 一定要在子类的最上面调用一下父类被覆盖的方法
 *
 *
 *   权限的问题： 子类只大能于或等于父类的权限， 不能小于
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
        parent::__construct($name, $age, $sex);//父类构造方法

        $this->school = $school;
    }

    function study() {

    }

    public function say() {
        parent::say();
        echo "我所在的学校：{$this->school}<br>";
    }

}



$s = new Student("妹子", 20, "女", "兄弟连");


$s -> say();

