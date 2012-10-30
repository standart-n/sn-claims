<?php class start extends sn {

function __construct() {
	
	load("index.tpl");
	innerHTML("#main",self::getClaims());
	echo html();
}

function getClaims() {
	$pc=array(); $i=-1;
	if (query(array(
		"sql"=>"select * from `standart_dataClaims` where (1=1) order by post_dt desc limit 50 "
		),$ms))
	{
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
				$pc[$i]['post_dt']=self::setDate($r->post_dt,"day-month");
				foreach (array("email","skype","icq","city","status","site") as $key) {
					if ($pc[$i][$key]=="") { $pc[$i][$key]="-"; }
				}		
				if ($r->status=="New") {
					$pc[$i]['line_class']="claims-table-line-new";
				} else {
					$pc[$i]['line_class']="claims-table-line-simple";
				}

		}
		assign('claims',$pc);
		return fetch("claims.tpl");
	}
	return false;
}

function setDate($k,$type="day-month") { $s=""; $m=0; $mn=""; $i=0; $t="";
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
