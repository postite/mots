<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 */

namespace utest\ui\common;

use \haxe\ds\StringMap;
use \php\Boot;
use \php\_Boot\HxException;
use \php\_NativeArray\NativeArrayIterator;

class ClassResult {
	/**
	 * @var string
	 */
	public $className;
	/**
	 * @var StringMap
	 */
	public $fixtures;
	/**
	 * @var bool
	 */
	public $hasSetup;
	/**
	 * @var bool
	 */
	public $hasTeardown;
	/**
	 * @var int
	 */
	public $methods;
	/**
	 * @var string
	 */
	public $setupName;
	/**
	 * @var ResultStats
	 */
	public $stats;
	/**
	 * @var string
	 */
	public $teardownName;


	/**
	 * @param string $className
	 * @param string $setupName
	 * @param string $teardownName
	 * 
	 * @return void
	 */
	public function __construct ($className, $setupName, $teardownName) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:15: characters 5-25
		$this->fixtures = new StringMap();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:16: characters 5-31
		$this->className = $className;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:17: characters 5-31
		$this->setupName = $setupName;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:18: characters 5-33
		$this->hasSetup = $setupName !== null;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:19: characters 5-37
		$this->teardownName = $teardownName;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:20: characters 5-39
		$this->hasTeardown = $teardownName !== null;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:22: characters 5-16
		$this->methods = 0;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:23: characters 5-30
		$this->stats = new ResultStats();
	}


	/**
	 * @param FixtureResult $result
	 * 
	 * @return void
	 */
	public function add ($result) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:27: characters 5-49
		if (array_key_exists($result->methodName, $this->fixtures->data)) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:27: characters 44-49
			throw new HxException("invalid duplicated fixture: " . ($this->className??'null') . "." . ($result->methodName??'null'));
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:29: characters 5-29
		$this->stats->wire($result->stats);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:31: characters 5-14
		$this->methods++;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:32: characters 5-44
		$this->fixtures->data[$result->methodName] = $result;
	}


	/**
	 * @param string $method
	 * 
	 * @return bool
	 */
	public function exists ($method) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:39: characters 12-35
		return array_key_exists($method, $this->fixtures->data);
	}


	/**
	 * @param string $method
	 * 
	 * @return FixtureResult
	 */
	public function get ($method) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:36: characters 12-32
		return ($this->fixtures->data[$method] ?? null);
	}


	/**
	 * @param bool $errorsHavePriority
	 * 
	 * @return \Array_hx
	 */
	public function methodNames ($errorsHavePriority = true) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:41: lines 41-72
		if ($errorsHavePriority === null) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:41: lines 41-72
			$errorsHavePriority = true;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:42: characters 5-20
		$names = new \Array_hx();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:43: characters 17-32
		$name = new NativeArrayIterator(array_map("strval", array_keys($this->fixtures->data)));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:43: characters 17-32
		while ($name->hasNext()) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:43: lines 43-44
			$name1 = $name->next();
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:44: characters 7-23
			$names->arr[$names->length] = $name1;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:44: characters 7-23
			++$names->length;
		}

		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:45: lines 45-70
		if ($errorsHavePriority) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:46: characters 7-21
			$me = $this;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:47: lines 47-65
			usort($names->arr, function ($a, $b)  use (&$me) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:48: characters 9-34
				$as = $me->get($a)->stats;
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:49: characters 9-34
				$bs = $me->get($b)->stats;
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:50: lines 50-64
				if ($as->hasErrors) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:51: characters 18-129
					if (!$bs->hasErrors) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:51: characters 36-38
						return -1;
					} else if ($as->errors === $bs->errors) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:51: characters 67-88
						return \Reflect::compare($a, $b);
					} else {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:51: characters 91-128
						return \Reflect::compare($as->errors, $bs->errors);
					}
				} else if ($bs->hasErrors) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:53: characters 11-19
					return 1;
				} else if ($as->hasFailures) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:55: characters 18-139
					if (!$bs->hasFailures) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:55: characters 38-40
						return -1;
					} else if ($as->failures === $bs->failures) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:55: characters 73-94
						return \Reflect::compare($a, $b);
					} else {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:55: characters 97-138
						return \Reflect::compare($as->failures, $bs->failures);
					}
				} else if ($bs->hasFailures) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:57: characters 11-19
					return 1;
				} else if ($as->hasWarnings) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:59: characters 18-139
					if (!$bs->hasWarnings) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:59: characters 38-40
						return -1;
					} else if ($as->warnings === $bs->warnings) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:59: characters 73-94
						return \Reflect::compare($a, $b);
					} else {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:59: characters 97-138
						return \Reflect::compare($as->warnings, $bs->warnings);
					}
				} else if ($bs->hasWarnings) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:61: characters 11-19
					return 1;
				} else {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:63: characters 11-39
					return \Reflect::compare($a, $b);
				}
			});
		} else {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:67: lines 67-69
			usort($names->arr, function ($a1, $b1) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:68: characters 9-37
				return \Reflect::compare($a1, $b1);
			});
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ClassResult.hx:71: characters 5-17
		return $names;
	}
}


Boot::registerClass(ClassResult::class, 'utest.ui.common.ClassResult');
