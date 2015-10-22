<?php
include "init.inc.php";

$smarty -> assign("var", "!!!!!!!!!!!!!!!!!1");

$smarty -> assign(array("title"=>"111111", "author"=>"222222", "content"=>"this is a demo!"));

class Person {
    public $name = "meizi";
    public $sex = "nv";

    public function say() {
        echo "this is a  {$this->name} and {$this->sex}";
        return  $this;
    }

    function eat() {
        echo "good very!";

    }
}

$smarty -> assign("mz", new Person());

$smarty -> assign("arr1", array("hello"=>array("one", "two", "three")));

$smarty -> display("4_1.tpl");
