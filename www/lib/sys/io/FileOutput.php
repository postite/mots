<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 */

namespace sys\io;

use \haxe\io\Eof;
use \haxe\io\Output;
use \php\Boot;
use \php\_Boot\HxException;
use \haxe\io\Bytes;
use \haxe\io\Error;

/**
 * Use `sys.io.File.write` to create a `FileOutput`.
 */
class FileOutput extends Output {
	/**
	 * @var mixed
	 */
	public $__f;


	/**
	 * @param mixed $f
	 * 
	 * @return void
	 */
	public function __construct ($f) {
		#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:33: characters 3-10
		$this->__f = $f;
	}


	/**
	 * @param int $c
	 * 
	 * @return void
	 */
	public function writeByte ($c) {
		#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:38: characters 3-23
		if (fwrite($this->__f, chr($c)) === false) {
			#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:38: characters 18-23
			throw new HxException(Error::Custom("An error occurred"));
		}
	}


	/**
	 * @param Bytes $b
	 * @param int $p
	 * @param int $l
	 * 
	 * @return int
	 */
	public function writeBytes ($b, $p, $l) {
		#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:42: characters 11-28
		$s = null;
		#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:42: characters 11-28
		if (($p < 0) || ($l < 0) || (($p + $l) > $b->length)) {
			#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:42: characters 11-28
			throw new HxException(Error::OutsideBounds());
		} else {
			#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:42: characters 11-28
			$s = substr($b->b->s, $p, $l);
		}
		#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:43: characters 3-22
		if (feof($this->__f)) {
			#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:43: characters 17-22
			throw new HxException(new Eof());
		}
		#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:44: characters 3-29
		$r = fwrite($this->__f, $s, $l);
		#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:45: characters 3-23
		if ($r === false) {
			#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:45: characters 18-23
			throw new HxException(Error::Custom("An error occurred"));
		}
		#/Users/ut/haxe/versions/4.0.0-preview.3/std/php/_std/sys/io/FileOutput.hx:46: characters 3-11
		return $r;
	}
}


Boot::registerClass(FileOutput::class, 'sys.io.FileOutput');
