<?php class ajax extends sn {
	
public static $conf;
public static $options;
public static $url;

function __construct() {
	if (self::getUrl()) {
		switch (self::$url->action){
		case "editStatus":
			if (self::editStatus()) { echo "изменено"; } else { echo "ошибка"; }
		break;
		}
	}
}


function getUrl() {
	self::$url=new def;
	if (self::checkParams(array("action"))) {
		switch (self::$url->action){
		case "editStatus":
			return self::checkParams(array("id","message"));
		break;
		default: return false;
		}
	}
	return true;
}

function checkParams($ms) {
	foreach ($ms as $key) {
		if (!isset($_REQUEST[$key])) return false;
		self::$url->$key=trim(strval($_REQUEST[$key]));
		if (self::$url->$key=="") return false;
	}
	return true;
}

function editStatus() {
	$id=intval(self::$url->id);
	$msg=toWIN(self::$url->message);
	if ($id>0) {
		if (query(array(
			"sql"=>"update `standart_dataClaims` SET `status`='".$msg."' where (id=".$id.")  "
		))) {
				return true;
			}
	}
	return false;
}

} ?>
