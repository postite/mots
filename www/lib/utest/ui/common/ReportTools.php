<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace utest\ui\common;

use \php\Boot;

class ReportTools {
	/**
	 * @param IReport $report
	 * @param ResultStats $stats
	 * 
	 * @return bool
	 */
	static public function hasHeader ($report, $stats) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:7: characters 10-30
		$__hx__switch = ($report->displayHeader->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:22: characters 5-16
			return true;
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:10: characters 5-17
			return false;
		} else if ($__hx__switch === 2) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:12: lines 12-13
			if (!$stats->isOk) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:13: characters 6-17
				return true;
			}
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:14: characters 12-40
			$__hx__switch = ($report->displaySuccessResults->index);
			if ($__hx__switch === 1) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:17: characters 7-19
				return false;
			} else if ($__hx__switch === 0 || $__hx__switch === 2) {
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:19: characters 7-18
				return true;
			}
		}
	}

	/**
	 * @param IReport $report
	 * @param ResultStats $stats
	 * 
	 * @return bool
	 */
	static public function hasOutput ($report, $stats) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:39: characters 3-31
		if (!$stats->isOk) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:39: characters 20-31
			return true;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:40: characters 3-34
		return ReportTools::hasHeader($report, $stats);
	}

	/**
	 * @param IReport $report
	 * @param ResultStats $stats
	 * @param bool $isOk
	 * 
	 * @return bool
	 */
	static public function skipResult ($report, $stats, $isOk) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:28: characters 3-32
		if (!$stats->isOk) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:28: characters 20-32
			return false;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:29: characters 17-45
		$__hx__switch = ($report->displaySuccessResults->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:32: characters 35-40
			return false;
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:31: characters 34-38
			return true;
		} else if ($__hx__switch === 2) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/ui/common/ReportTools.hx:33: characters 41-46
			return !$isOk;
		}
	}
}

Boot::registerClass(ReportTools::class, 'utest.ui.common.ReportTools');
