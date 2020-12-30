<?php

class Employee{

	public $name,$age,$salary;

	public function __construct($n,$a,$s){
		$this->name = $n;
		$this->age = $a;
		$this->salary = $s;
	}

	public function info(){
		echo "<h2>Employee Profile</h2>";
		echo "<h4>Name :".$this->name."</h4>";
		echo "<h4>Age :".$this->age."</h4>";
		echo "<h4>Salary :".$this->salary."</h4>";
	}

}

class Manager extends Employee{

	public $ta = 2000;
	public $phone = 1000;
	public $totalSalary;

	public function info(){
		$this->totalSalary = $this->salary + $this->ta + $this->phone;
		echo "<h2>Manager Profile</h2>";
		echo "<h4>Name :".$this->name."</h4>";
		echo "<h4>Age :".$this->age."</h4>";
		echo "<h4>Salary :".$this->totalSalary."</h4>";
	}


}

$e1 = new Employee("Emon",20,2000);
$e2 = new Manager("Hasan",22,3000);
$e1->info();
$e2->info();

