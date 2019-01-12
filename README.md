# FizzBuzz-PHP
#### Technologies: PHP, PHPUnit, Composer

* [Setting up the application](#setup)
* [Unit Tests](#tests)
* [PHP](#code)

## The Challenge ##
The challenge was to make a simple “FizzBuzz” program that accepted one integer value into a function called fizzBuzz. The function checks for the following conditions: if the integer is divisible by 3 it returns ‘Fizz’, if the integer is divisible by 5 it returns ‘Buzz’, if the integer is divisible by 3 and 5 it returns ‘FizzBuzz’ and if none of the conditions are met it returns the integer. Example below
```shell
1 --> 1
2 --> 2
3 --> Fizz
4 --> 4
5 --> Buzz
6 --> Fizz
7 --> 7
8 --> 8
9 --> Fizz
10 --> Buzz
11 --> 11
12 --> Fizz
13 --> 13
14 --> 14
15 --> FizzBuzz
16 --> 16
17 --> 17
18 --> Fizz
19 --> 19
20 --> Buzz
```

## <a name="setup">Setting up the applicaion</a>
```
$ git clone https://github.com/adrianeyre/fizzbuzz-PHP
$ cd fizzbuzz-PHP
```

- Make sure the extension `extension=mbstring` is enabled in `php.ini`
- Run the command `composer install` to install the dependancies

## <a name="tests">Unit Tests</a> ##

- Navigate to the root of the application
- Run the command `./vendor/bin/phpunit ./tests/FizzBuzzTest.php`

```php
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
```

## <a name="code">PHP Code</a> ##
```php
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
```
