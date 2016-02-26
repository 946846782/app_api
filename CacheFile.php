<?php  

/**
*@parem 静态缓存文件
*/
class File{
	private $_dir;
	const EXT = '.txt';
	public function __construct(){
	
		$this->_dir = dirname(__FILE__).'/files/';
	}

	public function cacheData($key,$value='',$path=''){
	
		$filename = $this->_dir.$path.$key.self::EXT;
		
		if($value!==""){ //写入缓存文件
			if(is_null($value)){
				return unlink($filename);
			}
		
			$dir = dirname($filename);
			if(!is_dir($dir)){
				mkdir($dir,0777);
			}
			//写入成功就返回写入的字符串长度
			return	file_put_contents($filename,json_encode($value));
		}
		
	}

}


?>