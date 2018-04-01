<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 1);
// Autoload given function name.
function includeAll($className)
{
    include_once($className . '.php');
}
//Register
spl_autoload_register('includeAll');

class Client
{
    private static $context;
    private static $method;
    //client request
    public static function request()
    {
      self::$method=$_POST['lightswitch'];
      self::$context=new Context();
      echo self::$context->{self::$method}();
    } 
}
Client::request();
?>