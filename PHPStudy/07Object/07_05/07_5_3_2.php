<?php
/*
 *   只看封装的一部分， 方法的封装
 *
 *
 *   将一些“特殊的方法 ” 加上一个 关键字 private修饰， 就不能拿到这个对象之后， 用对象中private有的内容, 但对象自己中的其它成员可以使用这个， 因为是自己用自己的成员
 *
 *   魔术方法:
 *
 *   __get()
 *
 *   	1. 自动调用： 是在直接访问私有成员时，自动调用! 一个参数
 *   __set()
 *   	1. 自动调用： 是在直接设置私有属性值时， 两个参数
 *
 *   __isset()   isset()  在使用isset()判断一个私有属性是否存在时， 自动调用__isset()魔术方法， 参数则是属性名称
 *   __unset()  unset();
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



    function __unset($proname) {

        echo "$proname !!!!!!!!!!!!!!!!<br>";

        if($proname != "age")  {
            unset($this->$proname);
        }
    }


    function __isset($proname) {
        if($proname=="age")
            return false;

        return isset($this->$proname);
    }


    /*
            function __get($pro) {

                return $this->$pro;
            }

            function __set($name, $value) {

                if($name=="age") {
                    if($value < 0 or $value > 100)
                        return;
                }

                $this->$name = $value;
            }

     */

    //成员方法
    function say() {
        echo "我的名子是：{$this->name}, 我的年龄是：{$this->age},  我的性别是：{$this->sex}.<br>";
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


//unset($p1->name);

if(isset($p1->name)) {
    echo "这个对象中的name是存的属性<br>";
}else{
    echo "对象p1中不存在name属性";
}



