<?php
include "init.inc.php";

class Student{
    private $a;
    function setA($a){
    $this->a=$a;
    }
    function getA(){
        return $this->a;
    }
}

$smarty -> assign("var", "this is a PHPStudy");

$smarty -> display("7_2.tpl");
