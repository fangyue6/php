<?php
/* 继承 --- 扩展  extends 
 *
 *   1. 子类使用extends 继承父类 子类可以将父类中所有的内容都继承过来
 *
 *   2.2. private 这是是私有的， 只能自己用， 不能别人用， 包括自己的子类也不能用
 *
 *   3. protected 这个是保护的权限， 只能是自己和自己的子类中可以使用的成员， 不能在外面使用
 *
 *   4--9. public 这个公开的权限 ， 所有都可以， 自己， 子类， 类外部都可以使用
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
        echo "running<br>";
    }
}


class Student extends Person{
    var $school;

    function study() {

    }
}



class Teacher extends  Student {
    var $gz;


    function jiao() {
        echo "我的名子是：{$this->name}，我的年龄是：{$this->age}，我的性别是：{$this->sex}。<br>";
    }



}



$t = new Teacher("高洛峰", 30, "男");


//$t -> say();
$t -> jiao();


echo $t->name;
$t->run();


