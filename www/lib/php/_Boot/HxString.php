<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace php\_Boot;

use \php\Boot;

/**
 * `String` implementation
 */
class HxString {
	/**
	 * @param string $str
	 * @param int $index
	 * 
	 * @return string
	 */
	static public function charAt ($str, $index) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:697: characters 10-58
		if ($index < 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:697: characters 22-24
			return "";
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:697: characters 27-58
			return mb_substr($str, $index, 1);
		}
	}

	/**
	 * @param string $str
	 * @param int $index
	 * 
	 * @return int
	 */
	static public function charCodeAt ($str, $index) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:701: lines 701-703
		if (($index < 0) || ($str === "")) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:702: characters 4-15
			return null;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:704: lines 704-706
		if ($index === 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:705: characters 11-30
			$code = ord($str[0]);
			if ($code < 192) {
				return $code;
			} else if ($code < 224) {
				return (($code - 192) << 6) + ord($str[1]) - 128;
			} else if ($code < 240) {
				return (($code - 224) << 12) + ((ord($str[1]) - 128) << 6) + ord($str[2]) - 128;
			} else {
				return (($code - 240) << 18) + ((ord($str[1]) - 128) << 12) + ((ord($str[2]) - 128) << 6) + ord($str[3]) - 128;
			}
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:707: characters 3-46
		$char = mb_substr($str, $index, 1);
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:708: characters 10-50
		if ($char === "") {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:708: characters 23-27
			return null;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:708: characters 30-50
			$code1 = ord($char[0]);
			if ($code1 < 192) {
				return $code1;
			} else if ($code1 < 224) {
				return (($code1 - 192) << 6) + ord($char[1]) - 128;
			} else if ($code1 < 240) {
				return (($code1 - 224) << 12) + ((ord($char[1]) - 128) << 6) + ord($char[2]) - 128;
			} else {
				return (($code1 - 240) << 18) + ((ord($char[1]) - 128) << 12) + ((ord($char[2]) - 128) << 6) + ord($char[3]) - 128;
			}
		}
	}

	/**
	 * @param int $code
	 * 
	 * @return string
	 */
	static public function fromCharCode ($code) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:798: characters 3-29
		return mb_chr($code);
	}

	/**
	 * @param string $str
	 * @param string $search
	 * @param int $startIndex
	 * 
	 * @return int
	 */
	static public function indexOf ($str, $search, $startIndex = null) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:712: lines 712-725
		if ($startIndex === null) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:713: characters 4-18
			$startIndex = 0;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:715: characters 4-28
			$length = mb_strlen($str);
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:716: lines 716-721
			if ($startIndex < 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:717: characters 5-25
				$startIndex += $length;
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:718: lines 718-720
				if ($startIndex < 0) {
					#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:719: characters 6-20
					$startIndex = 0;
				}
			}
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:722: lines 722-724
			if (($startIndex >= $length) && ($search !== "")) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:723: characters 5-14
				return -1;
			}
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:726: lines 726-731
		$index = null;
		if ($search === "") {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:727: characters 4-28
			$length1 = mb_strlen($str);
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:726: lines 726-731
			$index = ($startIndex > $length1 ? $length1 : $startIndex);
		} else {
			$index = mb_strpos($str, $search, $startIndex);
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:732: characters 10-39
		if ($index === false) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:732: characters 28-30
			return -1;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:732: characters 33-38
			return $index;
		}
	}

	/**
	 * @param string $str
	 * @param string $search
	 * @param int $startIndex
	 * 
	 * @return int
	 */
	static public function lastIndexOf ($str, $search, $startIndex = null) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:736: characters 3-26
		$start = $startIndex;
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:737: lines 737-744
		if ($startIndex === null) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:738: characters 4-13
			$start = 0;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:740: characters 4-30
			$start = $startIndex - mb_strlen($str);
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:741: lines 741-743
			if ($start > 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:742: characters 5-14
				$start = 0;
			}
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:745: lines 745-750
		$index = null;
		if ($search === "") {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:746: characters 4-28
			$length = mb_strlen($str);
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:745: lines 745-750
			$index = (($startIndex === null) || ($startIndex > $length) ? $length : $startIndex);
		} else {
			$index = mb_strrpos($str, $search, $start);
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:751: lines 751-755
		if ($index === false) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:752: characters 4-13
			return -1;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:754: characters 4-16
			return $index;
		}
	}

	/**
	 * @param string $str
	 * @param string $delimiter
	 * 
	 * @return \Array_hx
	 */
	static public function split ($str, $delimiter) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:759: lines 759-764
		$arr = null;
		if ($delimiter === "") {
			$arr = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:762: characters 4-49
			$delimiter = preg_quote($delimiter, "/");
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:759: lines 759-764
			$arr = preg_split("/" . ($delimiter??'null') . "/", $str);
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:765: characters 3-41
		return \Array_hx::wrap($arr);
	}

	/**
	 * @param string $str
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return string
	 */
	static public function substr ($str, $pos, $len = null) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:769: characters 3-41
		return mb_substr($str, $pos, $len);
	}

	/**
	 * @param string $str
	 * @param int $startIndex
	 * @param int $endIndex
	 * 
	 * @return string
	 */
	static public function substring ($str, $startIndex, $endIndex = null) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:773: lines 773-778
		if ($endIndex === null) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:774: lines 774-776
			if ($startIndex < 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:775: characters 5-19
				$startIndex = 0;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:777: characters 4-44
			return mb_substr($str, $startIndex);
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:779: lines 779-781
		if ($endIndex < 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:780: characters 4-16
			$endIndex = 0;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:782: lines 782-784
		if ($startIndex < 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:783: characters 4-18
			$startIndex = 0;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:785: lines 785-789
		if ($startIndex > $endIndex) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:786: characters 4-23
			$tmp = $endIndex;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:787: characters 4-25
			$endIndex = $startIndex;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:788: characters 4-20
			$startIndex = $tmp;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:790: characters 3-66
		return mb_substr($str, $startIndex, $endIndex - $startIndex);
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function toLowerCase ($str) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:693: characters 3-35
		return mb_strtolower($str);
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function toString ($str) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:794: characters 3-13
		return $str;
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function toUpperCase ($str) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:689: characters 3-35
		return mb_strtoupper($str);
	}
}

Boot::registerClass(HxString::class, 'php._Boot.HxString');
