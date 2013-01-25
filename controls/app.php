<?php class app extends sn {

public static $search;
public static $src;
public static $dst;
public static $prev;
public static $next;
public static $skip;
public static $page;
public static $pages;
public static $limit;
public static $records;
public static $id;
public static $message;

function __construct() {
	self::$id=0;
	self::$message='';
}

function claims($pc=array(),$i=-1) {
	if (query(sql::claims(),$ms)) {
		foreach ($ms as $r) { $i++;
			$pc[$i]['id']=$r->id;
			$pc[$i]['caption']=toUTF($r->caption);
			$pc[$i]['msg']=$r->msg;
			$pc[$i]['email']=$r->email;
			$pc[$i]['skype']=$r->skype;
			$pc[$i]['icq']=$r->icq;
			$pc[$i]['site']=$r->site;
			$pc[$i]['city']=toUTF($r->city);
			$pc[$i]['country']=$r->country;
			$pc[$i]['status']=toUTF($r->status);
			$pc[$i]['comment']=$r->comment;
			$pc[$i]['post_dt']=self::setDate($r->post_dt);
			foreach (array("email","skype","icq","city","status","site") as $key) {
				if ($pc[$i][$key]=="") { $pc[$i][$key]="-"; }
			}	
			if ($r->status=="New") {
				$pc[$i]['line_class']="error";
			} else {
				$pc[$i]['line_class']="";
			}
		}
		return $pc;
	}
	return false;
}

function edit() {
	if ((isset(url::$id)) && (isset(url::$message))) {
		if ((intval(url::$id)>-1) && (intval(url::$id)<10000)) {
			if (query(sql::edit())) {
				return true;
			}
		}
	}
	return false;
}

function setDate($k,$type="day-month") { 
	$s=""; $m=0; $mn=""; $i=0; $t="";
	$dt=explode(" ",$k); $d=$dt[0]; $d=str_replace(".","-",$d); $d=str_replace(".","-",$d);
	$di=explode("-",$d); $y=$di[0];
	if (isset($dt[1])) {
		$t=$dt[1];
	}
	if (isset($di[1])) { $m=intval($di[1]); }
	if (isset($di[2])) { $i=intval($di[2]); }
	switch ($m) {
		case 1: $mn="янв"; break;
		case 2: $mn="фев"; break;
		case 3: $mn="мар"; break;
		case 4: $mn="апр"; break;
		case 5: $mn="мая"; break;
		case 6: $mn="июня"; break;
		case 7: $mn="июля"; break;
		case 8: $mn="авг"; break;
		case 9: $mn="сен"; break;
		case 10: $mn="окт"; break;
		case 11: $mn="ноя"; break;
		case 12: $mn="дек"; break;
	}
	if ($i==0) { $i=""; }
	switch ($type) {
		case "day-month": 			$s=trim($i." ".$mn); break;
		case "day-month-time": 		$s=trim($i." ".$mn." ".$t); break;
		case "day-month-year": 		$s=trim($i." ".$mn." ".$y); break;
	}
	if ($s=="") { $s="-"; }
	return $s;
}


} ?>
