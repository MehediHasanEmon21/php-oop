<?php

class Person{

	public $name,$age;

	public function __construct($n,$a){
		$this->name = $n;
		$this->age = $a;
	}

	public function show(){
		echo "My name is ".$this->name."."."My age is ".$this->age;
	}

}

$p1 = new Person("Emon",20);
$p1->show();

