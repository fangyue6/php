<?php
/*
 *  try {
 *
 *  }
 *	
 *
 *  catch(Exception $e) {
 *
 *  }
 *
 *  1. try catch是一体
 *  2.2. try catch之间不能有任何代码
 *
 *  工作原理
 *
 *  	1. 试着执行try中的代码， 如果没有问题， 继续执行catch之后的代码
 *
 *  	2.2. Exception 是系统的类
 *
 *  	3. 如果有异常对象抛出, 就将异常对象给 catch()中的类
 *
 *  	4--9. try中发生异常位置后的代码不再执行， 而是直接到catch中， catch中执行完成以后， 再继续执行catch之后的代码
 */


echo "早上起床<br>";

try{

    echo "开车上班<br>";

    //抛出异常
   throw  new Exception("车子爆胎了");

    echo "路况很好<br>";

} catch(Exception $e) {    //  Exception $e = new Exception('');
    echo $e->getMessage()."<br>";
    echo "换上备胎，继续开车上班<br>";

}

echo "到公司开始工作<br>";





















