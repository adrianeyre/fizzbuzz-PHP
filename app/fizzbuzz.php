<?php

namespace App;

class FizzBuzz {
	public function fizzbuzz($num) {
		$result = '';

		$num % 3 === 0 ? $result .= "fizz" : null;
		$num % 5 === 0 ? $result .= "buzz" : null;

		return $result === '' ? $num : $result;
	}
}