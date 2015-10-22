<?php
	/*  __autoload（）
	 * 只要在这个脚本中， 需要加载类的时候（必须用到类名），就会自动调用这个方法。
	 *
	 */

	function __autoload($classname) {
		echo $classname."<br>";
		//Test     PHPStudy.class.php
		include strtolower($classname).".class.php";//忽略大小写
	}



	$t = new Test();
	$t -> one();

	$d = new Demo();
	$d-> two();

	$h = new Hello();
	$h -> three();

	World::four();
	World::four();
	World::four();
	World::four();
	World::four();
	World::four();
