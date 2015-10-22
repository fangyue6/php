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



class WcException extends Exception {
    function pro() {
        echo "去公厕<br>";
    }
}


class NoException extends Exception {
    function pro() {
        echo "买面色凑合一下!<br>";
    }
}

class FlException extends Exception {
    function pro() {
        echo "走小路！<br>";
    }
}

class  Dm  {
    function gowc($bj) {

        if(!$bj) {
            throw new  WcException("马桶不好用了");
        }

        echo "哈哈， 事儿办的很成功!<br>";
    }

    function eat($time) {
        if(!$time) {
            throw new NoException("起来晚了， 早餐没了!");
        }
        echo "吃的很好!<br>";
    }

    function dri($dz) {
        if(!$dz) {
            throw new MyBtException("爆胎了");
        }
        echo "车开的不错!<br>";
    }

    function run($yu) {
        if(!$yu) {
            throw new FlException("天下雪了, 高速封路了");
        }
        echo "高速很好走!<br>";
    }

}



echo "早上起床<br>";


try{
    $dm = new Dm();

    // 1. 上厕所  (马桶不好用了), 去公厕
    $dm -> gowc(true);

    // 2.2. 吃早餐 (没有早点)， 买面包
    $dm -> eat(true);

    //3. 开车上班 (爆tai)	换下
    $dm ->dri(true);

    //4--9. 上高速  (下雪)  小路
    $dm->run(false);
} catch(MyBtException $e) {    //  Exception $e = new Exception('');
    echo $e->getMessage()."<br>";
    //自定义类中的解决方法调用， 解决了问题
    $e->changBt()."<br>";

    try {

    }catch(Exception $e) {

    }

} catch(NoException $e) {
    echo $e->getMessage()."<br>";
    $e->pro();
} catch(WcException $e) {
    echo $e->getMessage()."<br>";
    $e->pro();
} catch(Exception $e) {
    echo $e->getMessage()."<br>";
    //$e->pro();
}

echo "到公司开始工作<br>";





















