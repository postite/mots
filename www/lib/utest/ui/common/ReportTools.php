<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
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
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:7: characters 10-30
		switch ($report->displayHeader->index) {
			case 0:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:22: characters 5-16
				return true;
				break;
			case 1:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:10: characters 5-17
				return false;
				break;
			case 2:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:12: lines 12-13
				if (!$stats->isOk) {
					#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:13: characters 6-17
					return true;
				}
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:14: characters 12-40
				switch ($report->displaySuccessResults->index) {
					case 0:
					case 2:
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:19: characters 7-18
						return true;
						break;
					case 1:
						#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:17: characters 7-19
						return false;
						break;
				}
				break;
		}
	}


	/**
	 * @param IReport $report
	 * @param ResultStats $stats
	 * 
	 * @return bool
	 */
	static public function hasOutput ($report, $stats) {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:39: characters 3-31
		if (!$stats->isOk) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:39: characters 20-31
			return true;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:40: characters 3-34
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
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:28: characters 3-32
		if (!$stats->isOk) {
			#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:28: characters 20-32
			return false;
		}
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:29: characters 17-45
		switch ($report->displaySuccessResults->index) {
			case 0:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:32: characters 35-40
				return false;
				break;
			case 1:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:31: characters 34-38
				return true;
				break;
			case 2:
				#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/aca590b256e0879cd7fbfcd47ca4f3a0a0ce1845/src/utest/ui/common/ReportTools.hx:33: characters 41-46
				return !$isOk;
				break;
		}
	}
}


Boot::registerClass(ReportTools::class, 'utest.ui.common.ReportTools');