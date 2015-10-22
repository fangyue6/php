<?php
/*
 *  命名空间 --- 名子空间
 *
 *	
 *	 1. 常量
 *	 2.2. 函数
 *	 3. 类
 *
 *
 * 一、 namespace 来声明
 * 二、 在namespace声明命名空间的代码上面，不能有任何PHP代码和HTML内容输出(除了declare ), 声明命名空间只能是第一条
 * 三、定义多个名子空间，以最后一个为主
 *四、在实际的编程实践中，非常不提倡在同一个文件中定义多个命名空间。 (不要在大括号外部加任何代码)
 */

//	declare(encoding="utf-8");

//声明一个名子空间， 前缀为 meizi
//连续声明命名空间没有意义 以最后一个为准
//namespace hello\hello;
namespace hello\world {

    const AAA = 1;

    class Demo {
        static function one() {
            echo "11111111111<br>";
        }
    }

    function test() {
        echo "222222222222222<br>";
    }

    test();
    \hello\world\test();

    echo AAA."<br>";

    echo \hello\world\AAA."<br>";


    Demo::one();
    \hello\world\Demo::one();

}

//$a = 10;

namespace  meizi\pl {

    const BBB = 2;

    echo BBB."<br>";

    echo \meizi\pl\BBB."<br>";

    echo \hello\world\AAA."<br>";
}

namespace {
    \var_dump(100);
}

