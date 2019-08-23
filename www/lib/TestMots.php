<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

use \php\_Boot\HxAnon;
use \php\Boot;
use \haxe\Log;
use \utest\Assert;
use \utest\ITest;
use \utest\Async;
use \php\_Boot\HxString;
use \haxe\io\Path;

class TestMots implements ITest {
	/**
	 * @var string
	 */
	static public $fileName = "Caâpture d’écra🐠n 2019-02ù-04 à 17.27.05.pngCapâtuærèëe d’écrāan 2019-02-04 à 17.27.05.png";

	/**
	 * @return void
	 */
	public function __construct () {
	}

	/**
	 * @return object
	 */
	public function __initializeUtest__ () {
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/utils/TestBuilder.hx:55: lines 55-56
		$_gthis = $this;
		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/utils/TestBuilder.hx:72: characters 25-28
		$init = new HxAnon([
			"tests" => new \Array_hx(),
			"accessories" => new HxAnon(),
		]);
		#tests/TestMots.hx:10: lines 10-13
		$_this = $init->tests;
		$_this->arr[$_this->length] = new HxAnon([
			"name" => "testtest",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testtest();
				return Async::getResolved();
			},
		]);
		++$_this->length;

		#tests/TestMots.hx:15: lines 15-18
		$_this1 = $init->tests;
		$_this1->arr[$_this1->length] = new HxAnon([
			"name" => "testUnderClean",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testUnderClean();
				return Async::getResolved();
			},
		]);
		++$_this1->length;

		#tests/TestMots.hx:20: lines 20-25
		$_this2 = $init->tests;
		$_this2->arr[$_this2->length] = new HxAnon([
			"name" => "testcleanFile",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testcleanFile();
				return Async::getResolved();
			},
		]);
		++$_this2->length;

		#tests/TestMots.hx:26: lines 26-29
		$_this3 = $init->tests;
		$_this3->arr[$_this3->length] = new HxAnon([
			"name" => "testCleanAccents",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testCleanAccents();
				return Async::getResolved();
			},
		]);
		++$_this3->length;

		#tests/TestMots.hx:32: lines 32-36
		$_this4 = $init->tests;
		$_this4->arr[$_this4->length] = new HxAnon([
			"name" => "testCapitalize",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testCapitalize();
				return Async::getResolved();
			},
		]);
		++$_this4->length;

		#tests/TestMots.hx:38: lines 38-42
		$_this5 = $init->tests;
		$_this5->arr[$_this5->length] = new HxAnon([
			"name" => "testCleanPath",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testCleanPath();
				return Async::getResolved();
			},
		]);
		++$_this5->length;

		#tests/TestMots.hx:44: lines 44-47
		$_this6 = $init->tests;
		$_this6->arr[$_this6->length] = new HxAnon([
			"name" => "testEndWith",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testEndWith();
				return Async::getResolved();
			},
		]);
		++$_this6->length;

		#tests/TestMots.hx:54: lines 54-59
		$_this7 = $init->tests;
		$_this7->arr[$_this7->length] = new HxAnon([
			"name" => "testCamel",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testCamel();
				return Async::getResolved();
			},
		]);
		++$_this7->length;

		#tests/TestMots.hx:61: lines 61-64
		$_this8 = $init->tests;
		$_this8->arr[$_this8->length] = new HxAnon([
			"name" => "testContain",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testContain();
				return Async::getResolved();
			},
		]);
		++$_this8->length;

		#tests/TestMots.hx:66: lines 66-74
		$_this9 = $init->tests;
		$_this9->arr[$_this9->length] = new HxAnon([
			"name" => "testExtension",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testExtension();
				return Async::getResolved();
			},
		]);
		++$_this9->length;

		#tests/TestMots.hx:76: lines 76-81
		$_this10 = $init->tests;
		$_this10->arr[$_this10->length] = new HxAnon([
			"name" => "testunCamel",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testunCamel();
				return Async::getResolved();
			},
		]);
		++$_this10->length;

		#tests/TestMots.hx:85: lines 85-89
		$_this11 = $init->tests;
		$_this11->arr[$_this11->length] = new HxAnon([
			"name" => "testMatchEmoj",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testMatchEmoj();
				return Async::getResolved();
			},
		]);
		++$_this11->length;

		#tests/TestMots.hx:91: lines 91-95
		$_this12 = $init->tests;
		$_this12->arr[$_this12->length] = new HxAnon([
			"name" => "testStripEmoj",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testStripEmoj();
				return Async::getResolved();
			},
		]);
		++$_this12->length;

		#tests/TestMots.hx:98: lines 98-114
		$_this13 = $init->tests;
		$_this13->arr[$_this13->length] = new HxAnon([
			"name" => "testGuid",
			"execute" => function ()  use (&$_gthis) {
				$_gthis->testGuid();
				return Async::getResolved();
			},
		]);
		++$_this13->length;

		#/Users/ut/haxe/haxe_libraries/utest/1.9.5/github/031e6d47bf35ae55654eef5bd4dac8c07986ecfa/src/utest/utils/TestBuilder.hx:52: characters 24-35
		return $init;
	}

	/**
	 * @return void
	 */
	public function firstWord () {
		#tests/TestMots.hx:51: characters 5-61
		Assert::equals("je", \Mots::firstWord("je suis une vache"), null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 51,
			"className" => "TestMots",
			"methodName" => "firstWord",
		]));
	}

	/**
	 * @return void
	 */
	public function testCamel () {
		#tests/TestMots.hx:56: characters 6-35
		$str = "je suis une vache";
		#tests/TestMots.hx:57: characters 6-28
		$str = \Mots::camelize("je suis une vache");
		#tests/TestMots.hx:58: characters 6-41
		Assert::equals("jeSuisUneVache", $str, null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 58,
			"className" => "TestMots",
			"methodName" => "testCamel",
		]));
	}

	/**
	 * @return void
	 */
	public function testCapitalize () {
		#tests/TestMots.hx:35: characters 8-51
		Assert::equals("David", \Mots::capitalize("david"), null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 35,
			"className" => "TestMots",
			"methodName" => "testCapitalize",
		]));
	}

	/**
	 * @return void
	 */
	public function testCleanAccents () {
		#tests/TestMots.hx:28: characters 3-116
		Assert::equals("Caapture d’ecra🐠n 2019-02u-04 a 17.27.05.pngCapatuaereee d’ecraan 2019-02-04 a 17.27.05.png", \Mots::cleanAccents(TestMots::$fileName), null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 28,
			"className" => "TestMots",
			"methodName" => "testCleanAccents",
		]));
	}

	/**
	 * @return void
	 */
	public function testCleanPath () {
		#tests/TestMots.hx:41: characters 8-77
		Assert::equals("../david/Zelote/magali/lupin.jpg", \Mots::cleanPath("..//david/Zelote//magali/lupin.jpg//"), null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 41,
			"className" => "TestMots",
			"methodName" => "testCleanPath",
		]));
	}

	/**
	 * @return void
	 */
	public function testContain () {
		#tests/TestMots.hx:63: characters 10-53
		Assert::isTrue(HxString::indexOf("bonjour", "j") >= 0, null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 63,
			"className" => "TestMots",
			"methodName" => "testContain",
		]));
	}

	/**
	 * @return void
	 */
	public function testEndWith () {
		#tests/TestMots.hx:46: characters 8-48
		Assert::isTrue(\Mots::endsWith("pur", "r"), null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 46,
			"className" => "TestMots",
			"methodName" => "testEndWith",
		]));
	}

	/**
	 * @return void
	 */
	public function testExtension () {
		#tests/TestMots.hx:68: lines 68-73
		$f = function ($n) {
			#tests/TestMots.hx:70: characters 17-70
			Assert::equals(Path::extension($n), \Mots::getExtension($n), null, new HxAnon([
				"fileName" => "tests/TestMots.hx",
				"lineNumber" => 70,
				"className" => "TestMots",
				"methodName" => "testExtension",
			]));
			#tests/TestMots.hx:71: characters 17-28
			return null;
		};
		#tests/TestMots.hx:68: lines 68-73
		$result = [];
		$collection = (\Array_hx::wrap([
			"one.png",
			"two.tar.gz",
			".htaccess",
			"four.jpeg",
		]))->arr;
		foreach ($collection as $key => $value) {
			$result[] = $f($value);
		}

		\Array_hx::wrap($result);
	}

	/**
	 * @return void
	 */
	public function testGuid () {
		#tests/TestMots.hx:99: characters 9-18
		$p = new \Array_hx();
		#tests/TestMots.hx:101: characters 13-36
		$x = \Guid::generate();
		$p->arr[$p->length] = $x;
		++$p->length;

		$x1 = \Guid::generate();
		$p->arr[$p->length] = $x1;
		++$p->length;

		$x2 = \Guid::generate();
		$p->arr[$p->length] = $x2;
		++$p->length;

		$x3 = \Guid::generate();
		$p->arr[$p->length] = $x3;
		++$p->length;

		$x4 = \Guid::generate();
		$p->arr[$p->length] = $x4;
		++$p->length;

		$x5 = \Guid::generate();
		$p->arr[$p->length] = $x5;
		++$p->length;

		$x6 = \Guid::generate();
		$p->arr[$p->length] = $x6;
		++$p->length;

		$x7 = \Guid::generate();
		$p->arr[$p->length] = $x7;
		++$p->length;

		$x8 = \Guid::generate();
		$p->arr[$p->length] = $x8;
		++$p->length;

		$x9 = \Guid::generate();
		$p->arr[$p->length] = $x9;
		++$p->length;


		#tests/TestMots.hx:103: lines 103-112
		$i = 0;
		$_g = new \Array_hx();
		$x10 = $p->iterator();
		while ($x10->hasNext()) {
			$x11 = $x10->next();
			$i1 = $i++;
			#tests/TestMots.hx:104: lines 104-110
			$_g1 = 0;
			$_g11 = $p->length;
			while ($_g1 < $_g11) {
				$m = $_g1++;
				#tests/TestMots.hx:105: lines 105-109
				if ($m !== $i1) {
					#tests/TestMots.hx:106: characters 17-29
					$gu = ($p->arr[$m] ?? null);
					#tests/TestMots.hx:107: characters 17-22
					(Log::$trace)("n=" . ($x11??'null') . " gu=" . ($gu??'null') . " " . ($i1??'null'), new HxAnon([
						"fileName" => "tests/TestMots.hx",
						"lineNumber" => 107,
						"className" => "TestMots",
						"methodName" => "testGuid",
					]));
					#tests/TestMots.hx:108: characters 17-37
					Assert::isTrue($gu !== $x11, null, new HxAnon([
						"fileName" => "tests/TestMots.hx",
						"lineNumber" => 108,
						"className" => "TestMots",
						"methodName" => "testGuid",
					]));
				}
			}

			#tests/TestMots.hx:103: lines 103-112
			$_g->arr[$_g->length] = $x11;
			++$_g->length;
		}



	}

	/**
	 * @return void
	 */
	public function testMatchEmoj () {
		#tests/TestMots.hx:88: characters 9-45
		Assert::isTrue(\Mots::matchEmoj("👽😬hallowe🐬en"), null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 88,
			"className" => "TestMots",
			"methodName" => "testMatchEmoj",
		]));
	}

	/**
	 * @return void
	 */
	public function testStripEmoj () {
		#tests/TestMots.hx:94: characters 8-56
		Assert::equals("halloween", \Mots::stripEmoj("👽😬hallowe🐬en"), null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 94,
			"className" => "TestMots",
			"methodName" => "testStripEmoj",
		]));
	}

	/**
	 * @return void
	 */
	public function testUnderClean () {
		#tests/TestMots.hx:17: characters 3-116
		Assert::equals("Caapture_d_ecra_n_2019_02u_04_a_17_27_05_pngCapatuaereee_d_ecraan_2019_02_04_a_17_27_05_png", \Mots::underclean(TestMots::$fileName), null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 17,
			"className" => "TestMots",
			"methodName" => "testUnderClean",
		]));
	}

	/**
	 * @return void
	 */
	public function testcleanFile () {
		#tests/TestMots.hx:21: characters 9-44
		$str = \Mots::cleanFile(TestMots::$fileName);
		#tests/TestMots.hx:22: characters 1-6
		(Log::$trace)("strrrr" . ($str??'null'), new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 22,
			"className" => "TestMots",
			"methodName" => "testcleanFile",
		]));
		#tests/TestMots.hx:23: characters 3-96
		Assert::equals("CaaptureDEcran201902u04A172705PngCapatuaereeeDEcraan20190204A172705.png", $str, null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 23,
			"className" => "TestMots",
			"methodName" => "testcleanFile",
		]));
		#tests/TestMots.hx:24: characters 9-52
		Assert::equals("png", \Mots::getExtension($str), null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 24,
			"className" => "TestMots",
			"methodName" => "testcleanFile",
		]));
	}

	/**
	 * @return void
	 */
	public function testtest () {
		#tests/TestMots.hx:11: characters 3-8
		(Log::$trace)("yo", new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 11,
			"className" => "TestMots",
			"methodName" => "testtest",
		]));
		#tests/TestMots.hx:12: characters 3-30
		Assert::isTrue(true, null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 12,
			"className" => "TestMots",
			"methodName" => "testtest",
		]));
	}

	/**
	 * @return void
	 */
	public function testunCamel () {
		#tests/TestMots.hx:78: characters 8-34
		$str = "jeSuisUneVache";
		#tests/TestMots.hx:79: characters 9-30
		$str = \Mots::unCamel("jeSuisUneVache");
		#tests/TestMots.hx:80: characters 9-47
		Assert::equals("je suis une vache", $str, null, new HxAnon([
			"fileName" => "tests/TestMots.hx",
			"lineNumber" => 80,
			"className" => "TestMots",
			"methodName" => "testunCamel",
		]));
	}
}

Boot::registerClass(TestMots::class, 'TestMots');
