class Mots {
	public static function underclean(str:String, separator:String = "_"):String {
		
    var nonWordChar = ~/[\xC0-\xFF\s\W]/g;
    str=cleanAccents(str);
		str = nonWordChar.replace(str, separator);
   
		return str;
	}

	public static function undercleanFile(str:String):String {
		var extension = haxe.io.Path.extension(str);
		str = haxe.io.Path.withoutExtension(str);
    str=stripEmoj(str);
		str= underclean(str," ") + '.$extension';
    return camelize(str);

	}

	public static function cleanAccents(str:String) {
   // str=undercleanFile(str);
		return Diactrics.clean(str);
	}

	public static function stripExtension(n:String):String {
		return haxe.io.Path.withoutExtension(n);
	}

	public static function getExtension(n:String):String {
		return haxe.io.Path.extension(n);
	}

	public static function capitalize(str:String):String {
		return str.charAt(0).toUpperCase() + str.substr(1);
	}

	public static function cleanPath(str:String):String {
		return haxe.io.Path.normalize(str);
	}

 
	public static function camelize(str:String):String {
		str = ~/\s(.)/g.map(str, reg -> reg.matched(0).toUpperCase());
		str = ~/\s/g.replace(str, '');
		return str;
	}
 

	public static function endsWith(str:String, ends:String):Bool {
	
    var reg = new EReg("(" + ends + "$)", "m");
  
		return reg.match(str);
	}

	/**
		`contains` returns `true` if `s` contains one or more occurrences of `test`.
	**/
	inline public static function contains(s:String, test:String)
		#if php
		return test == "" || s.indexOf(test) >= 0;
		#else
		return s.indexOf(test) >= 0;
		#end

	public static function firstWord(str:String):String {
		var r = ~/\S\w*/g;
		r.match(str);
		return r.matched(0);
	}
  #if js

   static var emojRange=
  "(?:[\\\u261D\\\u26F9\\u270A-\\u270D]|\\uD83C[\\uDF85\\uDFC2-\\uDFC4\\uDFC7\\uDFCA-\\uDFCC]|\\uD83D[\\uDC42\\uDC43\\uDC46-\\uDC50\\uDC66-\\uDC69\\uDC6E\\uDC70-\\uDC78\\uDC7C\\uDC81-\\uDC83\\uDC85-\\uDC87\\uDCAA\\uDD74\\uDD75\\uDD7A\\uDD90\\uDD95\\uDD96\\uDE45-\\uDE47\\uDE4B-\\uDE4F\\uDEA3\\uDEB4-\\uDEB6\\uDEC0\\uDECC]|\\uD83E[\\uDD18-\\uDD1C\\uDD1E\\uDD1F\\uDD26\\uDD30-\\uDD39\\uDD3D\\uDD3E\\uDDD1-\\uDDDD])(?:\\uD83C[\\uDFFB-\\uDFFF])?|(?:[\\u231A\\u231B\\u23E9-\\u23EC\\u23F0\\u23F3\\u25FD\\u25FE\\u2614\\u2615\\u2648-\\u2653\\u267F\\u2693\\u26A1\\u26AA\\u26AB\\u26BD\\u26BE\\u26C4\\u26C5\\u26CE\\u26D4\\u26EA\\u26F2\\u26F3\\u26F5\\u26FA\\u26FD\\u2705\\u270A\\u270B\\u2728\\u274C\\u274E\\u2753-\\u2755\\u2757\\u2795-\\u2797\\u27B0\\u27BF\\u2B1B\\u2B1C\\u2B50\\u2B55]|\\uD83C[\\uDC04\\uDCCF\\uDD8E\\uDD91-\\uDD9A\\uDDE6-\\uDDFF\\uDE01\\uDE1A\\uDE2F\\uDE32-\\uDE36\\uDE38-\\uDE3A\\uDE50\\uDE51\\uDF00-\\uDF20\\uDF2D-\\uDF35\\uDF37-\\uDF7C\\uDF7E-\\uDF93\\uDFA0-\\uDFCA\\uDFCF-\\uDFD3\\uDFE0-\\uDFF0\\uDFF4\\uDFF8-\\uDFFF]|\\uD83D[\\uDC00-\\uDC3E\\uDC40\\uDC42-\\uDCFC\\uDCFF-\\uDD3D\\uDD4B-\\uDD4E\\uDD50-\\uDD67\\uDD7A\\uDD95\\uDD96\\uDDA4\\uDDFB-\\uDE4F\\uDE80-\\uDEC5\\uDECC\\uDED0-\\uDED2\\uDEEB\\uDEEC\\uDEF4-\\uDEF8]|\\uD83E[\\uDD10-\\uDD3A\\uDD3C-\\uDD3E\\uDD40-\\uDD45\\uDD47-\\uDD4C\\uDD50-\\uDD6B\\uDD80-\\uDD97\\uDDC0\\uDDD0-\\uDDE6])|(?:[#0-9\xA9\xAE\\u203C\\u2049\\u2122\\u2139\\u2194-\\u2199\\u21A9\\u21AA\\u231A\\u231B\\u2328\\u23CF\\u23E9-\\u23F3\\u23F8-\\u23FA\\u24C2\\u25AA\\u25AB\\u25B6\\u25C0\\u25FB-\\u25FE\\u2600-\\u2604\\u260E\\u2611\\u2614\\u2615\\u2618\\u261D\\u2620\\u2622\\u2623\\u2626\\u262A\\u262E\\u262F\\u2638-\\u263A\\u2640\\u2642\\u2648-\\u2653\\u2660\\u2663\\u2665\\u2666\\u2668\\u267B\\u267F\\u2692-\\u2697\\u2699\\u269B\\u269C\\u26A0\\u26A1\\u26AA\\u26AB\\u26B0\\u26B1\\u26BD\\u26BE\\u26C4\\u26C5\\u26C8\\u26CE\\u26CF\\u26D1\\u26D3\\u26D4\\u26E9\\u26EA\\u26F0-\\u26F5\\u26F7-\\u26FA\\u26FD\\u2702\\u2705\\u2708-\\u270D\\u270F\\u2712\\u2714\\u2716\\u271D\\u2721\\u2728\\u2733\\u2734\\u2744\\u2747\\u274C\\u274E\\u2753-\\u2755\\u2757\\u2763\\u2764\\u2795-\\u2797\\u27A1\\u27B0\\u27BF\\u2934\\u2935\\u2B05-\\u2B07\\u2B1B\\u2B1C\\u2B50\\u2B55\\u3030\\u303D\\u3297\\u3299]|\\uD83C[\\uDC04\\uDCCF\\uDD70\\uDD71\\uDD7E\\uDD7F\\uDD8E\\uDD91-\\uDD9A\\uDDE6-\\uDDFF\\uDE01\\uDE02\\uDE1A\\uDE2F\\uDE32-\\uDE3A\\uDE50\\uDE51\\uDF00-\\uDF21\\uDF24-\\uDF93\\uDF96\\uDF97\\uDF99-\\uDF9B\\uDF9E-\\uDFF0\\uDFF3-\\uDFF5\\uDFF7-\\uDFFF]|\\uD83D[\\uDC00-\\uDCFD\\uDCFF-\\uDD3D\\uDD49-\\uDD4E\\uDD50-\\uDD67\\uDD6F\\uDD70\\uDD73-\\uDD7A\\uDD87\\uDD8A-\\uDD8D\\uDD90\\uDD95\\uDD96\\uDDA4\\uDDA5\\uDDA8\\uDDB1\\uDDB2\\uDDBC\\uDDC2-\\uDDC4\\uDDD1-\\uDDD3\\uDDDC-\\uDDDE\\uDDE1\\uDDE3\\uDDE8\\uDDEF\\uDDF3\\uDDFA-\\uDE4F\\uDE80-\\uDEC5\\uDECB-\\uDED2\\uDEE0-\\uDEE5\\uDEE9\\uDEEB\\uDEEC\\uDEF0\\uDEF3-\\uDEF8]|\\uD83E[\\uDD10-\\uDD3A\\uDD3C-\\uDD3E\\uDD40-\\uDD45\\uDD47-\\uDD4C\\uDD50-\\uDD6B\\uDD80-\\uDD97\\uDDC0\\uDDD0-\\uDDE6])\\uFE0F";

  #else
  static var emojRange= "[\u{1F300}-\u{1F5FF}|\u{1F1E6}-\u{1F1FF}|\u{2700}-\u{27BF}|\u{1F900}-\u{1F9FF}|\u{1F600}-\u{1F64F}|\u{1F680}-\u{1F6FF}|\u{2600}-\u{26FF}]";

  #end

	public static function stripEmoj(str:String):String {

  //trace(emojRange);
		return new EReg(emojRange, "g").replace(str, "");
    
	}

	public static function matchEmoj(str):Bool {
		return new EReg(emojRange, "g").match(str);
	}

	public static function unCamel(s:String):String {
		// var t=function(str:String) return str.toUpperCase();
		var r1 = ~/([A-Z])/g;
		s = r1.map(s, reg -> " " + reg.matched(0).toLowerCase());
		return s;
	}
 
}
