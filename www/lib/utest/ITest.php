<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 */

namespace utest;

use \php\Boot;

/**
 * Interface, which should be implemented by test cases.
 *
 */
interface ITest {
}


Boot::registerClass(ITest::class, 'utest.ITest');
