<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace php\_Boot;

use \php\Boot;

/**
 * Class<T> implementation for Haxe->PHP internals.
 */
class HxClass {
	/**
	 * @var string
	 */
	public $phpClassName;

	/**
	 * @param string $phpClassName
	 * 
	 * @return void
	 */
	public function __construct ($phpClassName) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:601: characters 3-35
		$this->phpClassName = $phpClassName;
	}

	/**
	 * Magic method to call static methods of this class, when `HxClass` instance is in a `Dynamic` variable.
	 * 
	 * @param string $method
	 * @param mixed $args
	 * 
	 * @return mixed
	 */
	public function __call ($method, $args) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:610: characters 3-53
		return call_user_func_array(((($this->phpClassName === "String" ? HxString::class : $this->phpClassName))??'null') . "::" . ($method??'null'), $args);
	}

	/**
	 * Magic method to get static vars of this class, when `HxClass` instance is in a `Dynamic` variable.
	 * 
	 * @param string $property
	 * 
	 * @return mixed
	 */
	public function __get ($property) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:618: lines 618-626
		if (defined("" . ($this->phpClassName??'null') . "::" . ($property??'null'))) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:619: characters 4-54
			return constant("" . ($this->phpClassName??'null') . "::" . ($property??'null'));
		} else if (Boot::hasGetter($this->phpClassName, $property)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:621: characters 29-41
			$tmp = $this->phpClassName;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:621: characters 4-59
			return $tmp::{"get_" . ($property??'null')}();
		} else if (method_exists($this->phpClassName, $property)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:623: characters 4-48
			return new HxClosure($this->phpClassName, $property);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:625: characters 33-45
			$tmp1 = $this->phpClassName;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:625: characters 4-56
			return $tmp1::${$property};
		}
	}

	/**
	 * Magic method to set static vars of this class, when `HxClass` instance is in a `Dynamic` variable.
	 * 
	 * @param string $property
	 * @param mixed $value
	 * 
	 * @return void
	 */
	public function __set ($property, $value) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:634: lines 634-638
		if (Boot::hasSetter($this->phpClassName, $property)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:635: characters 22-34
			$tmp = $this->phpClassName;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:635: characters 4-59
			$tmp::{"set_" . ($property??'null')}($value);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:637: characters 26-38
			$tmp1 = $this->phpClassName;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/php/Boot.hx:637: characters 4-56
			$tmp1::${$property} = $value;
		}
	}
}

Boot::registerClass(HxClass::class, 'php._Boot.HxClass');
