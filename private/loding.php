<?php 

/**
 * loading automatique class
 */
class loding
{
	
	static $suffic=".php";
	static function auto()
	{
		spl_autoload_register(array(__CLASS__,"file"));
	}
	static function file($class)
	{
		$file="private/".$class.self::$suffic;
		if(file_exists($file))
		{
			require $file;
		}
		else
		{
			require "../".$file;
		}
	}
}


 ?>