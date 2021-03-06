<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace utest\ui\common;

use \php\Boot;
use \php\_Boot\HxEnum;

class HeaderDisplayMode extends HxEnum {
	/**
	 * @return HeaderDisplayMode
	 */
	static public function AlwaysShowHeader () {
		static $inst = null;
		if (!$inst) $inst = new HeaderDisplayMode('AlwaysShowHeader', 0, []);
		return $inst;
	}

	/**
	 * @return HeaderDisplayMode
	 */
	static public function NeverShowHeader () {
		static $inst = null;
		if (!$inst) $inst = new HeaderDisplayMode('NeverShowHeader', 1, []);
		return $inst;
	}

	/**
	 * @return HeaderDisplayMode
	 */
	static public function ShowHeaderWithResults () {
		static $inst = null;
		if (!$inst) $inst = new HeaderDisplayMode('ShowHeaderWithResults', 2, []);
		return $inst;
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			0 => 'AlwaysShowHeader',
			1 => 'NeverShowHeader',
			2 => 'ShowHeaderWithResults',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'AlwaysShowHeader' => 0,
			'NeverShowHeader' => 0,
			'ShowHeaderWithResults' => 0,
		];
	}
}

Boot::registerClass(HeaderDisplayMode::class, 'utest.ui.common.HeaderDisplayMode');
