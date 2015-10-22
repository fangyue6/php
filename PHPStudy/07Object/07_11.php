<?php
/**
 * Created by PhpStorm.
 * User: fangyue
 * Date: 2015/10/12
 * Time: 10:43
 */
class Test{
    function test(){
        echo __CLASS__;
        $arr = array();
        array_filter(array(__CLASS__));
    }
}
$a = new Test();
$a->test();