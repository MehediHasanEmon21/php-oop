<?php

class Calculation{

	public $a,$b,$c;

	public function sum(){

		return $this->c = $this->a + $this->b;

	}

	public function sub(){

		return $this->c = $this->a - $this->b;

	}

}

$c = new Calculation();

$c->a = 10;
$c->b = 5;

echo "sum is :".$c->sum()."<br>";
echo "sub is :".$c->sub()."<br>";