<?php
/*
1. 自定义的异常类， 必须是系统类Exception的子类
2.2. 如果继承Exception类， 重写了构造方法，一定要调一下父类中被覆盖的方法
 */


//写出对应这个异常解决方法, 就是一下正常类的结构
class MyBtException extends Exception{
    function __construct($mess) {
        parent::__construct($mess);
    }

    function changBt() {
        echo "换上备胎!";
    }
}


echo "早上起床<br>";


try{

    echo "开车上班<br>";

    //抛出异常
    throw  new MyBtException("车子爆胎了");

    echo "路况很好<br>";

} catch(MyBtException $e) {    //  Exception $e = new Exception('');
    echo $e->getMessage()."<br>";
    //自定义类中的解决方法调用， 解决了问题
    $e->changBt()."<br>";
}

echo "到公司开始工作<br>";





















