<?php

class Calculator{
	public $operator;
	public $num1;
	public $num2;
	
	public function __construct($operator, $num1, $num2){
		$this->operator = $operator;
		$this->num1 = $num1;
		$this->num2 = $num2;
	}
	
	public function calculate(){
		switch($this->operator){
			case "add":
				$result = $this->num1 + $this->num2;
				break;
			case "subtract":
				$result = $this->num1 - $this->num2;
				break;
			case "multiply":
				$result = $this->num1 * $this->num2;
				break;
			case "divide":
				$result = $this->num1 / $this->num2;
				break;
			default:
				$result = "error";
		}
		
		return $result;
	}
}
