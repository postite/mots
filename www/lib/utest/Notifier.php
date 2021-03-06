<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace utest;

use \php\Boot;
use \haxe\CallStack;
use \utest\_Dispatcher\EventException;
use \php\_Boot\HxException;

class Notifier {
	/**
	 * @var \Array_hx
	 */
	public $handlers;

	/**
	 * @return void
	 */
	static public function stop () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:86: characters 5-10
		throw new HxException(EventException::StopPropagation());
	}

	/**
	 * @return void
	 */
	public function __construct () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:53: characters 5-27
		$this->handlers = new \Array_hx();
	}

	/**
	 * @param \Closure $h
	 * 
	 * @return \Closure
	 */
	public function add ($h) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:56: characters 5-21
		$_this = $this->handlers;
		$_this->arr[$_this->length] = $h;
		++$_this->length;

		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:57: characters 5-13
		return $h;
	}

	/**
	 * @return void
	 */
	public function clear () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:68: characters 5-27
		$this->handlers = new \Array_hx();
	}

	/**
	 * @return bool
	 */
	public function dispatch () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:71: lines 71-79
		try {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:73: characters 7-34
			$list = (clone $this->handlers);
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:74: lines 74-75
			$_g = 0;
			while ($_g < $list->length) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:75: characters 9-12
				($list->arr[$_g++] ?? null)();
			}

			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:76: characters 7-18
			return true;
		} catch (\Throwable $__hx__caught_e) {
			CallStack::saveExceptionTrace($__hx__caught_e);
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			if ($__hx__real_e instanceof EventException) {
				$exc = $__hx__real_e;
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:78: characters 7-19
				return false;
			} else  throw $__hx__caught_e;
		}
	}

	/**
	 * @return bool
	 */
	public function has () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:83: characters 5-31
		return $this->handlers->length > 0;
	}

	/**
	 * @param \Closure $h
	 * 
	 * @return \Closure
	 */
	public function remove ($h) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:61: lines 61-63
		$_g = 0;
		$_g1 = $this->handlers->length;
		while ($_g < $_g1) {
			$i = $_g++;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:62: lines 62-63
			if (\Reflect::compareMethods(($this->handlers->arr[$i] ?? null), $h)) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:63: characters 9-40
				return ($this->handlers->splice($i, 1)->arr[0] ?? null);
			}
		}

		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/Dispatcher.hx:64: characters 5-16
		return null;
	}
}

Boot::registerClass(Notifier::class, 'utest.Notifier');
