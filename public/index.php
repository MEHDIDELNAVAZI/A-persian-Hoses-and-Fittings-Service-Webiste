<?php
# DIRECTORY SEPERATOR 
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
#We  want to include a file here like CONFIG file in core directory  ;
#conf file included for data base 

include    ROOT . DS . "core" . DS . "conf.php";

function my_autoload($class_name)
{
   require  ROOT . DS . str_replace("\\", "/", $class_name) . ".php";
}

// Register the autoload function
spl_autoload_register('my_autoload');
$router  = new Core\Routing;
$router->router($_GET['url']);
