<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

use \php\Boot;

/**
 * The `Lambda` class is a collection of methods to support functional
 * programming. It is ideally used with `using Lambda` and then acts as an
 * extension to Iterable types.
 * On static platforms, working with the Iterable structure might be slower
 * than performing the operations directly on known types, such as Array and
 * List.
 * If the first argument to any of the methods is null, the result is
 * unspecified.
 * @see https://haxe.org/manual/std-Lambda.html
 */
class Lambda {
	/**
	 * Creates an Array from Iterable `it`.
	 * If `it` is an Array, this function returns a copy of it.
	 * 
	 * @param object $it
	 * 
	 * @return \Array_hx
	 */
	static public function array ($it) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/Lambda.hx:48: characters 3-26
		$a = new \Array_hx();
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/Lambda.hx:49: characters 12-14
		$i = $it->iterator();
		while ($i->hasNext()) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/Lambda.hx:49: lines 49-50
			$i1 = $i->next();
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/Lambda.hx:50: characters 4-13
			$a->arr[$a->length] = $i1;
			++$a->length;
		}

		#/Users/ut/haxe/versions/4.0.0-rc.1/std/Lambda.hx:51: characters 3-11
		return $a;
	}

	/**
	 * Tells if `it` contains `elt`.
	 * This function returns true as soon as an element is found which is equal
	 * to `elt` according to the `==` operator.
	 * If no such element is found, the result is false.
	 * 
	 * @param object $it
	 * @param mixed $elt
	 * 
	 * @return bool
	 */
	static public function has ($it, $elt) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/Lambda.hx:111: characters 13-15
		$x = $it->iterator();
		while ($x->hasNext()) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/Lambda.hx:112: lines 112-113
			if (Boot::equal($x->next(), $elt)) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/Lambda.hx:113: characters 5-16
				return true;
			}
		}

		#/Users/ut/haxe/versions/4.0.0-rc.1/std/Lambda.hx:114: characters 3-15
		return false;
	}
}

Boot::registerClass(Lambda::class, 'Lambda');
