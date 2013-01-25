<?php class sql extends sn {
	
public static $request;

function __construct() {

}

public static function claims($s="") {
	$s.="select * from `standart_dataClaims` where (1=1) order by post_dt desc limit 50 ";
	self::$request=$s;
	return $s;
}

public static function edit($s="") {
	$s.="update `standart_dataClaims` SET `status`='".url::$message."' where (id=".url::$id.") ";
	self::$request=$s;
	return $s;
}

} ?>
