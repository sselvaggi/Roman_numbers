<?php
class RomanNumber {
	public static $simbols = [['I', 'V'],['X', 'L'],['C', 'D'],['M',':V:'],[':X:',':L:'],[':C:', ':D:']];
	private static function digit($digit,$exponent=0) {
		$result = '';
		if($digit == 1) $result = self::$simbols[$exponent][0];
		if($digit == 2) $result = self::$simbols[$exponent][0].self::$simbols[$exponent][0];
		if($digit == 3) $result = self::$simbols[$exponent][0].self::$simbols[$exponent][0].self::$simbols[$exponent][0];
		if($digit == 4) $result = self::$simbols[$exponent][0].self::$simbols[$exponent][1];
		if($digit == 5) $result = self::$simbols[$exponent][1];
		if($digit == 6) $result = self::$simbols[$exponent][1].self::$simbols[$exponent][0];
		if($digit == 7) $result = self::$simbols[$exponent][1].self::$simbols[$exponent][0].self::$simbols[$exponent][0];
		if($digit == 8) $result = self::$simbols[$exponent][1].self::$simbols[$exponent][0].self::$simbols[$exponent][0].self::$simbols[$exponent][0];
		if($digit == 9) $result = self::$simbols[$exponent][0].self::$simbols[$exponent+1][0];
		return $result;
	}
	public static function to_roman($number) {

		$digits = (string)$number;
		$result = '';
		$length = strlen($digits);
		for($i=0;$i<$length;$i++) {
			$result = $result . self::digit($digits[$i], $length-$i-1);
		}
		return $result;
	}
}