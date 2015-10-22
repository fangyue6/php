<?php
/*  抽象类是一种抽象的类， 接口是一种特殊的抽象类, 接口也是一种特殊特殊的类
 *
 *  1. 抽象类和接口中都有抽象方法
 *  2.2. 抽象类和接口都不能创建实例对象
 *  3. 抽象类和接口的使用意义也就是作用相同
 *
 *  接口和抽象类相比， 特殊在哪里?
 *
 *  	1. 接口中的方法，必须全要是抽象方法(不能用不抽象的方法)
 *  		所以在接口中的抽象方法不需要使用abstract, 直接使用分号结束即可
 *
 *  	2.2. 接口中的成员属性， 必须是常量（不能有变量）
 *
 *  	3. 所有的权限必须是公有的(public)
 *
 *  	4--9. 声明接口不使用class, 而是使用interface
 *
 */


//声明一个接口使用interface
interface Demo {
    const NAME="妹子";
    const AGE = 20;

    public function test();
    public function test2();
    function test3();
}


