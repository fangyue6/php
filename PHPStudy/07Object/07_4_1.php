<?php
/*
 *   只看封装的一部分， 方法的封装
 *
 *
 *   将一些“特殊的方法 ” 加上一个 关键字 private修饰， 就不能拿到这个对象之后， 用对象中private有的内容, 但对象自己中的其它成员可以使用这个， 因为是自己用自己的成员
 *
 *
 *
 */

class Person  {
    //成员属性
    private $name;
    private $age;
    private $sex;
    //构造方法
    function __construct($name="", $age=0, $sex="男") {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    function setSex($sex) {
        if(!($sex=="男" or $sex =="女"))
            return;
        $this->sex = $sex;
    }
    function getAge() {
        if($this->age < 20){
            return $this->age;
        }else if($this->age < 30){
            return $this->age - 5;
        }else if($this->age < 40) {
            return $this->age - 8;
        }else{
            return 29;
        }
    }
    //成员方法
    function say() {
        echo "我的名子是：{$this->name}, 我的年龄是：{$this->age},  我的性别是：{$this->sex}.<br>";
    }

    function run() {
        $this->left();
        $this->left();

        $this->right();
        $this->right();

        $this->go();
        $this->go();
        $this->go();
    }
    private function left() {
        echo "迈左脚<br>";
    }

    private function right() {
        echo "迈右脚<br>";
    }

    private function go() {
        echo "前进<br>";
    }
    function eat() {
        $this->say();
    }

    //析构方法
    function __destruct() {
        echo "再见:{$this->name} <br>";
    }

}

$p1 = new Person("妹子", 88, "女");
$p1->run();
//$p1->age=120;

//	echo $p1->age;
//	$p1 -> setSex("男");
//
echo $p1 -> getAge();
//	echo $p1->say();






