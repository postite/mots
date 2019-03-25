<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 */

use \php\Boot;

class Guid {
	/**
	 * @return string
	 */
	static public function generate () {
		#src/Guid.hx:3: characters 5-21
		$result = "";
		#src/Guid.hx:6: lines 6-12
		$_g = 0;
		while ($_g < 8) {
			$j = $_g++;
			#src/Guid.hx:7: lines 7-9
			if (($j === 8) || ($j === 12) || ($j === 16) || ($j === 20)) {
				#src/Guid.hx:8: characters 9-22
				$result = ($result??'null') . "-";
			}
			#src/Guid.hx:11: characters 7-62
			$result = ($result??'null') . (\StringTools::hex((int)(floor(mt_rand() / mt_getrandmax() * 16)))??'null');
		}

		#src/Guid.hx:14: characters 5-32
		return mb_strtoupper($result);
	}
}

Boot::registerClass(Guid::class, 'Guid');