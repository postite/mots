<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 */

namespace utest\_IgnoredFixture;

use \php\Boot;

final class IgnoredFixture_Impl_ {


	/**
	 * @param string $reason
	 * 
	 * @return string
	 */
	static public function Ignored ($reason = null) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/IgnoredFixture.hx:9: characters 12-60
		return ($reason !== null ? $reason : "");
	}


	/**
	 * @return string
	 */
	static public function NotIgnored () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/IgnoredFixture.hx:5: characters 12-36
		return null;
	}


	/**
	 * @param string $reason
	 * 
	 * @return string
	 */
	static public function _new ($reason) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/IgnoredFixture.hx:15: character 17
		return $reason;
	}


	/**
	 * @param string $this
	 * 
	 * @return string
	 */
	static public function get_ignoreReason ($this1) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/IgnoredFixture.hx:24: characters 5-16
		return $this1;
	}


	/**
	 * @param string $this
	 * 
	 * @return bool
	 */
	static public function get_isIgnored ($this1) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/IgnoredFixture.hx:20: characters 5-24
		return $this1 !== null;
	}
}


Boot::registerClass(IgnoredFixture_Impl_::class, 'utest._IgnoredFixture.IgnoredFixture_Impl_');
Boot::registerGetters('utest\\_IgnoredFixture\\IgnoredFixture_Impl_', [
	'ignoreReason' => true,
	'isIgnored' => true
]);
