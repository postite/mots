<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

use \php\Boot;
use \php\_Boot\HxClass;
use \php\_Boot\HxClosure;
use \php\_Boot\HxEnum;

/**
 * The Reflect API is a way to manipulate values dynamically through an
 * abstract interface in an untyped manner. Use with care.
 * @see https://haxe.org/manual/std-reflection.html
 */
class Reflect {
	/**
	 * Call a method `func` with the given arguments `args`.
	 * The object `o` is ignored in most cases. It serves as the `this`-context in the following
	 * situations:
	 * (neko) Allows switching the context to `o` in all cases.
	 * (macro) Same as neko for Haxe 3. No context switching in Haxe 4.
	 * (js, lua) Require the `o` argument if `func` does not, but should have a context.
	 * This can occur by accessing a function field natively, e.g. through `Reflect.field`
	 * or by using `(object : Dynamic).field`. However, if `func` has a context, `o` is
	 * ignored like on other targets.
	 * 
	 * @param mixed $o
	 * @param mixed $func
	 * @param \Array_hx $args
	 * 
	 * @return mixed
	 */
	static public function callMethod ($o, $func, $args) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:103: characters 3-69
		return call_user_func_array($func, $args->arr);
	}

	/**
	 * Compares `a` and `b`.
	 * If `a` is less than `b`, the result is negative. If `b` is less than
	 * `a`, the result is positive. If `a` and `b` are equal, the result is 0.
	 * This function is only defined if `a` and `b` are of the same type.
	 * If that type is a function, the result is unspecified and
	 * `Reflect.compareMethods` should be used instead.
	 * For all other types, the result is 0 if `a` and `b` are equal. If they
	 * are not equal, the result depends on the type and is negative if:
	 * - Numeric types: a is less than b
	 * - String: a is lexicographically less than b
	 * - Other: unspecified
	 * If `a` and `b` are null, the result is 0. If only one of them is null,
	 * the result is unspecified.
	 * 
	 * @param mixed $a
	 * @param mixed $b
	 * 
	 * @return int
	 */
	static public function compare ($a, $b) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:118: characters 3-23
		if (Boot::equal($a, $b)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:118: characters 15-23
			return 0;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:119: lines 119-123
		if (is_string($a)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:120: characters 4-40
			return strcmp($a, $b);
		} else if ($a > $b) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:122: characters 34-35
			return 1;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:122: characters 38-40
			return -1;
		}
	}

	/**
	 * Compares the functions `f1` and `f2`.
	 * If `f1` or `f2` are null, the result is false.
	 * If `f1` or `f2` are not functions, the result is unspecified.
	 * Otherwise the result is true if `f1` and the `f2` are physically equal,
	 * false otherwise.
	 * If `f1` or `f2` are member method closures, the result is true if they
	 * are closures of the same method on the same object value, false otherwise.
	 * 
	 * @param mixed $f1
	 * @param mixed $f2
	 * 
	 * @return bool
	 */
	static public function compareMethods ($f1, $f2) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:127: lines 127-131
		if (($f1 instanceof HxClosure) && ($f2 instanceof HxClosure)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:128: characters 4-24
			return $f1->equals($f2);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:130: characters 4-19
			return Boot::equal($f1, $f2);
		}
	}

	/**
	 * Returns the value of the field named `field` on object `o`.
	 * If `o` is not an object or has no field named `field`, the result is
	 * null.
	 * If the field is defined as a property, its accessors are ignored. Refer
	 * to `Reflect.getProperty` for a function supporting property accessors.
	 * If `field` is null, the result is unspecified.
	 * (As3) If used on a property field, the getter will be invoked. It is
	 * not possible to obtain the value directly.
	 * 
	 * @param mixed $o
	 * @param string $field
	 * 
	 * @return mixed
	 */
	static public function field ($o, $field) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:45: lines 45-47
		if (is_string($o)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:46: characters 24-45
			$tmp = Boot::dynamicString($o);
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:46: characters 4-53
			return $tmp->{$field};
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:48: characters 3-34
		if (!is_object($o)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:48: characters 23-34
			return null;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:50: lines 50-52
		if (property_exists($o, $field)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:51: characters 24-25
			$tmp1 = $o;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:51: characters 4-33
			return $tmp1->{$field};
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:53: lines 53-55
		if (method_exists($o, $field)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:54: characters 4-44
			return Boot::getInstanceClosure($o, $field);
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:57: lines 57-68
		if (($o instanceof HxClass)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:58: characters 4-54
			$phpClassName = $o->phpClassName;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:59: lines 59-61
			if (defined("" . ($phpClassName??'null') . "::" . ($field??'null'))) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:60: characters 5-52
				return constant("" . ($phpClassName??'null') . "::" . ($field??'null'));
			}
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:62: lines 62-64
			if (property_exists($phpClassName, $field)) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:63: characters 25-26
				$tmp2 = $o;
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:63: characters 5-34
				return $tmp2->{$field};
			}
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:65: lines 65-67
			if (method_exists($phpClassName, $field)) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:66: characters 5-54
				return Boot::getStaticClosure($phpClassName, $field);
			}
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:70: characters 3-14
		return null;
	}

	/**
	 * Returns the fields of structure `o`.
	 * This method is only guaranteed to work on anonymous structures. Refer to
	 * `Type.getInstanceFields` for a function supporting class instances.
	 * If `o` is null, the result is unspecified.
	 * 
	 * @param mixed $o
	 * 
	 * @return \Array_hx
	 */
	static public function fields ($o) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:107: lines 107-109
		if (is_object($o)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:108: characters 4-77
			return \Array_hx::wrap(array_keys(get_object_vars($o)));
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:110: characters 3-12
		return new \Array_hx();
	}

	/**
	 * Returns the value of the field named `field` on object `o`, taking
	 * property getter functions into account.
	 * If the field is not a property, this function behaves like
	 * `Reflect.field`, but might be slower.
	 * If `o` or `field` are null, the result is unspecified.
	 * 
	 * @param mixed $o
	 * @param string $field
	 * 
	 * @return mixed
	 */
	static public function getProperty ($o, $field) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:78: lines 78-87
		if (is_object($o)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:79: lines 79-86
			if (($o instanceof HxClass)) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:80: characters 5-55
				$phpClassName = $o->phpClassName;
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:81: lines 81-83
				if (Boot::hasGetter($phpClassName, $field)) {
					#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:82: characters 31-43
					$tmp = $phpClassName;
					#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:82: characters 6-58
					return $tmp::{"get_" . ($field??'null')}();
				}
			} else if (Boot::hasGetter(get_class($o), $field)) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:85: characters 24-25
				$tmp1 = $o;
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:85: characters 5-40
				return $tmp1->{"get_" . ($field??'null')}();
			}
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:89: characters 3-33
		return Reflect::field($o, $field);
	}

	/**
	 * Tells if structure `o` has a field named `field`.
	 * This is only guaranteed to work for anonymous structures. Refer to
	 * `Type.getInstanceFields` for a function supporting class instances.
	 * If `o` or `field` are null, the result is unspecified.
	 * 
	 * @param mixed $o
	 * @param string $field
	 * 
	 * @return bool
	 */
	static public function hasField ($o, $field) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:33: characters 3-35
		if (!is_object($o)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:33: characters 23-35
			return false;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:34: characters 3-44
		if (property_exists($o, $field)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:34: characters 33-44
			return true;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:36: lines 36-39
		if (($o instanceof HxClass)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:37: characters 4-54
			$phpClassName = $o->phpClassName;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:38: characters 11-142
			if (!(property_exists($phpClassName, $field) || method_exists($phpClassName, $field))) {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:38: characters 103-142
				return defined("" . ($phpClassName??'null') . "::" . ($field??'null'));
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:38: characters 11-142
				return true;
			}
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:41: characters 3-15
		return false;
	}

	/**
	 * Tells if `v` is an object.
	 * The result is true if `v` is one of the following:
	 * - class instance
	 * - structure
	 * - `Class<T>`
	 * - `Enum<T>`
	 * Otherwise, including if `v` is null, the result is false.
	 * 
	 * @param mixed $v
	 * 
	 * @return bool
	 */
	static public function isObject ($v) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:135: lines 135-139
		if (($v instanceof HxEnum)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:136: characters 4-16
			return false;
		} else if (!is_object($v)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:138: characters 28-41
			return is_string($v);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/_std/Reflect.hx:138: characters 11-41
			return true;
		}
	}
}

Boot::registerClass(Reflect::class, 'Reflect');
