<?php
class AD {
	public static function create_tables(){
			$query="create table if not exists ad_requests(
			id int auto_increment not null,
			client char(100) not null,
			time timestamp NOT NULL default CURRENT_TIMESTAMP,
			primary key(id)
			)";
			$result=DB::query($query);
			if(!$result){
				return false;
			}
	}

	public static function add_request($request){
		$result=DB::query("INSERT INTO ad_requests(client) VALUES('".DB::esc($request)."')");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
	}
}
?>
