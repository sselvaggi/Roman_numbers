<?php
include 'numbers.php';
class Test {
	public function __construct() {
		$this->setup();
		$this->test();
		$this->teardown();
	}
	public function setup() {}
	public function test() {}
	public function teardown() {}
}

class TestRomanNumber extends Test {
	public function test() {
		$roman = RomanNumber::to_roman(1);
		assert ('$roman == "I"');
	}
}
//new TestRomanNumber();
//echo RomanNumber::to_roman(12);exit;
assert ('RomanNumber::to_roman(1) == "I"');
assert ('RomanNumber::to_roman(2) == "II"');
assert ('RomanNumber::to_roman(3) == "III"');
assert ('RomanNumber::to_roman(4) == "IV"');
assert ('RomanNumber::to_roman(5) == "V"');
assert ('RomanNumber::to_roman(6) == "VI"');
assert ('RomanNumber::to_roman(7) == "VII"');
assert ('RomanNumber::to_roman(8) == "VIII"');
assert ('RomanNumber::to_roman(9) == "IX"');
assert ('RomanNumber::to_roman(10) == "X"');
assert ('RomanNumber::to_roman(11) == "XI"');
assert ('RomanNumber::to_roman(12) == "XII"');
assert ('RomanNumber::to_roman(13) == "XIII"');
assert ('RomanNumber::to_roman(14) == "XIV"');

assert ('RomanNumber::to_roman(1994) == "MCMXCIV"');
assert ('RomanNumber::to_roman(6994) == ":V:MCMXCIV"');
assert ('RomanNumber::to_roman(60004) == ":L::X:IV"');