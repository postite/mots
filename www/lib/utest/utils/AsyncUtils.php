<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace utest\utils;

use \php\Boot;
use \utest\Async;

class AsyncUtils {
	/**
	 * @param Async $async
	 * 
	 * @return Async
	 */
	static public function orResolved ($async) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/utils/AsyncUtils.hx:5: characters 10-53
		if ($async === null) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/utils/AsyncUtils.hx:5: characters 26-45
			return Async::getResolved();
		} else {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/utils/AsyncUtils.hx:5: characters 48-53
			return $async;
		}
	}
}

Boot::registerClass(AsyncUtils::class, 'utest.utils.AsyncUtils');
