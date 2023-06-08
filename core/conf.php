<?php
#ini_set('display_errors', 1);
#ini_set('display_startup_errors', 1);
#error_reporting(E_ALL);
#error_reporting(E_ERROR | E_WARNING | E_PARSE);
define("servername" ,"localhost" ) ;
define("username", "root") ;
define("password", "") ;
define("Db_name", "mvc_site") ;
define("base", "http://localhost/sky/") ;
$mysqli = new mysqli;
$conn = $mysqli->connect(servername,username,password,Db_name);
?>