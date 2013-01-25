<?php class console extends sn {
	
public static $status;
public static $text;
public static $path;

function __construct() {
	self::$text="";
	self::$path=project."/log/console.log";
	self::write(date("Ymd")." ".date("H:i:s")." ".time());
}

function __destruct() {
	//self::write("...");
	//self::save();
}

public static function write($line="") {
	self::$text.=$line."\r\n";
	self::save();
}

public static function clear() {
	if (file_exists(self::$path)) {
		unlink(self::$path);
	}
}

public static function save() {
	file_put_contents(self::$path,self::$text);
}

} ?>
