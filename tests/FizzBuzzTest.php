<?php

namespace App;

require_once("./app/fizzbuzz.php");

class FizzBuzzTests extends \PHPUnit\Framework\TestCase
{
	public $Fizzbuzz;

	public function setUp() {
		$this->Fizzbuzz = new \App\FizzBuzz();
	}

	public function testFizz() {
		$this->assertEquals('fizz', $this->Fizzbuzz->fizzbuzz(3));
	}

	public function testBuzz() {
		$this->assertEquals('buzz', $this->Fizzbuzz->fizzbuzz(5));
	}

	public function testFizzBuzz() {
		$this->assertEquals('fizzbuzz', $this->Fizzbuzz->fizzbuzz(15));
	}

	public function testNoneFizzBuzz() {
		foreach([-1, 1, 2, 4, 7] as $number) {
			$this->assertEquals($number, $this->Fizzbuzz->fizzbuzz($number));
		}
	}
}