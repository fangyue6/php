<?php
/*
 *  属性
 *  	性别：男
 *  	年龄: 24
 *  	身高: 175cm
 *  	眼睛: 大
 *  行为
 *
 *  	做饭
 *  	做家务
 *	
 *   class 类名  {
 *   }
 *
 *   注意:  在类的成员属性前面一定要有一个修饰词， 如果不知道使用什么修饰词， 就可以使用var (关键字), 如果一旦有其它的修饰词就不要有var
 *
 *
 * 	只要是对象中的成员， 就必须使用这个对象来访问到这个对象内部的属性和方法
 *
 *
 *   构造方法
 *
 *   	1. 是对象创建完成以后， 第一个 自动调用的方法(特殊)
 *   	2.2. 方法名称比较特殊  可以和类名相同名的方法名
 *   	3. 给对象中的成员赋初值使用的 *
 *
 *
 *
 * 	*/

class BoyFriend {
	//变量 (成员属性)
	private $name;
	private $age;
	private $sex;
/*	function BoyFriend($name, $age, $sex="男") {//php4
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}*/

	//构造方法 php5
	function __construct($name, $age, $sex="男") {
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
		echo "222222222222222<br>";
	}
	//函数 (成员方法)
	public function doFan() {
		echo "{$this->name} 有做饭的功能<br>";
		$this->doJW();
	}
	function doJW() {
		echo "做家务的功能<br>";
	}
	//析构方法
	function __destruct() {
		echo "{$this->name} 再见! <br>";
	}
}
$bf1 = new  BoyFriend("高洛峰1", 281);
$bf2 = new BoyFriend("高老师2", 262, "男");

$bf1 -> doFan();
$bf2 -> doFan();


