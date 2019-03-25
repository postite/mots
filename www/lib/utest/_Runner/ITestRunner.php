<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace utest\_Runner;

use \php\_Boot\HxAnon;
use \utest\Assertation;
use \php\Boot;
use \utest\TestResult;
use \utest\Runner;
use \haxe\CallStack;
use \utest\ITest;
use \utest\Async;
use \utest\TestHandler;
use \php\_Boot\HxException;
use \php\_NativeIndexedArray\NativeIndexedArrayIterator;

class ITestRunner {
	/**
	 * @var object
	 */
	public $cases;
	/**
	 * @var ITest
	 */
	public $currentCase;
	/**
	 * @var \Array_hx
	 */
	public $currentCaseFixtures;
	/**
	 * @var Runner
	 */
	public $runner;
	/**
	 * @var Async
	 */
	public $setupAsync;
	/**
	 * @var Async
	 */
	public $teardownAsync;
	/**
	 * @var \Closure
	 */
	public $teardownClass;

	/**
	 * @param Runner $runner
	 * 
	 * @return void
	 */
	public function __construct ($runner) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:317: characters 5-25
		$this->runner = $runner;
	}

	/**
	 * @return void
	 */
	public function checkSetup () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:349: lines 349-353
		if ($this->setupAsync->timedOut) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:350: characters 7-56
			$this->setupFailed(Assertation::SetupError("setupClass timeout", new \Array_hx()));
		} else {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:352: characters 7-20
			$this->runFixtures();
		}
	}

	/**
	 * @return void
	 */
	public function checkTeardown () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:392: lines 392-394
		if ($this->teardownAsync->timedOut) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:393: characters 7-65
			$this->teardownFailed(Assertation::TeardownError("teardownClass timeout", new \Array_hx()));
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:395: characters 5-15
		$this->runCases();
	}

	/**
	 * @return void
	 */
	public function run () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:321: characters 5-40
		$this->cases = new NativeIndexedArrayIterator(array_values($this->runner->iTestFixtures->_keys));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:322: characters 5-15
		$this->runCases();
	}

	/**
	 * @return void
	 */
	public function runCases () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:326: lines 326-343
		while ($this->cases->hasNext()) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:327: characters 7-33
			$this->currentCase = $this->cases->next();
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:328: characters 7-56
			$data = $this->runner->iTestFixtures->get($this->currentCase);
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:329: characters 7-42
			$this->currentCaseFixtures = $data->fixtures;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:330: characters 7-41
			$this->teardownClass = $data->teardownClass;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:331: lines 331-336
			try {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:332: characters 9-39
				$this->setupAsync = $data->setupClass();
			} catch (\Throwable $__hx__caught_e) {
				CallStack::saveExceptionTrace($__hx__caught_e);
				$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
				$e = $__hx__real_e;
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:334: characters 33-54
				$tmp = "setupClass failed: " . (\Std::string($e)??'null');
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:334: characters 9-85
				$this->setupFailed(Assertation::SetupError($tmp, CallStack::exceptionStack()));
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:335: characters 9-15
				return;
			}
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:337: lines 337-342
			if ($this->setupAsync->resolved) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:338: characters 9-34
				if (!$this->runFixtures()) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:338: characters 28-34
					return;
				}
			} else {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:340: characters 9-36
				$this->setupAsync->then(Boot::getInstanceClosure($this, 'checkSetup'));
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:341: characters 9-15
				return;
			}
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:345: characters 5-21
		$this->runner->runNext();
	}

	/**
	 * Returns `true` if all fixtures were executed synchronously.
	 * 
	 * @param TestHandler $finishedHandler
	 * 
	 * @return bool
	 */
	public function runFixtures ($finishedHandler = null) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:370: lines 370-376
		while ($this->currentCaseFixtures->length > 0) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:371: characters 39-64
			$_this = $this->currentCaseFixtures;
			if ($_this->length > 0) {
				$_this->length--;
			}
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:371: characters 7-66
			$handler = $this->runner->runFixture(array_pop($_this->arr));
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:372: lines 372-375
			if (!$handler->finished) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:373: characters 9-44
				$handler->onComplete->add(Boot::getInstanceClosure($this, 'runFixtures'));
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:374: characters 9-21
				return false;
			}
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:378: lines 378-382
		try {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:379: characters 7-38
			$this->teardownAsync = ($this->teardownClass)();
		} catch (\Throwable $__hx__caught_e) {
			CallStack::saveExceptionTrace($__hx__caught_e);
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:381: characters 37-61
			$tmp = "tearDownClass failed: " . (\Std::string($e)??'null');
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:381: characters 7-92
			$this->teardownFailed(Assertation::TeardownError($tmp, CallStack::exceptionStack()));
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:384: lines 384-386
		if ($this->teardownAsync->resolved && ($finishedHandler === null)) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:385: characters 7-18
			return true;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:387: characters 5-38
		$this->teardownAsync->then(Boot::getInstanceClosure($this, 'checkTeardown'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:388: characters 5-17
		return false;
	}

	/**
	 * @param Assertation $assertation
	 * 
	 * @return void
	 */
	public function setupFailed ($assertation) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:357: characters 5-58
		$this->runner->executedFixtures += $this->currentCaseFixtures->length;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:358: characters 7-24
		$tmp = $this->runner->onProgress;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:359: characters 17-30
		$tmp1 = $this->runner->length;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:360: characters 17-72
		$tmp2 = TestResult::ofFailedSetupClass($this->currentCase, $assertation);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:358: lines 358-362
		$tmp->dispatch(new HxAnon([
			"totals" => $tmp1,
			"result" => $tmp2,
			"done" => $this->runner->executedFixtures,
		]));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:363: characters 7-17
		$this->runCases();
	}

	/**
	 * @param Assertation $assertation
	 * 
	 * @return void
	 */
	public function teardownFailed ($assertation) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:399: characters 5-22
		$tmp = $this->runner->onProgress;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:400: characters 15-28
		$tmp1 = $this->runner->length;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:401: characters 15-73
		$tmp2 = TestResult::ofFailedTeardownClass($this->currentCase, $assertation);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/Runner.hx:399: lines 399-403
		$tmp->dispatch(new HxAnon([
			"totals" => $tmp1,
			"result" => $tmp2,
			"done" => $this->runner->executedFixtures,
		]));
	}
}

Boot::registerClass(ITestRunner::class, 'utest._Runner.ITestRunner');
