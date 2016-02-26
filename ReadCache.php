<?php  

/**
*@parem 静态缓存文件
*/
require_once('./CacheFile.php');

$data = array(
	'id' => 1,
	'name'=>'xiaomai',
	'type'=>array(4,5,6),
	'test'=>array(1,45,67=>array(123,'tsysa')) 	
);

$file = new File();

if($file->cacheData('AppCache',null)){ //$data
	echo "success";
}
else{
	echo "error";
}

?>