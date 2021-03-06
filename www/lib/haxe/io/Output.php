<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

namespace haxe\io;

use \haxe\io\_BytesData\Container;
use \php\Boot;
use \php\_Boot\HxException;

/**
 * An Output is an abstract write. A specific output implementation will only
 * have to override the `writeByte` and maybe the `write`, `flush` and `close`
 * methods. See `File.write` and `String.write` for two ways of creating an
 * Output.
 */
class Output {
	/**
	 * Write one byte.
	 * 
	 * @param int $c
	 * 
	 * @return void
	 */
	public function writeByte ($c) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:47: characters 3-8
		throw new HxException("Not implemented");
	}

	/**
	 * Write `len` bytes from `s` starting by position specified by `pos`.
	 * Returns the actual length of written data that can differ from `len`.
	 * See `writeFullBytes` that tries to write the exact amount of specified bytes.
	 * 
	 * @param Bytes $s
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return int
	 */
	public function writeBytes ($s, $pos, $len) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:59: lines 59-60
		if (($pos < 0) || ($len < 0) || (($pos + $len) > $s->length)) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:60: characters 4-9
			throw new HxException(Error::OutsideBounds());
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:62: characters 3-61
		$b = $s->b;
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:63: characters 3-15
		$k = $len;
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:64: lines 64-78
		while ($k > 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:68: characters 5-26
			$this->writeByte(ord($b->s[$pos]));
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:76: characters 4-9
			++$pos;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:77: characters 4-7
			--$k;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:79: characters 3-13
		return $len;
	}

	/**
	 * Write `len` bytes from `s` starting by position specified by `pos`.
	 * Unlike `writeBytes`, this method tries to write the exact `len` amount of bytes.
	 * 
	 * @param Bytes $s
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return void
	 */
	public function writeFullBytes ($s, $pos, $len) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:123: lines 123-127
		while ($len > 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:124: characters 4-34
			$k = $this->writeBytes($s, $pos, $len);
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:125: characters 4-12
			$pos += $k;
			#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:126: characters 4-12
			$len -= $k;
		}
	}

	/**
	 * Write `s` string.
	 * 
	 * @param string $s
	 * @param Encoding $encoding
	 * 
	 * @return void
	 */
	public function writeString ($s, $encoding = null) {
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:282: characters 11-38
		$b = strlen($s);
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:282: characters 3-39
		$b1 = new Bytes($b, new Container($s));
		#/Users/ut/haxe/versions/4.0.0-rc.1/std/haxe/io/Output.hx:284: characters 3-31
		$this->writeFullBytes($b1, 0, $b1->length);
	}
}

Boot::registerClass(Output::class, 'haxe.io.Output');
