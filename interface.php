<?php  

interface video{
	public function getVideos();
	public function getCount();
}

class movie implements video{
	public function getVideos(){
		echo "1";
	}
	
	public function getCount(){
		echo "2";
	}
}

/*
json¸ñÊ½

*/
public static function json($code){

	echo json_encode($code);
	exit;
}
@movie::getVideos();
@movie::getCount();
?>