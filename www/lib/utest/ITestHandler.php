<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 */

namespace utest;

use \php\_Boot\HxClosure;
use \php\Boot;
use \php\_Boot\HxException;
use \haxe\CallStack;

class ITestHandler extends TestHandler {
	/**
	 * @var Async
	 */
	public $setupAsync;
	/**
	 * @var Async
	 */
	public $teardownAsync;
	/**
	 * @var object
	 */
	public $test;
	/**
	 * @var Async
	 */
	public $testAsync;
	/**
	 * @var ITest
	 */
	public $testCase;


	/**
	 * @param TestFixture $fixture
	 * 
	 * @return void
	 */
	public function __construct ($fixture) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:15: characters 3-17
		parent::__construct($fixture);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:16: lines 16-18
		if (!$fixture->isITest) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:17: characters 4-9
			throw new HxException("Invalid fixture type for utest.ITestHandler");
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:19: characters 3-41
		$this->testCase = Boot::typedCast(Boot::getClass(ITest::class), $fixture->target);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:20: characters 3-22
		$this->test = $fixture->test;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:21: lines 21-23
		if ($this->test === null) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:22: characters 4-9
			throw new HxException("Fixture is missing test data");
		}
	}


	/**
	 * @return void
	 */
	public function bindHandler () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:108: characters 3-23
		if ($this->wasBound) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:108: characters 17-23
			return;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:109: characters 3-32
		Assert::$results = $this->results;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:110: characters 3-123
		$msg = " is not allowed in tests extending utest.ITest. Add `async:utestAsync` argument to the test method instead.";
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:111: characters 3-46
		Assert::$createAsync = function ($f = null, $t = null)  use (&$msg) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:111: characters 41-46
			throw new HxException("Assert.createAsync() " . ($msg??'null'));
		};
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:112: characters 3-45
		Assert::$createEvent = function ($f1, $t1 = null)  use (&$msg) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:112: characters 40-45
			throw new HxException("Assert.createEvent() " . ($msg??'null'));
		};
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:113: characters 3-18
		$this->wasBound = true;
	}


	/**
	 * @return void
	 */
	public function checkSetup () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:48: lines 48-53
		if ($this->setupAsync->timedOut) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:49: characters 4-48
			$this->results->add(Assertation::SetupError("Setup timeout", new \Array_hx()));
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:50: characters 4-22
			$this->completedFinally();
		} else {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:52: characters 4-13
			$this->runTest();
		}
	}


	/**
	 * @return void
	 */
	public function checkTeardown () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:101: lines 101-103
		if ($this->teardownAsync->timedOut) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:102: characters 4-54
			$this->results->add(Assertation::TeardownError("Teardown timeout", new \Array_hx()));
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:104: characters 3-21
		$this->completedFinally();
	}


	/**
	 * @return void
	 */
	public function checkTest () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:69: characters 3-28
		$this->onPrecheck->dispatch($this);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:71: lines 71-83
		if ($this->testAsync->timedOut) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:72: characters 4-36
			$this->results->add(Assertation::TimeoutError(1, new \Array_hx()));
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:73: characters 4-28
			$this->onTimeout->dispatch($this);
		} else if ($this->testAsync->resolved) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:76: lines 76-78
			if ($this->results->length === 0) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:77: characters 5-42
				$this->results->add(Assertation::Warning("no assertions"));
			}
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:79: characters 4-27
			$this->onTested->dispatch($this);
		} else {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:82: characters 4-9
			throw new HxException("Unexpected test state");
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:85: characters 3-16
		$this->runTeardown();
	}


	/**
	 * @return void
	 */
	public function execute () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:27: lines 27-30
		if ($this->fixture->ignoringInfo !== null) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:28: characters 4-20
			$this->executeFinally();
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:29: characters 4-10
			return;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:31: characters 3-16
		$this->bindHandler();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:32: characters 3-13
		$this->runSetup();
	}


	/**
	 * @return void
	 */
	public function runSetup () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:36: lines 36-42
		try {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:37: characters 4-38
			$this->setupAsync = ($this->fixture->setupMethod)();
		} catch (\Throwable $__hx__caught_e) {
			CallStack::saveExceptionTrace($__hx__caught_e);
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:39: characters 4-58
			$this->results->add(Assertation::SetupError($e, CallStack::exceptionStack()));
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:40: characters 4-22
			$this->completedFinally();
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:41: characters 4-10
			return;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:44: characters 3-30
		$this->setupAsync->then(new HxClosure($this, 'checkSetup'));
	}


	/**
	 * @return void
	 */
	public function runTeardown () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:89: lines 89-95
		try {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:90: characters 4-44
			$this->teardownAsync = ($this->fixture->teardownMethod)();
		} catch (\Throwable $__hx__caught_e) {
			CallStack::saveExceptionTrace($__hx__caught_e);
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:92: characters 4-61
			$this->results->add(Assertation::TeardownError($e, CallStack::exceptionStack()));
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:93: characters 4-22
			$this->completedFinally();
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:94: characters 4-10
			return;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:97: characters 3-36
		$this->teardownAsync->then(new HxClosure($this, 'checkTeardown'));
	}


	/**
	 * @return void
	 */
	public function runTest () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:57: lines 57-63
		try {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:58: characters 4-30
			$this->testAsync = $this->test->execute();
		} catch (\Throwable $__hx__caught_e) {
			CallStack::saveExceptionTrace($__hx__caught_e);
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:60: characters 4-53
			$this->results->add(Assertation::Error($e, CallStack::exceptionStack()));
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:61: characters 4-17
			$this->runTeardown();
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:62: characters 4-10
			return;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ITestHandler.hx:65: characters 3-28
		$this->testAsync->then(new HxClosure($this, 'checkTest'));
	}
}


Boot::registerClass(ITestHandler::class, 'utest.ITestHandler');
