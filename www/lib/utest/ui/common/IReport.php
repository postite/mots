<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 */

namespace utest\ui\common;

use \php\Boot;

interface IReport {
	/**
	 * @param \Closure $handler
	 * 
	 * @return void
	 */
	public function setHandler ($handler) ;
}


Boot::registerClass(IReport::class, 'utest.ui.common.IReport');