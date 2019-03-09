<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 */

namespace utest\ui\common;

use \php\Boot;
use \haxe\ds\_List\ListIterator;
use \utest\Assertation;
use \haxe\ds\List_hx;

class FixtureResult {
	/**
	 * @var bool
	 */
	public $hasAsyncError;
	/**
	 * @var bool
	 */
	public $hasSetupError;
	/**
	 * @var bool
	 */
	public $hasTeardownError;
	/**
	 * @var bool
	 */
	public $hasTestError;
	/**
	 * @var bool
	 */
	public $hasTimeoutError;
	/**
	 * @var List_hx
	 */
	public $list;
	/**
	 * @var string
	 */
	public $methodName;
	/**
	 * @var ResultStats
	 */
	public $stats;


	/**
	 * @param string $methodName
	 * 
	 * @return void
	 */
	public function __construct ($methodName) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:17: characters 5-33
		$this->methodName = $methodName;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:18: characters 5-27
		$this->list = new List_hx();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:19: characters 5-25
		$this->hasTestError = false;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:20: characters 5-26
		$this->hasSetupError = false;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:21: characters 5-29
		$this->hasTeardownError = false;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:22: characters 5-28
		$this->hasTimeoutError = false;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:23: characters 5-26
		$this->hasAsyncError = false;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:25: characters 5-30
		$this->stats = new ResultStats();
	}


	/**
	 * @param Assertation $assertation
	 * 
	 * @return void
	 */
	public function add ($assertation) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:32: characters 5-26
		$this->list->add($assertation);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:33: lines 33-56
		switch ($assertation->index) {
			case 0:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:35: characters 9-30
				$this->stats->addSuccesses(1);
				break;
			case 1:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:37: characters 9-29
				$this->stats->addFailures(1);
				break;
			case 2:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:39: characters 9-27
				$this->stats->addErrors(1);
				break;
			case 3:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:41: characters 9-27
				$this->stats->addErrors(1);
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:42: characters 9-29
				$this->hasSetupError = true;
				break;
			case 4:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:44: characters 9-27
				$this->stats->addErrors(1);
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:45: characters 9-32
				$this->hasTeardownError = true;
				break;
			case 5:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:47: characters 9-27
				$this->stats->addErrors(1);
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:48: characters 9-31
				$this->hasTimeoutError = true;
				break;
			case 6:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:50: characters 9-27
				$this->stats->addErrors(1);
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:51: characters 9-29
				$this->hasAsyncError = true;
				break;
			case 7:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:53: characters 9-29
				$this->stats->addWarnings(1);
				break;
			case 8:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:55: characters 9-28
				$this->stats->addIgnores(1);
				break;
		}
	}


	/**
	 * @return ListIterator
	 */
	public function iterator () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/FixtureResult.hx:29: characters 12-27
		return new ListIterator($this->list->h);
	}
}


Boot::registerClass(FixtureResult::class, 'utest.ui.common.FixtureResult');