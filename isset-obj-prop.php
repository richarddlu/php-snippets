<?php

class TestClass {
	public $a;
}

$obj = new TestClass;
$obj->a = null;
var_dump(isset($obj->a));
var_dump(isset($obj->b));