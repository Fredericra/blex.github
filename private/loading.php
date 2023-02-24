<?php

namespace loading;
class loading
{
    static $php= ".php";
    static function load()
    {
        spl_autoload_register(array(__CLASS__, "nom_class"));
    }
    static function nom_class($class_name)
    {
        $file = "apps/" . $class_name . self::$php;
       if(file_exists($file))
       {
            require $file;
       }else{
            require "../" . $file;
       }
    }
}




?>