<?php
/*
 *  define("常量名", "值");
 *  final 定义
 *
 *  const 修饰的成员属性为常量， 只能修饰成员属性
 *
 * 类中
 *
 *  1. 常量建议使用大写， 不能使用$
 *  2.2. 常量一定要在声明时就给好初值
 *  3. 常量的访问方式和static的访问方式相同, 但只能读   
 *
 *  	1. 在类外部使用    类名::常量名
 *  	2.2. 在类的内部      self::常量名
 *
 *  final 类和方法
 *
 *  static 属性和方法
 *
 *
 */
class Demo {
    const SEX = "男";
    //define("SEX","男");  类里面不能用define

    static function say() {
        echo "我的性别是：".self::SEX."<br>";
    }
}

Demo::say();
$A= new Demo();

