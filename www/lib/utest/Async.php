<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace utest;

use \php\_Boot\HxAnon;
use \haxe\Timer;
use \php\Boot;
use \php\_Boot\HxException;

class Async {
	/**
	 * @var Async
	 */
	static public $resolvedInstance;

	/**
	 * @var \Array_hx
	 */
	public $callbacks;
	/**
	 * @var bool
	 */
	public $resolved;
	/**
	 * @var float
	 */
	public $startTime;
	/**
	 * @var bool
	 */
	public $timedOut;
	/**
	 * @var Timer
	 */
	public $timer;

	/**
	 * Returns an instance of `Async` which is already resolved.
	 * Any actions handling this instance will be executed synchronously.
	 * 
	 * @return Async
	 */
	static public function getResolved () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:26: lines 26-29
		if (Async::$resolvedInstance === null) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:27: characters 4-34
			Async::$resolvedInstance = new Async();
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:28: characters 4-27
			Async::$resolvedInstance->done(new HxAnon([
				"fileName" => "utest/Async.hx",
				"lineNumber" => 28,
				"className" => "utest.Async",
				"methodName" => "getResolved",
			]));
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:30: characters 3-26
		return Async::$resolvedInstance;
	}

	/**
	 * @param int $timeoutMs
	 * 
	 * @return void
	 */
	public function __construct ($timeoutMs = 250) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:11: lines 11-80
		if ($timeoutMs === null) {
			$timeoutMs = 250;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:17: characters 36-38
		$this->callbacks = new \Array_hx();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:15: characters 43-48
		$this->timedOut = false;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:14: characters 43-48
		$this->resolved = false;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:34: characters 3-28
		$this->startTime = microtime(true);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:35: characters 3-51
		$this->timer = Timer::delay(Boot::getInstanceClosure($this, 'setTimedOutState'), $timeoutMs);
	}

	/**
	 * @param object $pos
	 * 
	 * @return void
	 */
	public function done ($pos = null) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:39: lines 39-45
		if ($this->resolved) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:40: lines 40-44
			if ($this->timedOut) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:41: characters 5-10
				throw new HxException("Cannot done() at " . ($pos->fileName??'null') . ":" . ($pos->lineNumber??'null') . " because async is timed out.");
			} else {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:43: characters 5-10
				throw new HxException("Cannot done() at " . ($pos->fileName??'null') . ":" . ($pos->lineNumber??'null') . " because async is done already.");
			}
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:46: characters 3-18
		$this->resolved = true;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:47: characters 3-29
		$_g = 0;
		$_g1 = $this->callbacks;
		while ($_g < $_g1->length) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:47: characters 25-29
			($_g1->arr[$_g++] ?? null)();
		}

	}

	/**
	 * @return void
	 */
	public function setTimedOutState () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:76: characters 3-22
		if ($this->resolved) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:76: characters 16-22
			return;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:77: characters 3-18
		$this->timedOut = true;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:78: characters 3-9
		$this->done(new HxAnon([
			"fileName" => "utest/Async.hx",
			"lineNumber" => 78,
			"className" => "utest.Async",
			"methodName" => "setTimedOutState",
		]));
	}

	/**
	 * Change timeout for this async.
	 * 
	 * @param int $timeoutMs
	 * @param object $pos
	 * 
	 * @return void
	 */
	public function setTimeout ($timeoutMs, $pos = null) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:54: lines 54-56
		if ($this->resolved) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:55: characters 4-9
			throw new HxException("Cannot setTimeout(" . ($timeoutMs??'null') . ") at " . ($pos->fileName??'null') . ":" . ($pos->lineNumber??'null') . " because async is done.");
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:57: lines 57-59
		if ($this->timedOut) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:58: characters 4-9
			throw new HxException("Cannot setTimeout(" . ($timeoutMs??'null') . ") at " . ($pos->fileName??'null') . ":" . ($pos->lineNumber??'null') . " because async is timed out.");
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:61: characters 3-15
		$this->timer->stop();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:64: characters 3-47
		$this->timer = Timer::delay(Boot::getInstanceClosure($this, 'setTimedOutState'), $timeoutMs - (int)(floor(1000 * (microtime(true) - $this->startTime) + 0.5)));
	}

	/**
	 * @param \Closure $cb
	 * 
	 * @return void
	 */
	public function then ($cb) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:68: lines 68-72
		if ($this->resolved) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:69: characters 4-8
			$cb();
		} else {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Async.hx:71: characters 4-22
			$_this = $this->callbacks;
			$_this->arr[$_this->length] = $cb;
			++$_this->length;
		}
	}
}

Boot::registerClass(Async::class, 'utest.Async');
