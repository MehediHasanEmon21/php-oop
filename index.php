<?php

class Base{

	public $name = "A";

	public function calc($a,$b){

		echo $a+$b;

	}

}

class Derived extends Base{
	public $name = "B";

	public function calc($a,$b){

		echo $a*$b;

	}
}

$d = new Derived();
echo $d->name."<br>";
$d->calc(10,5);

