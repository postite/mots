<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

use \utest\ui\Report;
use \php\_Boot\HxAnon;
use \php\Boot;
use \utest\Runner;
use \haxe\Log;

class RunAll {
	/**
	 * @return void
	 */
	static public function main () {
		#tests/RunAll.hx:6: characters 7-12
		(Log::$trace)("runAll", new HxAnon([
			"fileName" => "tests/RunAll.hx",
			"lineNumber" => 6,
			"className" => "RunAll",
			"methodName" => "main",
		]));
		#tests/RunAll.hx:8: characters 7-33
		$runner = new Runner();
		#tests/RunAll.hx:9: characters 8-38
		$runner->addCase(new \TestMots());
		#tests/RunAll.hx:12: characters 4-25
		Report::create($runner);
		#tests/RunAll.hx:15: characters 7-19
		$runner->run();
	}
}

Boot::registerClass(RunAll::class, 'RunAll');
