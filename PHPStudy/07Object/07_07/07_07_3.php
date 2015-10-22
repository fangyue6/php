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
 *   5. self可以在类中的方法中， 代表自己类的($this)
 *  
 *   6. 静态成员一旦被加载， 只有脚本结束才释放
 *
 *
 *   7. 在静态的方法中，是不能访问非静态的成员的
 *
 *   8. 只要是能使用静态的环境下声明方法， 就最好使用静态方法（效率）
 */

class Person {
    static $name="ABC";
    static $age;
    static $sex;
    static $country = "中国";
    public static function say() {
        echo "我的名子是：".self::$name."<br>";
        echo "我所在的国家是：".self::$country."<br>";
    }

    static function eat() {
        echo "1111111111111<br>";
    }

    function run() {
    echo "running <br>";
    }
}

Person::say();
@Person::run();//非静态  加@访问

