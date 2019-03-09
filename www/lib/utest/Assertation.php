<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 */

namespace utest;

use \php\Boot;
use \php\_Boot\HxEnum;

/**
 * Enumerates the states available as a result of
 * invoking one of the static methods of @see {@link utest.Assert}.
 */
class Assertation extends HxEnum {
	/**
	 * An error has occurred during an asynchronous test.
	 * @param e The captured error/exception
	 * 
	 * @param mixed $e
	 * @param \Array_hx $stack
	 * 
	 * @return Assertation
	 */
	static public function AsyncError ($e, $stack) {
		return new Assertation('AsyncError', 6, [$e, $stack]);
	}


	/**
	 * An error has occurred during the execution of the test that prevents
	 * futher assertion to be tested.
	 * @param e The captured error/exception
	 * 
	 * @param mixed $e
	 * @param \Array_hx $stack
	 * 
	 * @return Assertation
	 */
	static public function Error ($e, $stack) {
		return new Assertation('Error', 2, [$e, $stack]);
	}


	/**
	 * Assertion is a falure. This does not denote an error in the assertion
	 * code but that the testing condition has failed for some reason.
	 * Ei.: Assert.isTrue(1 == 0);
	 * @param msg An error message containing the reasons for the failure.
	 * @param pos Code position where the Assert call has been executed
	 * 
	 * @param string $msg
	 * @param object $pos
	 * 
	 * @return Assertation
	 */
	static public function Failure ($msg, $pos) {
		return new Assertation('Failure', 1, [$msg, $pos]);
	}


	/**
	 * Test is ignored.
	 * @param reason Reason of test ignoring.
	 * 
	 * @param string $reason
	 * 
	 * @return Assertation
	 */
	static public function Ignore ($reason) {
		return new Assertation('Ignore', 8, [$reason]);
	}


	/**
	 * An error has occurred during the Setup phase of the test. It prevents
	 * the test to be run.
	 * @param e The captured error/exception
	 * 
	 * @param mixed $e
	 * @param \Array_hx $stack
	 * 
	 * @return Assertation
	 */
	static public function SetupError ($e, $stack) {
		return new Assertation('SetupError', 3, [$e, $stack]);
	}


	/**
	 * Assertion is succesful
	 * @param pos Code position where the Assert call has been executed
	 * 
	 * @param object $pos
	 * 
	 * @return Assertation
	 */
	static public function Success ($pos) {
		return new Assertation('Success', 0, [$pos]);
	}


	/**
	 * An error has occurred during the Teardown phase of the test.
	 * @param e The captured error/exception
	 * 
	 * @param mixed $e
	 * @param \Array_hx $stack
	 * 
	 * @return Assertation
	 */
	static public function TeardownError ($e, $stack) {
		return new Assertation('TeardownError', 4, [$e, $stack]);
	}


	/**
	 * The asynchronous phase of a test has gone into timeout.
	 * @param missedAsyncs The number of asynchronous calls that was expected
	 * to be performed before the timeout.
	 * 
	 * @param int $missedAsyncs
	 * @param \Array_hx $stack
	 * 
	 * @return Assertation
	 */
	static public function TimeoutError ($missedAsyncs, $stack) {
		return new Assertation('TimeoutError', 5, [$missedAsyncs, $stack]);
	}


	/**
	 * A warning state. This can be declared explicitely by an Assert call
	 * or can denote a test method that contains no assertions at all.
	 * @param msg The reason behind the warning
	 * 
	 * @param string $msg
	 * 
	 * @return Assertation
	 */
	static public function Warning ($msg) {
		return new Assertation('Warning', 7, [$msg]);
	}


	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			6 => 'AsyncError',
			2 => 'Error',
			1 => 'Failure',
			8 => 'Ignore',
			3 => 'SetupError',
			0 => 'Success',
			4 => 'TeardownError',
			5 => 'TimeoutError',
			7 => 'Warning',
		];
	}


	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'AsyncError' => 2,
			'Error' => 2,
			'Failure' => 2,
			'Ignore' => 1,
			'SetupError' => 2,
			'Success' => 1,
			'TeardownError' => 2,
			'TimeoutError' => 2,
			'Warning' => 1,
		];
	}
}


Boot::registerClass(Assertation::class, 'utest.Assertation');
