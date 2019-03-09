<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 */

use \php\Boot;
use \utest\Runner;
use \haxe\Log;
use \utest\ui\text\PrintReport;
use \php\_Boot\HxAnon;

class RunAll {
	/**
	 * @return void
	 */
	static public function main () {
		#tests/RunAll.hx:6: characters 7-12
		(Log::$trace)("runAll", new HxAnon([
			"fileName" => "RunAll.hx",
			"lineNumber" => 6,
			"className" => "RunAll",
			"methodName" => "main",
		]));
		#tests/RunAll.hx:8: characters 7-33
		$runner = new Runner();
		#tests/RunAll.hx:12: characters 8-45
		new PrintReport($runner);
		#tests/RunAll.hx:14: characters 7-19
		$runner->run();
	}
}


Boot::registerClass(RunAll::class, 'RunAll');
