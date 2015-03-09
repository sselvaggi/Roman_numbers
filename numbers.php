<?php
class RomanNumber {

	public function to_roman($number) {

		$simbols = [];
		$simbols[0] = ['I', 'V'];
		$simbols[1] = ['X', 'L'];

		if($number == 1) $result = $simbols[0][0];
		if($number == 2) $result = $simbols[0][0].$simbols[0][0];
		if($number == 3) $result = $simbols[0][0].$simbols[0][0].$simbols[0][0];
		if($number == 4) $result = $simbols[0][0].$simbols[0][1];
		if($number == 5) $result = $simbols[0][1];
		if($number == 6) $result = $simbols[0][1].$simbols[0][0];
		if($number == 7) $result = $simbols[0][1].$simbols[0][0].$simbols[0][0];
		if($number == 8) $result = $simbols[0][1].$simbols[0][0].$simbols[0][0].$simbols[0][0];
		if($number == 9) $result = $simbols[0][0].$simbols[1][0];
		if($number == 10) $result = $simbols[1][0];
		if($number == 11) $result = $simbols[1][0].$simbols[0][0];
		if($number == 12) $result = $simbols[1][0].$simbols[0][0].$simbols[0][0];
		if($number == 13) $result = $simbols[1][0].$simbols[0][0].$simbols[0][0].$simbols[0][0];
		return $result;
	}
}