<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

use \php\Boot;

/**
 * This class provides advanced methods on Strings. It is ideally used with
 * `using StringTools` and then acts as an [extension](https://haxe.org/manual/lf-static-extension.html)
 * to the `String` class.
 * If the first argument to any of the methods is null, the result is
 * unspecified.
 */
class StringTools {
	/**
	 * Returns the character code at position `index` of String `s`, or an
	 * end-of-file indicator at if `position` equals `s.length`.
	 * This method is faster than `String.charCodeAt()` on some platforms, but
	 * the result is unspecified if `index` is negative or greater than
	 * `s.length`.
	 * End of file status can be checked by calling `StringTools.isEof()` with
	 * the returned value as argument.
	 * This operation is not guaranteed to work if `s` contains the `\0`
	 * character.
	 * 
	 * @param string $s
	 * @param int $index
	 * 
	 * @return int
	 */
	static public function fastCodeAt ($s, $index) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:114: characters 3-76
		$char = ($index === 0 ? $s : mb_substr($s, $index, 1));
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:115: characters 3-26
		if ($char === "") {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:115: characters 18-26
			return 0;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:116: characters 10-30
		$code = ord($char[0]);
		if ($code < 192) {
			return $code;
		} else if ($code < 224) {
			return (($code - 192) << 6) + ord($char[1]) - 128;
		} else if ($code < 240) {
			return (($code - 224) << 12) + ((ord($char[1]) - 128) << 6) + ord($char[2]) - 128;
		} else {
			return (($code - 240) << 18) + ((ord($char[1]) - 128) << 12) + ((ord($char[2]) - 128) << 6) + ord($char[3]) - 128;
		}
	}

	/**
	 * Encodes `n` into a hexadecimal representation.
	 * If `digits` is specified, the resulting String is padded with "0" until
	 * its `length` equals `digits`.
	 * 
	 * @param int $n
	 * @param int $digits
	 * 
	 * @return string
	 */
	static public function hex ($n, $digits = null) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:104: characters 3-28
		$s = dechex($n);
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:105: characters 3-15
		$len = 8;
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:106: characters 7-23
		$tmp = strlen($s);
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:106: characters 26-86
		$tmp1 = null;
		if (null === $digits) {
			$tmp1 = 8;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:106: characters 72-78
			$len = ($digits > 8 ? $digits : 8);
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:106: characters 26-86
			$tmp1 = $len;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:106: lines 106-109
		if ($tmp > $tmp1) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:107: characters 4-22
			$s = mb_substr($s, -$len, null);
		} else if ($digits !== null) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:109: characters 4-28
			$s = StringTools::lpad($s, "0", $digits);
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:110: characters 3-25
		return mb_strtoupper($s);
	}

	/**
	 * Concatenates `c` to `s` until `s.length` is at least `l`.
	 * If `c` is the empty String `""` or if `l` does not exceed `s.length`,
	 * `s` is returned unchanged.
	 * If `c.length` is 1, the resulting String length is exactly `l`.
	 * Otherwise the length may exceed `l`.
	 * If `c` is null, the result is unspecified.
	 * 
	 * @param string $s
	 * @param string $c
	 * @param int $l
	 * 
	 * @return string
	 */
	static public function lpad ($s, $c, $l) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:83: characters 3-26
		$cLength = mb_strlen($c);
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:84: characters 3-26
		$sLength = mb_strlen($s);
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:85: characters 3-45
		if (($cLength === 0) || ($sLength >= $l)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:85: characters 37-45
			return $s;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:86: characters 3-31
		$padLength = $l - $sLength;
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:87: characters 3-50
		$padCount = (int)(($padLength / $cLength));
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:88: lines 88-93
		if ($padCount > 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:89: characters 4-106
			$result = str_pad($s, strlen($s) + $padCount * strlen($c), $c, STR_PAD_LEFT);
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:90: characters 11-80
			if (($padCount * $cLength) >= $padLength) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:90: characters 47-53
				return $result;
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:90: characters 56-80
				return ($c . $result);
			}
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:92: characters 4-30
			return ($c . $s);
		}
	}

	/**
	 * Replace all occurrences of the String `sub` in the String `s` by the
	 * String `by`.
	 * If `sub` is the empty String `""`, `by` is inserted after each character
	 * of `s` except the last one. If `by` is also the empty String `""`, `s`
	 * remains unchanged.
	 * If `sub` or `by` are null, the result is unspecified.
	 * 
	 * @param string $s
	 * @param string $sub
	 * @param string $by
	 * 
	 * @return string
	 */
	static public function replace ($s, $sub, $by) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:97: lines 97-99
		if ($sub === "") {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:98: characters 4-89
			return implode($by, preg_split("//u", $s, -1, PREG_SPLIT_NO_EMPTY));
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:100: characters 3-40
		return str_replace($sub, $by, $s);
	}

	/**
	 * Tells if the string `s` starts with the string `start`.
	 * If `start` is `null`, the result is unspecified.
	 * If `start` is the empty String `""`, the result is true.
	 * 
	 * @param string $s
	 * @param string $start
	 * 
	 * @return bool
	 */
	static public function startsWith ($s, $start) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:44: characters 10-53
		if ($start !== "") {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:44: characters 25-53
			return Boot::equal(strpos($s, $start), 0);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/StringTools.hx:44: characters 10-53
			return true;
		}
	}
}

Boot::registerClass(StringTools::class, 'StringTools');
