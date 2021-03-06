<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace utest\ui\text;

use \utest\ui\common\ReportTools;
use \php\Boot;
use \utest\ui\common\PackageResult;
use \utest\Runner;
use \utest\ui\common\ResultAggregator;
use \haxe\CallStack;
use \utest\ui\common\SuccessResultsDisplayMode;
use \utest\ui\common\IReport;
use \utest\ui\common\HeaderDisplayMode;
use \php\_Boot\HxString;

class PlainTextReport implements IReport {
	/**
	 * @var ResultAggregator
	 */
	public $aggregator;
	/**
	 * @var HeaderDisplayMode
	 */
	public $displayHeader;
	/**
	 * @var SuccessResultsDisplayMode
	 */
	public $displaySuccessResults;
	/**
	 * @var \Closure
	 */
	public $handler;
	/**
	 * @var string
	 */
	public $indent;
	/**
	 * @var string
	 */
	public $newline;
	/**
	 * @var PackageResult
	 */
	public $result;
	/**
	 * @var float
	 */
	public $startTime;

	/**
	 * @param Runner $runner
	 * @param \Closure $outputHandler
	 * 
	 * @return void
	 */
	public function __construct ($runner, $outputHandler = null) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:21: characters 5-52
		$this->aggregator = new ResultAggregator($runner, true);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:22: characters 5-30
		$runner->onStart->add(Boot::getInstanceClosure($this, 'start'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:23: characters 5-40
		$this->aggregator->onComplete->add(Boot::getInstanceClosure($this, 'complete'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:24: lines 24-25
		if (null !== $outputHandler) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:25: characters 7-32
			$this->setHandler($outputHandler);
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:26: characters 5-53
		$this->displaySuccessResults = SuccessResultsDisplayMode::AlwaysShowSuccessResults();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:27: characters 5-37
		$this->displayHeader = HeaderDisplayMode::AlwaysShowHeader();
	}

	/**
	 * @param \StringBuf $buf
	 * @param PackageResult $result
	 * 
	 * @return void
	 */
	public function addHeader ($buf, $result) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:67: lines 67-68
		if (!ReportTools::hasHeader($this, $result->stats)) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:68: characters 7-13
			return;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:70: characters 5-25
		$end = $this->getTime();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:72: characters 5-55
		$scripttime = (int)((\Sys::cpuTime() * 1000)) / 1000;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:74: characters 5-51
		$time = (int)((($end - $this->startTime) * 1000)) / 1000;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:77: characters 5-70
		$buf->add("\x0Aassertations: " . ($result->stats->assertations??'null') . ($this->newline??'null'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:78: characters 5-65
		$buf->add("successes: " . ($result->stats->successes??'null') . ($this->newline??'null'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:79: characters 5-62
		$buf->add("errors: " . ($result->stats->errors??'null') . ($this->newline??'null'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:80: characters 5-64
		$buf->add("failures: " . ($result->stats->failures??'null') . ($this->newline??'null'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:81: characters 5-64
		$buf->add("warnings: " . ($result->stats->warnings??'null') . ($this->newline??'null'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:82: characters 5-47
		$buf->add("execution time: " . ($time??'null') . ($this->newline??'null'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:84: characters 5-53
		$buf->add("script time: " . ($scripttime??'null') . ($this->newline??'null'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:86: characters 5-21
		$buf->add($this->newline);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:87: characters 5-121
		$buf->add("results: " . ((($result->stats->isOk ? "ALL TESTS OK (success: true)" : "SOME TESTS FAILURES (success: false)"))??'null'));
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:88: characters 5-21
		$buf->add($this->newline);
	}

	/**
	 * @param PackageResult $result
	 * 
	 * @return void
	 */
	public function complete ($result) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:158: characters 5-25
		$this->result = $result;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:159: characters 5-39
		if ($this->handler !== null) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:159: characters 26-39
			($this->handler)($this);
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:161: characters 5-40
		exit(($result->stats->isOk ? 0 : 1));
	}

	/**
	 * @param \Array_hx $stack
	 * 
	 * @return string
	 */
	public function dumpStack ($stack) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:55: lines 55-56
		if ($stack->length === 0) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:56: characters 7-16
			return "";
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:57: lines 57-58
		$parts = HxString::split(CallStack::toString($stack), "\x0A");
		$r = new \Array_hx();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:59: lines 59-62
		$_g = 0;
		while ($_g < $parts->length) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:59: characters 10-14
			$part = ($parts->arr[$_g] ?? null);
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:59: lines 59-62
			++$_g;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:60: characters 7-49
			if (HxString::indexOf($part, " utest.") >= 0) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:60: characters 41-49
				continue;
			}
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:61: characters 7-19
			$r->arr[$r->length] = $part;
			++$r->length;

		}

		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:63: characters 5-27
		return $r->join($this->newline);
	}

	/**
	 * @return string
	 */
	public function getResults () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:93: characters 5-31
		$buf = new \StringBuf();
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:94: characters 5-27
		$this->addHeader($buf, $this->result);
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:96: lines 96-153
		$_g = 0;
		$_g1 = $this->result->packageNames();
		while ($_g < $_g1->length) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:96: characters 9-14
			$pname = ($_g1->arr[$_g] ?? null);
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:96: lines 96-153
			++$_g;
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:97: characters 7-43
			$pack = $this->result->getPackage($pname);
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:98: characters 7-67
			if (ReportTools::skipResult($this, $pack->stats, $this->result->stats->isOk)) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:98: characters 59-67
				continue;
			}
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:99: lines 99-152
			$_g2 = 0;
			$_g11 = $pack->classNames();
			while ($_g2 < $_g11->length) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:99: characters 11-16
				$cname = ($_g11->arr[$_g2] ?? null);
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:99: lines 99-152
				++$_g2;
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:100: characters 9-40
				$cls = $pack->getClass($cname);
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:101: characters 9-68
				if (ReportTools::skipResult($this, $cls->stats, $this->result->stats->isOk)) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:101: characters 60-68
					continue;
				}
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:102: characters 9-62
				$buf->add(((($pname === "" ? "" : ($pname??'null') . "."))??'null') . ($cname??'null') . ($this->newline??'null'));
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:103: lines 103-151
				$_g3 = 0;
				$_g12 = $cls->methodNames();
				while ($_g3 < $_g12->length) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:103: characters 13-18
					$mname = ($_g12->arr[$_g3] ?? null);
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:103: lines 103-151
					++$_g3;
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:104: characters 11-36
					$fix = $cls->get($mname);
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:105: characters 11-70
					if (ReportTools::skipResult($this, $fix->stats, $this->result->stats->isOk)) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:105: characters 62-70
						continue;
					}
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:106: characters 11-41
					$buf->add(($this->indents(1)??'null') . ($mname??'null') . ": ");
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:107: lines 107-115
					if ($fix->stats->isOk) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:108: characters 13-27
						$buf->add("OK ");
					} else if ($fix->stats->hasErrors) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:110: characters 13-30
						$buf->add("ERROR ");
					} else if ($fix->stats->hasFailures) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:112: characters 13-32
						$buf->add("FAILURE ");
					} else if ($fix->stats->hasWarnings) {
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:114: characters 13-32
						$buf->add("WARNING ");
					}
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:116: characters 11-29
					$messages = "";
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:117: lines 117-148
					$_g4 = $fix->iterator();
					while ($_g4->head !== null) {
						$val = $_g4->head->item;
						$_g4->head = $_g4->head->next;
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:118: lines 118-147
						$__hx__switch = ($val->index);
						if ($__hx__switch === 0) {
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:120: characters 17-29
							$buf->add(".");
						} else if ($__hx__switch === 1) {
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:122: characters 17-29
							$buf->add("F");
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:123: characters 17-88
							$messages = ($messages??'null') . ($this->indents(2)??'null') . "line: " . ($val->params[1]->lineNumber??'null') . ", " . ($val->params[0]??'null') . ($this->newline??'null');
						} else if ($__hx__switch === 2) {
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:125: characters 17-29
							$buf->add("E");
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:126: characters 17-79
							$messages = ($messages??'null') . ($this->indents(2)??'null') . (\Std::string($val->params[0])??'null') . ($this->dumpStack($val->params[1])??'null') . ($this->newline??'null');
						} else if ($__hx__switch === 3) {
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:128: characters 17-29
							$buf->add("S");
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:129: characters 17-79
							$messages = ($messages??'null') . ($this->indents(2)??'null') . (\Std::string($val->params[0])??'null') . ($this->dumpStack($val->params[1])??'null') . ($this->newline??'null');
						} else if ($__hx__switch === 4) {
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:131: characters 17-29
							$buf->add("T");
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:132: characters 17-79
							$messages = ($messages??'null') . ($this->indents(2)??'null') . (\Std::string($val->params[0])??'null') . ($this->dumpStack($val->params[1])??'null') . ($this->newline??'null');
						} else if ($__hx__switch === 5) {
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:134: characters 17-29
							$buf->add("O");
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:135: characters 17-103
							$messages = ($messages??'null') . ($this->indents(2)??'null') . "missed async calls: " . ($val->params[0]??'null') . ($this->dumpStack($val->params[1])??'null') . ($this->newline??'null');
						} else if ($__hx__switch === 6) {
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:137: characters 17-29
							$buf->add("A");
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:138: characters 17-79
							$messages = ($messages??'null') . ($this->indents(2)??'null') . (\Std::string($val->params[0])??'null') . ($this->dumpStack($val->params[1])??'null') . ($this->newline??'null');
						} else if ($__hx__switch === 7) {
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:140: characters 17-29
							$buf->add("W");
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:141: characters 17-54
							$messages = ($messages??'null') . ($this->indents(2)??'null') . ($val->params[0]??'null') . ($this->newline??'null');
						} else if ($__hx__switch === 8) {
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:142: characters 27-33
							$reason = $val->params[0];
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:143: characters 17-29
							$buf->add("I");
							#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:144: lines 144-146
							if (($reason !== null) && ($reason !== "")) {
								#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:145: characters 19-78
								$messages = ($messages??'null') . ($this->indents(2)??'null') . (("With reason: " . ($reason??'null'))??'null') . ($this->newline??'null');
							}

						}
					}

					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:149: characters 11-27
					$buf->add($this->newline);
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:150: characters 11-28
					$buf->add($messages);
				}

			}

		}

		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:154: characters 5-26
		return $buf->b;
	}

	/**
	 * @return float
	 */
	public function getTime () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:44: characters 5-30
		return microtime(true);
	}

	/**
	 * @param int $c
	 * 
	 * @return string
	 */
	public function indents ($c) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:48: characters 5-16
		$s = "";
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:49: lines 49-50
		while (--$c >= 0) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:50: characters 7-18
			$s = ($s??'null') . ($this->indent??'null');
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:51: characters 5-13
		return $s;
	}

	/**
	 * @param \Closure $handler
	 * 
	 * @return void
	 */
	public function setHandler ($handler) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:31: characters 5-27
		$this->handler = $handler;
	}

	/**
	 * @param Runner $e
	 * 
	 * @return void
	 */
	public function start ($e) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/text/PlainTextReport.hx:35: characters 5-26
		$this->startTime = $this->getTime();
	}
}

Boot::registerClass(PlainTextReport::class, 'utest.ui.text.PlainTextReport');
